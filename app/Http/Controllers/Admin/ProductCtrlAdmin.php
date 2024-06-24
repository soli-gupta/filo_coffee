<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\ProductCategoryModel;
use App\ProductSubCategoryModel;
use App\ProductModel;
use App\AttributesOptionModel;
use App\CommentModel;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as Input;

class ProductCtrlAdmin extends Controller
{
  protected $dates = ['updated_at'];

  public function __construct()
  {
    $this->middleware('auth');
    $this->user =  \Auth::user();
    $this->name_url_folder = 'product';
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

      if ($GET_DATA['name']) {
        $data_rows->where('name', 'LIKE', "%{$GET_DATA['name']}%");
      }

      if ($GET_DATA['category_id']) {
        $data_rows->where('category_id', $GET_DATA['category_id']);
      }

      if ($GET_DATA['status']) {
        $data_rows->where('status', $GET_DATA['status']);
      }

      $fdate = $GET_DATA['fdate'] . ' 00:00:00';
      $tdate = $GET_DATA['tdate'] . ' 23:59:59';

      if ($GET_DATA['fdate'] != '' && $GET_DATA['tdate'] != '') {
        $data_rows->whereBetween('updated_at', array($fdate, $tdate));
      } elseif ($GET_DATA['fdate'] != '') {
        $tdate = date('Y-m-d') . ' 23:59:59';
        $data_rows->whereBetween('updated_at', array($fdate, $tdate));
      } elseif ($GET_DATA['tdate'] != '') {
        $fdate = '2000-01-01 23:59:59';
        $data_rows->whereBetween('updated_at', array($fdate, $tdate));
      }
    }
    return $data_rows;
  }






  public function index()
  {
    // die;

    $this->roleChecking();
    $GET_DATA = Input::input();
    if (isset($GET_DATA['delete'])) {
      $data_name = ProductModel::find($GET_DATA['delete'])->slug;
      $delete_status = ProductModel::find($GET_DATA['delete'])->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";


      // comment and logs //
      $module = $this->name_url_folder;
      $data_id = $GET_DATA['delete'];
      $comment = "Record deleted";
      CommentModel::comment($module, $data_id, $comment, $data_name);
      CommentModel::logs($module, $comment);
      // end comment and logs //


      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }


    if (isset($GET_DATA['duplicate'])) {
      $row_data = ProductModel::find($GET_DATA['duplicate']);
      $duplicate = $row_data->replicate();
      $duplicate->slug = $row_data->slug . '-' . time(); // the new project_id
      $duplicate->save();

      $message_type = "message_susuccess";
      $message_text = "Record has been duplicate successfully!";
      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }


    if (isset($GET_DATA['sorting'])  &&  isset($GET_DATA['orderBy'])  && $GET_DATA['sorting'] != ''  && $GET_DATA['orderBy'] != '') {
      $sorting = $GET_DATA['sorting'];
      $orderBy = $GET_DATA['orderBy'];
      $data_rows = ProductModel::orderBy($sorting, $orderBy);
    } else {
      $data_rows = ProductModel::orderBy('created_at', 'desc');
    }

    $categorys = ProductCategoryModel::orderBy('name', 'asc')->get();
    $types_rows = AttributesOptionModel::where("attributes_id", 6)->orderBy('name', 'asc')->get();

    $data_rows = $this->getFilter($data_rows);

    $per_page = PAGINATE_LIMIT;
    if (isset($GET_DATA['perpagerecord']) && $GET_DATA['perpagerecord'] > 0) {
      $per_page = $GET_DATA['perpagerecord'];
    }

    $data_rows = $data_rows->paginate($per_page);
    $page_array = array(
      'title' => 'Products',
      'page_name' => $this->name_url_folder,
      'data_rows' => $data_rows,
      'categorys' => $categorys,
      'types_rows' => $types_rows,
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
          ProductModel::whereIn('id',  $ids)->update(['status' => '1']);

          $message_type = "message_susuccess";
          $message_text = count($ids) . " Selected record(s) are published successfully.";
          return redirect()->back()->with($message_type, $message_text);
        } else if ($formAction == 'status-2') {
          ProductModel::whereIn('id',  $ids)->update(['status' => '2']);
          $message_type = "message_susuccess";
          $message_text = count($ids) . "Selected record(s) are unpublished successfully.";
          return redirect()->back()->with($message_type, $message_text);
        } else if ($formAction == 'delete') {

          foreach ($ids as $rid) {
            $row = ProductModel::find($rid);
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
        } else if ($formAction == 'product-sku-delete') {

          foreach ($ids as $rid) {
          }
          //Session::flash('SUCCESS_FAQ_MSG',"Selected record(s) are deleted successfully.");
          //return redirect()->route('admin.faq');

          $message_type = "message_susuccess";
          $message_text = count($variant_list) . "Selected record(s) are deleted successfully.";
          return redirect()->back()->with($message_type, $message_text);
        } elseif ($formAction == 'bulk-update') {
          $page_array = array(
            'title' => 'Bulk Update',
            'page_name' => $this->name_url_folder,
          );
          return view('admin.' . $this->name_url_folder . '.bulk_update', $page_array);
        } elseif ($formAction == 'bulk-update-post') {
          $category_id  =  $request->category_id;

          ProductModel::whereIn('id', $ids)->update(['category_id' => $category_id]);
          $message_type = "message_susuccess";
          $message_text = count($ids) . " Selected record(s) are updated successfully.";
          return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }
      }
    } //end request formAction

  }

  public function view($id)
  {
    // utf8mb4_general_ci 

    $this->roleChecking();
    $data = ProductModel::where('id', $id)->first();

    $categorys = ProductCategoryModel::orderBy('name', 'asc')->get();

    $subcategories = [];
    if ($data) {
      $selectedCategory = ProductCategoryModel::find($data->category_id);
      if ($selectedCategory) {
        $subcategories =  ProductSubCategoryModel::where('cate_id', $selectedCategory->id)->orderBy('name', 'asc')->get();
      }
    }
    if ($data) {
      $page_array = array(
        'title' => 'View  ' . $data->name,
        'page_name' => $this->name_url_folder,
        'data_row' => $data,
        'categorys' => $categorys,
        'subcategories' => $subcategories, // Pass subcategories to the view

      );
      return view('admin.' . $this->name_url_folder . '.view', $page_array);
    } else {
      return redirect(ADMIN_URL);
    }
  }

  public function add()
  {
    $categorys = ProductCategoryModel::orderBy('name', 'asc')->get();


    $data = array();
    $page_array = array(
      'title' => 'Add ',
      'page_name' => $this->name_url_folder,
      'data_row' => $data,
      'categorys' => $categorys,

    );
    return view('admin.' . $this->name_url_folder . '.view', $page_array);
  }

  public function save(Request $request)
  {
    $this->roleChecking();

    $POST_DATA = $request->input();
    $id = '';
    if ($POST_DATA['id']) {
      $id = $POST_DATA['id'];
    }
    unset($POST_DATA['id']);

    if ($POST_DATA['submit_type'] == '3' && $id != '') {
      $data_name = CmspageModel::find($GET_DATA['delete'])->slug;
      $delete_status = ProductModel::find($id)->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";

      // comment and logs //
      $module = $this->name_url_folder;
      $data_id = $id;
      $comment = "Record deleted";
      CommentModel::comment($module, $data_id, $comment, $data_name);
      CommentModel::logs($module, $comment);
      // end comment and logs //

      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }

    $array_validate = array();
    $array_validate['name'] = "required";
    $array_validate['category_id'] = "required";
    $array_validate['status'] = "required";

    if ($id) {
      //$array_validate['slug'] = "required|unique:product,slug,$id";
    } else {
      //$array_validate['slug'] = "required|unique:product|max:255";
    }

    $this->validate($request, $array_validate);
    $message_type = "message_error";
    $message_text = "Some error!";

    try {
      if ($id == '') {
        $save = ProductModel::create($POST_DATA);
        $comment = "Record created";
      } else {
        $save = ProductModel::find($id);
        $save->fill($POST_DATA);
        $comment = "Record updated";
      }

      $save->save();
      if ($save) {
        $message_type = "message_susuccess";
        $message_text = "Successfully saved";


        // comment and logs //
        $module = $this->name_url_folder;
        $data_id = $save->id;
        $data_name = $save->slug;
        $POST_DATA['comment'] = $comment;
        CommentModel::comment($module, $data_id, $comment, $data_name);
        CommentModel::logs($module, $POST_DATA);
        // end comment and logs //

      }
    } catch (\Exception $e) {
      $message_type = "message_error";
      $message_text = $e->getMessage();
    }

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
    $data_rows = ProductModel::orderBy('id', 'desc');
    $data_rows = $this->getFilter($data_rows);
    $data_rows = $data_rows->get();

    $tot_record_found = 0;
    if (count($data_rows) > 0) {
      $tot_record_found = 1;
      //First Methos 
      $export_data = "ID,Name,Slug,Description,Price,Status,CreatedAt,UpdatedAt \n";
      foreach ($data_rows as $value) {

        $status = '';
        if (isset(Config::get('constants.CONS_STATUS_ARRAY')[$value->status])) {
          $status = Config::get('constants.CONS_STATUS_ARRAY')[$value->status];
        }

        $test_name = isset($value->category_data->name) ? $value->category_data->name : '';
        $export_data .= '"' . $value->id . '",';
        $export_data .= '"' . $test_name . '",';
        $export_data .= '"' . $value->slug . '",';
        $export_data .= '"' . $value->short_description . '",';
        $export_data .= '"' . $value->price . '",';
        $export_data .= '"' . $status . '",';
        $export_data .= '"' . $value->created_at . '",';
        $updated_at = ($value->created_at == $value->updated_at) ? '' : $value->updated_at;
        $export_data .= '"' . $updated_at . '"';
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
