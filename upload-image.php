<?php
	
	//you can put this line in your constants file
	define('upload_url', 'your upload folder url');

	/** Uploads icons to server
	  * @param String (Thumbnail URL)
	  * @param String (Name of the icon)
	  * @return Boolean (Result of upload)
	  */
	function uploadImage($thumbnail, $name){
	
		$thumbnail = str_replace(" ","%20",$thumbnail);
		
		//delete file if already exists
		if(file_exists(upload_url.$name)) {
			unlink(upload_url.$name);
		}
		
		//gets file from network server
		$content = file_get_contents($thumbnail);
		
		//Store in the filesystem.
		$save = file_put_contents(upload_url.$name,$content);
	}
	
	uploadImage("thumbnailURL", "imagename.jpg");
?>
