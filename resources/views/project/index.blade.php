{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Section Projet</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($project as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->photo)}}" alt=""></td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->text}}</td>
                    
                    <td>
                       
                            <a href='{{route('project.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                          
                      
                    
                    <form action="{{route('project.destroy',$item)}}" method="post">
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