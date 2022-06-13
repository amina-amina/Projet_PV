@extends('adminlte::page')

@section('title', 'Systéme de gestion PV | Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-primary">
                        Sélectionner étudiant
                    </h3>
                    <p> vous devez choisisser l'etudiant concernée  </p>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('selectstudent') }}" enctype="multipart/form-data">
                        @csrf
                        
                        
                        
                        <div class="form-group mb-3">
                            <label for="apogee" class="form-label fw-bold">Apogée</label>
                            <input type="text" name="apogee" value="{{old("apogee")}}" placeholder="Apogée" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="cin">CIN</label>
                            <input type="text" name="cin" value="{{old("cin")}}"  placeholder="CIN" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">CNE</label>
                            <input type="text" class="form-control" value="{{old("cne")}}"  name="cne" placeholder="CNE">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Recherche</label>
                            <input type="submit" class="form-control btn btn-success" value="Recherche"   >
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection