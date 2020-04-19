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
            <div class="card-header">Modifier les services</div>

            
            <div class="card-body">
                <form action="{{route('service.update' , $service)}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="row">
                    
                    <div class="col-12">
                        <div class="form-group col-md-6">
                            <label for="">Icone</label>
                            <select  name="icone" id="icon"class='material-icons'>
                            <option value="trending_up" selected>&#xe8e5;</option> 
                            <option value="access_time">&#xe192;</option> 
                            <option value="group">&#xe7ef;</option>
                            <option value="apps">&#xe5c3;</option>
                            <option value="adjust">&#xe39e;</option>
                            <option value="local_cafe">&#xe541;</option>
                            </select>
                        @error('icone')  
                        <div class="text-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                </div>
                            
                              
                       
                    <div class="col-12">
                      
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$service->titre}}" />
                            <div class="validation"></div>
                        </div>
                          @error('titre')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
                       </div>
                   <div class="col-12">
                      
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{$service->text}}" />
                        <div class="validation"></div>
                    </div>
                      @error('text')  
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
    <link rel="stylesheet" href="/css/material-icons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop