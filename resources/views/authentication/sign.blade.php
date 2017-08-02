
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <link rel="stylesheet" href="{{asset('css/style7.css')}}">



  <body>

    <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav navbar-left">
              <li class="active"><a href="{{URL::to('/home')}}"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>         
           </ul>
    
      </nav>

        <section class="container">
            <div class="login">
              <h1>User Registration</h1>
                 {!!Form::open(['url'=>'signup','method'=>'POST','class'=>'form-horizontal'])!!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="name">Name:</label>
                            <input type="text"  name="name" placeholder="Enter name" name="email">
                            @if($errors->has('name'))
                               <p>{{$errors->first('name')}} </p>
                            @endif
                  
                            <label for="email">Email:</label>
                            <input type="email"   name="email" placeholder="Enter email" name="email">
                            @if($errors->has('email'))
                               <p>{{$errors->first('email')}} </p>
                            @endif
                          
                            <label for="password">Password:</label>
                             <input type="password" class="form-control" name="password" placeholder="Enter password" name="pwd">
                            @if($errors->has('password'))
                               <p>{{$errors->first('password')}} </p>
                            @endif
                    
                            <label for="cpassword">Confirm Password:</label>
                            <input type="password"  name="cpassword" placeholder="Enter confirm password" name="email">
                            @if($errors->has('cpassword'))
                               <p>{{$errors->first('cpassword')}} </p>
                            @endif
                       
                          <center><button type="submit" class="btn btn-primary">Registration</button></center>
              {!!Form::close()!!}
            </div>
    </section>

    </body>
</html>


