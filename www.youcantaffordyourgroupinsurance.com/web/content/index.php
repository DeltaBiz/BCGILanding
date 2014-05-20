
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Save 20% on your Health Benefits... Guaranteed.</title>

    <!-- Bootstrap core CSS from CDN e -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="css/base.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      	<h2>Save 20% on your Health Benefits... Guaranteed.</h2>
 		<h3>Eliminate Excessive Fees – overprices drugs <br />and unnecessary insurance... forever!!!</h3>
		</div>
    </div>

    <div class="container text-center alert alert-info ">
      
        <div class="row">
        	<h4><a data-toggle="modal" href="#capture" class="btn btn-danger" href="#" role="button">If we don’t find an immediate reduction of 20% to your health rates,<br /> <strong>we will work for free</strong> <br />Click here for a free 2 hour consultantion</a></h4>
      	</div>
      	<div class="row">
          <iframe src="//player.vimeo.com/video/94408758?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" width="980" height="735" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="row">
        	<h4><a data-toggle="modal" href="#capture" class="btn btn-danger" href="#" role="button">If we don’t find an immediate reduction of 20% to your health rates,<br /> <strong>we will work for free</strong> <br />Click here for a free 2 hour consultantion</a></h4>
      	</div>
      </div>
		<div id="logo">
      		<h1>BCGI Benefits</h1>
      		<h6>Brian Cole - 604-617-7222</h6>
      	</div>
	</div>
      <hr>

      <footer>
      
        
        <p>&copy; BCGI Benefits 2014</p>
      </footer>
    </div> <!-- /container -->

<!-- Modal -->
  <div class="modal fade" id="capture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Get your Free 2 hour consultation.</h4>
        </div>
        
          <form class="capture">
          	<input type="hidden" name="LandingPage" value="Save 20 percent" />
			<fieldset>
		         <div class="modal-body" id="thanks">
		        	 <p>Fill out the form below and one of our representatives will reach out.</p>
		        	 <div class="form-group">
		        	 	<label for="name">Name</label>
				     	<input class="input-xlarge" value="" type="text" name="Name">
				     </div>
				     <div class="form-group">
		        	 	<label for="phone">Phone# or Email</label>
						<input class="input-xlarge" value="" placeholder="Your Choice" type="text" name="EmailPhone">
		        	</div>
		        </div>
			</fieldset>
		</form>	
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  
 </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
 $(function() {
//twitter bootstrap script
	$("button#submit").click(function(){
		   	$.ajax({
    		   	type: "POST",
			url: "ajaxProcess.php",
			data: $('form.capture').serialize(),
        		success: function(msg){
 	          		  $("#thanks").html(msg);	
 		        },
			error: function(){
				alert("failure");
				}
      			});
	});
});
</script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50796803-1', 'youcantaffordyourgroupinsurance.com');
  ga('send', 'pageview');

</script>
  </body>
</html>
