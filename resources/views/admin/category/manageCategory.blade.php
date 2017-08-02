@extends('admin.master')
@section('content')
</hr>

<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTable
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                      
                                       <th>Actions</th>
                                       
                                    </tr>
                                   
                                    @foreach($categories as $category)
                        
                                    <tr>
                                    <ul>
                                    	<td>{{$category->categoryName}}</td>
                                    	<td>{{$category->categoryDescription}}</td>
                                    	
 <td><a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">

<span class="glyphicon glyphicon-edit"></span></a>
<a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure to delete this');">

<span class="glyphicon glyphicon-trash"></span></a>
 </td>
                                    	 </tr>
                                    	@endforeach
                                        
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

@endsection