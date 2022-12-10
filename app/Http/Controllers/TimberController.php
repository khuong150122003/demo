<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timber;

class TimberController extends Controller
{
    public function index() {
        $data = Timber:: get();
        //return $data;
        return view('timber-list', compact('data'));
    }
    public function addTimber() {
        return view('add-timber');
    }
    public function saveTimber(Request $request) {

        $request->validate([
            'name' => 'required',
            'price' => 'required | price',
            'image' => 'required',
        ]);

        $name = $request ->name;
        $price = $request ->price;
        $image = $request ->image;


        $stu = new Timber();
        $stu->name = $name;
        $stu->price = $price;
        $stu->image = $image;
        $stu->save();

        return redirect() ->back() ->with('success', 'Timber Added Successfully');
    }

    public function editTimber($id) {
        $data = Timber:: where('id','=',$id)->first();
        return view('edit-timber', compact('data'));
    }

    public function updateTimber(Request $request) {

        $request->validate([
            'name' => 'required',
            'price' => 'required | price',
            'image' => 'required',
        ]);
        $id = $request ->id;
        $name = $request ->name;
        $price = $request ->price;
        $image = $request ->image;

        Timber::where('id','=',$id)->update([
            'name'=>$name,
            'price'=>$price,
            'image'=>$image,
        ]);
        return redirect() ->back() ->with('success', 'Timber Updated Successfully');

    }
    public function deleteTimber($id) {
        Timber::where('id','=',$id)->delete();
        return redirect() ->back() ->with('success', 'Timber Deleted Successfully');

    }

}

