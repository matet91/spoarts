<!--?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "Correct Code Entered";
//Do you stuff
}
else
{
die("Wrong Code Entered");
}
?-->

<?php
    if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        var_dump($_POST);
        $secret = "Your secey key";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
            echo 'Done';
        }else{
            echo 'SPam';
        }
        
    }
?>