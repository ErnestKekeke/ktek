<?php 

    if(isset($_POST['userBtn'])){
    $firstname = trim($_POST['userFirstName']);
    $lastname = trim($_POST['userLastName']);
    $tel = trim($_POST['userTel']);
    $reason = trim($_POST['userInfo']);
    $email = trim($_POST['userEmail']);
    $msg = trim($_POST['userMsg']);

 
       
    if(empty($firstname)){
        header("location: ../index.php?error=firstname");
        exit();
    }

    if(empty($lastname)){
        header("location: ../index.php?error=lastname");
        exit();
    }
    
    if(empty($tel)){
        header("location: ../index.php?error=phone no");
        exit();
    }

    if(empty($email)){
        header("location: ../index.php?error=email");
        exit();
    }

    if(empty($msg)){
        header("location: ../index.php?error=msg");
        exit();
    }

    if(!preg_match("/^[a-zA-Z]{2,40}$/m", $firstname)){
        header("location: ../index.php?error=invalid_firstname");
        exit();
    }

    if(!preg_match("/^[a-zA-Z]{2,40}$/m", $lastname)){
        header("location: ../index.php?error=invalid_lastname");
        exit();
    }

    if(!preg_match("/^\+?[0-9]{5,20}$/m", $tel)){
        header("location: ../index.php?error=invalid_tel");
        exit();
    }

    if(!preg_match('/^([a-z 0-9 A-Z \- \.]+)@([a-z A-Z \. \- 0-9]+)\.([a-z A-Z \-]{1,8})([a-z A-Z \-]{1,8})?$/',$email)){
        header("location: ../index.php?error=invalid_email");
        exit();
    }

    if(!preg_match('/[\w\W]{10,500}/',$msg)){
        header("location: ../index.php?error=invalid_message");
        exit();
    }

    $firstname = ucwords(strtolower($firstname));
    $lastname = ucwords(strtolower($lastname));
    $email = strtolower($email);
    $reason = ucwords($reason);



    $to = "triplektech0@gmail.com";
    $subject = $reason." from ".$firstname;
    $title = $reason." from ".$firstname." ".$lastname." (".$tel.")";

    $color = 'black';

    switch($reason){
        case'Request': $color =  "#a8325a"; break;
        case'Complaint': $color =  "#3b04bd"; break;
        case'Enquiriy': $color =  "#034022"; break;
        case'Other_enquiriy': $color =  "#fc5635"; break;
        default: $color = "black"; break;
    }

    
   
    $txt = 
            '
                <html>

            <h3 style="text-align: center; text-decoration:underline; color:'.$color.';">'.$title.'</h3>
            <br>
            <p style="text-align:center;">'.$msg.'</p>

            </html>
            ';



        $headers = array(
            "MIME-Version" => "1.0",
            "Content-type"=>"text/html;charset=UTF-8",
             "From"=>$email,
             "Reply-To"=> "info@kkktek.com"
        );
//    $sendEmail =  mail($to,$subject,$txt,$headers);


//   echo($send? "mail is sent": "there was an error");

            if(!mail($to,$subject,$txt,$headers)){
                echo " error occurred";
                header("location: ../index.php?mail=error");
                exit(); 
            }else{
                echo "was sent successfully";
                header("location: ../index.php?mail=sent");
                exit();   
                
            }




    }
    
else{
    header("location: ../index.php");
    exit();
}


    header("location: ../index.php");
    exit();
?>