{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Section Service</h2>


   
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Action</th>
            
            
           
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
                      <a href='{{route('service.create')}}'class='btn btn-white'><i class="fas fa-folder-plus text-success"></i></a>
                     
                        <a href='{{route('service.edit', $item)}}'class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                     
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