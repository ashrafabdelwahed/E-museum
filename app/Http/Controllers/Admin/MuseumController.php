<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Model\Admin\Governorate;
use App\Model\Admin\Museum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MuseumController extends Controller
{

    public function index()
    {
        $museums = Museum::all();

        return view('admin.museum.index', compact('museums'));
    }


    public function create()
    {
        $governorates = Governorate::all();

        return view('admin.museum.create', compact('governorates'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'name_en'           =>  'required|string',
            'name_ar'           =>  'required|string',
            'address_en'        =>  'required|string',
            'address_ar'        =>  'required|string',
            'start_work_time'   =>  'required|string',
            'end_work_time'     =>  'required|string',
            'ticket_price'      =>  'required|integer',
            'image_one'         =>  'required|image',
            'image_two'         =>  'required|image',
            'image_three'       =>  'required|image',

            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',

            'governorate_id'  =>  'required|integer',
        ]);

        $data['image_one'] = $data['image_one']->store('images/museum','public');
        $data['image_two'] = $data['image_two']->store('images/museum','public');
        $data['image_three'] = $data['image_three']->store('images/museum','public');



        Museum::create($data);

        $notification=array(
            'messege'=>'Created Museum Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('museum.index')->with($notification);


    }


    public function show($id)
    {

    }

    public function edit(Museum $museum)
    {
        // $museum = Museum::find($id);
        $governorates = Governorate::all();

        return view('admin.museum.edit', compact('museum','governorates'));
    }


    public function update(Request $request, Museum $museum)
    {

        // $museum  = Museum::find($id);

        $data = $request->validate([

            'name_en'           =>  'required|string',
            'name_ar'           =>  'required|string',
            'address_en'        =>  'required|string',
            'address_ar'        =>  'required|string',
            'start_work_time'   =>  'required|string',
            'end_work_time'     =>  'required|string',
            'ticket_price'      =>  'required|integer',
            'image_one'         =>  'image',
            'image_two'         =>  'image',
            'image_three'       =>  'image',

            'desc_en'          =>  'required|string',
            'desc_ar'          =>  'required|string',

            'governorate_id'  =>  'required|integer',
        ]);


        if($request->hasFile('image_one')) {
            Storage::disk('public')->delete($museum->image_one);
            $data['image_one'] = $data['image_one']->store('images/museum','public');
        }

        if($request->hasFile('image_two')) {
            Storage::disk('public')->delete($museum->image_two);
            $data['image_two'] = $data['image_two']->store('images/museum','public');
        }

        if($request->hasFile('image_three')) {
            Storage::disk('public')->delete($museum->image_three);
            $data['image_three'] = $data['image_three']->store('images/museum','public');
        }




        $museum->update($data);

        $notification=array(
            'messege'=>'Updated Museum Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('museum.index')->with($notification);

    }


    public function destroy(Museum $museum)
    {

        // $museum = Museum::find($id);

        Storage::disk('public')->delete($museum->image_one);
        Storage::disk('public')->delete($museum->image_two);
        Storage::disk('public')->delete($museum->image_three);

        $museum->delete();

        $notification=array(
            'messege'=>'Museum Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('museum.index')->with($notification);


    }



}
