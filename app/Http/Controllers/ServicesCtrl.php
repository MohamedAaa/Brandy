<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ServicesR;
use Illuminate\Http\Request;
use App\Service;
use Validator;
class ServicesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $services = Service::all();
        return view('admin.services.service',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesR $request)
    {

        if ($request->file('img')->isValid()) {

            $fileName = time().'service.'.$request->img->getClientOriginalExtension();
            $request->file('img')->move('image/services', $fileName);

            $service = new Service;
            $service->name = $request->name;
            $service->content = $request->content;
            $service->img = $fileName;
            $service->save();
            return redirect('admins/services');
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $services)
    {
        //
        if ($services != null) {
            return view('admin.services.show',compact('services'));
        }else{
            return redirect('admins/services');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $services)
    {
        //
        if ($services != null) {
            return view('admin.services.edit',compact('services'));
        }else{
            return redirect('admins/services');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesR $request, Service $services)
    {
        //
        $services->name = $request->name;
        $services->content = $request->content;

        if(!$request->img == null){

            if ($request->file('img')->isValid()) {

                $fileName = time().'service.'.$request->img->getClientOriginalExtension();
                $request->file('img')->move('image/services', $fileName);
                $services->img = $fileName;

            } 
        }

        $services->save();
        return redirect('admins/services');     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $services)
    {
        $path =  str_replace('app/Http/Controllers', 'public', dirname(realpath(__File__)).'/image/services/'.$services->img);
        if(is_file($path)){
            unlink($path);
        }
        $services->delete();

        return redirect('admins/services');
    }
    
    /**
     * Remove the specified image from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id)
    {
        $service = Service::findOrFail($id);

        $path =  str_replace('app/Http/Controllers', 'public', dirname(realpath(__File__)).'/image/services/'.$service->img);
        if(is_file($path)){
            unlink($path);
        }
        // return $path;
        $service->img = null;
        $service->save();

        return redirect('admins/services');

    }
}
