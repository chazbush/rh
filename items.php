<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <script>
        function lookup() {
            var xmlHttpRequest;
            if (window.XMLHttpRequest) {
                xmlHttpRequest = new XMLHttpRequest();
            }
            else {
                xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }
            this.onreadystatechange=function(){
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById("itemsTable").innerHTML = this.responseText;
                }
            }            
            xmlHttpRequest.open("POST", "lookup.php", true)
            xmlHttpRequest.send();
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */ 
    }  
    </style> 
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img alt="RH" src="./pics/rh_nav_logo.png" id="nav-logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /nav -->

    <!-- lookup modal -->
        <div class="modal fade" id="poModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center">PO Item Lookup</h3>
                    </div>
                    
					<form class="form-horizontal" action="lookup.php" id="poLookupForm" method="POST">
					
						<div class="modal-body" id="modal-body">
							
								<div class="form-group">
									<div class="col-lg-4 col-lg-offset-1 text-right">
										<label class="control-label">PO Number:</label>
									</div>
									<div class="col-lg-6">
										<input type="text" name="poNum">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-lg-4 col-lg-offset-1 text-right">
										<label class="control-label">PO Line #:</label>
									</div>
									<div class="col-lg-6">
										<input type="text" name="poLineNum" />
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-4 col-lg-offset-1 text-right">
										<label class="control-label">Dept Number:</label>
									</div>
									<div class="col-lg-6">
										<input type="text" name="poDeptNum">
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-default">Clear Form</button>
							<input type="button" onclick="lookup()" class="btn btn-primary" value="Lookup" data-dismiss="modal">
						</div>
					</form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center" id="header-index">
                <h1>Add Items</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- options -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-1 col-sm-6 text-center">
                <label class="sr-only">Create by Purchase Order Number:</label>
                <a class="btn btn-block btn-default" data-toggle="modal" data-target="#poModal">Search by PO Number</a>
            </div>

            <div class="col-lg-2 col-sm-1 text-center">
                <label class="text-vcenter"><h3>Or</h3></label>
            </div>

            <div class="col-lg-4 col-sm-6 text-center">
                <label class="sr-only">Create Sample/EPO Item</label>
                <a class="btn btn-block btn-default" href="#">Create Add Hoc Item</a>
            </div>
        </div>
        <!-- /options -->
        
        <!-- items table -->
        <div class="table" id="itemsTable">
            
        </div>
		<!-- /items table -->
		
          
            
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
