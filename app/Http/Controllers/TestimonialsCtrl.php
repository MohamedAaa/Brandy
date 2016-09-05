<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TestimonialsR;
use App\Testimonial;
class TestimonialsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view('admin.testimonials.testimonial',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialsR $request)
    {
        //

        Testimonial::create($request->all());

        return redirect('admins/testimonials');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonials)
    {
        //
        return view('admin.testimonials.show',compact('testimonials'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonials)
    {
        //
        if ($testimonials != null) {
            return view('admin.testimonials.edit',compact('testimonials'));
        }else{
            return redirect('admins/testimonials');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialsR $request, Testimonial $testimonials)
    {
        //
        $testimonials->update($request->all());
        return redirect('admins/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonials)
    {
        //
        $testimonials->delete();
        return redirect('admins/testimonials');
    }
}
