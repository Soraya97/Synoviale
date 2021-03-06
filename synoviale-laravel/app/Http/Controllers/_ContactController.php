<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//
//        $contacts = Contact::all();
//
//        return view('contact',comapct('contacts'));
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
//        return view('addcontact');
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
//        $data =$request->validate([
//            'since' => 'required|date',
//            'until' => 'null|date',
//            'person_id' => 'required',
//            'company_' => 'required',
//        ]);
//
//        Bike::create($data);
//
//        return redirect('bike');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Contact  $contact
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $contact = Contact::findOrFail($id);
//
//        return view('onlycontact',compact('contact'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Contact  $contact
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        $contact = Contact::findOrFail($id);
//
//        return view('editcontact',compact('contact'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Contact  $contact
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Contact $contact)
//    {
//        //
//        $data = $request->only([
//            'since',
//            'until',
//            'person_id',
//            'company_id'
//        ]);
//
//        $contact->update($data);
//
//        return redirect('contact');
//    }
//
//        //ou avec $id
//
//       public function update(Request $request, $id)
//       {
//       //
//       $data = $request->only([
//           'since',
//           'until',
//           'person_id',
//           'company_id'
//       ]);
//
//       Contact::getById($id)->update($request);
//
//       return redirect('contact');
//       }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Contact  $contact
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        Contact::findOrFail($id)->delete();
//
//        return redirect('contact');
//    }
}
