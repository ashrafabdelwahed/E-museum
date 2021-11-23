<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Admin\Civilization;
use App\Http\Controllers\Controller;

class CivilizationController extends Controller
{

    public function index()
    {
        $civilizations = Civilization::all();
        return view('admin.civilization.index', compact('civilizations'));
    }


    public function create() {

        return view('admin.civilization.create');


    }


    public function store(Request $request)
    {
        $data = $request->validate([

            'name_en'           =>  'required|string',
            'name_ar'           =>  'required|string',

            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',


        ]);


        Civilization::create($data);

        $notification=array(
            'messege'=>'Civilization Created Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('civilization.index')->with($notification);

    }


    public function edit(Civilization $civilization)
    {
        // $civilization = Civilization::find($id);
        return view('admin.civilization.edit', compact('civilization'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name_en'           =>  'required|string',
            'name_ar'           =>  'required|string',

            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',

        ]);

        Civilization::find($id)->update($data);

        $notification=array(
            'messege'=>'Civilization Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('civilization.index')->with($notification);

    }


    public function destroy(Civilization $civilization)
    {

        // $civilization->find($id)->delete();

        $civilization->delete();
        $notification=array(
            'messege'=>'Civilization Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('civilization.index')->with($notification);

    }
}
