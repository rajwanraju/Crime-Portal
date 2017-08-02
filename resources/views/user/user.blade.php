<html>
    <head>
     <title>User Acrivities</title>
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
              <li class="active"><a href="{{URL::to('/home')}}"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>         
           </ul>
      </nav>
      
      <div class="container">
        
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

              <h1>User Activities</h1>

                           <ul>
                                 <li >
                                      <center>
                                        <a href="{{URL::to('/addcrime')}}">Report Crime</a> 
                                         <hr/>
                                         <a href="{{URL::to('/viewPage')}}">View News</a> 
                                         <hr/>
                                         <a href="#">View feedback</a>
                                       </center>
                                 </li>
                          </ul>
             </div>
      </section>  

    </body>

 </html>


