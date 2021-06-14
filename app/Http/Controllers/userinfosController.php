<?php

namespace App\Http\Controllers;

use App\Models\userinfos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = userinfos::all();
        return view('users',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      userinfos::create([
          'username' => $request->username,
          'useremail' => $request->useremail
      ]);
     return redirect(route('users.index'))->with(['success'=>'added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
    
       $users=userinfos::where('id',$id)->first();
      return view('edit_user',['user'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        userinfos::where('id',$id)->update([

            'username'=>$request->username,
            'useremail'=>$request->useremail,
        ]);
        return redirect(route('users.index'))->with(['success'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        userinfos::where('id',$id)->delete();
        return redirect(route('users.index'))->with(['success'=>'delete']);
    }
    
}
