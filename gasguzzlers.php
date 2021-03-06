<?php require_once 'build/php/common.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo EGS_TITLE; ?> | Consumer oriented metrics for the Ethereum gas market </title>

    <meta name="keywords" content="Ethereum ETH gas blockchain market price transactions miners users">
    <meta name="description" content="<?php echo EGS_DESCRIPTION; ?>">
    
    <meta property="og:title" content="<?php echo EGS_TITLE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://ethgasstation.info/images/ETHGasStation.png" />
    <meta property="og:description" content="ETH gas price recommendations." />
    <meta property="og:url" content="https://ethgasstation.info/" />


    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
    <link href="build/css/custom.css?d=3" rel="stylesheet">
    <?php include 'build/php/minerT_py.php'; ?>

   


  </head>

  <body class="nav-md">
  <?php include 'unofficial.php'; ?>
    <div class="container body gas_burner_body">
      <div class="main_container">

        <?php include 'sidebar.php'; ?>   
        <?php include '_simple_header.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 gas_burners">
                <div class="x_panel tile fixed_height_420">
                  <div class="x_title">
                    <h4>Top 10 ETH Contracts By Transaction Count Over Last 1,500 Blocks</h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Address</th>
                          <th>ID</th>
                          <th>Pct Total Tx Count</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($gasGuzzTable as $row){
                        echo('<tr>');
                        //echo("<td>".$row['toAddress']."</td>");
                        echo("<td>"."<a href=\"https://etherscan.io/address/{$row['to_address']}\" target=\"_blank\">{$row['to_address']}</a>"."</td>");
                        echo("<td>". $row['ID']). "</td>";
                        echo("<td>". number_format($row['pcttot'], 2). "</td>");
                        echo('</tr>');

                      }
                      ?>
                      </tbody>
                    </table>

                 </div>

        
        </div>
    </div>
                    

    <!-- /misc transactions -->

  </div>
</div>
             
<!-- /page content -->

        <?php include '_footer.php'; ?>

      </div>
    </div>

 <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    

<!-- Custom Theme Scripts -->




    <script src="build/js/custom3.js"></script>
    
	
  </body>
</html>
