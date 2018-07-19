<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProductController extends Controller
{
    private $_cate=[];
    public function __construct()
    {
        $categories= Category::all();
        foreach ($categories as $category){
            $this->_cate[$category->id] = $category->title;
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

            $keyword= $request->get('keyword');
            $product= Product::where('name','like','%'.$keyword.'%')->paginate(10);
        }else{
            $product= Product::paginate(10);
        }
        return view('admin.product.show',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create', ['categories'=>$this->_cate]);

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
            'name'=>'required|max:50',
            'price'=>'required'
        ],[
            'name.required'=>'name bắt buộc phải nhập'
        ]);

        $image='no-image.jpg';
        if($request->hasFile('image')){
            $file= $request->file('image');
            $image= $file->getClientOriginalName();
            $path=public_path('uploads/product');

            $file->move($path,$image);
        }

        $product= new Product();
        $product->name= $request->name;
        $product->category_id= $request->category_id;
        $product->price= $request->price;
        $product->discount= $request->discount;
        $product->image= $image;
        $product->size= $request->size;
        $product->description= $request->description;

        $product->save();

        Session::flash('success','create successfully!');

        return redirect('admin/product');
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
        $product= Product::FindOrFail($id);

        return view('admin.product.edit',['product'=>$product, 'categories'=>$this->_cate]);
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
        $product= Product::FindOrFail($id);
        $image =$product->image;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $image= $file->getClientOriginalName();
            $path=public_path('uploads/product');

            $file->move($path,$image);
        }

        $product->name= $request->name;
        $product->category_id= $request->category_id;
        $product->price= $request->price;
        $product->discount= $request->discount;
        $product->image= $request->image;
        $product->size= $request->size;
        $product->description= $request->description;

        $product->save();

        Session::flash('success',' Edit successfully!');
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::FindOrFail($id);
        $product->delete();

        Session::flash('success','Delete successfully!');
        return redirect('admin/product');
    }
}
