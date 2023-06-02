<?php
$header = "From:hassannadeem.dev@gmail.com";
if(mail('hassannadeem@aptechnorth.edu.pk','Learning SMTP',"APtech Learning",$header)){


    echo "Email Send";
}else{
    echo "Email Not Send";

}


?>