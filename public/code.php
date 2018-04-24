<?php  require '../includes/header.php' ; ?>
 
 <?php 
error_reporting(E_ALL); 
use Twilio\Rest\Client;
$accountSid = 'AC285ecdc1aad24b34b1b481eea308ee19';
$authToken = 'ac3c4f1feac2e49ea8cdad1a7e7f5273';
$_SESSION['code'] = $code = uniqid(); 

$con->query("INSERT INTO `varifications`(code) VALUES('$code') ") ;
?>
<?php 
   try {
   	  $client = new Client($accountSid, $authToken);
           $client->messages->create(
              // the number you'd like to send the message to
              '+8801630811624'
              ,
              array(
                  // A Twilio phone number you purchased at twilio.com/console
                  'from' => '+16466526763',
                  // the body of the text message you'd like to send
                  'body' => $code
              )
          );
   	
   } catch (Exception $e) {
   	      echo $e->getCode() . ' : ' . $e->getMessage()."<br>";
            die();
   }
         
           
           
           echo "<h3 class='text-center bg-success'>Your Code Has Been Sent</h3>";
   
  
?>

  


<?php  require '../includes/footer.php' ; ?>