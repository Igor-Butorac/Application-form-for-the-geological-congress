@extends('layouts.app')
@section('content')
<?php 
use App\Register; 
?>

<table class="table table-striped" style="margin-top:3em;">
    <thead>
      <tr>
        <th scope="col">Id.</th>
        <th scope="col">Title</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Company</th>
        <th scope="col">Position</th>
        <th scope="col">Phone</th>
        <th scope="col">email</th>
        <th scope="col">Payer name</th>
        <th scope="col">Address</th>
        <th scope="col">VAT/OIB</th>
        <th scope="col">City and post code</th>
        <th scope="col">Country</th>
        <th scope="col">Payer email</th>
        <th scope="col">Inovoice</th>
        <th scope="col">Consent</th>

      </tr>
    </thead>
    <tbody>
            @foreach($registration as $reg)

    <tr>
      <th scope="row">{{$reg->id}}</th>
        <td>{{$reg->title}}</td>
        <td>{{$reg->first_name}}</td>
        <td>{{$reg->last_name}}</td>
        <td>{{$reg->company}}</td>
        <td>{{$reg->position}}</td>
        <td>{{$reg->phone}}</td>
        <td>{{$reg->email}}</td>
        <td>{{$reg->payer_name}}</td>
        <td>{{$reg->address}}</td>
        <td>{{$reg->vat_oib}}</td>
        <td>{{$reg->city_post_code}}</td>
        <td>{{$reg->country}}</td>
        <td>{{$reg->payer_email}}</td>
        <td>{{$reg->invoice}}</td>
        <td>{{$reg->consent}}</td>
      </tr>
      @endforeach

    </tbody>
</table>

@endsection