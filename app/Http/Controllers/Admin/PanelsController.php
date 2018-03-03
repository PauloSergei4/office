<?php

namespace App\Http\Controllers\Admin;

use App\Panel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PanelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panels = Panel::all();
        return view('admin.panels.index', ['panels'=>$panels]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::pluck('id')->all();
        return view('admin.panels.create', compact ('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'num_panel' =>  'required|unique:panels', //обязательно
            'user_id' => 'nullable'
        ]);

        Panel::create($request->all());
        return redirect()->route('panels.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $panel = Panel::find($id);
        return view('admin.panels.edit', ['panel'=>$panel]);
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
        $this->validate($request, [
            'num_panel' =>  'required' //обязательно
        ]);

        $panel = Panel::find($id);

        $panel->update($request->all());

        return redirect()->route('panels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Panel::find($id)->delete();
        return redirect()->route('panels.index');
    }
}
