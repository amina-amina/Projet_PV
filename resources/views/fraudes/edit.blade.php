@extends('adminlte::page')

@section('title', 'Systéme de gestion PV | Update')

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
                    <h3 class="text-dark">
                        Modifier Fraude
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('fraudes.update',$fraude->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="reference" class="form-label fw-bold">reference</label>
                            <input type="text" name="reference" value="{{old("reference",$fraude->reference)}}" placeholder="reference" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="type" class="form-label fw-bold">Type</label>

                            <select class="form-select" aria-label="Default select example" name="type">
                                <option selected>Open this select menu</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                              </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="matiere">matiere</label>
                            <input type="text" class="form-control" value="{{old("matiere",$fraude->matiere)}}"  name="matiere" placeholder="matiere">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="date"> Date</label>
                            <input type="date" class="form-control" value="{{old("date",$fraude->hire_date)}}"  placeholder= "Date" name="date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="lieu">lieu</label>
                            <input type="text" class="form-control" value="{{old("lieu",$fraude->lieu)}}"  placeholder="lieu" name="lieu">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure">Heure</label>
                            <input type="text" class="form-control" value="{{old("heure",$fraude->heure)}}"  placeholder="heure" name="heure">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="surveillant">surveillant</label>
                            <input type="text" class="form-control" value="{{old("surveillant",$fraude->surveillant)}}"  placeholder="Surveillant" name="surveillant">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

