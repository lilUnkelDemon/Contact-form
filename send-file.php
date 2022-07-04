<?php

//require the validations file and use .
require_once('./VALIDATION/validation-func.php');


$name = $_POST['name'];
$email = $_POST['email'];
$url = $_POST['website']; 
$tellnumber = $_POST['tellnumber'];
$messegecontent = $_POST['messegecontent'];

if(Validate_Name($name) == true && ValidateEmail($email) == true && validate_url($url) == true && is_iran_phone($tellnumber) == true){


    if(file_exists("contactfile.txt")){
        $myfile = fopen("contactfile.txt", "a") or die("Unable to open file!");
    }else{
        $myfile = fopen("contactfile.txt", "w") or die("Unable to open file!");
    }
        
        $txt = "$name \n$email \n$url \n$tellnumber \n$messegecontent \n \n ========================= \n";

        fwrite($myfile, $txt);
        fclose($myfile);
        echo "SUCCESSFUL";

}else{
    echo "we have problem !";
}



// echo "$name \n $email \n $url \n $tellnumber \n $messegecontent";

