<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//        $companies = Company::all();
//
//        return view('company',comapct('companies'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//        return view('addcompany');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//        $data =$request->validated([
//            'name' => 'required|min:3',
//        ]);
//
//        Company::create($data);
//
//        return redirect('company');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Company  $company
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Company $company)
//    {
//        //
//        return view('onlycompany',compact('company'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Company  $company
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Company $company)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Company  $company
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Company $company)
//    {
//        //
//        $data = $request->only([
//
//            'name',
//        ]);
//
//        $company->update($data);
//
//        return redirect('company');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Company  $company
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Company $company)
//    {
//        //
//        $company->delete();
//
//        return redirect('company');
//    }
}
