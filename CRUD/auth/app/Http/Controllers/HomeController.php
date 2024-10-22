<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('auths.admin');
    }
    public function toadd()
    {
        return view('crud.add');
    }
    public function add(Request $request)
    {
        $data=new Crud();
        $data->name=$request->name;
        $data->age=$request->age;
        $data->save();
        return redirect()->back();
    }
    public function view()
    {
        $data=Crud::all();
        return view('crud.view',compact('data'));
    }
    public function delete($id)
    {
        $data=Crud::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data=Crud::find($id);
        
        return view('crud.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data=Crud::find($id);
        $data->name=$request->name;
        $data->age=$request->age;
        $data->save();
        return redirect()->back();

    }
}
