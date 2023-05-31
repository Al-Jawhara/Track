<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

// session put for assign value , session get for get value

class TrackController extends Controller
{
    public $id='';
    public $product='';
    public function track(){
        $courses=DB::table('courses')->get();
        return view('track',['track'=>$courses]);
    }

    public function checkout($id){
        $courses=DB::table('courses')->where('id','=',$id)->first();
        session()->put('product',$courses);
        return view('checkout',['track'=>$courses]);
    }
    public function product(Request $request){
        $course=DB::table('courses')->where('id','=',$request->session()->get('id'))->first();
        dd($course->name);
    }


    public function invoice(Request $invoice){
        $row=[
            'Full_name'=>$invoice->Full_name,
            'gender'=>$invoice->gender,
            'Product'=>$invoice->Product,
            'paid'=>$invoice->paid,
            'phone'=>$invoice->phone,
            'date'=>$invoice->date,
        ];
        // $check=DB::table('users')->where('phone','=',$invoice->phone)->first();
        // if($check==null){
        // return view(url('/register'));
        // }
        $check=DB::table('tempinvoice')->where('phone','=',$invoice->phone)->first();
        if($check==null){
            DB::table('tempinvoice')->insert($row);
            DB::table('invoice')->insert($row);
        }
        $user=DB::table('users')->where('phone','=',$invoice->phone)->first();
        $product=DB::table('courses')->where('id','=',$invoice->session()->get('id'))->first();
        return view('invoice' ,['invoice'=>$row],['user'=>$user]);
    }


}
    
