<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserR;
use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(9);
        return view('admin.users.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserR $request)
    {
        $request['password'] = bcrypt($request->password);

        // var_dump($request->all());
        User::create($request->all());
        return redirect('admins/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        //
        if ($users != null) {
            return view('admin.users.show',compact('users'));
        }else{
            return redirect('admins/user');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        //
        if ($users != null) {
            return view('admin.users.edit',compact('users'));
        }else{
            return redirect('admins/users');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserR $request, User $users)
    {
        //
        $users->name = $request->name;
        $users->email = $request->email;

        if(!empty($request->password)){
            $users->password = bcrypt($request->password);
        }

        $users->save();

        return redirect('admins/users');     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        
        $users->delete();

        return redirect('admins/users');
    }
    
   public function add(Request $request)
   {
       
   }
}
