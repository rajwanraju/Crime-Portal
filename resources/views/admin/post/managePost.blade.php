@extends('admin.master')
@section('content')

<hr/>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Id</th>
            <th>Incident Title</th>
            <th>Location</th>
             <th>Exact Location</th>
            <th>Incident Date</th>
            <th>Incident Time</th>
             <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->IncidentTitle }}</td>
            <td>{{ $post->Location }}</td>
            <td>{{ $post->ExactLocation }}</td>
            <td>{{ $post->IncidentDate }}</td>
            <td>{{ $post->IncidentTime }}</td>
            <td>
                <a href="{{url('/addfeedback/'.$post->id)}}" class="btn btn-success">
                    Add FeedBack
                </a>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr/>
<div>
     {{ $posts->links() }}
</div>
@endsection
