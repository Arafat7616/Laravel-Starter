<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

use function PHPSTORM_META\type;

class SettingController extends Controller
{
    //seo Static Option Form
    public function seoStaticOptionForm(){
        return view('backend.application.setting.seo');
    }

    // app Static Form
    public function appStaticForm(){
        return view('backend.application.setting.app');
    }

    //footer Credit Static Option Form
    public function footerCreditStaticOptionForm(){
        return view('backend.application.setting.footer-credit');
    }
    //map Link Static Option Form
    public function mapLinkStaticOptionForm(){
        return view('backend.application.setting.map-link');
    }

    //fb Page Static Option Form
    public function fbPageStaticOptionForm(){
        return view('backend.application.setting.fb-page');
    }

    //custom Script  Static Option Form
    public function customScriptStaticOptionForm (){
        return view('backend.application.setting.custom-script');
    }

    //social Static Option Form
    public function socialStaticOptionForm(){
        return view('backend.application.setting.social');
    }

    //company Detail Static Option Form
    public function companyDetailStaticOptionForm(){
        return view('backend.application.setting.company-detail');
    }

    //logo And Image Static Option Form
    public function logoAndImageStaticOptionForm(){
        return view('backend.application.setting.logo-and-image');
    }

    // seo Static Option Update
    public function seoStaticOptionUpdate(Request $request){
        $request->validate([
            'meta_image' => 'nullable|image',
            'meta_description' => 'nullable|min:3',
            'meta_keywords' => 'nullable|min:3',
            'meta_author' => 'nullable|min:3',
        ]);
        try {

            update_static_option('meta_description', $request->meta_description);
            update_static_option('meta_keywords', $request->meta_keywords);
            update_static_option('meta_author', $request->meta_author);


            if($request->hasFile('meta_image')){
                if (get_static_option('meta_image') != null)
                    File::delete(public_path(get_static_option('meta_image'))); //Old image delete
                $image             = $request->file('meta_image');
                $folder_path       = 'uploads/images/website/';
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('meta_image',$folder_path.$image_new_name);
            }
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // app Static Option Update
    public function appStaticOptionUpdate(Request $request){
        $request->validate([

            'app_name' => 'required',
            'app_env' => 'required',
            'app_debug' => 'required',
            'mailer' => 'required',
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'encryption' => 'required',
            'from_name' => 'required',
            'from_email' => 'required'
        ]);
        try {
            $env_val['APP_NAME'] = !empty($request->app_name) ? $request->app_name : 'YOUR_APP_NAME';
            $env_val['APP_ENV'] = !empty($request->app_env) ? $request->app_env : 'YOUR_APP_ENV';
            $env_val['APP_DEBUG'] = !empty($request->app_debug) ? $request->app_debug : 'YOUR_APP_DEBUG';
            $env_val['MAIL_MAILER'] = !empty($request->mailer) ? $request->mailer : 'YOUR_MAILER';
            $env_val['MAIL_HOST'] = !empty($request->host) ? $request->host : 'YOUR_SMTP_MAIL_HOST';
            $env_val['MAIL_PORT'] = !empty($request->port) ? $request->port : 'YOUR_SMTP_MAIL_POST';
            $env_val['MAIL_USERNAME'] = !empty($request->username) ? $request->username : 'YOUR_SMTP_MAIL_USERNAME';
            $env_val['MAIL_PASSWORD'] = !empty($request->password) ? $request->password : 'YOUR_SMTP_MAIL_USERNAME_PASSWORD';
            $env_val['MAIL_ENCRYPTION'] = !empty($request->encryption) ? $request->encryption : 'YOUR_SMTP_MAIL_ENCRYPTION';
            $env_val['MAIL_FROM_NAME'] = !empty($request->from_name) ? $request->from_name : 'YOUR_SMTP_FROM_NAME';
            $env_val['MAIL_FROM_ADDRESS'] = !empty($request->from_email) ? $request->from_email : 'YOUR_MAIL_FROM_ADDRESS';

            set_env_value([
                'APP_NAME' => '"'.$env_val['APP_NAME'].'"',
                'APP_ENV' => '"'.$env_val['APP_ENV'].'"',
                'APP_DEBUG' => '"'.$env_val['APP_DEBUG'].'"',
                'MAIL_MAILER' => '"'.$env_val['MAIL_MAILER'].'"',
                'MAIL_HOST' => '"'.$env_val['MAIL_HOST'].'"',
                'MAIL_PORT' =>  '"'.$env_val['MAIL_PORT'].'"',
                'MAIL_USERNAME' => '"'.$env_val['MAIL_USERNAME'].'"',
                'MAIL_PASSWORD' => '"'.$env_val['MAIL_PASSWORD'].'"',
                'MAIL_ENCRYPTION' => '"'.$env_val['MAIL_ENCRYPTION'].'"',
                'MAIL_FROM_NAME' => '"'.$env_val['MAIL_FROM_NAME'].'"',
                'MAIL_FROM_ADDRESS' => '"'.$env_val['MAIL_FROM_ADDRESS'].'"'
            ]);
            return redirect()->route('frontend.index')->withSuccess('Successfully application setting updated!');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors('Something going wrong. Error:'.$exception->getMessage());
        }
    }

    // social Static Option Update
    public function socialStaticOptionUpdate(Request $request){
        $request->validate([
            'company_facebook_link' => 'nullable|min:3',
            'company_twitter_link' => 'nullable|min:3',
            'company_youtube_link' => 'nullable|min:3',
            'company_instagram_link' => 'nullable|min:3',
            'company_linkedin_link' => 'nullable|min:3',
        ]);
        try {

            update_static_option('company_facebook_link', $request->company_facebook_link);
            update_static_option('company_twitter_link', $request->company_twitter_link);
            update_static_option('company_youtube_link', $request->company_youtube_link);
            update_static_option('company_instagram_link', $request->company_instagram_link);
            update_static_option('company_linkedin_link', $request->company_linkedin_link);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // fb Page Static Option Update
    public function fbPageStaticOptionUpdate(Request $request){
        $request->validate([
            'fb_auto_extend' => 'nullable',
            'fb_page_connection' => 'nullable',
            'fb_page_id' => 'nullable|min:3',
            'fb_theme_color' => 'nullable|min:3',
        ]);
        try {
            update_static_option('fb_auto_extend', $request->fb_auto_extend);
            update_static_option('fb_page_connection', $request->fb_page_connection);
            update_static_option('fb_page_id', $request->fb_page_id);
            update_static_option('fb_theme_color', $request->fb_theme_color);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // company Detail Static Option Update
    public function companyDetailStaticOptionUpdate(Request $request){
        $request->validate([
            'company_email' => 'nullable|min:3',
            'company_phone' => 'nullable|min:3',
            'company_address' => 'nullable|min:3',
        ]);
        try {

            update_static_option('company_email', $request->company_email);
            update_static_option('company_phone', $request->company_phone);
            update_static_option('company_address', $request->company_address);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // map Link Static Option Update
    public function mapLinkStaticOptionUpdate (Request $request){
        $request->validate([
            'map_link' => 'nullable|min:3',
        ]);
        try {

            update_static_option('map_link', $request->map_link);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // footer Credit Static Option Update
    public function footerCreditStaticOptionUpdate (Request $request){
        $request->validate([
            'footer_credit' => 'nullable|min:3',
        ]);
        try {

            update_static_option('footer_credit', $request->footer_credit);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    // custom Script Static Option Update
    public function customScriptStaticOptionUpdate(Request $request){
        $request->validate([
            'custom_head_code' => 'nullable|min:3',
            'custom_foot_code' => 'nullable|min:3',
        ]);
        try {

            update_static_option('custom_head_code', $request->custom_head_code);
            update_static_option('custom_foot_code', $request->custom_foot_code);
        }catch (\Exception $exception){
            return back()->withErrors( 'Something went wrong !'.$exception->getMessage());
        }
        return back()->withSuccess('Updated successfully!');
    }

    public function noImage(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('no_image') != null)
                File::delete(public_path(get_static_option('no_image'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('no_image',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    //fav Icon
    public function favIcon(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('fav_icon') != null)
                File::delete(public_path(get_static_option('fav_icon'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('fav_icon',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }
    // Backend Logo
    public function BackendLogo(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('backend_logo') != null)
                File::delete(public_path(get_static_option('backend_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('backend_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    // frontend Logo
    public function frontendLogo(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('frontend_logo') != null)
                File::delete(public_path(get_static_option('frontend_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('frontend_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    // backend Light Logo
    public function backendLightLogo(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('backend_light_logo') != null)
                File::delete(public_path(get_static_option('backend_light_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('backend_light_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    // backend Text  Logo
    public function backendTextLogo(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('backend_text_logo') != null)
                File::delete(public_path(get_static_option('backend_text_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('backend_text_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    // backend Text Light Logo
    public function backendTextLightLogo(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('backend_text_light_logo') != null)
                File::delete(public_path(get_static_option('backend_text_light_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('backend_text_light_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

    // breadcrumb Image
    public function breadcrumbImage(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
        if($request->hasFile('image')){
            if (get_static_option('backend_text_light_logo') != null)
                File::delete(public_path(get_static_option('backend_text_light_logo'))); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/website/';
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            update_static_option('backend_text_light_logo',$folder_path.$image_new_name);
        }

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully Updated',
            'image_url' => $folder_path.$image_new_name
        ]);
    }

}
