
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
			<div class="box1">
   				 <h3>{{$readById->IncidentTitle}}</h3>
    				 
			   <div class="blog-img">
					<img src="{{ asset($readById->Image) }}" data-imagezoom="true" >
				</div>
				<div class="blog-data">
				    <p>{{$readById->Description}}</p>
				</div>
				<table>
					<tr>
<td>location :</td>
<td>{{$readById->ExactLocation}},{{$readById->Location}}</td>
<td>&nbsp;&nbsp; </td>
<td> Date:</td>

<td>{{$readById->IncidentDate}}</td>
<td>&nbsp;&nbsp; </td>
<td> Time :</td>
<td>{{$readById->IncidentTime}}</td>

					</tr>
				</table>
			<div class="clear"></div>
		</div>			
	
	
						
						<div class="box comment">
	    <h2>Feedback</h2>
	    <ul class="list">
	        <li>
	            
	            <div class="data">
	                <div class="title">
	                	<h4>Admin</h4>
	                </div>
	                <p>{{$readById->Feedback}}</p>
	            </div>
	            <div class="clear"></div>
	        </li>
	       
	</div>
	<div class="clear"> </div>
			
 </div>

</div>


		<div class="footer_grid3">
			<h3>Follow</h3>
                <div class="social_icons">
                	<div class="img_list">
					    <ul>
					     <li><img src="images/facebook.png" alt="" /><a href="#">Facebook</a></li>
					     <li><img src="images/google+.png" alt="" /><a href="#">Google Plus</a></li>
					     <li><img src="images/twitter.png" alt="" /><a href="#">Twitter</a></li>
					     <li><img src="images/linkedin.png" alt="" /><a href="#">Likedin</a></li>
					    </ul>
					</div>
                </div>
		 </div>
	 <div class="clear"></div>
  </div>
</div>
		 <div class="copy_right">
				<p>Compant Name © All Rights Reseverd</p>
		   </div>	 
  </div>
</body>
</html>

