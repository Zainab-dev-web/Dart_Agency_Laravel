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
                    <td><img src="{{$item->photo}}" alt=""></td>
                    <td>
                    <a href="{{route('header.show',$item)}}" class='btn btn-info text-white'>Show</a>
                    <a class="btn btn-info" href="{{route('header.edit', $item)}}">edit</a>

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