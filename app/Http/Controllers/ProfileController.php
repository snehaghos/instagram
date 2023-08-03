<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['countries']=Country::with('states')->get()->toArray();
       // dd($data['countries']);


        $data['profile']=User::findOrFail($id);
    // dd($data);


        return view('profile.editprofile',$data);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
    {
        //dd($request->all());
        $user=User::find($id);
        $user->website=$request->website;
        $user->bio=$request->bio;
        $user->gender=$request->gender;
        if($request->state_id!=''){
            $user->state_id=$request->state_id;

        }
        else{
            $user->state_id=null;
        }
        if($request->country_id!=''){
            $user->country_id=$request->country_id;
        }
        else{
            $user->country_id=null;
        }


        $user->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
