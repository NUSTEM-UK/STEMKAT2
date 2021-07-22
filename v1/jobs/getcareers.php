<?php
//Assigns file to variable
$txt_file    = file_get_contents('./jobs.txt');
$txt_file = str_replace("\r", '', $txt_file); // remove carriage returns
//Separating by line
$rows        = explode("\n", $txt_file);

foreach($rows as $row => $data)
{
	//retrieving and adding % to the job titles from the list
	$row_data = $data;
	echo $row_data.'%';
}
?>