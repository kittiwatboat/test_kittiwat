<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;
use Maatwebsite\Excel\Facades\Excel;
use App\imports\WithdrawImport;
class ImportController extends Controller
{
    public function index(){
        $test=test::paginate(10);
        return view('index',["test"=>$test]);
    }
    public function import(Request $request){
        Excel::import(new WithdrawImport, $request->file);

        return redirect()->back()->with('success', 'User Imported Successfully');
    }
    public function search(Request $request){
        $status=$request->input('transac');
        $barcode=$request->input('barcode');

        $test=test::where('transaction_status','LIKE',"%{$status}%")->where('barcode','LIKE',"%{$barcode}%")->paginate(10);

        return view('index')->with('test',$test);
    }
}
