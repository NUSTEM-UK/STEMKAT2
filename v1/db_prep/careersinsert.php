<?php
// TODO: Application now uses getcareers.php
	$careers = array('ac' => 'actor/actress',
				  	 'ar' => 'architect',
					//  'as' => 'astronaut',
					//  'al' => 'athlete',
					 'at' => 'artist',
					 'au' => 'author',
					 'ba' => 'bank assistant',
					//  'bk' => 'banker',
					 'bu' => 'builder',
					 'cw' => 'care worker',
					 'ch' => 'chef/cook',
					//  'cs' => 'civil servant',
					 'cp' => 'computer programmer',
					 'dd' => 'delivery driver',
					//  'de' => 'detective',
					 'do' => 'doctor',
					 'en' => 'engineer',
					//  'ep' => 'entrepreneur',
					//  'ea' => 'estate agent',
					 'fw' => 'factory worker',
					//  'fa' => 'farmer',
					 'fd' => 'fashion designer',
					//  'ff' => 'firefighter',
					//  'gt' => 'game tester',
					 'hd' => 'hairdresser',
					//  'ju' => 'judge',
					 'la' => 'lawyer',
					//  'li' => 'librarian',
					 'ma' => 'manager',
					 'me' => 'mechanic',
					 'nu' => 'nurse',
					 'ow' => 'office worker',
					 'pi' => 'pilot',
					 'po' => 'police officer',
					//  'pt' => 'politician',
					 'sc' => 'scientist',
					 'sa' => 'shop assistant',
					//  'sk' => 'shop-keeper',
					 'sw' => 'social worker',
					//  'so' => 'soldier',
					 'sp' => 'sports coach',
					//  'su' => 'surveyor',
					 'te' => 'teacher',
					 'tc' => 'technician',
					//  'tp' => 'tennis player',
					 've' => 'vet',
					 'wa' => 'waiter/waitress'
					//  'zo' => 'zoologist'
					);

					// Test output to check unique keys
					// foreach ($careers as $key => $value) {
					// 	print($key);
					// 	print(": ");
					// 	print($value);
					// 	print("\n");
					// }

	include('../src/connect.php');
	$conn = connect();
	
$txt_file    = file_get_contents('./jobs.txt');
$rows        = explode("\n", $txt_file);
array_shift($rows);

foreach($rows as $row => $data)
{
    //get row data
    $row_data = explode(',', $data);

    $info[$row]['id'] = $row_data[0];
    $info[$row]['careers'] = $row_data[1];
}
/*     //display data
    echo 'Row ' . $row . ' ID: ' . $info[$row]['id'] . '<br />';
    echo 'Row ' . $row . ' CAREERS: ' . $info[$row]['careers'] . '<br />'; */
	
	$stmt = $conn -> prepare("INSERT INTO careers_list(id, careers) VALUES(:id, :careers);");
	
	foreach($careers as $key => $value) {
		$stmt -> execute([':id' => $key, ':careers' => $value]);
	}


