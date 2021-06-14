<?php


$vat = 15;

$priceExcludingVat = 10;


$vatToPay = ($priceExcludingVat / 100) * $vat;


$totalPrice = $priceExcludingVat + $vatToPay;


echo number_format($totalPrice, 2);