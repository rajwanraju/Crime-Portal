
<!DOCTYPE HTML>
<head>
<title>Free Share the Blog Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="front/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<!-- light-box -->
	<script type="text/javascript" src="front/js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="front/js/jquery.mousewheel-3.0.6.pack.js"></script>	
	<script type="text/javascript" src="front/js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="front/css/jquery.fancybox.css" media="screen" />
     <script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox();

		});
	</script>

</head>
<body>

@include('layouts.app')

<div class="wrap">
	<div class="main">
		<div class="content">
		@foreach($viewPosts as $viewPost)
			<div class="box1">
   				 <h3><a href="single.html">{{$viewPost->IncidentTitle}}</a></h3>
    				
			   <div class="view">
					<a href="single.html"><img src="{{asset ($viewPost->Image)}}"></a>
				</div>
				<div class="data">
				    <p>{{$viewPost->Description}}</p>
				    <span><a href="{{url('/viewPost/details/'.$viewPost->id)}}">Continue reading >>></a></span>
				</div>
			<div class="clear"></div>
		</div>
			@endforeach
				
</div>

		{{$viewPosts->links()}}	
		
			
		</div>
	<div class="clear"></div>
</div>
</div>


		 <div class="copy_right">
				<p>Compant Name © All Rights Reseverd </p>
		   </div>	 
  </div>
</body>
</html>

