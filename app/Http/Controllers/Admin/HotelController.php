<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Model\Admin\Hotel;
use App\Model\Admin\Museum;
use App\Model\Admin\Antique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{


    


    public function index()
    {
        $hotels = Hotel::all();

        return view('admin.hotel.index', compact('hotels'));
    }


    public function create()
    {
        $museums = Museum::all();

        return view('admin.hotel.create', compact('museums'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'name_en'          =>  'required|string',
            'name_ar'          =>  'required|string',

            'address_en'       =>  'required|string',
            'address_ar'       =>  'required|string',

            'museum_id'        =>  'required|integer',
            'stars'            =>  'required|integer',

            'image_one'        =>  'required|image',
            'image_two'        =>  'required|image',
            'image_three'      =>  'required|image',
        ]);

        $data['image_one'] = $data['image_one']->store('images/hotel','public');
        $data['image_two'] = $data['image_two']->store('images/hotel','public');
        $data['image_three'] = $data['image_three']->store('images/hotel','public');



        Hotel::create($data);

        $notification=array(
            'messege'=>'Created Hotel Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('hotel.index')->with($notification);


    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $museums = Museum::all();
        $hotel = Hotel::find($id);
        return view('admin.hotel.edit', compact('museums','hotel'));
    }


    public function update(Request $request, $id)
    {

        $hotel  = Hotel::find($id);

        $data = $request->validate([
            'name_en'          =>  'required|string',
            'name_ar'          =>  'required|string',

            'address_en'       =>  'required|string',
            'address_ar'       =>  'required|string',

            'museum_id'        =>  'required|integer',
            'stars'            =>  'required|integer',

            'image_one'        =>  'image',
            'image_two'        =>  'image',
            'image_three'      =>  'image',
        ]);


        if($request->hasFile('image_one')) {
            Storage::disk('public')->delete($hotel->image_one);
            $data['image_one'] = $data['image_one']->store('images/hotel','public');
        }

        if($request->hasFile('image_two')) {
            Storage::disk('public')->delete($hotel->image_two);
            $data['image_two'] = $data['image_two']->store('images/hotel','public');
        }

        if($request->hasFile('image_three')) {
            Storage::disk('public')->delete($hotel->image_three);
            $data['image_three'] = $data['image_three']->store('images/hotel','public');
        }




        $hotel->update($data);

        $notification=array(
            'messege'=>'Updated hotel Successfully',
            'alert-type'=>'success'
        );


        return redirect()->route('hotel.index')->with($notification);

    }


    public function destroy(Hotel $hotel)
    {

        // $hotel  = Hotel::find($id);

        Storage::disk('public')->delete($hotel->image_one);
        Storage::disk('public')->delete($hotel->image_two);
        Storage::disk('public')->delete($hotel->image_three);

        $hotel->delete();

        $notification=array(
            'messege'=>'hotel Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('hotel.index')->with($notification);


    }






}
