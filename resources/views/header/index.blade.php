{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2>Présentation</h2>
   
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Texte</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($header as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->text}}</td>
                    <td><img class='w-25' src="{{asset('storage/'.$item->photo)}}" alt=""></td>
                    <td>
                  
                    <a class="btn btn-white" href="{{route('header.edit', $item)}}"><i class="far fa-edit text-warning"></i></a>

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