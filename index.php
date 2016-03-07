<?php

include 'servers.php';

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serverstatus</title>



    <!-- Bootstrap -->

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

  </head>

  <body>

    <div class="container jumbotron">

    <h1><center><b>Server status</b></center></h1>

    	<table width="100%">

    	<?php

        foreach ($servers as $s => $k) {
            ?>

    		<tr><td><h2><center><?php echo $k[0];
            ?></center></h2></td><td><h2><center><span class="stat" id="<?php echo $s;
            ?>"><span class="label label-default">Loading</span></span></center></h2></td></tr>

    	<?php

        } ?>

    	</table>

    </div>

    <footer><center>Created by <a href="http://cas.yt">Cas.</a></center></footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">

    function doCheck() {

    $('.stat').each(function() {

    	var id = $(this).attr('id');

    	$('#'+id).html('<span class="label label-warning">Ping!</span>');

    		$.get("ping.php?id="+id, function( data ) {

			  $('#'+id).html( data );

			});

    	});

    }

    doCheck();

    setTimeout(function() {

    	doCheck();

    }, 10000);

    </script>

  </body>

</html>
