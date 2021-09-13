<?php

// $datalog is null at first 
$dataToLog = NULL;

//getting data from json in getallheader method
$content_type = getallheaders()['Content-Type'];

//Turn json into a delimited string using
//the implode function
$data = implode(" - ", $dataToLog);

// add date
$data.= date("-Y-m-d H:i:s");

//Add a newline onto the end.
$data .= PHP_EOL;

//The name of your log file.
//Modify this and add a full path if you want to log it in 
//a specific directory.
$pathToFile = 'opencoteslogs.json';

//Log the data to your file using file_put_contents.
//PATH_LOG is where you give path where file will be created
file_put_contents(PATH_LOG.$pathToFile, $data, FILE_APPEND);

?>