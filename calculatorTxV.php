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
    <div class="container body calculator">
    <div class="main_container calculator">
      <!-- Sidebar -->

        <?php include 'sidebar.php'; ?> 
        <?php include '_header.php'; ?>

        <!-- page content -->
        <div class="right_col calculator" role="main">

        
          <div class="row tx_calculator">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h4>Transaction Inputs</h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gas Used<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="21000" id="gas_used">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Gas Price<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="checkbox">
                            <label>
                            <input type="checkbox" class="flat" id="fastest"> Fastest
                            <?php echo ("(".($gpRecs2['fastest']/10)." Gwei)") ?></label>
                          </div>
                          <div class="checkbox">
                            <label>
                            <input type="checkbox" class="flat" id="fast"> Fast
                            <?php echo ("(".($gpRecs2['fast']/10)." Gwei)") ?></label>
                          </div>
                          <div class="checkbox">
                            <label>
                            <input type="checkbox" class="flat" checked="checked" id="avg"> Average
                            <?php echo ("(".($gpRecs2['average']/10)." Gwei)") ?></label>
                          </div>
                          <div class="checkbox">
                              <label>
                              <input type="checkbox" class="flat" id="cheap"> Cheap
                              <?php if ($gpRecs2['safeLow'] ==0){$gpRecs2['safeLow']=1;} echo ("(".($gpRecs2['safeLow']/10)." Gwei)") ?></label>
                          </div>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" class="flat" id="other"> Other
                              </label>
                          </div>
                          <div>
                            <input type="number step=.1" class="form-control" placeholder="(Gwei)" id="oth_val">
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						              <button class="btn btn-primary" type="reset" id="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>

                 <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h4 id="txArgs">Predictions:</h4>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Outcome</th>
                          <th></th>
                
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>% of last 200 blocks accepting this gas price</td>
                          <td id="hp"></td>
                        </tr>
                        <tr>
                          <td>Transactions At or Above in Current Txpool</td>
                          <td id="txatabove"></td>
                        </tr>
                        <tr>
                          <td>Mean Time to Confirm (Blocks)</td>
                          <td id="meanBlocks"></td>
                        </tr>
                        <tr>
                          <td>Mean Time to Confirm (Seconds)</td>
                          <td id="meanSecs"></td>
                        </tr>
                        <tr>
                          <td>Transaction fee (ETH)</td>
                          <td id="txEth"></td>
                        </tr>
                         <tr>
                          <td>Transaction fee (Fiat)</td>
                          <td id="txFiat"></td>
                        </tr>
                         
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
      <!-- /misc transactions -->
      </div>
      <?php include '_footer.php'; ?>
    </div>
  <!-- /page content -->

      </div>
    </div>

 <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    

<!-- Custom Theme Scripts -->
   <script>
    var txGasPrice;
    var predictArray = [];
    $(document).ready(function() {
      _loadPredictionTable();
      _bindFormFieldListeners();
    });


    //Curency Support
      
    $("#eur").click(function(){     
        location = location.origin + "/calculatorTxV.php?curr=eur";                              
    });
    
    $("#usd").click(function() {
        location = location.origin + "/calculatorTxV.php?curr=usd";
    });
  
    $("#cny").click(function() {
        location = location.origin + "/calculatorTxV.php?curr=cny";                                      
    });

    $("#gbp").click(function() {
        location = location.origin + "/calculatorTxV.php?curr=gbp";                       
    });

    $('#reset').click(function() {
      $('#txatabove').html("");
      $('#minedprob').html("");
      $('#hp').html("");
      $('#meanBlocks').html("");
      $('#meanSecs').html("");
      $('#txEth').html("");
      $('#txFiat').html("");
      $('#txArgs').html("Predictions:");
      $("#oth_val").parent().next(".validation").remove();
      $("#gas_used").parent().next(".validation").remove();
    });

    $('form').submit(function(event) {
      event.preventDefault(); // prevent form from POST to server
      _calculate();
    });

    function _calculate() {
      /* remove previosly shown error message */
      var errorMsg = $("#oth_val").parent().next(".validation");
      if (errorMsg) errorMsg.remove();
      errorMsg = $("#gas_used").parent().next(".validation");
      if (errorMsg) errorMsg.remove();

      /* Set gas used amount */  
      var gasLimit = $('#gas_used').val();      
      if(!gasLimit) {
        txGasUsed = 21000;      /* use minimum gas limit */
      } else if (gasLimit > 8000000) {
        if ($("#gas_used").parent().next(".validation").length == 0) {
          $string = "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter gas used less than 80,00,000 (block limit)";
          $("#gas_used").parent().after($string);
        }

        $('#gas_used').focus();
        focusSet = true;

        return;
      } else {
        txGasUsed = gasLimit;
      }

      /* Gas Used Set - Now find Gas Price */
      if($('#other').prop('checked') === true) {
        otherGasPrice = $('#oth_val').val();

        if (!otherGasPrice || otherGasPrice < 0.1) {
          if ($("#oth_val").parent().next(".validation").length === 0){ // only add if not added
            $("#oth_val").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter gas price >= 0.1 gwei</div>");
          }
        
          $('#oth_val').focus();
          focusSet = true;

          return;
        } else {
          txGasPrice = $("#oth_val").val();
        }
      } else {
        if ($('#fastest').prop('checked') === true) {
          txGasPrice = <?php echo($gpRecs2['fastest'] / 10) ?>;
        } else if ($('#fast').prop('checked') === true) {
          txGasPrice = <?php echo($gpRecs2['fast'] / 10) ?>;
        } else if ($('#avg').prop('checked') === true) {
          txGasPrice = <?php echo($gpRecs2['average'] / 10) ?>;
          
        } else if ($('#cheap').prop('checked') === true) {
          txGasPrice = <?php echo($gpRecs2['safeLow'] / 10) ?>;
        } else {
          txGasPrice = 1;
        }

        $('#oth_val').val("");
      }
      
      pdValues = _estimateWait(_getIndex(txGasPrice, predictArray), txGasUsed);
      txArgs = "Predictions: <small><span style='color:red'> Gas Used = "+ txGasUsed + "; Gas Price = " + txGasPrice + " gwei</span></small>";
      $('#txArgs').html(txArgs);

      console.log(pdValues);
      blocksWait = pdValues[0];
      hashpower = pdValues[1];
      txatabove = pdValues[2];
      minedprob = pdValues[3];
      console.log(blocksWait);

      currency = '<?php echo ($currency) ?>';
      console.log(currency);
      exchangeRate =<?php echo ($exchangeRate) ?>;
      blockInterval = <?php echo ($gpRecs2['block_time']) ?>;
      txMeanSecs = blocksWait * blockInterval;
      txMeanSecs = Number(txMeanSecs.toFixed(0));
      blocksWait = Number(blocksWait.toFixed(1));

      txFeeEth = txGasPrice/1e9 * txGasUsed;
      txFeeEth = Number((txFeeEth).toFixed(7))
      txFeeFiat = txFeeEth * exchangeRate;
      txFeeFiat = Number(txFeeFiat.toFixed(5));

      $('#meanBlocks').html(blocksWait);
      $('#hp').html(hashpower);
      $('#txatabove').html(txatabove);
      $('#meanSecs').html(txMeanSecs);
      $('#txEth').html(txFeeEth);

      if (currency === 'usd') {
        string = "$" + txFeeFiat;
        $('#txFiat').html(string);
      } else if (currency === 'eur') {
        string = "€" + txFeeFiat;
        $('#txFiat').html(string);
      } else if (currency === 'cny') {
        string = "¥" + txFeeFiat;
        $('#txFiat').html(string);
      } else if (currency === 'gbp') {
        string = "£" + txFeeFiat;
        $('#txFiat').html(string);
      }
    }

    function _estimateWait (index, gasoffered) {
      var sum1, sum2;
      var intercept = 4.2794;
      var hpa = .0329;
      var hgo = -3.2836;
      var wb = -0.0048;
      var tx = -0.0004;
      var intercept2 = 7.5375;
      var hpa_coef = -0.0801;
      var txatabove_coef= 0.0003;
      var high_gas_coef = .3532;

      if (gasoffered > 1000000) {    
        sum1 = intercept + (predictArray[index]['hashpower_accepting'] * hpa) + hgo  + (predictArray[index]['tx_atabove'] * tx);
        sum2 = intercept2 + (predictArray[index]['hashpower_accepting'] * hpa_coef) + (predictArray[index]['tx_atabove'] * txatabove_coef) + high_gas_coef;
      } else {
        sum1 = intercept + (predictArray[index]['hashpower_accepting'] * hpa) + (predictArray[index]['tx_atabove'] * tx);
        sum2 = intercept2 + (predictArray[index]['tx_atabove'] * txatabove_coef) + (predictArray[index]['hashpower_accepting'] * hpa_coef);
      }

      var factor = Math.exp(- 1 * sum1);
      prob = 1 / (1 + factor);

      if (prob > .95) {
        minedProb = 'Very High';
      } else if (prob > .9 && prob <= .95) {
        minedProb = 'Medium'
      } else {
        minedProb = 'Low';
      }

      expectedWait = Math.exp(sum2);
      if (expectedWait < 2) {
        expectedWait = 2;
      }
  
      if (gasoffered > 2000000) {
        expectedWait += 100;
      }

      return [expectedWait, predictArray[index]['hashpower_accepting'], predictArray[index]['tx_atabove'], minedProb];
    }

    function _getIndex(gasprice, predictArray) {
      var index = 0;
      for( ; index < predictArray.length; index++) {
          if (predictArray[index]['gasprice'] == gasprice){
              break;
          }
      }

      /* if gas price doesn't match show result for closest value */
      if (index >= predictArray.length) {
        var closest = predictArray.reduce(function(prev, curr) {
          return (Math.abs(curr['gasprice'] - gasprice) < Math.abs(prev['gasprice'] - gasprice) ? curr : prev);
        });
        var closestGasPrice = closest.gasprice;
        if ($('#other').prop('checked') === true) {
          txGasPrice = closestGasPrice;
          $("#oth_val").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Provided gas price does not match, showing result for the closest value: " + closestGasPrice + " Gwei</div>");
        }

        index = predictArray.findIndex(function(item) {
          return item['gasprice'] === closestGasPrice;
        });
      }

      return index;
    }

    function _loadPredictionTable() {
      $.ajax({
        url: "json/predictTable.json",
        method: "GET",
        dataType: "json",
        success: function(data) {
          predictArray = data;
          // _calculate();
        }
      });
    }

    function _bindFormFieldListeners() {
      $('.checkbox input.flat').change(function() {
        $('input.flat').not(this).prop('checked',false);
        // _calculate();
      });

      $('#oth_val').change(function() {
        $('.checkbox input.flat').prop('checked', false);
        $('#other').prop('checked', true);
      });

      $('#gas_used, #oth_val').change(function() {
        // _calculate();
      })
    }


 </script>



    <script src="build/js/custom3.js"></script>
    
	
  </body>
</html>
