{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Section Service</h2>

<div class='text-center'>
<a href='{{route('service.create')}}' type="submit" class="btn btn-success my-2 px-3 ">Ajouter</a>
 </div>
   
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($service as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td><div class='thumbnail'><i class='material-icons'>{{$item->icone}}</i></div></td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->text}}</td>
                    <td>
                      <form action="{{route('service.edit', $item)}}" method="post">
                        @csrf
                        <button class='btn btn-white'><i class="far fa-edit text-warning"></i></button>
                      </form>
                    <form action="{{route('service.destroy',$item)}}" method="post">
                      @csrf
                      @method('DELETE')
                    <button class='btn btn-white'><i class="fas fa-trash text-danger"></i></button>
                  </form>

                    </td>
                 
                   
                </tr>
     
     
          
          @endforeach
          
        </tbody>
      </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop