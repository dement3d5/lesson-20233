<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $worklist = Todo::all();
        return view('list',['worklist'=>$worklist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function changeStatus(Request $request): RedirectResponse
    {
        $work = Todo::find($request->id);

        $work -> work_status = abs( $work -> work_status -1);
        $work -> save();
        return redirect(route('todo.index'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'work_name'=> 'required',
            'work_status'=> 'required',
        ]);
        Todo::create($request->post());
        return redirect(route('todo.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request): Response
    {
        $work = Todo::find($request->id);
        return \response(view('edit',['work'=>$work]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'work_name'=> 'required',
            'work_status'=> 'required',
        ]);
        $work = Todo::find($request->id);

        $work->work_name = $request->work_name;
        $work->save();
        return  redirect(route('todo.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request,): RedirectResponse
    {

        $work = Todo::find($request->id);

        $work->delete();
        return back();
    }
}
