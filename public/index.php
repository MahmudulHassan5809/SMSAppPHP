<?php  require '../includes/header.php' ; ?>
<?php 
error_reporting(E_ALL); 
use Twilio\Rest\Client;
$accountSid = 'AC285ecdc1aad24b34b1b481eea308ee19';
$authToken = 'ac3c4f1feac2e49ea8cdad1a7e7f5273';
?>
<?php 
  if(isset($_POST['submit'])){
       if(isset($_POST['number']) && isset($_POST['message'])){
         
           $client = new Client($accountSid, $authToken);
           try {
             $client->messages->create(
              // the number you'd like to send the message to
              $_POST['number']
              ,
              array(
                  // A Twilio phone number you purchased at twilio.com/console
                  'from' => '+16466526763',
                  // the body of the text message you'd like to send
                  'body' => $_POST['message']
              )
          );
           
           echo "<h3 class='text-center bg-success'>Message Has Benn Sent</h3>";
             
           } catch (Exception $e) {
            echo $e->getCode() . ' : ' . $e->getMessage()."<br>";
            die();
         }
           
       }
  }
?>

      <div class="col-sm-6 col-sm-offset-3">
      
                <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label for="number" class="col-sm-4 control-label">Phone Number</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="number" id="number" placeholder="Plz Enter Number" >
                    </div>
                </div>
                <div class="form-group">
                <label for="message" class="col-sm-4 control-label">Comment:</label>
                <div class="col-sm-8">
                <textarea class="form-control" rows="5" id="comment" name="message" ></textarea>
                </div>
              </div> 
                
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" name="submit" class="btn btn-success">Send Message</button>
                    </div>
                </div>
                </form>
   
   </div>



<?php  require '../includes/footer.php' ; ?>