<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use App\SectorServiceModel;
use Illuminate\Support\Facades\Auth;
use App\SectorModel;
use Illuminate\Http\Request;
use App\CmsBlockModel;
use Illuminate\Support\Facades\DB;

class SectorCtrlAdmin extends Controller
{
    protected $dates = ['updated_at'];

    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
        $this->name_url_folder = 'sectors';
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

        $GET_DATA = $_GET;
        if (isset($GET_DATA['search']) && $GET_DATA['search'] == 'field') {
            if ($GET_DATA['name']) {
                $data_rows->where('name', 'LIKE', "%{$GET_DATA['name']}%");
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
        $GET_DATA = $_GET;
        if (isset($GET_DATA['delete'])) {
            $delete_status = SectorModel::find($GET_DATA['delete'])->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        if (isset($GET_DATA['sorting'])  &&  isset($GET_DATA['orderBy'])  && $GET_DATA['sorting'] != ''  && $GET_DATA['orderBy'] != '') {
            $sorting = $GET_DATA['sorting'];
            $orderBy = $GET_DATA['orderBy'];
            $data_rows = SectorModel::orderBy($sorting, $orderBy);
        } else {
            $data_rows = SectorModel::orderBy('created_at', 'desc');
        }
        //$data_rows=SectorModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);

        $per_page = PAGINATE_LIMIT;
        if (isset($GET_DATA['perpagerecord']) && $GET_DATA['perpagerecord'] > 0) {
            $per_page = $GET_DATA['perpagerecord'];
        }


        $data_rows = $data_rows->paginate($per_page);
        $attributes = SectorModel::get();

        $page_array = array(
            'title' => 'Sectors',
            'page_name' => $this->name_url_folder,
            'data_rows' => $data_rows,
            'attributes' => $attributes,

        );
        //return view('admin.pages.pages',$page_array); 
        return view('admin.' . $this->name_url_folder . '.index', $page_array);
    }


    public function massaction(Request $request)
    {

        $this->roleChecking();

        if (isset($request->formAction2)) {
            $formAction  =  $request->formAction2;
            $ids  =  $request->ids;
            if (count($ids) > 0) {
                if ($formAction == 'status-1') {
                    SectorModel::whereIn('id',  $ids)->update(['status' => '1']);

                    $message_type = "message_susuccess";
                    $message_text = count($ids) . " Selected record(s) are published successfully.";
                    return redirect()->back()->with($message_type, $message_text);
                } else if ($formAction == 'status-2') {
                    SectorModel::whereIn('id',  $ids)->update(['status' => '2']);
                    $message_type = "message_susuccess";
                    $message_text = count($ids) . "Selected record(s) are unpublished successfully.";
                    return redirect()->back()->with($message_type, $message_text);
                } else if ($formAction == 'delete') {

                    foreach ($ids as $rid) {
                        $row = SectorModel::find($rid);
                        if (!$row) :
                            $message_type = "message_error";
                            $message_text = "Selected record(s) are doesn't exist.";
                            return redirect()->back()->with($message_type, $message_text);
                        endif;
                        $row->forceDelete();
                    }
                    //Session::flash('SUCCESS_FAQ_MSG',"Selected record(s) are deleted successfully.");
                    //return redirect()->route('admin.faq');

                    $message_type = "message_susuccess";
                    $message_text = count($ids) . "Selected record(s) are deleted successfully.";
                    return redirect()->back()->with($message_type, $message_text);
                }
            }
        } //end request formAction

    }
    public function view($id)
    {

        $this->roleChecking();
        $data = SectorModel::where('id', $id)->first();
        $sectorServices = SectorServiceModel::where('sector_id', $id)->get();
        if ($data) {
            $page_array = array(
                'title' => 'Edit - ' . $data->name,
                'page_name' => $this->name_url_folder,
                'data_row' => $data,
                'sectorServices' => $sectorServices

            );
            //return view('admin.pages.view',$page_array); 
            return view('admin.' . $this->name_url_folder . '.view', $page_array);
        } else {
            return redirect(ADMIN_URL);
        }
    }

    public function add()
    {

        $attributes = SectorModel::get();
        $data = array();
        $page_array = array(
            'title' => 'Add Sector',
            'page_name' => $this->name_url_folder,
            'data_row' => $data,
            'attributes' => $attributes,

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
            $delete_status = SectorModel::find($id)->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        $array_validate = array();
        $array_validate['name'] = "required";

        if ($id) {
            $array_validate['slug'] = "required|unique:sectors,slug,$id";
        } else {
            $array_validate['slug'] = "required|unique:sectors|max:255";
        }

        $this->validate($request, $array_validate);

        $message_type = "message_error";
        $message_text = "Some error!";

        try {
            $uploadedIcon = $request->file('image1');
            if ($uploadedIcon) {
                $destinationPath = 'media/sectors/image1/';
                $POST_DATA['image1'] = CmsBlockModel::uploadFile($uploadedIcon, $destinationPath);
            } else {
                if (isset($POST_DATA['image1_delete'])) {
                    $POST_DATA['image1'] = '';
                }
            }

            $uploadedFile = $request->file('image2');
            if ($uploadedFile) {
                $destinationPath = 'media/sectors/image2/';
                $POST_DATA['image2'] = CmsBlockModel::uploadFile($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image2_delete'])) {
                    $POST_DATA['image2'] = '';
                }
            }

            if ($id == '') {
                $save = SectorModel::create($POST_DATA);
            } else {
                $save = SectorModel::find($id);
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

        $data_rows = SectorModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);
        $data_rows = $data_rows->get();

        $tot_record_found = 0;
        if (count($data_rows) > 0) {
            $tot_record_found = 1;

            $export_data = "Id,Name,Slug,Sorting,Date,UpdatedAt \n";
            foreach ($data_rows as $value) {
                $export_data .= '"' . $value->id . '",';
                $export_data .= '"' . $value->name . '",';
                $export_data .= '"' . $value->slug . '",';
                $export_data .= '"' . $value->sorting . '",';
                $export_data .= '"' . $value->created_at . '",';
                $export_data .= '"' . $value->updated_at . '",';
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
