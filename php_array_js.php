<?php

//The best approach is to convert your array into a JSON string and then pass it to your JavaScript.

$cartInfo = array(
    'num_cart_items' => 3,
    'cart_total' => 34.23,
    'currency' => 'USD'
);

//Now, let’s say that we want to pass the $cartInfo array to one of our JS scripts so that we can do something on the client’s side.

//Our PHP array.
$cart_info = array(
    'num_cart_items' => 3,
    'cart_total' => 34.23,
    'currency' => 'USD'
);

//Convert the array into a JSON string.
$cart_info_json = json_encode($cart_info);

//If you echo out the $cart_info_json variable above, you will see that we are left with a string that looks like this.

//Example {"num_cart_items":3,"cart_total":34.23,"currency":"USD"}

?>

<script type="text/javascript">

    var obj = JSON.parse('<?= $var; ?>');
    alert("There are " + obj.num_cart_items + " cart items.");

</script>