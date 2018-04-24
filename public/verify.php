<?php  require '../includes/header.php' ; ?>
<?php 
  if(isset($_POST['submit'])){
       if(isset($_POST['code']) ){

       $code = $_SESSION['code'];

       $result = $con->query("SELECT code FROM `varifications` WHERE code='$code'");

       $row = $result->fetch_assoc();

       if(trim($_POST['code']) == $row['code']){
       	  $con->query("DELETE FROM varifications WHERE code='$code'");
       	  header('Location: success.php');
       }else{
          echo "<h3 class='text-center bg-danger'>Sorry Wrong Code</h3>";
       }
  }
 } 
?>

 
   <div class="col-sm-6 col-sm-offset-3">
      
        <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label for="code" class="col-sm-4 control-label">Phone Number</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="code" id="code" placeholder="Plz Enter Code" >
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" name="submit" class="btn btn-success">Verify Code</button>
                    </div>
                </div>
        </form>
   
   </div>



<?php  require '../includes/footer.php' ; ?>