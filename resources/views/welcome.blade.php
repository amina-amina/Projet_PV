@extends('layouts.main')

@section('title')
    Gestion des PV
@endsection

@section('content')
<div class="container my-5 p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <h2>Bienvenue au Systéme de la gstion des PV </h2>
                <img src="vendor/adminlte/dist/img/logo_fsjes.jpg" alt="Girl in a jacket"> 
                

                
                <hr>
                @guest
                    <a href="{{route('login')}}" class="btn btn-outline-info">Login</a>
                @endguest
                @auth
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="logout_link">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-outline-danger mx-3">
                                        {{ __('Logout') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="home_page_link">
                            <a href="{{route('fraudes.index')}}" class="btn btn-outline-primary">Accueil</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
