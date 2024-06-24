<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\MediaGalleryModel;
use App\CmsBlockModel;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as Input;

class MediaGalleryCtrlAdmin extends Controller
{
  protected $dates = ['updated_at'];
  public function __construct()
  {
    $this->middleware('auth');
    $this->user =  \Auth::user();
    $this->name_url_folder = 'media-gallery';
  }

  public function roleChecking()
  {
    $admin_modules_array = explode(',', Auth::user()->admin_modules);
    if (!in_array($this->name_url_folder, $admin_modules_array)) {
      if (!in_array('all-modules', $admin_modules_array)) {
        die("Sorry, you don’t have access to this page/module!");
      }
    }
  }

  function getFilter($data_rows)
  {
    $GET_DATA = Input::input();
    if (isset($GET_DATA['search']) && $GET_DATA['search'] == 'field') {

      if ($GET_DATA['title']) {
        $data_rows->where('title', 'LIKE', "%{$GET_DATA['title']}%");
      }


      if ($GET_DATA['type']) {
        $data_rows->where('type', 'LIKE', "%{$GET_DATA['type']}%");
      }

      if ($GET_DATA['status']) {
        $data_rows->where('status', $GET_DATA['status']);
      }

      $fdate = $GET_DATA['fdate'] . ' 00:00:00';
      $tdate = $GET_DATA['tdate'] . ' 23:59:59';

      if ($GET_DATA['fdate'] != '' && $GET_DATA['tdate'] != '') {
        $data_rows->whereBetween('created_at', array($fdate, $tdate));
      } elseif ($GET_DATA['fdate'] != '') {
        $tdate = date('Y-m-d') . ' 23:59:59';
        $data_rows->whereBetween('created_at', array($fdate, $tdate));
      } elseif ($GET_DATA['tdate'] != '') {
        $fdate = '2000-01-01 23:59:59';
        $data_rows->whereBetween('created_at', array($fdate, $tdate));
      }
    }
    return $data_rows;
  }

  public function index()
  {

    $this->roleChecking();
    $GET_DATA = Input::input();

    if (isset($GET_DATA['delete'])) {
      $delete_status = MediaGalleryModel::find($GET_DATA['delete'])->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";
      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }

    $data_rows = MediaGalleryModel::orderBy('sorting', 'desc');
    $data_rows = $this->getFilter($data_rows);
    $data_rows = $data_rows->paginate(PAGINATE_LIMIT);
    $page_array = array(
      'title' => 'Media',
      'page_name' => $this->name_url_folder,
      'data_rows' => $data_rows,
    );
    //return view('admin.pages.pages',$page_array); 
    return view('admin.' . $this->name_url_folder . '.index', $page_array);
  }

  public function view($id)
  {

    $this->roleChecking();
    $data = MediaGalleryModel::where('id', $id)->first();
    if ($data) {
      $page_array = array(
        'title' => 'View',
        'page_name' => $this->name_url_folder,
        'data_row' => $data,
      );
      //return view('admin.pages.view',$page_array); 
      return view('admin.' . $this->name_url_folder . '.view', $page_array);
    } else {
      return redirect(ADMIN_URL);
    }
  }

  public function add()
  {
    $data = array();
    $page_array = array(
      'title' => 'Add',
      'page_name' => $this->name_url_folder,
      'data_row' => $data,

    );
    return view('admin.' . $this->name_url_folder . '.view', $page_array);
  }
  public function save(Request $request)
  {
    $POST_DATA = $request->input();

    $this->roleChecking();

    $id = '';
    if ($POST_DATA['id']) {
      $id = $POST_DATA['id'];
    }
    unset($POST_DATA['id']);

    if ($POST_DATA['submit_type'] == '3' && $id != '') {
      $delete_status = MediaGalleryModel::find($id)->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";
      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }

    $array_validate = array();
    $array_validate['title'] = "required";
    $array_validate['image_path'] = "image|mimes:jpeg,png,jpg";

    $this->validate($request, $array_validate);

    $message_type = "message_error";
    $message_text = "Some error!";

    try {

      $uploadedFile = $request->file('image_path');
      if ($uploadedFile) {
        $destinationPath = 'media/mediagallery/image_path/';
        $POST_DATA['image_path'] = CmsBlockModel::uploadImageWebp($uploadedFile, $destinationPath);
      } else {
        if (isset($POST_DATA['image_path_delete'])) {
          $POST_DATA['image_path'] = '';
        }
      }

      //$POST_DATA['photos']=implode(',',$POST_DATA['photos']);
      if ($id == '') {
        $save = MediaGalleryModel::create($POST_DATA);
      } else {
        $save = MediaGalleryModel::find($id);
        $save->fill($POST_DATA);
      }

      $save->save();
      if ($save) {
        $message_type = "message_susuccess";
        $message_text = "Successfully saved";
      }
    } catch (\Exception $e) {
      $message_type = "message_error";
      $message_text = $e->getMessage();
    }


    // return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
    if ($message_type == "message_susuccess") {

      if ($POST_DATA['submit_type'] == '2') {
        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder . '/view/' . $save->id)->with($message_type, $message_text);
      } else {
        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
      }
    } else {
      return redirect()->back()->with($message_type, $message_text);
    }
  }

  public function export(Request $request)
  {

    $this->roleChecking();
    $data_rows = MediaGalleryModel::orderBy('id', 'desc');
    $data_rows = $this->getFilter($data_rows);
    $data_rows = $data_rows->get();

    $tot_record_found = 0;
    if (count($data_rows) > 0) {
      $tot_record_found = 1;
      //First Methos 

      $export_data = "ID,Title,Status,MediaType,ContentType,CreatedAt,UpdatedAt \n";
      foreach ($data_rows as $value) {

        $status = '';
        if (isset(Config::get('constants.CONS_STATUS_ARRAY')[$value->status])) {
          $status = Config::get('constants.CONS_STATUS_ARRAY')[$value->status];
        }

        $export_data .= '"' . $value->id . '",';
        $export_data .= '"' . $value->title . '",';
        $export_data .= '"' . $value->sorting . '",';
        $export_data .= '"' . $status . '",';
        $export_data .= '"' . $value->created_at . '",';
        $export_data .= '"' . $value->updated_at . '"';

        $export_data .= "\r\n";
      }
      $filename = $this->name_url_folder . '-' . date('Y-m-d') . ".csv";
      return response($export_data)
        ->header('Content-Type', 'application/csv')
        ->header('Content-Disposition', 'attachment; filename="Export-' . $filename)
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0');
    }
    $message_type = "message_error";
    $message_text = "Some error!";
    return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
  }
}
