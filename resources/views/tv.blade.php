
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/estils.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TV</title>
  </head>
<body>

<a href="{{url('login')}}"> <button type="button" class="btn btn-info btn-md">  <i class="fa fa-sign-out" style="font-size:16px"> SIGN_OUT</i></button></a>
@if(count($errors) > 0)
            <div class="alert alert-danger" style="text-align: center;">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(\Session::has('success'))
            <div class="alert alert-success" style="text-align: center;">
            <p>{{ \Session::get('success') }}</p>
            </div>
            @endif
<div class="row" id="menu">

  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="canals">Crear canals</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="rear programes">Crear programes</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Crear graeilla</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Consulta programes</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <form class="form-inline" method="post" action="{{url('canals')}}">
      {{csrf_field()}}
  <div class="form-group mx-sm-3 mb-2">
    <label for="canal" class="sr-only">Nom Canal:</label>
    <input type="text" class="form-control" id="canal" name="NomCanal" placeholder="NomCanal">
    <input type="file" id="avatar" name="logo" accept="image/png, image/jpeg">
  </div>
  <button type="submit" class="btn btn-primary mb-2"> Guardar</button>
</form >
<br>
<br>
<a href="{{url('canals')}}" class="btn btn-primary">Canals guardats</a>
      
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    <form  method="post" action="{{url('programa')}}">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nom programa</label>
    <input type="text" class="form-control" id="programa" name="NomPrograma" aria-describedby=" nom programa">
  </div>
  <div class="form-group">
    <label for="Descripcio">Descripcio</label>
    <input type="text" class="form-control" id="Descripcio" name="Descripcio" aria-describedby="Descripcio">
  </div>
  <div class="form-group">
    <label for="Classificacio">Classificacio</label>
    <input type="text" class="form-control" id="Classificacio" name="Classificacio" aria-describedby="Classificacio">
  </div>
  <div class="form-group">
    <label for="Tipus">Tipus</label>
    <input type="text" class="form-control" id="Tipus" aria-describedby="Tipus" name="Tipus">
  </div>
  <button type="submit" class="btn btn-primary"> Guardar</button>
</form>
      
      
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <form action="{{url('graella')}}" method="POST">
      {{csrf_field()}}
        
        <label for="NomCanal">Nom Canal:</label>
      <select id="NomCanal" name="NomCanal">
         @foreach ($canals as $row) 
        <option value={{$row['NomCanal']}} class="form-control"> {{$row['NomCanal']}} </option>
        @endforeach
      </select><br> 
        <label for="NomPrograma">Nom Programa:</label>
      <select id="NomPrograma" name="NomPrograma">
         @foreach ($programas as $row) 
        <option value={{$row['NomPrograma']}} > {{$row['NomPrograma']}} </option>
        @endforeach
      </select><br>
        Dia:
        <input type="date" id="start" name="Dia"value="2020-19-3" required>
        <br>
        Hora:
        <input type="time" id="appt" name="Hora"
       required>
       <br>
    
      
        <input value="Envia dades" type="submit"><br><br> 
      </form>
      </div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <form action="{{url('programacio')}}" method="POST">
      {{csrf_field()}}
        <br>
             
        <label for="NomCanal">Nom Canal:</label>
		  <select id="NomCanal" name="NomCanal">
			   @foreach ($graella as $row) 
				<option value={{$row['NomCanal']}}> {{$row['NomCanal']}} </option>
				@endforeach
			</select><br>	
		   <label for="Dia">Dia:</label>
		  <select id="Dia" name="Dia">
				 @foreach ($graella as $row) 
				<option value={{$row['Dia']}}> {{$row['Dia']}} </option>
				@endforeach
		  </select><br>
			<br><br>
        <input value="Envia dades" type="submit"><br><br>
      </form>
      </div>
    </div>
  </div>
</div>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>