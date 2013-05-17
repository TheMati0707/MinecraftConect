<?php
///////////////////////////////////////
//Script by mati0707
//$usname[2] - Username
///////////////////////////////////////
$username = 'login';
$password = 'password';
$version = 13;
$get = file_get_contents("http://login.minecraft.net/?user=$username&password=$password&version=$version");
if($get=='Bad login'){
echo'Bad e-mail or password';
}
elseif($get=='Account migrated, use e-mail as username.'){
echo'Your account is migrated! Please use e-mail as username.';
}
else{
$usname = explode(":", $get);
echo'Logged in welcome! Your username is '.$usname[2].'';
};
?>
