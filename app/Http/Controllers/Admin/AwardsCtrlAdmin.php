<?php

namespace App\Http\Controllers\Admin; //admin add
use App\AwardsModel;
use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\CmsBlockModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request as Input;

class AwardsCtrlAdmin extends Controller
{
    protected $dates = ['updated_at'];

    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
        $this->name_url_folder = 'awards';
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


            if ($GET_DATA['year']) {
                $data_rows->where('year', $GET_DATA['year']);
            }

            if ($GET_DATA['name']) {
                $data_rows->where('name', 'LIKE', "%{$GET_DATA['name']}%");
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
            $delete_status = AwardsModel::find($GET_DATA['delete'])->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        if (isset($GET_DATA['duplicate'])) {
            $row_data = AwardsModel::find($GET_DATA['duplicate']);
            $duplicate = $row_data->replicate();
            // $duplicate->slug =$row_data->slug.'-'.time(); // the new project_id
            $duplicate->save();

            $message_type = "message_susuccess";
            $message_text = "Record has been duplicate successfully!";
            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }
        $data_rows = AwardsModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);
        $data_rows = $data_rows->paginate(PAGINATE_LIMIT);


        $page_array = array(
            'title' => 'Awards',
            'page_name' => $this->name_url_folder,
            'data_rows' => $data_rows,
        );

        return view('admin.' . $this->name_url_folder . '.index', $page_array);
    }

    public function view($id)
    {

        $this->roleChecking();
        $data = AwardsModel::where('id', $id)->first();
        $years = AwardsModel::getYears();
        if ($data) {
            $page_array = array(
                'title' => 'View ',
                'page_name' => $this->name_url_folder,
                'data_row' => $data,
                'years' => $years
            );

            return view('admin.' . $this->name_url_folder . '.view', $page_array);
        } else {
            return redirect(ADMIN_URL);
        }
    }

    public function add()
    {
        $data = array();
        $years = AwardsModel::getYears();
        $page_array = array(
            'title' => 'Add Award',
            'page_name' => $this->name_url_folder,
            'data_row' => $data,
            'years' => $years
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
            $delete_status = AwardsModel::find($id)->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        $array_validate = array();
        $array_validate['name'] = "required|string|max:255";
        $array_validate['year'] = "numeric";

        if ($id) {
            $array_validate['image'] = 'mimetypes:image/jpeg,image/png,image/jpg|max:20480';
        } else {
            $array_validate['image'] = 'required|mimetypes:image/jpeg,image/png,image/jpg|max:20480';
        }

        $this->validate($request, $array_validate);

        $message_type = "message_error";
        $message_text = "Some error!";

        try {
            $uploadedFile = $request->file('image');
            if ($uploadedFile) {
                $destinationPath = 'media/awards/';
                $POST_DATA['image'] = CmsBlockModel::uploadImageWebp($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image_delete'])) {
                    $POST_DATA['image'] = '';
                }
            }

            if ($id == '') {
                $save = AwardsModel::create($POST_DATA);
            } else {
                $save = AwardsModel::find($id);
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

        $data_rows = AwardsModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);
        $data_rows = $data_rows->get();

        $tot_record_found = 0;
        if (count($data_rows) > 0) {
            $tot_record_found = 1;
            //First Methos 


            $export_data = "ID,Name,Year,Image,Status,CreatedAt,UpdatedAt \n";
            foreach ($data_rows as $value) {

                $status = '';
                if (isset(Config::get('constants.CONS_STATUS_ARRAY')[$value->status])) {
                    $status = Config::get('constants.CONS_STATUS_ARRAY')[$value->status];
                }

                $export_data .= '"' . $value->id . '",';
                $export_data .= '"' . $value->name . '",';
                $export_data .= '"' . $value->year . '",';
                $export_data .= '"' . STATIC_PUBLIC_URL_STORAGE . $value->image . '",';
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
