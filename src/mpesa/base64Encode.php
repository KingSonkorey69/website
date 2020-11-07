<?php

require '../config.php';
$date = new DateTime();
$timestamp = strval($date->getTimestamp());
// echo base64_encode(CONSUMER_KEY.':'.CONSUMER_SECRET);
echo base64_encode(SHORTCODE.PASSKEY."20201107131400");
// echo $timestamp;