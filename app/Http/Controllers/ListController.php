<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todolist;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$lists = todolist::all();
        return view('listIndex',compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$lists = new todolist;
		$lists -> taskAuthor = $request->get('taskAuthor');
		$lists -> taskTitle = $request->get('taskTitle');
		$lists -> taskDescription = $request->get('taskDescription');
		$lists -> taskDate = $request->get('taskDate');
		$lists -> save();
		return redirect("/list");
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
		$lists = todolist::find($id);
        return view('listEdit',compact('lists','id'));
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
        $lists = todolist::find($id);
		$lists -> taskAuthor = $request->get('taskAuthor');
		$lists -> taskTitle = $request->get('taskTitle');
		$lists -> taskDescription = $request->get('taskDescription');
		$lists -> taskDate = $request->get('taskDate');
		$lists -> save();
		return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$lists = todolist::find($id);
		$lists -> delete();
		return redirect('/list');
    }
}
