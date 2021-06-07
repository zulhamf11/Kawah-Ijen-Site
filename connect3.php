<?php

$netctl = mysqli_connect("sql201.epizy.com","epiz_28791483","twpqVqCysQvS","epiz_28791483_booktrd");

if (isset($_POST['submit'])) {

    $name = $_POST['lname'];
    $phone = $_POST['lphone'];
    $email = $_POST['lemail'];
    $date = date('Y-m-d', strtotime($_POST['ldate'])); 
    $quantity = $_POST['quantity'];
    
    $query = "INSERT INTO bookingtrd VALUE ('','$name','$phone','$email','$date','$quantity')";
    mysqli_query($netctl,$query);

   header('location:book_ticket3.php');
   exit();
    
}else{
    die('connection failed youre not 1337'.mysqli_error($netctl));
}

//TRD

