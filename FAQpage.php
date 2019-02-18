<?php require_once 'build/php/common.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo EGS_TITLE; ?> | FAQ </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134672026-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-134672026-1');
    </script>

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
    


  </head>

  <body class="nav-md">
  <?php include 'unofficial.php'; ?>
    <div class="container body">
      <div class="main_container">
        <?php include 'sidebar.php'; ?>



        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
         </div>

        

        <!-- /top navigation -->
  <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="blog_title">
                    <h2>FAQ</h2>

                    <div class="clearfix"></div>
                  </div>
                 <div class="blog_content">

                  <p><b>Why should I pay a gas price?</b></p>
                  <p>The price of gas that a user offers should generally reflect how fast they want a transaction mined. Most users also want to avoid offering a price this is so low that it will never be mined (or require them to resend the transaction at a higher price).  While offering a high gas price can speed up confirmation some, there is a limit to the acceleration.  Offering a higher gas price than what is needed for acceptance by all top miners is unlikely to speed up the transaction time further under nomral circumstances.</p>
                  <p><br></p>
                  <p><b> What determines the price miners charge for gas?</b><p>
                  <p>Miners in theory should specify a gas price that reflects their cost of inclusion of the transaction in the block (which currently is related to their uncle rate). Miners can increase their efficiency (through uncle inclusion mechanisms) so that they can bring down these costs, but there may be little incentive to do so unless users offer a meaningful number of transactions at low gas prices. Furthermore, while miners may believe that accepting only those transactions with high gas prices will help their profitability, adverse effects on network usability may ultimately lead to lower profits if it translates into a lower value of their block reward.</p>
                  <p><br></p>
                  <p><b> How do you know the miner policies?</b><p>
                  <p> We don't know them for sure.  What is reported here is what the miners have done over the prior two days in terms of the transactions they have mined.  They could change their policies at any time and we wouldn't know right away. Fortunately, the top miner policies seem fairly stable and do not seem to be changed very frequently.  
                  <p><br></p>


                 
                 
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>


             
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="build/js/custom3.js"></script>
	
  </body>
</html>
