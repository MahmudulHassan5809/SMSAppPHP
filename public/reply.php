<?php 
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
?>
<?php 
  $people = array(
  
   '+8801630811624' => 'Mahmudul Hassan',
   '+8801630811628' => 'Mahmudul Alam',
   '+8801630811627' => 'Sabbir Ahmed',
  );

  if (!$name = $people[$_REQUEST['from']]) {
  	 
  	 $name = "nobody";
  }

?>
<Response>
    <Say><?php echo "Hi ".$name." How Are You? Thankx.." ; ?></Say>
</Response>