
// This is a short tutorial on how to pass JSON data from PHP to JavaScript.

<?php

//Example PHP that we will convert
//into JSON
$jsonData = array(
    'name' => 'Lionel Messi',
    'team' => 'Barcelona',
    'dob' => '1987-06-24'
);

//Encode the data as a JSON string
$jsonStr = json_encode($jsonData);

//The resulting JSON string will look like this:
//{“name”:”Lionel Messi”,”team”:”Barcelona”,”dob”:”1987-06-24″}


?>

<script>
    //Now, we will need to pass this string to our JavaScript and convert it into an object

    //Print out the JSON string using PHP and let
    //JSON.parse parse it.
    var jsonData = JSON.parse('<?= $jsonStr; ?>');

    //Log the data to the console
    console.log(jsonData);

    //In the snippet above, we printed out our JSON string inside the JSON.parse() method. As a result, the code that is delivered to the browser will look like this:

    //Print out the JSON string using PHP and let
    //JSON.parse parse it.
    var jsonData = JSON.parse('{"name":"Lionel Messi","team":"Barcelona","dob":"1987-06-24"}');

    //Log the data to the console
    console.log(jsonData);

</script>