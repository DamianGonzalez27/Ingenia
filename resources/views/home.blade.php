@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clients App</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="dashboard">
                        <p>This app it's a technical test to enterprise Ingenia</p>
                        <p>On the dropdown menu you can find the control panel link</p>
                        <hr>
                        <span class="text-center">Welcome :)</span>
                        <hr>
                        <p>By: DamianDev</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
