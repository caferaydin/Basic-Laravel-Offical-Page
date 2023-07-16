<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSetting\Entities\AboutSetting;
use Modules\WebSetting\Entities\ContactSetting;
use Modules\WebSetting\Entities\HomeSetting;
use Modules\WebSetting\Entities\Setting;

class AdminController extends Controller
{

    public function webEdit(Request $request){
        $web = Setting::find(1)->first();
        $web->title = $request->title;
        $web->keywords = $request->keywords;
        $web->description = $request->description;
        $web->save();
        return redirect()->back()->with('success', 'Web ayarlarınız değiştirildi');
    }

    public function homeEdit(Request $request){
        $home = HomeSetting::find(1)->first();
        $home->name = $request->name;
        $home->title = $request->title;
        $home->information = $request->information;

        if($request->image != null){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$imageName);
            $home->image = ('uploads/' . $imageName);
        }

        $home->save();
        return redirect()->back()->with('success', 'Anasayfa ayarlarınız değiştirildi');
    }

    public function aboutEdit(Request $request){
        $about = AboutSetting::find(1)->first();
        $about->title = $request->title;
        $about->content = $request->content;

        if($request->image != null){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$imageName);
            $about->image = ('uploads/' . $imageName);
        }
        $about->save();
        return redirect()->back()->with('success', 'Hakkımda ayarlarınız değiştirildi');
    }
    public function contactEdit(Request $request){
        $contact = ContactSetting::find(1)->first();
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back()->with('success', 'İletişim ayarlarınız değiştirildi');
    }



}
