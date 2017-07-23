<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    private $_group=[];
    public function __construct()
    {
        $groups= Group::all();
        foreach ($groups as $group){
            $this->_group[$group->id]= $group->title;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $keyword=$request->get('keyword');
            $users= User::where('user_name','like','%'.$keyword.'%')->get();

        }else{
            $users= User::all();
        }
        return view('admin.user.show',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create',['groups'=>$this->_group]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_name'=>'required|max:50'
        ],[
            'user_name.required'=>'user name bắt buộc phải nhập'
        ]);

        $u= new User();
        $u->user_name= $request->user_name;
        $u->email= $request->email;
        $u->password='';
        $u->first_name= $request->first_name;
        $u->last_name= $request->last_name;
        $u->gender= $request->gender;
        $u->address= $request->address;
        $u->phone_number= $request->phone_number;
        $u->group_id= $request->group_id;

        $u->save();


        Session::flash('success',"create successfully!");
        return redirect('admin/user');
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
        $users= User::FindOrFail($id);
        return view('admin.user.edit',['users'=>$users,'groups'=>$this->_group]);
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
        $users= User::FindOrFail($id);
        $users->user_name= $request->user_name;
        $users->email= $request->email;
        $users->password='';
        $users->first_name= $request->first_name;
        $users->last_name= $request->last_name;
        $users->gender= $request->gender;
        $users->address= $request->address;
        $users->phone_number= $request->phone_number;
        $users->group_id= $request->group_id;

        $users->save();

        Session::flash('success','Edit successfully!');
        return redirect('admin/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users= User::findOrFail($id);
        $users->delete();

        Session::flash('success','successfully!');
        return redirect('admin/user');

    }
}
