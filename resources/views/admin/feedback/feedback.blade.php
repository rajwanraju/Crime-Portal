
@extends('admin.master')
@section('content')
  {!!Form::open(['url'=>'/storeFeedback','method'=>'POST'])!!}
                      <input type="hidden" name="_token" value="{{csrf_token() }}">
         
          <input type="hidden" class="form-control" name="crimeId" value="{{$postById->id}}">
                    
                      <label for="Feedback About">Feedback About:</label>
                      <br/>
                      <textarea cols="36" rows="2" class="form-control" name="Feedback">

                      </textarea>
                      <br/>
                      <label for="Feedback  Date">Feedback Date:</label>
                       <input type="date" class="form-control" name="FeedbackDate" placeholder="Feedback  Date">
                      


                        <label for="Feedback  Time">Feedback Time:</label>
                       <input type="time" class="form-control" name="FeedbackTime" placeholder="Feedback  Time">
                       <br/>
                       <center><button type="submit" class="btn btn-primary">Submit</button></center>
               {!!Form::close()!!}

                 @endsection



