@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Editar canals</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('CanalController@update',$id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text"  class="form-control" name="NomCanal" value="{{ $canals->NomCanal }}" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
   <input type="file" id="logo" name="logo" value="{{$canals->logo}}"  accept="image/png, image/jpeg">
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editar" />
   </div>
  </form>
 </div>
</div>

@endsection