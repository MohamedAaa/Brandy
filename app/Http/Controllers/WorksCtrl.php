<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\WorksR;
use Illuminate\Http\Request;
use App\Work;
use Validator;
class WorksCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Work::all();
        return view('admin.works.work',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.works.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(worksR $request)
    {

        if ($request->file('img')->isValid()) {

            $fileName = time().'work.'.$request->img->getClientOriginalExtension();
            $request->file('img')->move('image/works', $fileName);

            $work = new Work;
            $work->name = $request->name;
            $work->link = $request->link;
            $work->info = $request->info;
            $work->img = $fileName;
            $work->save();
            return redirect('admins/works');
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Work $works)
    {
        //
        if ($works != null) {
            return view('admin.works.show',compact('works'));
        }else{
            return redirect('admins/works');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $works)
    {
        //
        if ($works != null) {
            return view('admin.works.edit',compact('works'));
        }else{
            return redirect('admins/works');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorksR $request, Work $works)
    {
        //
        $works->name = $request->name;
        $works->info = $request->info;
        $works->link = $request->link;

        if(!$request->img == null){

            if ($request->file('img')->isValid()) {

                $fileName = time().'work.'.$request->img->getClientOriginalExtension();
                $request->file('img')->move('image/works', $fileName);
                $works->img = $fileName;

            } 
        }

        $works->save();
        return redirect('admins/works');     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $works)
    {
        $path =  str_replace('app/Http/Controllers', 'public', dirname(realpath(__File__)).'/image/works/'.$works->img);
        if(is_file($path)){
            unlink($path);
        }
        $works->delete();

        return redirect('admins/works');
    }
    
    /**
     * Remove the specified image from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id)
    {
        $work = Work::findOrFail($id);

        $path =  str_replace('app/Http/Controllers', 'public', dirname(realpath(__File__)).'/image/works/'.$work->img);
        if(is_file($path)){
            unlink($path);
        }
        // return $path;
        $work->img = null;
        $work->save();

        return redirect('admins/works');

    }
}
