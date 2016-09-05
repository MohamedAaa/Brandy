
@extends('site.master')

@section('title')
    Brandy    
@endsection
<?php

use App\Testimonial;
use App\Work;

$testimonial = Testimonial::all();
$works = Work::all();

?>
@section('content')
    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                @foreach(App\Service::all() as $service)
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                    {!! Html::image('image/services/'.$service->img,null,['width'=>'30px','height'=>'30px']) !!}
                        <h2>{{ $service->name }}</h2>
                        <p>{{ $service->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
    </section>
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>About Me</h2>
                        <img src="site/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>DESIGN - 90%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>DEVELOPMENT - 60%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>MARKETING - 75%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>SEO - 95%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed quia non numquam eius modi tempora.</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                @foreach($testimonial as $testimonials)
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>{!! $testimonials->text !!}</p>
                    <h4>{{ $testimonials->name }}</h4>
                </div>
                @endforeach
            </div>            
        </div>
    </section>


    <div class="fun_facts">
    	<section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
	        <div class="section_overlay">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 wow fadeInLeft animated">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-toolbox"></i>
	                                    <h3>300</h3>
	                                    <p>Project Done</p>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-clock"></i>
	                                    <h3>1700+</h3>
	                                    <p>Hours Worked</p>
	                                </div>                            
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-trophy"></i>
	                                    <h3>37</h3>
	                                    <p>Awards Won</p>
	                                </div>                            
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
	                        <div class="imac">
	                            <img src="site/images/imac.png" alt="">
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>
	    </section>    
    </div>
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Latest Works</h1>
                        <img src="site/images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
            @foreach($works as $work )
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="{{ url('image/works/'.$work->img) }}" alt="" width="471" height="256">
                        <div class="image_overlay">
                            <a href="{{ $work->link }}" target="_blank">View Full Project</a>
                            <h2>{{ $work->name }}</h2>
                            <h4>{{ substr($work->info, 0,50).'...' }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach    
                
            </div>           
        </div>
    </section>
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                        <p>Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. 
                        Integer non dapibus diam, ac eleifend lectus.</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
	                    <a href="#CONTACT">
	                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
	                    </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="site/images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+02{{ siteSettings('call') }}</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>{{ siteSettings('email') }}</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>{{ siteSettings('address') }}</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                @include('errors.error')
                {{ Form::open(['url'=>'contact','class'=>'contact-form']) }}
                {{ csrf_field()}}
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="message" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <input type="submit" name="send" value="SEND MESSAGE" class="btn btn-default submit-btn form_submit">                               
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

