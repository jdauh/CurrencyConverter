<?php
// Get form field values, with default values
$amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT, ["options" => ["default" => 100]]);
$currency = filter_input(INPUT_POST, 'currency', FILTER_SANITIZE_STRING, ["options" => ["default" => 'USD']]);

// The URL of the European Central Bank API
$url = "https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";

// Use file_get_contents to get XML data
$xml = simplexml_load_file($url);

// Look for the conversion rate for the selected currency
$conversionRate = null;
foreach ($xml->Cube->Cube->Cube as $rate) {
    if ($rate['currency'] == $currency) {
        $conversionRate = (float)$rate['rate'];
        break;
    }
}

// If the currency is not found, display an error message
if ($conversionRate === null) {
    $result = null;
    $errorMessage = "The requested currency was not found.";
} else {
    // Calculate the converted amount
    $result = $amount * $conversionRate;
}
