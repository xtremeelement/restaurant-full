<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index()
    {
        return view('/admin/customers/all-offers');
    }
    public function reservations()
    {
        return view('/admin/customers/all-reservations');
    }
    // public function index()
    // {
    //     return view('/admin/customers/all-offers');
    // }
}
