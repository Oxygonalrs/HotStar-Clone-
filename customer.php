<?php
    include('./dbconnection.php');
?>

<?php
    if(isset($_REQUEST['usermobile']) && isset($_REQUEST['userpass']) && 
    isset($_REQUEST['useremail']) && isset($_REQUEST['userage']) && 
    isset($_REQUEST['subcription']) && isset($_REQUEST['days']) && isset($_REQUEST['usercheck']))
    {
        $user_mobile = $_REQUEST['usermobile']; 
        $user_subcription = $_REQUEST['subcription'];
        $user_email = $_REQUEST['useremail']; 
        $user_age = $_REQUEST['userage']; 
        $user_pass = $_REQUEST['userpass'];
        $subscription_days = $_REQUEST['days'];
        
        $sql = "INSERT INTO user (user_email, user_pass, user_mo, user_age, user_subscription, user_status) VALUES
            ('$user_email','$user_pass','$user_mobile','$user_age',
            '$subscription_days','$user_subcription')";
        
        $result = $conn->query($sql);
        if($result==TRUE)
        {
            echo "<script> window.alert('Added Successfully'); </script>";
        }
        else
        {
            echo "<script> window.alert('Unable To update'); </script>";
        }
    }
?>