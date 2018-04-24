<?php
	$ch =  curl_init('http://localhost/ashish/practice/php/curl/data.json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
	$result = curl_exec($ch);
	$json = json_decode($result);
	//print_r($json);
	
	foreach($json as $year=>$yearinfo)
	{
		echo $year."<hr>";
		foreach($yearinfo as $month=>$monthinfo)
		{
			echo $month.":";
			foreach($monthinfo as $day)
			{
				echo $day.",";
			}
			echo "<br>";
		}
		echo "<br>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JSON Fetch using cURL</title>
</head>

<body>
</body>
</html>