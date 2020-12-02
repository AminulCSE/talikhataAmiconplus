<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addBill(){
    	return view('admin.bill.add_bill');
    }

    public function storeBill(Request $request){
    	$request->validate([
		    'bill_no' 			=> 'required|unique:bills',
		    'customer_name' 	=> 'required',
		    'customer_phone' 	=> 'required',
		    'description' 		=> 'required',
		    'total_bill' 		=> 'required',
		    'advanced_amount' 	=> 'required',
		]);

    	$data = array();
    	$data['bill_no'] 			= $request->bill_no;
    	$data['customer_name'] 		= $request->customer_name;
    	$data['customer_phone'] 	= $request->customer_phone;
    	$data['description'] 		= $request->description;
    	$data['total_bill'] 		= $request->total_bill;
    	$data['advanced_amount'] 	= $request->advanced_amount;

    	$inser_data = DB::table('bills')->insert($data);

    	return redirect()->back()->with('message', 'Bill addred into Database');

    }

    public function index(){
    	$allbill = DB::table('bills')->get();
    	return view('admin.bill.all_bill', compact('allbill'));
    }

    public function editBill($id){
        $edit_data = DB::table('bills')->where('id', $id)->first();
        return view('admin.bill.edit_bill', compact('edit_data'));
    }

    public function updateBill(Request $request, $id){
        $request->validate([
            'bill_no'           => 'required',
            'customer_name'     => 'required',
            'customer_phone'    => 'required',
            'description'       => 'required',
            'total_bill'        => 'required',
            'advanced_amount'   => 'required',
        ]);

        $data = array();
        $data['bill_no']            = $request->bill_no;
        $data['customer_name']      = $request->customer_name;
        $data['customer_phone']     = $request->customer_phone;
        $data['description']        = $request->description;
        $data['total_bill']         = $request->total_bill;
        $data['advanced_amount']    = $request->advanced_amount;

        $dataupdate = DB::table('bills')->where('id', $id)->update($data);

        return redirect()->back()->with('message', 'Bill Data Updated');
    }


    public function deleteBill($id){
        DB::table('bills')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data Delete succesfully');
    }
}