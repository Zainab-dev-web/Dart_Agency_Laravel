{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Modifier le contact</div>

            
            <div class="card-body">
                <form action="{{route('contact.update' , $contact)}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{$contact->adresse}}" />
                            <div class="validation"></div>
                        </div>
                          @error('adresse')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
                    </div>
                    <div class="col-12">
                      
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{$contact->numero}}" />
                            <div class="validation"></div>
                        </div>
                          @error('numero')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
                       </div>
                   
                   
                <div class="col-12">
                   <button type="submit" class="btn btn-success">Modifier</button>
                </div>
                </div>
            </form>
            
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop