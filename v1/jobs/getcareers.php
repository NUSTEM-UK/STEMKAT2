<?php
//Assigns file to variable
$txt_file    = file_get_contents('./jobs.txt');
//Separating by line
$rows        = explode("\n", $txt_file);

foreach($rows as $row => $data)
{
	//Further separating by comma
	$row_data = explode(',', $data);

	echo $row_data[0].',';
	echo $row_data[1].'%';
}
?>