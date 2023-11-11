<?php
$firstName =  $_POST['$firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];  

if (isset($_POST['submit'])) {

    $firstName = mysqli_escape_string($conn,$_POST['$firstName']); 
    $lastName = mysqli_escape_string($conn,$_POST['$lastName']); 
    $email = mysqli_escape_string($conn,$_POST['$email']); 



$sql = "INSERT INTO users(firstName , lastName, email)
 VALUES ('$firstName' , '$lastName', '$email')";

if(empty($firstName)) {
    echo 'First Name empty';
} elseif(empty($lastName)) {
    echo 'Last Name empty';
}else if(empty($email)) {
    echo 'Emaill empty';
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo ' Please write correct email';
}else{
    
    if(mysqli_query($conn, $sql)){
        header('Location:  index.php');
    }else{
        echo 'Eroor:' . mysqli_error($conn);
    }

}





    
}