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
            <div class="card-header">Modifier l'icone actuel</div>

            
            <div class="card-body">
                <form action="{{route('icone.update' , $icone)}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-6">
                            <select  name="icone" id="icon">
                               
                            <option value="flaticon-facebook-letter-logo">&#x\f103;</option>
                            <option value="flaticon-twitter-logo">&#x\f102;</option> 
                            <option value="flaticon-dribbble-logo">&#x\f101;</option> 
                            <option value="flaticon-behance-logo">&#x\f100;</option>
                            
                              </select>
                           
                        </div>
                          @error('icone')  
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
    <link rel="stylesheet" href="/css/flaticon.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop