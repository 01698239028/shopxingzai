<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PostController extends Controller
{
    private $_product=[];
    private $_user=[];
    public function __construct()
    {
        $products= Product::all();
        foreach ($products as $product){
            $this->_product[$product->id]=$product->name;
        }

        $users= User::all();
        foreach ($users as $user){
            $this->_user[$user->id]=$user->user_name;
        }
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $keyword= $request->get('keyword');
            $post= Post::where('title','like','%'.$keyword.'%')->get();
        }else{
            $post= Post::all();
        }
        return view('admin.post.show',['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create',['products'=>$this->_product,'users'=>$this->_user]);
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
            'title'=>'required|max:50',
        ],[
            'title.required'=>'title bắt buộc phải nhập'
        ]);


        $image='no-image.jpg';
        if($request->hasFile('image')){
            $file= $request->file('image');
            $image= $file->getClientOriginalName();
            $path=public_path('uploads/post');

            $file->move($path,$image);

            $post= new Post();
            $post->title= $request->title;
            $post->description= $request->description;
            $post->image= $image;
            $post->content= $request->contents;
            $post->user_id= $request->user_id;
            $post->product_id= $request->product_id;
            $post->publishing_date= $request->publishing_date;


            $post->save();

            Session::flash('success','create successfully!');

            return redirect('admin/post');
        }

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
        $post= Post::FindOrFail($id);

        return view('admin.post.edit',['post'=>$post, 'users'=>$this->_user,'products'=>$this->_product]);
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
        $post= Post::FindOrFail($id);
        $image=$post->image;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $image= $file->getClientOriginalName();
            $path=public_path('uploads/post');

            $file->move($path,$image);
        }

        $post->title= $request->title;
        $post->description= $request->description;
        $post->image= $request->image;
        $post->content= $request->contents;
        $post->user_id= $request->user_id;
        $post->product_id= $request->product_id;
        $post->publishing_date= $request->publishing_date;

        $post->save();

        Session::flash('success',' Edit successfully!');
        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::FindOrFail($id);
        $post->delete();

        Session::flash('success','Delete successfully!');
        return redirect('admin/post');
    }
}
