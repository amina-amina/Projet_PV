@extends('adminlte::page')

@section('title', 'Systéme de gestion PV| '.$fraude->id)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Etudiants : {{$fraude->student->apogee}}
                    </h3>
                </div>
                <div class="card-body">
                    
                  
                    <div class="form-group mb-3">
                        <label for="reference" class="form-label fw-bold">reference</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->reference}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="type" class="form-label fw-bold">Type</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->type}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="matiere" class="form-label fw-bold">matiere</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->matiere}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date" class="form-label fw-bold">date</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->date}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lieu" class="form-label fw-bold">lieu</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->lieu}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="heure" class="form-label fw-bold">Heure</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->heure}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="surveillant" class="form-label fw-bold">Surveillant</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->surveillant}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="surveillant" class="form-label fw-bold">Surveillant</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->surveillant}}
                        </div>
                    </div><div class="form-group mb-3">
                        <label for="note" class="form-label fw-bold">Note</label>
                        <div class="border border-secondary rounded p-2">
                            {{$fraude->note}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



