<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\WebSetting\Entities\AboutSetting;
use Modules\WebSetting\Entities\ContactSetting;
use Modules\WebSetting\Entities\HomeSetting;
use Modules\WebSetting\Entities\Setting;

class PagesController extends Controller
{
    public function index()  {
        $setting = Setting::find(1)->first();
        $home = HomeSetting::find(1)->first();
        $about = AboutSetting::find(1)->first();
        $contact = ContactSetting::find(1)->first();
        return view('welcome',compact('setting','home', 'about', 'contact'));
    }
}
