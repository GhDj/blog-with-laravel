<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Setting;
use Input;

class SettingController extends Controller
{
    public function index() {
        $c = Setting::first();
        return view("settings.index")->with('cfg', $c);
    }
    public function save(Request $request) {
        
        $s = Setting::first();
        if(Input::hasFile('blog_header')){
            $file = Input::file('blog_header');
            $filename = app('Helper')->GetFileName(Input::file('blog_header')->getClientOriginalName()).'_'.str_random(8).'.'.$file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            $s->blog_header_link = 'uploads/'.$filename;
        }
        if(Input::hasFile('blog_logo')){
            $file = Input::file('blog_logo');
            $filename = str_random(15).'.'.$file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            $s->blog_logo = 'uploads/'.$filename;
        }




        $s->blog_description = $request->blog_description;
        $s->blog_title = $request->blog_title;

        $s->save();


        return redirect('backend/settings');
    }
}
