<?php

namespace App\Http\Controllers;

use App\Registry;
use App\sms;

use Illuminate\Http\Request;

class smsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registries = sms::all()->toArray();
        return view('sms.index', compact('registries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sms.create');
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
        $registry = $this->validate(request(), [
            'age' => 'required',
            'fullname' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:0'
        ]);
        sms::create([
            'admin' => $request->input('admin'),
            'fullname' => $request->input('fullname'),
            'surname' => $request->input('surname'),
            'nationalid' => $request->input('nationalid'),
            'speciality' => $request->input('speciality'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'guardianfname' => $request->input('guardianfname'),
            'guarrdian_nationalid' => $request->input('guarrdian_nationalid'),
            'guardian_mobile' => $request->input('guardian_mobile')

        ]);
        return back()->with('success', 'Information has been successfully entered');
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
        //

        $registry = sms::find($id);
        return view('sms.edit', compact('registry', 'id'));
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
        $registry = sms::find($id);
        $this->validate(request(), [
            'fullname' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:0'
        ]);



        $registry->admin = $request->input('admin');
        $registry->fullname = $request->input('fullname');
        $registry->surname = $request->input('surname');
        $registry->nationalid = $request->input('nationalid');
        $registry->speciality = $request->input('speciality');
        $registry->email = $request->input('email');
        $registry->age = $request->input('age');
        $registry->guardianfname = $request->input('guardianfname');
        $registry->guarrdian_nationalid = $request->input('guarrdian_nationalid');
        $registry->guardian_mobile = $request->input('guardian_mobile');

        $registry->save();


        return back()->with('success', 'Registry updated successfully');
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
        $registry = sms::find($id);
        $registry->delete();
        return redirect('sms')->with('success', 'student has been  deleted');
    }
}