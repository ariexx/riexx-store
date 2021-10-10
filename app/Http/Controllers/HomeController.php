<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Models\PaymentMethod;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::getData();
        $payments = PaymentMethod::all();

        return view('home')->with([
            'services' => $services,
            'payments' => $payments,
        ]);
    }

    public function store(Request $request)
    {
        // dd($email = $request->input('service'));
        // dd($request->all());
        // $data = $request->all();
        // $email = $request->input('email');
        // $password = $request->input('email');
        // $data['uuid'] = "RIEX" . date('dmY') . Transaction::latest()->get('id') + 1;
        // Transaction::create($data);

        // return redirect()->route('home');
    }
}
