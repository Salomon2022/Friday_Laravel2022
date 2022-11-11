@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sesión iniciada') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
        <div>
            
        </div>
      <h1>Imagen de muestra</h1>
    </div>
  </div>
  <img src="https://www.freeiconspng.com/thumbs/login-icon/user-login-icon-29.png" class="rounded float-start" alt="...">

<!-- On tables -->




@endsection
<style>
    .container{
        margin-top: 20px;
        color: blue;
        font: 24px calibri;
    }
    .card {
        color: green;
    }
</style>