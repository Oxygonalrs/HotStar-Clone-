

function addcustomer()
{
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
    var usermobile = $('#usermobile').val();
    var userpass = $("#userpass").val();
    var useremail = $("#useremail").val();
    var userage = $("#userage").val();

    //Checking Form Fields on FOrm submission
    if(usermobile.trim()=="")
    {
        $("#statusMsg1").html('<small style="color:red;">Please Enter UserName </small>');
        $("#stuname").focus();
        return false;
    }
    else if(userpass.trim()=="")
    {
        $("#statusMsg3").html('<small style="color:red;">Please Enter password</small>');
        $("#stupass").focus();
        return false;
    }
    else if(useremail.trim()=="")
    {
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email </small>');
        $("#stuemail").focus();
        return false;
    }
    else if(useremail.trim() != "" && !reg.test(stuemail))
    {
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email e.g example@mail.com</small>');
        $("#stuemail").focus();
        return false;
    }
    else if(userage.trim()=="")
    {
        $("#statusMsg3").html('<small style="color:red;">Please Enter password</small>');
        $("#stupass").focus();
        return false;
    }
    
}