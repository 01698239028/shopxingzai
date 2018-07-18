<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products= Product::select('products.*');
        if($request->has('keyword')){
            $keyword= $request->keyword;
            $products= $products->where('products.name', 'like', '%'. $keyword.'%');
        }

        $products= $products->paginate(9);


        /*echo '<pre>';
        print_r($products->toArray());
        echo '</pre>';die();*/
        return view('search',[
            'products'=>$products
        ]);

    }

    public function category($id)
    {
        $products= Product::select('products.*')
            ->join('categories', 'products.category_id', '=','categories.id')
            ->where('categories.id', $id)
          ->paginate(10);
        return view('products',[
            'products'=> $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p= Product::findOrFail($id);

 /*       echo '<pre>';
        print_r($p->toArray());
        echo '</pre>';die();*/


        return view('single',['p'=> $p]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
