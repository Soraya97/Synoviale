<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * La classe n'est accessible que par les contacts des entreprises (rôle contact)
     * sauf l'index(), qui est accessible à tous
     */
    public function __construct()
    {
        $this->middleware('checkcontact')->except('index');

    }
    /**
     * Display a listing of the resource.
     *
     * Renvoi les produits sur la vue modelsBike
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('modelsBike',compact('products'));
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//        return view('addproduct');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(ProductRequest $request)
//    {
//        //
//         $data = $request->validated();
//
//        Product::create($data);
//
//        return redirect('product');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Product  $product
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Product $product)
//    {
//        //
//        return view('onlyproduct',compact('product'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Product  $product
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Product $product)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Product  $product
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Product $product)
//    {
//        //
//        $data = $request->only([
//            'shortDescr',
//            'longDescr',
//            'distinctiveSign',
//            'lienWeb',
//            'brand_id',
//        ]);
//
//        $product->update($data);
//
//        return redirect('product');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Product  $product
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Product $product)
//    {
//        //
//        $product->delete();
//
//        return redirect('product');
//    }
}
