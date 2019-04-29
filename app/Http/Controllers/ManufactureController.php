<?php

namespace App\Http\Controllers;
use App\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.manufacture.addmanufacture');
    }
    public function showall(){
        $manufacture=Manufacture::all();
        return view('admin.manufacture.showmanufacture',compact('manufacture'));
    }
    public function insert_Manufacture(Request $request){

        $this->validate($request,[
            'manufactures_name' => 'required',
            'manufactures_description' => 'required',
        ]);

        $category = new Manufacture();
        $category->manufactures_name = $request->manufactures_name;
        $category->manufactures_description = $request->manufactures_description;
        $category->manufactures_status =$request->manufactures_status;
        $category->save();
        return redirect()->route('show_Manufacture')->with('successMsg','Category Successfully Saved');

    }

    public function show($manu_id){
        $update=Manufacture::where('manufactures_status',$manu_id)->update(['manufactures_status'=>1]);
        if($update){
            return redirect()->back();
        }

    }
    public function hei($manu_id){
        $update=Manufacture::where('manufactures_status',$manu_id)->update(['manufactures_status'=>0]);
        if($update){
            return redirect()->back();
        }

    }
}
