<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // print_r("faffadsf");die;
        return view('auth.paymentview');
    }

    public function paymentio()
    {
        // print_r("faffadsf");die;
        return view('auth.payment-method');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:44b3e61a7c414d17053a8b8cdc677529",
                          "X-Auth-Token:8faaba7a1659c6f3b5a4782a26110d81"));
        $payload = Array(
            'purpose' => 'create id',
            'amount' => '100',
            'phone' => '8839335941',
            'buyer_name' => 'devendra',
            'redirect_url' => 'http://127.0.0.1:8000/image-upload',
            'send_email' => true,
            'send_sms' => true,
            'email' => 'jitendrabodana87@gmail.com',
            'allow_repeated_payments' => false
        );
        // print_r( $payload);die;
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        echo '<pre>';
        // print_r($response);die;
        echo $response;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // print_r("kjkfasf");die;
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'coins' => ['required', 'int','min:100'],
        ]);

        $payment = payment::create([
            'username' => $request->username,
            'coins' => $request->coins,
        ]);
        return redirect('image-upload')->with('status', 'Profile updated!');

        // return redirect(route('image-upload'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
