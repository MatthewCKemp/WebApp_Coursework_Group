<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Adventure Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
	
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script>

	$db_database = 'WebApp_Coursework';
	$db_hostname = 'eu-cdbr-azure-west-c.cloudapp.net';
	$db_username = 'befd2db9fe76ad';
	$db_password = '5a698004';
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);
		if(!$db_server) die("Unable to connect to MYSQL: ". mysql_error());
			mysql_select_db($db_database)
	    	or die("Unable to connect to database: " . mysql_error());
	    
   </script>			
  </head>

  <body>

   
      <div class="container">
         <li class="active"><a href = "http://webappcw.azurewebsites.net/HomePage.html"> Home Page </a></li>
          <li><a href = "http://webappcw.azurewebsites.net/AuthorPage.php"> Author Page </a></li>
          <li><a href = "http://webappcw.azurewebsites.net/QueryTest.php"> Hyperlink - QT - </a></li>
      </div>
      <div>
      	$query = "SELECT * FROM adventure";
		// execute the SQL query
		$result = mysql_query($query);
			if(!$result) die ("Could not query: " . mysql_error());
			$rows = mysql_num_rows($result);
			for($j = 0; $j < $rows; ++$j)
		{
		 	echo <div>
		 	echo 'adventID: ' . mysql_result($result, $j, 'adventID') . '</br>';
			echo </div>   
		}
    
	</div>
    <div class="container">

      <div class="starter-template">
        <h1>Adventure Page</h1>
      </div>
    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>