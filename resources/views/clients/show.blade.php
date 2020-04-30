@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Client: {{ $client->name}}</h5>
      <p>Phone number: {{ $client->phone_number}}</p>
      <p>Email client: {{ $client->email }}</p>
      <a href="{{ route('client.index') }}" class="btn btn-primary form-control">Back</a>
    </div>
  </div>
</div>
@endsection