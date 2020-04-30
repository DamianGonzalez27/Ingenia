@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Client: {{ $client->name}}</h5>
      <p>Phone number: {{ $client->phone_number}}</p>
      <p>Email client: {{ $client->email }}</p>
      <small id="emailHelp" class="form-text text-muted">You only can modify phone number and email client.</small>
    </div>
  </div>
  <hr>
  <form method="POST" action="{{ route('client.update', $client->id) }}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ $client->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone number</label>
      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone number" value="{{ $client->phone_number}}" name="phone_number">
    </div>
    <button type="submit" class="btn btn-primary form-control">Change</button>
  </form>
  <hr>
  <div>
    <a href="{{ route('client.index') }}" class="btn btn-primary form-control">Back</a>
  </div>
</div>
@endsection