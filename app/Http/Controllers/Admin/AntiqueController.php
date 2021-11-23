<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Museum;
use App\Model\Admin\Antique;
use Illuminate\Http\Request;
use App\Model\Admin\Civilization;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AntiqueController extends Controller
{




    public function index()
    {
        $antiques = Antique::all();

        return view('admin.antique.index', compact('antiques'));
    }


    public function create()
    {
        $museums = Museum::all();
        $civilizations = Civilization::all();

        return view('admin.antique.create', compact('museums','civilizations'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'name_en'          =>  'required|string',
            'name_ar'          =>  'required|string',

            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',

            'civilization_id'  =>  'required|integer',
            'museum_id'        =>  'required|integer',

            'image_one'        =>  'required|image',
            'image_two'        =>  'required|image',
            'image_three'      =>  'required|image',
        ]);

        $data['image_one'] = $data['image_one']->store('images/antique','public');
        $data['image_two'] = $data['image_two']->store('images/antique','public');
        $data['image_three'] = $data['image_three']->store('images/antique','public');



        Antique::create($data);

        $notification=array(
            'messege'=>'Created Antique Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('antique.index')->with($notification);


    }


    public function show($id)
    {

    }

    public function edit(Antique $antique)
    {
        // $antique = Antique::find($id);
        $museums = Museum::all();
        $civilizations = Civilization::all();

        return view('admin.antique.edit', compact('antique','museums','civilizations'));
    }


    public function update(Request $request, Antique $antique)
    {

        // $antique  = Antique::find($id);

        $data = $request->validate([
            'name_en'          =>  'required|string',
            'name_ar'          =>  'required|string',
            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',
            'civilization_id'  =>  'required|integer',
            'museum_id'        =>  'required|integer',
            'image_one'        =>  'image',
            'image_two'        =>  'image',
            'image_three'      =>  'image',
        ]);


        if($request->hasFile('image_one')) {
            Storage::disk('public')->delete($antique->image_one);
            $data['image_one'] = $data['image_one']->store('images/antique','public');
        }

        if($request->hasFile('image_two')) {
            Storage::disk('public')->delete($antique->image_two);
            $data['image_two'] = $data['image_two']->store('images/antique','public');
        }

        if($request->hasFile('image_three')) {
            Storage::disk('public')->delete($antique->image_three);
            $data['image_three'] = $data['image_three']->store('images/antique','public');
        }




        $antique->update($data);

        $notification=array(
            'messege'=>'Updated antique Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('antique.index')->with($notification);

    }


    public function destroy(Antique $antique)
    {

        // $antique = Antique::find($id);

        Storage::disk('public')->delete($antique->image_one);
        Storage::disk('public')->delete($antique->image_two);
        Storage::disk('public')->delete($antique->image_three);

        $antique->delete();

        $notification=array(
            'messege'=>'antique Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('antique.index')->with($notification);


    }






}
