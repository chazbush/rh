<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

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

            <div class="col-lg-2  col-sm-0 text-center">
                <label><h3>Or</h3></label>
            </div>

            <div class="col-lg-4 col-sm-6 text-center">
                <label class="sr-only">Create Sample/EPO Item</label>
                <a class="btn btn-block btn-default" href="#">Create Add Hoc Item</a>
            </div>
       
        </div>
        <!-- /options -->
        
        <!-- items table -->
        <div class="table" id="itemsTable">
		    <?php include 'lookup.php'; ?>
        </div>
		<!-- /items table -->
		
        <!-- item modal -->
        <div class="modal fade" id="poModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center">PO Item Lookup</h3>
                    </div>
                    
                    <div class="modal-body" id="modal-body">
                        
                        <form method="post" action="lookup.php">

                            <div class="row">
                                    <div class="col-lg-4 col-lg-offset-1 text-right">
                                        <label class="lblModal">PO Number:</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" id="poNum">
                                    </div>
                            </div>
                            
                            <div class="row">
                                    <div class="col-lg-4 col-lg-offset-1 text-right">
                                        <label class="lblModal">PO Line #:</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" id="poLineNum">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-lg-4 col-lg-offset-1 text-right">
                                        <label class="lblModal">Dept Number:</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" id="poDeptNum">
                                    </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Lookup">
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
          
            
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
