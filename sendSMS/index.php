

<?php

include 'delivery.php';


function sendMessages($username, $password, $messages, $url){

  $result = deliverMessage( json_encode($messages), $url, $username, $password );

if ($result['http_status'] != 201) {
  print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
} else {
  print "Response " . $result['server_response'];
 
};
}

?>