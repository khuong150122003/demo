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
            'email' => 'required | email',
            'image' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $name = $request ->name;
        $email = $request ->email;
        $image = $request ->image;
        $phone = $request ->phone;
        $address = $request ->address;

        $stu = new Timber();
        $stu->name = $name;
        $stu->email = $email;
        $stu->image = $image;
        $stu->phone = $phone;
        $stu->address = $address;
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
            'email' => 'required | email',
            'image' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $id = $request ->id;
        $name = $request ->name;
        $email = $request ->email;
        $image = $request ->image;
        $phone = $request ->phone;
        $address = $request ->address;

        Timber::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'image'=>$image,
            'phone'=>$phone,
            'address'=>$address
        ]);
        return redirect() ->back() ->with('success', 'Timber Updated Successfully');

    }
    public function deleteTimber($id) {
        Timber::where('id','=',$id)->delete();
        return redirect() ->back() ->with('success', 'Timber Deleted Successfully');

    }

}
