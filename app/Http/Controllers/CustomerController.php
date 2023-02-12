<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Customer;

class CustomerController extends Controller
{
    function Addcustomer(request $req){
        $customer = new Customer;
        $customer->name=$req->name;
        $customer->email=$req->email;
        $customer->studentid=$req->studentid;
        $customer->department=$req->department;
        $customer->RFID=$req->RFID;
        $customer->save();
        return redirect('add');
    }
}
