@extends('layouts.app')
@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name client</th>
        <th scope="col">Last name client</th>
        <th scope="col">Email client</th>
        <th scope="col">Phone number</th>
        <th scope="col">Edit client</th>
        <th scope="col">Delete client</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <th scope="row">
            <a href="{{ route('client.show', $client->id) }}">
              {{ $client->name }}
            </a>
        </th>
        <td>{{ $client->last_name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->phone_number }}</td>
        <td>
          <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary form-control">Edit</a>
        </td>
        <td>
          <form method="POST" action="{{ route('client.destroy', $client->id) }}">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger form-control">Delete</button>
          </form>
        </td>
      </tr>    
      @endforeach
    </tbody>
  </table>
  <hr>
  <div>
    <a href="{{ route('client.create') }}" class="btn btn-primary form-control">Create user</a>
  </div>
  <hr>
  <div>
    <a href="{{ route('home') }}" class="btn btn-primary form-control">Home app</a>
  </div>
</div>
  
@endsection