<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_data;

class User_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User_data::all();
        return $users;
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
        $user_data = new User_data();
        $user_data -> city = $request-> city;
        $user_data -> state = $request-> state;
        $user_data -> country = $request-> country;
        $user_data -> favorite_character = $request-> favorite_character;
        $user_data -> favorite_comic = $request-> favorite_comic;

        $user_data->save();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_data = User_data::findOrFail($request->id);
        $user_data -> city = $request-> city;
        $user_data -> state = $request-> state;
        $user_data -> country = $request-> country;
        $user_data -> favorite_character = $request-> favorite_character;
        $user_data -> favorite_comic = $request-> favorite_comic;

        $user_data->save();

        return $user_data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_data = User_data::destroy($request->id);
        return $user_data;
    }
}
