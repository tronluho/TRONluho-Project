<?php
//set timezone for east coast
date_default_timezone_set('America/New_York');

//require supporting functions
require_once("add_entry.php");
require_once("gen_entry.php");


//check to see if there are any other actions they want
//if not, show the general dashboard

if (isset($_GET['action'])) {
	switch($_GET['action']) {
    
	case "add_entry":
	if (!isset($_POST['address'])) {
		$_POST['address'] = NULL;
	}
    if (!isset($_POST['answer'])) {
		$_POST['answer'] = NULL;
	}
    if (!isset($_POST['hash'])) {
		$_POST['hash'] = NULL;
	}
        
    $entry = add_entry($_POST['address'],$_POST['answer'],$_POST['hash']);
	$entryset = true;
	break;
	default:
	$action = "home";
	break;
	}
} else {
}

?>

<!doctype html>
<html lang="en" class="no-js" style="background-color: #5a2aab;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://luho.moe/" />
    <title>TRONluho (LUHO) Token</title>
    <meta name="description" content="LUHO TRC-20 Token">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sticky-menu.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="css/favicon.png"/>
    
    <link href="css/inject/bootstrap.css" rel="stylesheet">
    <link href="css/inject/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <img href="https://luho.moe/tron/" align="left" style="width: 60px; margin-left:20px;" src="css/favicon.png">
        <div class="container">
            
            <div style="margin-left: 0px;" class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">LUHO</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#whatwedo">What I Do</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://tronscan.org/#/contract/TYcZETwK7MwLdnkueMxyFkikfpKepHckwL">Contract</a>
                    </li>
                </ul>
            </div>	<!-- .navbar-collapse -->
            
        </div>		<!-- .container -->
    </nav>
    <!-- Welcome   -->
    <section id="welcome" class="welcome-section">
        <div class="container">
            <div class="row" style="margin-top: -90px;">
                <div class="col-lg-12">
                    <h3>THIS WEEK'S PRIZE POOL</h3><p style="color: yellow;"><b>1,000 TRX</b></p><br><br>
		    <h1 style="margin-top: -20px;">📝 LUHO Quiz Question 📝</h1><br>
                    <h3 style="color: yellow; margin-top: -10px;">TBD</h3><br>
                    <p>You have until </p><p style="color:yellow;">April 27, 2019 12:00 AM EST</p><p> to submit your guess.</p>
                    <br>
                    <div class="col-lg-6">
                    <!-- /.panel -->
                     <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Enter Guess
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <form action="index.php?action=add_entry" method="POST" role="form">
								<div class="form-group">
                                    <label style="color: black;">TRX Address</label>
                                    <input class="form-control" name="address">
								</div>
								<div class="form-group">
									<label style="color: black;">Guess</label>
                                    <input class="form-control" name="answer">
								</div>
                               <div class="form-group">
									<label style="color: black;">100 LUHO tx Hash</label>
                                    <input class="form-control" name="hash">
								</div>
							<button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    <div class="col-lg-6">
                    <br>
                    <p>In order for your submission to count you must:<br><br>
                    <br>
                    1. Send 100 LUHO tokens to <br><b>TVrDrzkNNp7oAX1fu82xheTCxnuRxmTLyB</b><br> These tokens will be burned.<br><br>
                    2. Enter in your TRX address, your guess, and the tx hash from the sent LUHO tokens in form below.<br><br>
                    
                    You may view all entries at the bottom of this page. Full transparency.
                    </p><br><br>
                    <a class="btn btn-primary page-scroll" href="#guesses">See all Guesses</a>
                    <br><br>
                    
                    </div>
                    
           
                <!-- /.col-lg-12 -->
                
                
            </div>
                <br><br><p> </p><br>
                    <h3 style="color: yellow; margin-top: 30px;">Every week the prize pool will increase by 500 TRX and the question changed.</h3><br>
                <h4 style="color: yellow; margin-top: 30px;">If there is only one winner they will take the entire prize pool. If there are multiple winners the prize pool will be evenly distributed across all winners. </h4><br>
                </div>
            </div>

    </section>

    <!-- About -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About</h1>
                    <p>There will only be 100,000 LUHO tokens that will ever be in existence.</p>
                    <p>Half of this supply will be burned before the start of 2020.</p>
                    <p>Holders of LUHO will be able to earn TRX through yours truly.</p>
                    
                    <p>View contract functions and call them from <a href="https://tronsmartcontract.space/#/interact/TYcZETwK7MwLdnkueMxyFkikfpKepHckwL">here</a></p>.<br><br>
					<p>The contract address is <b>TYcZETwK7MwLdnkueMxyFkikfpKepHckwL</b></p>
                    <p>You may add to TronLink to see your LUHO tokens if you have any.<br><br>
                        You may also view them on TronWallet. <br>
                    <br>
                    We currently do not support TronScan.<br><br><br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What we do Section -->
    <section id="whatwedo" class="whatwedo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>What I Do</h1>
                    <p>I have been investing into cryptocurrencies since January 2018 and have started making videos about TRON since February of this year. My main mission is to educate people as much as possible on everything crypto related, in an effort to push the space closer to mass adoption.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="guesses" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:white;">GUESSES</h1>
                    <br>
                </div>
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <?php 
					   echo gen_entry(0,0); 
					?>
            </div>
            </div>
        </div>
        <div>
        <?php
				
                if ( (empty($entry[0])) || (empty($entry[1])) || (empty($entry[2])) ) {
                    $entrymessage = NULL;
                } else { $entrymessage = "not null"; }	
                if ($entrymessage != NULL) {
					echo "<div class=\"alert alert-success\"><b><center>Guess Added!</b></center></div>";
				} else if (isset($tcset)) {
					echo "<div class=\"alert alert-danger\"><b><center>No guess added. Please input valid tx.</center></b></div>";
				}

                require_once("entry.php");
            
            
            
			?>
        
        </div>
        
        
    </section>
    
    
	
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js-inject/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js-inject/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js-inject/jquery.easing.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sticky-menu.js"></script>
    <!-- Core Scripts - Include with every page -->
    <script src="js-inject/jquery-1.10.2.js"></script>
    <script src="js-inject/bootstrap.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js-inject/bootstrap.min.js"></script>
    <script src="js-inject/plugins/metisMenu/jquery.metisMenu.js"></script>
	<!-- Page-Level Plugin Scripts - Tables -->
    <script src="js-inject/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js-inject/plugins/dataTables/dataTables.bootstrap.js"></script>
	
    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js-inject/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js-inject/plugins/morris/morris.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="js-inject/sb-admin.js"></script>
    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-example').dataTable();
    });
    </script>
	
	<script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 10,
			"order": [[ 0, "desc" ]]
		} );
        $('#dataTables-latest').dataTable();
    });
    </script>
	
	    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-errors').dataTable();
    });
    </script>
	
	    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-data').dataTable();
    });
    </script>
	
	    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-php').dataTable();
    });
    </script>
	
	    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-lost').dataTable();
    });
    </script>
	
		    <script>
    $(document).ready(function() {
		$.extend( $.fn.dataTable.defaults, {
			"iDisplayLength": 12
		} );
        $('#dataTables-sync').dataTable();
    });
    </script>
	
    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js-inject/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js-inject/plugins/morris/morris.js"></script>

    <?php
	$db = mysqli_connect("localhost", "****", "****", "entries");
    $result = mysqli_query($db, "SELECT * FROM answers ORDER BY id ASC;");
    if ($result == false) {
        echo "WHY YOU FAIL BETCH FFS";
        die();
    }
        
	$errors = mysqli_fetch_all($result);
	$datas = "";
	foreach ($errors as &$val) {
		$val[0] = basename($val[0]);
		$datas .= "{ y: '$val[0]', a: $val[1]},";
	}
	?>
	
	<script>
	Morris.Bar({
		element: 'morris-file-bar',
		data: [
		<?php echo $datas; ?>
			],
		xkey: 'y',
		ykeys: ['a'],
        ymax: 15,
        allowDecimals: false,
		labels: ['Count']
	});
	</script>
    
</body>

</html>
