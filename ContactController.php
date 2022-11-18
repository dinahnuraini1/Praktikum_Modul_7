<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact as ModelsContact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ModelsContact::all();
        return view('contact.index', compact('contacts'));
    }

    public function about()
    {
        return view('contact.about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ModelsContact([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat')
        ]);
        $contact->save();
        return \redirect('/');
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
        $contact = ModelsContact::find($id);
        return view('contact.edit', compact('contact'));
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
        $contact = ModelsContact::find($id);
        $contact->nama = $request->input('nama');
        $contact->nim = $request->input('nim');
        $contact->email = $request->input('email');
        $contact->alamat = $request->input('alamat');
        $contact->save();
        return \redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ModelsContact::find($id);
        $contact->delete();
        return \redirect('/');
        // return $id;
    }
}
