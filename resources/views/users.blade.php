@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Usuaris Registrats</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('Register.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($users as $row)
   <tr>
    <td>{{$row['user']}}</td>
    <td>{{$row['password']}}</td>
    <td>{{$row['user']}}</td>
    <td>{{$row['password']}}</td>
    <td></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection
