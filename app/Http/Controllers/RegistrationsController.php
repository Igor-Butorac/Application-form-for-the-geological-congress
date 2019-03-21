<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use DB;
use Mail;

class RegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('registration.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData=$request->validate([


            'first_name' => 'required',

            'last_name' => 'required',

            'company' => 'required',

            'position' => 'required',

            'phone' => 'required',

            'email' => 'required',

            'payer_name' => 'required',

            'vat_oib' => 'required',

            'city_post_code' => 'required',

            'country' => 'required',

            'payer_email' => 'required',

            'consent' => 'required',

        ],[


            'first_name.required' => ' The First name field is required.',

            'last_name.required' => 'The Last name field is required.',

            'company.required' => ' The Company field is required.',

            'position.required' => ' The Position field is required.',

            'phone.required' => ' The Phone title field is required.',

            'email.required' => ' The Email title field is required.',

            'payer_name.required' => ' The Name(Payer) field is required.',

            'vat_oib.required' => ' The VAT/OIB field is required.',

            'city_post_code.required' => ' The City and post code field is required.',

            'country.required' => ' The Country field is required.',

            'payer_email' => ' The Email (Payer) field is required.',

            'consent' => '  The Terms and Condition field is required.',

        ]);



        $registration = new Registration;
        $registration->title = $request->input('title');
        $registration->first_name = $request->input('first_name');
        $registration->last_name = $request->input('last_name');
        $registration->company = $request->input('company');
        $registration->position = $request->input('position');
        $registration->phone = $request->input('phone');
        $registration->email = $request->input('email');
        $registration->payer_name = $request->input('payer_name');
        $registration->address = $request->input('address');
        $registration->vat_oib = $request->input('vat_oib');
        $registration->city_post_code = $request->input('city_post_code');
        $registration->country = $request->input('country');
        $registration->payer_email = $request->input('payer_email');
        $registration->invoice = $request->input('invoice');
        $registration->consent = $request->input('consent');

        if (isset($_POST['submit'])){
            $emails = ['enter your email'];

             Mail::send(['text'=>'new_registration'],['name','hgi'],function($message) use ($emails){
             $message->to($emails)->subject('Poruka iz forme .....');
             $message->from('registration@hgi.com','');
     });
             }


        $registration->save();
        $url = "enter your web page";
        return 'Your Abstract registration apply has been received!. '.'<a href='.$url.'>Back to web page</a>' ;
 



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $registration = DB::table('registrations')->orderBy('id','desc')->get();
        return view('register.show')->with('registration',$registration);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
