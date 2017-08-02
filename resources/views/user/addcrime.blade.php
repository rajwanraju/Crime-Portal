<html lang="en">
    <head>
      <title>addcrimes</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
   <section class="container">
        <div class="login">
          <h1>Add Crime</h1>
              {!!Form::open(['url'=>'storeCrime','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <input type="hidden" value="" class="form-control" name="userId">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <label for="Incident Type">Incident Title:</label>

                    <input type="text"  name="IncidentTitle" placeholder="Incident Type">

  <label for="IncidentType">Incident Category:</label>
                   <select class="form-control" name="categoryid">
    <option>Select Category Name</option>
     @foreach($categories as $category) 
    <option value="{{$category->id}}">{{$category->categoryName}}</option>
  
   @endforeach
  </select>



                  
                    <label for="Description">Description:</label>
                     <textarea cols="37" rows="2" name="Description"  >

                      </textarea>
                      <br/>
                  
                    <label for="Location">Location:</label>

                     <input type="text" class="form-control" name="Location" placeholder="Location">
                    
                    <label for="ExactLocation">Exact  Location:</label>

                    <input type="text"  name="ExactLocation" placeholder="Exact Location">


                    <label for="IncidentDate">Incident  Date:</label>

                       <input type="date" class="form-control" name="IncidentDate" placeholder="Feedback  Date">
                      


                        <label for="Incident Time">Incident  Time:</label>

                       <input type="time" class="form-control" name="IncidentTime" placeholder="Feedback  Time">
                        <label for="Incident Time">Image</label>

                       <input type="file" name="postImage" accept="image/*">
                       <br/>
                   <center><button type="submit" class="btn btn-primary">Submit</button></center>
          {!!Form::close()!!}
        </div>
  </section>

  </body>

</html>


