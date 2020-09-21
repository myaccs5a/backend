<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payments;
class PaymentController extends Controller
{
    public function getPayment(){
        $date['listPayment'] = Payments::all();
        return view('administrator.pages.payment.show',$date);
    }
    public function getDeletePayment($id){
        Payments::destroy($id);
        return redirect()->back()->with(['success'=>'Xoá thành công']);
    }
}
