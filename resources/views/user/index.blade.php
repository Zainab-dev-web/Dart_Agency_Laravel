{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Membre</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">User_id</th>
            <th scope="col">Role_id</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img class='w-25'src="{{asset('storage/'.$item->photo)}}" alt=""></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->role->role}}</td>
                    
                    <td>
                      

                      <a href='{{route('user.edit', $item)}}'class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                      
                      @can('admin_delete',App\User::class)
                      <form action="{{route('user.destroy',$item)}}" method="post">
                        @csrf
                        @method('DELETE')
                        @if($item->role_id !=1)
                        <button class='btn btn-white'><i class="fas fa-trash text-danger"></i></button>
                        @endif
                    </form>
                    @endcan

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