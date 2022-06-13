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
                        Ajouter étudiant
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('fraudes.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        
                        @forelse($result as $student)
                        <div class="form-group mb-3">
                            <label for="apogee" class="form-label fw-bold">Apogée</label>
                            <input type="text" name="apogee" value="{{$student->apogee}}" placeholder="Apogée" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="cin">CIN</label>
                            <input type="text" name="cin" value="{{$student->cin}}"  placeholder="CIN" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="cne">CNE</label>
                            <input type="text" class="form-control" value="{{$student->cne}}"  name="cne" placeholder="CNE" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="filliere">Filliere</label>
                            <input type="text" class="form-control" value="{{$student->filliere}}"  placeholder="Filliere" name="filliere" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="section">Section</label>
                            <input type="text" class="form-control" value="{{$student->section}}"  placeholder="Section" name="section" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="nom">Nom</label>
                            <input type="text" class="form-control" value="{{$student->nom}}"  placeholder="nom" name="nom" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="prenom">Prénom</label>
                            <input type="text" class="form-control" value="{{$student->prenom}}"  placeholder="Prenom" name="prenom" disabled>
                        </div>
                        <input type="hidden" name="student_id" value="{{ $student->id}}">
                        @empty 
                        no student has been selected
                        @endforelse 

                        <div class="card-header bg-white text-center p-3">
                            <h3 class="text-danger">
                                Ajouter Fraude
                            </h3>
                        </div>
                        <div class="form-group mb-3">
                            <label for="reference" class="form-label fw-bold">Réference Fraude</label>
                            <input type="text" name="reference" value="{{old("reference")}}" placeholder="reference" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="type" class="form-label fw-bold">Type</label>

                            <select class="form-select" aria-label="Default select example" name="type">
                                <option selected>Open this select menu</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                              </select>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="matiere">Matiére</label>
                            <input type="text" class="form-control" value="{{old("matiere")}}"  name="matiere" placeholder="Matiére">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="date">Date</label>
                            <input type="date" class="form-control" value="{{old("date")}}"  placeholder="Date" name="date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="lieu">Lieu</label>
                            <input type="text" class="form-control" value="{{old("lieu")}}"  placeholder="Lieu" name="lieu">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure">Heure</label>
                            <input type="time" class="form-control" value="{{old("heure")}}"  placeholder="Heure" name="heure">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="surveillant">Surveillant</label>
                            <input type="text" class="form-control" value="{{old("surveillant")}}"  placeholder="Surveillant" name="surveillant">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="note">Note</label>
                            <input type="text" class="form-control" value="{{old("note")}}"  placeholder="Note" name="note">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="image">Upload</label>
                            <input type="file" class="form-control" value="{{old("image")}}"  placeholder="Upload" name="image">
                        </div>
                        <div class="form-group row mb-0">
                            
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Créer Fraude') }}
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

