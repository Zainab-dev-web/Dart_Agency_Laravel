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
            <div class="card-header">Modifier un membre</div>

            
            <div class="card-body">
                <form action="{{route('team.update' , $team)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                   <div class="col-12">
                      
                    <div class="form-group col-md-6">
                        <label for="">Nom</label>
                        <select class="fas" name="icon" id="icon">
                            @foreach ($users as $item)
                            @if($item->role_id==2)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                            @endforeach
                        
                          </select>
                        
                    </div>
                      @error('user_id')  
                      <div class="text-danger">{{ $message }}</div>  
                      @enderror
                   </div>
                   <div class="col-12">
                      
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{$team->role->role}}" />
                        <div class="validation"></div>
                    </div>
                      @error('role_id')  
                      <div class="text-danger">{{ $message }}</div>  
                      @enderror
                   </div>
                   <div class="col-12">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{$team->photo}}" />
                        <div class="validation"></div>
                    </div>
                      @error('photo')  
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