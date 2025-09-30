@extends('admin.layouts.main')

<!-- Debe llamarse igual que el YIELD-->

@section('contenido')
<div class="d-flex justify-content-between">
    <h1>Usuarios</h1>
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>
    </div>
 </div>
 @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
 @endif

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>

@endif


    <div class="p-4">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nickname</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->img}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>********</td>
            <td>
              <button data-id="{{$item->id}}" data-toggle="modal" data-target="#modalDelete"
                class="btn btn-danger btnEliminar">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/dashboard/users" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="usrname">Username</label>
                <input value="{{ old('username') }}" name="username" type="text" class="form-control"
                  id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="email">Email address</label>
                <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="password2">Confirm Password</label>
                <input name="password2" type="password" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
    
    
            </div>
            <div class="modal-footer">
    
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
    
            </div>
          </form>
    
    
    
    
    
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/dashboard/users" method="POST">
            @csrf
            <div class="modal-body">
                <h2>Deseas eliminar el registro</h2>
            </div>
         
            <div class="modal-footer">
    
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
    
            </div>
          </form>
    
    
    
    
    
        </div>
      </div>
    </div>
      
@endsection

@section('scripts')
<script>
$(document).ready(function(){  $(".btnEliminar").on('click', function(event){
  var id= $(this).data('id')
  alert(id)
})


});

</script>
@endsection