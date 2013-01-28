<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	function SaveToFile($data, $filename)
	{
		$myFile = $filename;
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $data);
		fclose($fh);
	}
	$filename = array_filter(explode("/", $_SERVER['HTTP_REFERER']));
	$filename = $filename[sizeof($filename)];
	SaveToFile($_POST["data"],$filename);
}
else
{
	function ReadFromFile($data)
	{
		$fh = fopen($data, 'r');
		$theData = fread($fh, filesize($data));
		fclose($fh);
		return $theData;
	}
	$filename = array_filter(explode("/", $_SERVER['HTTP_REFERER']));
	$filename = $filename[sizeof($filename)];
	print ReadFromFile($filename);
}
?>