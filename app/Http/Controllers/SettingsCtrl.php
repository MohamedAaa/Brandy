<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SettingsR;

class SettingsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = \App\Setting::first(); 
        return view('admin.settings.setting',compact('settings'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingsR $request, \App\Setting $settings)
    {

        $settings->site_name = $request->site_name;
        $settings->site_desc = $request->site_desc;
        $settings->welcome = $request->welcome;
        $settings->email = $request->email;
        $settings->call = $request->call;
        $settings->website = $request->website;
        $settings->address = $request->address;
        $settings->fb = $request->fb;
        $settings->tw = $request->tw;
        $settings->in = $request->in;
        $settings->save();
        return redirect('admins/settings');

    }

}
