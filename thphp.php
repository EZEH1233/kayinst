<!DOCTYPE html>
<html>
    <head>
        <title>submit data
</title>
</head>
<body>

<center>
    <?php
 //servername  = local host
 //username = root
 //password = empty

 $conn = mysqli_connect('localhost' , 'root' , ''  ,'myprofile');

 if($conn == false){
    die("Error: could not connect" .mysqli_connect_error());
 }

 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];
 



 $sql = "INSERT INTO theassign VALUES (  '','$name'  , '$email' , '$message' )";

if(mysqli_query($conn, $sql)){
    echo "<h4> Data stored in database created successfully."
    ."please browse your local host"
    ."to view the updated data";
} else{
    echo "error: sorry $sql."
    .mysqli_error($conn);
}


mysqli_close($conn);

 ?>
</center>
</body>
    </html>