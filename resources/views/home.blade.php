@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Se ecuentraen el home!
                </div>
            </div>
        </div>
    </div>
    
    @if(auth()->check())  {{-- se pregunta si un usuario esta autenticado --}}
          
          <p>{{auth()->user()->name}}   Email: {{auth()->user()->email}} </p>
          <p>Usted se encuentra autenticado</p>
         
    @else
        <p>No este autenticado<p>
    @endif
    <a href= <?php  echo route('saludo','Usuario')?> >Entrar</a>
   
</div>
@endsection
