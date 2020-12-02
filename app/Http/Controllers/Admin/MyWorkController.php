<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addMyWork(){
    	return view('admin.mynextwork.add_mynextwork');
    }

    public function storeMyWork(Request $request){
    	$request->validate([
		    'noted_date' 	=> 'required',
		    'description' 	=> 'required',
		]);

    	$data = array();
    	$data['noted_date'] 	= $request->noted_date;
    	$data['description'] 	= $request->description;

    	$inser_data = DB::table('my_works')->insert($data);

    	return redirect()->back()->with('message', 'My work added into Database');
    }

     public function index(){
    	$all_my_work = DB::table('my_works')->orderBy('id', 'DESC')->get();
    	return view('admin.mynextwork.all_mynextwork', compact('all_my_work'));
    }

    public function editMyWork($id){
        $edit_data = DB::table('my_works')->where('id', $id)->first();
        return view('admin.mynextwork.edit_mynextwork', compact('edit_data'));
    }

    public function updateMyWork(Request $request, $id){
        $request->validate([
            'noted_date'      => 'required',
            'description'     => 'required',
        ]);

        $data = array();
        $data['description']     = $request->description;
        $data['noted_date']      = $request->noted_date;

        $dataupdate = DB::table('my_works')->where('id', $id)->update($data);
        return redirect()->back()->with('message', 'My work updated succesfully');
    }


    public function deleteMyWork($id){
        DB::table('my_works')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data Delete succesfully');
    }
}