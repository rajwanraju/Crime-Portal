@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

	
{!!Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}
	<div class="form-group">
<label for="" class="col-sm-2 control-label">Category Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="categoryName">
 @if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CategoryName') }}</strong>
                                    </span>
                                @endif
</div>
</div>


<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="categoryDescription">
 @if ($errors->has('categoryDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryDescription') }}</strong>
                                    </span>
                                @endif
</div>
</div>

<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Submit</button>
</div>
</div>
{!!Form::close()!!}

	
</div>
</div>
</div>

@endsection