<?php

namespace App\Http\Controllers;
use App\Models\Usercrd;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('crud.add');
    }
    public function add(Request $request)
    {
        $data = new Usercrd();

          $data->name=$request->name;
          $data->age=$request->age;
          $data->save();
          return redirect()->back();

    }
    public function view()
    {
        $data=Usercrd::all();
        return view('crud.view',compact('data'));
    }
    public function edit($id)
    {
        $data=Usercrd::find($id);
        return view('crud.edit',compact('data'));
    }
    public function update(Request $request, $id)
{ 
    $data = Usercrd::find($id);
    $data->name = $request->name;
    $data->age = $request->age;
    $data->save();    
    return redirect()->back()->with('success', 'User updated successfully!');
}

}