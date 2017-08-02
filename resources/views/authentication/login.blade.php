<html>
    <head>
     <title>Login Form</title>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="{{asset('css/style7.css')}}">

    </head>


    <body>
          <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav navbar-left">
              <li class="active"><a href="{{URL::to('/')}}"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>         
           </ul>
    
      </nav>
          
          @if(Session::has('success'))
          <div class="row">
             <div class="col-md-12">
                 <div class="alert alert-success">
                      {{Session::get('success')}}
                  </div>
             </div>
          </div>
          @endif

        <section class="container">

            <div class="login">
              <h1>User Login</h1>
                    {!!Form::open(['url'=>'login','method'=>'POST','class'=>'form-horizontal'])!!}
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                 <label for="email">Email:</label>
                                 <input type="text" name="email" placeholder="Enter Email">
                                  @if($errors->has('email'))
                                  <p> {{$errors->first('email')}}</p>
                                  @endif
                           
                              
                                 <label for="password">Password:</label>
                                 <input type="password" name="password" placeholder="Enter password">
                                   @if($errors->has('password'))
                                  <p> {{$errors->first('password')}}</p>
                                  @endif
                             <center> <button type="submit" class="btn btn-primary">Login</button> </center>
                  {!!Form::close()!!}
           </div>
        </section>  

     </body>

    </html>


