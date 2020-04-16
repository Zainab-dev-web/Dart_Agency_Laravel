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
                <form action="{{route('service.update' , $service)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-6">
                            <input type="file" class="form-control @error('icone') is-invalid @enderror" name="icone" value="{{$service->icone}}" />
                            <div class="validation"></div>
                        </div>
                          @error('icone')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop