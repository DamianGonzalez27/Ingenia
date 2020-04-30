@extends('layouts.app')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('client.store') }}">
    {!! csrf_field() !!}
      <div class="form-group">
        <label for="exampleInputEmail1">User name(s)</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User name" name="name" value="{{ old('name') }}">
        {!! $errors->first('name', '<span class=error>:message</span>') !!}
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1">User last name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User last name" name="last_name" value="{{ old('last_name') }}">
        {!! $errors->first('last_name', '<span class=error>:message</span>') !!}
      </div>
  
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="User email" name="email" value="{{ old('email') }}">
        {!! $errors->first('email', '<span class=error>:message</span>') !!}
      </div>
  
      <div class="form-group">
        <label for="exampleInputPassword1">Phone number</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone number" name="phone_number" value="{{ old('phone_number') }}">
        {!! $errors->first('phone_number', '<span class=error>:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Credit card</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="User credit card" name="credit_card" value="{{ old('credit_card') }}">
        {!! $errors->first('credit_card', '<span class=error>:message</span>') !!}
      </div>
      
      <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
    <hr>
    <div>
      <a href="{{ route('client.index') }}" class="btn btn-primary form-control">Regresar</a>
    </div>
</div>
@endsection