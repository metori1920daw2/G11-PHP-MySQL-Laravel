<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <div class="links">
		<a href="{{url('tv')}}"><i class='fas fa-arrow-alt-circle-left' style='font-size:50px'></i></a>
	</div>
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
     <br>
     <br>
 
	<table class="table table-bordered table-striped">
			<tr>
			  <th>Nom Programa</th>
			  <th>Dia</th>
			  <th>Hora</th>
			</tr>
    
      <?php		
			foreach ($consultes[0] as $key => $value) {
				if($key == "NomPrograma"){
					echo "<tr>";
					echo "<th>".$value."</th>";
				}
				if( $key == "Dia"){
						echo "<th>".$value."</th>";
				}
				if( $key == "Hora"){
						echo "<th>".$value."</th>";
						echo "</tr>";
				}
      }  
			?>
      </table>
    </font>
  </body>
</html>
