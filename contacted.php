<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  display : inline-block;
  text-decoration:none;
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 10px;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
    </style>
</head>
<body>
    
    <?php 
    // insert contact details
    
    function test_inputs($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $timestamp = date('Y-m-d H:i:s');

    $name = test_inputs($name);
    $message = test_inputs($message);
    $email =  test_inputs($email);

    $conn = mysqli_connect('localhost', 'root', '', 'eduphysics');

    $sql = "INSERT INTO contact_details (name, phone, email, message, timestamp) VALUES ('$name', '$phone', '$email', '$message', '$timestamp');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class=content>';
        echo '<div class="wrapper-1">';
        echo '"<div class="wrapper-2">';
        echo '<h1>Thank you !</h1>';
        echo '<p>Thanks for contacting us.</p>' ;
        echo '<p>We will get in touch with you as soon as possible. </p>' ;
        echo '<a href="./home.php" class="go-home"> Return Home </a>';
        echo '</div>';
        echo '<div class="footer-like">';
        echo '<p>Wish to reach out to us again?';
        echo '<a href="./home.php#contact">Click here then</a>';
        echo '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "Please submit the form again";
    }
    ?>
</body>
</html>