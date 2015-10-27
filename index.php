<?php
	require_once('support.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Server Monitor v0.5</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-GHW2S7IZAQe8+YkyL99LyDj1zdWXSPOG+JZafCtKiSc= sha512-vxM32w6T7zJ83xOQ6FT4CEFnlasqmkcB0+ojgbI0N6ZtSxYvHmT7sX2icN07TqEqr5wdKwoLkmB8sAsGAjCJHg==" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-dark bg-inverse">
          <a class="navbar-brand" href="#">Server Status</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          </ul>
    </nav>

    <div class="container">

      <div class="starter-template">
    		<button type="button" class="btn btn-default" onclick="location.reload();">
          		<span class="fa fa-refresh"></span>
          	</button>
      </div>

      <table class="table table-hover">
      		<thead>
        		<tr>
          			<th>#</th>
          			<th>Name</th>
          			<th>Type</th>
          			<th>Status</th>
          			<th>Uptime</th>
        		</tr>
      		</thead>
      		<tbody>
        		<tr>
          			<td>1</td>
          			<td>Google</td>
          			<td>Search engine</td>
          			<td>
          				<?php
          					statusCheck('google.com', 80);
									?>
          			</td>
          			<td>
          				<?php
          					//uptimeCheck('http://example.com/uptime.php');
										echo "N/A";
									?>
					</td>
       			 </tr>
        		<tr>
          			<td>2</td>
          			<td>CNN</td>
          			<td>News</td>
         			<td>
         				<?php
         					statusCheck('cnn.com', 80);
								?>
         			</td>
         			<td>
         				<?php
         					//uptimeCheck('http://example.com/uptime.php');
									echo "N/A";
								?>
         			</td>
        		</tr>
        		<tr>
          			<td>3</td>
          			<td>Offline example</td>
          			<td>Demo</td>
          			<td>
          				<?php
          					statusCheck('probablynotasite.com', 80);
									?>
          			</td>
          			<td>
									<?php
										//uptimeCheck('http://example.com/uptime.php');
										echo "N/A";
									?>
								</td>
        		</tr>
      		</tbody>
    	</table>

    	<p class="text-center"><small><b>Last Updated: </b><span id="timeNow"></small></p>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js" integrity="sha256-+h0g0j7qusP72OZaLPCSZ5wjZLnoUUicoxbvrl14WxM= sha512-0z9zJIjxQaDVzlysxlaqkZ8L9jh8jZ2d54F3Dn36Y0a8C6eI/RFOME/tLCFJ42hfOxdclfa29lPSNCmX5ekxnw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript">
		var now = moment().format("dddd, MMMM D, YYYY - h:mm:ss A");
		document.querySelector('#timeNow').innerHTML = now;
		window.setTimeout(function(){
			document.location.reload(true);
		}, 30000);
    </script>
  </body>
</html>
