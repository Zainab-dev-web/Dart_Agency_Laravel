{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="content">
            <h3 class="text-center">Ajouter un membre</h3>    
    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row text-center">
              
            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if($errors->first('photo')) 
                @else{{old('photo')}}@endif"/>
                <div class="validation"></div>
            </div>
                
                @error('photo')  
                <div class="text-danger">{{ $message }}</div>  
                @enderror

                <div class="form-group col-md-6 mx-auto py-4">
                    <label for="">Nom</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if($errors->first('name')) 
                    @else{{old('name')}}@endif"/>
                    <div class="validation"></div>
                </div>
                   
                    @error('name')  
                    <div class="text-danger">{{ $message }}</div>  
                    @enderror

            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Role</label>
                <input type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="@if($errors->first('role_id')) 
                @else{{old('role_id')}}@endif"/>
                <div class="validation"></div>
            </div>
               
                @error('role_id')  
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

