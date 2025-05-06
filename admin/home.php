<?php
 include'header.php';
 SESSION_START();

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
include'lib/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
    
    <div class="container homebody">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome To The Admin Panel</h1>
                <h5>You Can Control Web site Anything</h5>

                <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding-bottom: 200px;
  padding-top: 200px;
  padding-left: 5%;
  padding-right: 5%;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body>



<p>View Order BY There</p>

<button class="button">All Oreder</button>
<button class="button button2">Order</button>
<button class="button button3">REJECTED</button>
<button class="button button4">ON HOLD</button>
<button class="button button5">DELIVERIED</button>

</body>

            </div>
        </div>
    </div>
    
</body>
</html>