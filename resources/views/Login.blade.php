
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/estils.css')}}">
    <title>LOGIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<!-- class="btn btn-primary btn-lg btn-block"  -->
<a href="{{url('Register/create')}}"> <button type="button" class="btn btn-info btn-md">  Register</button></a>
    <div id="login">
            @if(\Session::has('Error'))
            <div class="alert alert-danger" style="text-align: center;">
            <p>{{ \Session::get('Error') }}</p>
            </div>
            @endif

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        <form  id="login-form" class="form" method="post" action="{{url('validar')}}">
                        {{csrf_field()}}
                      
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nom d'usuari:</label><br>
                                <input type="text" name="user"   id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <input id="btn" type="submit" name="submit" class="btn btn-info btn-md" value="LOGIN">

                            
                        </form>
                        <div> 

                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>