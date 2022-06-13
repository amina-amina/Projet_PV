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
                        <label for="" class="form-label fw-bold">Image</label>
                        <div class="border border-secondary rounded p-6">
                            <img src="{{asset('storage/' . $fraude->image)}}"  class=""/>
                              
                            
                        </div>
                    </div>
                    
                   
                    
                    
                    
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



