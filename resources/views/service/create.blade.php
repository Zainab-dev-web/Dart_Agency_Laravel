{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="content">
                
    <form action="{{route('service.store')}}" method="post">
        @csrf
        <div class="form-row text-center">
              
            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Titre</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="@if($errors->first('titre')) 
                @else{{old('titre')}}@endif"/>
                <div class="validation"></div>
            </div>
               
                @error('titre')  
                <div class="text-danger">{{ $message }}</div>  
                @enderror
       
            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Texte</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="@if($errors->first('text')) 
                @else{{old('text')}}@endif"/>
                <div class="validation"></div>
            </div>
              @error('text')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror
           
              
            <div class="form-group col-md-6 mx-auto py-4">
            <label for="">Icone</label>
            <input type="file" class="form-control @error('icone') is-invalid @enderror" name="icone" value="@if($errors->first('icone')) 
            @else{{old('icone')}}@endif"/>
            <div class="validation"></div>
        </div>
            
            @error('icone')  
            <div class="text-danger">{{ $message }}</div>  
            @enderror
    
        </div>
            
            <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
      </form>
  
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

