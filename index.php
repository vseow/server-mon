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
    <link rel="shortcut icon" href="favicon.ico">

    <title>Server Monitor v0.3</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Server Status</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
    		<button type="button" class="btn btn-default" onclick="location.reload();">
          		<span class="glyphicon glyphicon-refresh"></span>
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
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script type="text/javascript">
		var now = moment().format("dddd, MMMM D, YYYY - h:mm:ss A");
		document.querySelector('#timeNow').innerHTML = now;
		window.setTimeout(function(){
			document.location.reload(true);
		}, 30000);
    </script>
  </body>
</html>
