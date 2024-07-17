<?php

namespace App\Http\Controllers\Admin; //admin add
use App\CmspageModel;
use App\Http\Controllers\Controller; // using controller class
use App\PratcieModel;
use Illuminate\Support\Facades\Auth;
use App\SectorServiceModel;
use App\CmsBlockModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as Input;

class SectorServicesCtrlAdmin extends Controller
{
    protected $dates = ['updated_at'];

    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
        $this->name_url_folder = 'sectors-services';
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

    public function index()
    {
        $this->roleChecking();

        $GET_DATA = Input::input();

        if (isset($GET_DATA['delete'])) {
            $sector_id = SectorServiceModel::find($GET_DATA['delete'])->sector_id;
            $delete_status = SectorServiceModel::find($GET_DATA['delete'])->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            // return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
            return redirect(ADMIN_FOLDER . '/sectors/view/' . $sector_id)->with($message_type, $message_text);
        }
    }

    public function view($id)
    {
        //echo $id;
        $this->roleChecking();
        $data = SectorServiceModel::where('id', $id)->first();
        $pratices = PratcieModel::where('status', 1)->get();
        if ($data) {
            $page_array = array(
                'title' => 'View',
                'page_name' => $this->name_url_folder,
                'data_row' => $data,
                'sector_id' => $data->sector_id,
                'pratices' => $pratices

            );
            //return view('admin.pages.view',$page_array); 
            return view('admin.sectors.sectors-services', $page_array);
        } else {
            return redirect(ADMIN_URL);
        }
    }

    public function add($sector_id)
    {
        $data = array();
        $pratices = PratcieModel::where('status', 1)->get();
        $page_array = array(
            'title' => 'Add',
            'page_name' => $this->name_url_folder,
            'data_row' => $data,
            'sector_id' => $sector_id,
            'pratices' => $pratices
        );
        return view('admin.sectors.sectors-services', $page_array);
    }


    public function save(Request $request)
    {
        $this->roleChecking();

        $POST_DATA = $request->input();
        // echo $request->file('image');
        //print_r($POST_DATA);
        // die();
        $id = '';
        $sector_id = $POST_DATA['sector_id'];
        if ($POST_DATA['id']) {
            $id = $POST_DATA['id'];
        }
        unset($POST_DATA['id']);


        if ($POST_DATA['submit_type'] == '3' && $id != '') {
            $delete_status = SectorServiceModel::find($id)->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            return redirect(ADMIN_FOLDER . '/sectors/edit/' . $sector_id)->with($message_type, $message_text);
        }

        $array_validate = array();
        $array_validate['name'] = "required";
        $array_validate['sub_text'] = "required";
        $array_validate['image_icon'] = "required|file|mimetypes:image/svg+xml";
        $array_validate['image'] = "image|mimes:jpeg,png,jpg";

        $this->validate($request, $array_validate);

        $message_type = "message_error";
        $message_text = "Some error!";

        try {


            $uploadedFile = $request->file('image');
            if ($uploadedFile) {
                $destinationPath = 'media/sector_service/image/';
                $POST_DATA['image'] = CmsBlockModel::uploadFile($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image_delete'])) {
                    $POST_DATA['image'] = '';
                }
            }

            $uploadedFile = $request->file('image_icon');
            if ($uploadedFile) {
                $destinationPath = 'media/sector_service/image_icon/';
                $POST_DATA['image_icon'] = CmsBlockModel::uploadFile($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image_icon_delete'])) {
                    $POST_DATA['image_icon'] = '';
                }
            }

            if (isset($POST_DATA['practices'])) {
                $POST_DATA['practices'] = implode(',', $POST_DATA['practices']);
            }
            //$POST_DATA['photos']=implode(',',$POST_DATA['photos']);
            if ($id == '') {
                $save = SectorServiceModel::create($POST_DATA);
            } else {


                $save = SectorServiceModel::find($id);
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
                return redirect(ADMIN_FOLDER . '/sectors/view/' . $save->id)->with($message_type, $message_text);
            } else {
                return redirect(ADMIN_FOLDER . '/sectors/view/' . $sector_id)->with($message_type, $message_text);
            }
        } else {
            return redirect()->back()->with($message_type, $message_text);
        }
    }
}
