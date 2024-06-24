<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\ContactModel;
use App\CmsBlockModel;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Mail;
use Config;


class ContactCtrl extends Controller
{


    public function index() {




       $data = CmspageModel::where('slug','contact-us')->first();
            if($data){
                 $page_array=array(
                     'id' => 'contact',
                    'name' => $data->name,                  
                    'sub_text' => $data->sub_text,
                    'title' => ($data->page_title)?$data->page_title:$data->name,
                    'meta_keywords' => $data->meta_keywords,
                    'meta_description' => $data->meta_description,
                    'slug' => $data->slug,                    
                    'content' => $data->content1,
                    'content2' => $data->content2,                   
                    'image' => $data->image,
                    'image_mobile' => $data->image_mobile,
                    'body_class' => 'contact',                    
                    'meta_other' => $data->meta_other,
                    'image_alt' => $data->image_alt,
                    'parent_slug'=>'contact',

                    );
             
          
        } 

      return view('contact_page', $page_array);         
    }


 public function post(Request $request ) {    
       



             $response_array=array();
             $response_array['status']='0';
             $response_array['message']='Some error!';
               $this->validate($request, [                
                'name' => 'required|max:100',  
                //'email' => 'required|email|max:100',         
                'mobile' => 'required|max:20',    
                'page_type' => 'required|max:100',   
                'resume' => 'mimes:pdf,png,jpg,jpeg|max:5100', 

                //'message' => 'required|max:1000',      
                
            ]);
                
            try
              { 
            



                $captch_status=0;
                  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = env('GOOGLE_RECAPTCHA_SECRET');
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

                if($responseData->success){
                    $captch_status=1;
               }

       }

        if($captch_status==0){            
         
             $response_array['message']='Google Captcha verification failed, please try again.';
            return response()->json($response_array,200);
       }



                 $page_type=$request->page_type;


                $post_array=array();
                $post_array['name']=$request->name;
                $post_array['email']=$request->email;
                $post_array['mobile']=$request->mobile;
                $post_array['message']=$request->message;
                $post_array['page_type']=$request->page_type;
               
               
                   If($page_type=='HomePopup'){
                    $post_array['centre']=$request->centre;
                    $post_array['product']=$request->service;
                   }


                if($page_type=='Centre Appointment' || $page_type=='Home Collection' || $page_type=='Health Packages'){

                     $post_array['gender']=$request->gender;
                     $post_array['age']=$request->age;

                               
                    if(isset($_POST['test'])){        
                      $post_array['product']=implode(',',$_POST['test']);
                    }


                     //   echo '<pre>';
                     // print_r($_POST);
                     // print_r($post_array);
                     // die;
                    
                     $post_array['centre']=$request->centre;
                     
                     $post_array['address']=$request->address;
                     $post_array['pincode']=$request->pincode;
                     $post_array['city']=$request->city;
                     

                    
                $upload_file = $request->file('upload_file');
                  if($upload_file) {  
                    
                  $file_name=$upload_file->getClientOriginalName();
                  $file_name=strtolower(str_replace(" ","-",$file_name));
                  $filename_remove=explode(".",$file_name);

                  if(!in_array($upload_file->getClientOriginalExtension(),array('png','pdf','jpeg','jpg'))){

                        throw new Exception('Upload valid file.');            
                  }


                       $destinationPath='media/upload/prescription_upload_file/';
                       $post_array['upload_file']=CmsBlockModel::uploadFile($upload_file,$destinationPath);

                  } 







                }

               
                $post_array['ip']=$_SERVER['REMOTE_ADDR'];
                
                    $save=ContactModel::create($post_array); 
                        if($save->id){
                            $response_array['status']='1';
                            $response_array['message']='Your query has been submitted and will be responded to as soon as possible. Thank you for contacting!';

/*

if($request->has('enquiry')) {
      // admin mail send       
       
       $email_data=array();              
      $email_data['email_name']='Admin'; 
    //  $email_data['email_to']=Config::get('constants.ADMIN_CONTACT_MAIL'); 
     
      $email_data['email_to'] = $post_array['enquiry'];
     
      $email_data['email_subject']='Contact form'; 
      $content='';
      $content='Please find below the details';
      $content.='<p>Name: '.$post_array['name'];
      $content.='<p>Email: '.$post_array['email'];
      $content.='<p>Mobile: '.$post_array['mobile'];
      //$content.='<p>Message: '.$post_array['message'];
      //$content.='<p>Mobile: '.$post_array['mobile'];
       if($request->message)
         $content.='<p>Message: '.$post_array['message'];

        if($request->product)
         $content.='<p>Product: '.$post_array['product'];

        if($request->address)
         $content.='<p>Address: '.$post_array['address'];

        $content.='<p>IP: '.$post_array['ip'];
        
      $email_data['content']=$content;                         

  Mail::send('emails.CommonTemplate',$email_data, function($message) use ($email_data)
    {
      
      $message->from(Config::get('constants.ADMIN_SENDER')['email'],Config::get('constants.ADMIN_SENDER')['name']);
      $message->to($email_data['email_to'][0]);
      if(count($email_data['email_to']) > 1) {
        foreach(array_slice($email_data['email_to'], 1) as $email_to) {
          $message->bcc($email_to);
        }
      }
      //$message->bcc('satishsuper7@gmail.com');
      $message->subject($email_data['email_subject']);
    }
  );
}
// end admin mail
*/



/*
// user mail send   
$email_data=array();              
$email_data['email_name']=$post_array['name']; 
$email_data['email_to']=$post_array['email']; 
$email_data['email_subject']="Thanks for contact us"; 
$content='';
$content.='Your query has been submitted and will be responded to as soon as possible. Thank you for contacting!';
$email_data['content']=$content;
Mail::send('emails.CommonTemplate',$email_data, function($message) use ($email_data)
{

$message->from(Config::get('constants.ADMIN_SENDER')['email'],Config::get('constants.ADMIN_SENDER')['name']);
$message->to($email_data['email_to']);
$message->subject($email_data['email_subject']);
}
);
// end mail user
*/



                           
                     
                   }
              }
              catch(\Exception $e)
              { 


                            //$response_array['message']="Unable to submit your request. Please check form field values and try again!";
                            $response_array['message']=$e->getMessage();
                          
                
              }


              return response()->json($response_array,200);

                //return redirect('contact-us')->with($message_type,$message_text);
        

    }
 
    

}
