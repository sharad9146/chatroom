 <?php
// get parameter
$roomname = $_GET['roomname'];

// connecting to database

include 'db_connect.php';

// execute sql to check whether room exists

$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";

$result = mysqli_query($conn, $sql);
if($result)
{
     // check if room exists
     if(mysqli_num_rows($result)==0)
     {
         $message = "this room does not exist. Try creating a new one";
         echo '<script language="javascript">';
         echo 'alert("'.$message.'");';
         echo 'window.location="http://localhost:8080/chatroom";';
         echo '</script>';
     }
}
else
{
  echo mysqli_error($conn);  
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">

    

<!-- Bootstrap core CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/product.css"rel="stylesheet">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyClass {

    height: 350px;
    overflow-y: scroll;
}
</style>
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Pricing example</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">About</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Contact</a>
      </nav>
    </div>



<h2>Chat Messages - <?php echo $roomname; ?> </h2>

<div class="container">
  <div class="anyClass">

</div>
</div>



<input type="text" class = "form-control" name="usermsg" id="usermsg" placeholder="Add message"><br>
<button class="btn btn-default" name="submitmsg" id="submitmsg">Send</button>

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
 
 <script type="text/javascript">
// using enter key to submit
// Get the input field






setInterval(runFunction(),1000);
function runFunction()
{
  $.post("htcont.php",{room:'<?php echo $roomname ?>'},)
    function(data,status)
    {
      document.getElementsByClassName('anyClass')[0].innerHTML = data;
      
    }

}
  // if user submits the form
  // Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard

    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    if(event.keyCode == 13){
    document.getElementById("submitmsg").click();
  }

});
 
$("#submitmsg").click(function(){
  var clientmsg = $("#usermsg").val();
  $.post("postmsg.php",{text:clientmsg,room:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
function(data,status){
  document.getElementsByClassName('anyClass')[0].innerHTML = data;});
  if("#usermsg").val("");
  return false;
  });
</script>
  </body>
</html>


