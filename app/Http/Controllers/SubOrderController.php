<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubOrder;
class SubOrderController extends Controller
{
    public function pay(SubOrder $suborder)
    {
        $suborder->transactions()->create([
            'transaction_id'=> uniqid('trans-',$suborder->id),
            'amount_paid'=>$suborder->grand_total,
            'commision'=>0.1*$suborder->grand_total
        ]);
        return redirect()->to('/admin/transactions')->withMessage('Transaction Created');
    }
}
