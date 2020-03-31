@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Canals disponible</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{url('tv')}}" class="btn btn-primary">Afegir canals</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Nom Canal</th>
    <th>Logotip</th>
    <th>Editar</th>

   </tr>
   @foreach($canals as $row)
   <tr>
   <td>{{$row['NomCanal']}}</td>
    <td><img src="{{ asset('storage/fotos').'/'.$row->logo }}"  alt="Image" width="50px" height="50px" ></td>
    <td> <a href="{{action('CanalController@edit', $row['id'])}}" class="btn btn-success">Editar</a></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection
