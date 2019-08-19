<?php 

  /**
  *
  * @author arman
  * @since 5/20/19
  */

  $ch = curl_init();
  $url = 'http://gasburners-jsapi-prod.us-west-1.elasticbeanstalk.com/api/leaderboard';

  function _shortenContract($contract) {
    return substr($contract, 0, 15) . '...' . substr($contract, strlen($contract) - 5);
  }

  function _formatNumber($num) {
    if($num > 1000) {
        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('K', 'M', 'B', 'T');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;
    }

    return $num;
  }

  curl_setopt_array(
  $ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
  ));

  $output = curl_exec($ch);
  $decodedData = json_decode($output);
  $counter = 1;
  $currUSD = true;
  if ($currency == 'eur') {
      $currUSD = false;
      $currString = '€';
  } elseif ($currency == 'cny') {
      $currUSD = false;
      $currString = '¥';

  } elseif ($currency == 'gbp') {
      $currUSD = false;
      $currString = '£';
  } else {
      $currUSD = true;
      $currString = '$';
  }

  foreach($decodedData as $data) {
    $etherscanLink = "https://etherscan.io/address/" . $data->contract;
    $spamLink = '';
    $fiatCost = '';
    if ($data->isSpam) {
      $spamLink = " <a href=" . $data->spamRefLink . " class='spam_reference_link' target='_blank'>(Scam Reported)</a>";
    }

    if ($currUSD) {
      $fiatCost = $currString . $data->costUsd;
    } else {
      $fiatCost = $currString . _formatNumber($data->costETH * $exchangeRate);
    }

    if ($data->project == "unknown") {
      echo "<tr><td>" . $counter++ . "</td><td><a href=" . $etherscanLink . " class='etherscan_link' target='_blank'>" . _shortenContract($data->contract) . $spamLink . "</a></td><td>". $data->costETH . "</td><td>" . $data->avgGwei . "</td><td>" . $fiatCost . "</td></tr>";
    } else {
      echo "<tr><td>". $counter++ . "</td><td><span data-template=" . $data->projectId . " class='top_project'>" . $data->project . "</span>" . $spamLink . "</td><td>". $data->costETH ."</td><td>". $data->avgGwei ."</td><td>". $fiatCost ."</td></tr>";
    }

    $contractList = '';
    foreach($data->contracts as $contract) {
      $eLink = "https://etherscan.io/address/" . $contract;
      $contractList .= "<div style='padding: 2px; float: left;'><a href=" . $eLink . " class='etherscan_link' target='_blank'>" . strtolower($contract) . "</a></div>";
    }

    echo "<template id=" . $data->projectId . "><div style='max-height: 200px; overflow-y: auto; font-size: 12px; color: #fff; padding: 2px;'>" . $contractList . "</div></template>";
  }
 
?>