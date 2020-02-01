<?php 
function doesURLExist($url) {
	$headers = get_headers($url);
	return stripos($headers[0],"200 OK")?true:false; 
} 
	session_start();
	if(isset($_SESSION['userID']))
	{

	$ImageDir = "http://localhost/School-Project/users/accounts/".$_SESSION['userID']."/images";
	$possibleExt = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG');
	$ProfilePictureExists = false;

	foreach ($possibleExt as $value) {
		if(doesURLExist($ImageDir."/Profile-Picture.".$value))
		{
			$_SESSION['ProfilePicture'] = $ImageDir."/Profile-Picture.".$value;
			$ProfilePictureExists = true;
		}
	}
		if(!$ProfilePictureExists) {
			$_SESSION['ProfilePicture'] = $ImageDir."/Default-Profile-Picture.png";
		}
}
	



?>