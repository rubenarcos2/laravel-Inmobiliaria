<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        $properties = Property::all();
        return view('houses.index', ['houses' => $houses, 'properties' => $properties]);
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:3',
        ]);

        $house = new House;
        $house->title = $request->title;
        $house->category_id = $request->category_id;
        $house->save();

        return redirect()->route('houses')->with('success', 'House created successfully');
    }

    public function destroy($id){
        $house = House::find($id);
        $house->delete();
        return redirect()->route('houses')->with('success', 'House deleted successfully');
    }

    public function show($id){
        $house = House::find($id);
        $properties = Property::all();
        return view('houses.show', ['house' => $house, 'properties' => $properties]);
    }

    public function edit($id){
        $house = House::find($id);
        $properties = Property::all();
        return view('houses.update', ['house' => $house, 'properties' => $properties]);
    }

    public function update(Request $request, $id){
        $house = House::find($id);

        $house->shortDescription = $request->shortDescription;
        $house->save();

        return redirect()->route('Houses')->with('success', 'House updated successfully');
    }
}