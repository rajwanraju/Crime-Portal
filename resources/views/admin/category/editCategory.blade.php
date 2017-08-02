@extends('admin.master')
@section('content')
</hr>
<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

  
{!!Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryForm'])!!}
  <div class="form-group">
<label for="" class="col-sm-2 control-label">Category Name</label>
<div class="col-sm-10">
<input type="text" value="{{$categoryById->categoryName}}" class="form-control" name="categoryName">
<input type="hidden" value="{{$categoryById->id}}" class="form-control" name="categoryId">

<span class="text-danger">{{$errors->has('categoryName')? $errors->first('CategoryName'):''}}</span>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" value="{{$categoryById->categoryDescription}}" class="form-control" name="categoryDescription">
 <span class="text-danger">{{$errors->has('categoryDescription')? $errors->first('categoryDescription'):''}}</span>
</div>
</div>
<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" name="publicationStatus">
    <option>Select Publication Status</option>
    <option value="1">Publish</option>
    <option value="0">UnPublish</option>
  </select>
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
{!!Form::close()!!}

  
</div>
</div>
</div>
<script>
  document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}}


</script>
@endsection