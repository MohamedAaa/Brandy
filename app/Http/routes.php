<?php



Route::get('/', function () {
    return view('site.index');
});

Route::get('/users', function () {


	$date = Carbon\Carbon::now()->format('Y-m-d');

    $date2 = Carbon\Carbon::createFromDate(2011, 8, 1);
    return   $date2->addDays(16)->diffForHumans();
});

Route::post('contact','ContactCtrl@contact');

Route::get('auth/fb', 'Auth\AuthController@redirectToProvider');
Route::get('auth/fb/callback', 'Auth\AuthController@handleProviderCallback');

Route::group(['middleware'=>'auth','prefix'=>'admins'],function(){

	Route::get('/',function(){
		return view('admin.index');
	});

	Route::get('services/image/{id}', 'ServicesCtrl@deleteImage');

	Route::resource('services','ServicesCtrl');
	// Settings Routes
	Route::get('settings', 'SettingsCtrl@index');
	Route::patch('settings/{settings}', 'SettingsCtrl@update');
	// Testimonial
	Route::resource('testimonials','TestimonialsCtrl');
	// Works
	Route::resource('works','WorksCtrl');
	# Users
	Route::resource('users','HomeController');
	


});

Route::auth();
