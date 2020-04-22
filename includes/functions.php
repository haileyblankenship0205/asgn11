<?php

//Liquids Conversions 

define('LIQUIDS', array (
    "buckets" => 4,
    "butts" => 108,
    "firkin" => 9,
    "hogshead" => 54,
    "pints" => 0.125,
    "impGal" => 1
));

function convert_to_impGal($value, $from_unit) {
    if(array_key_exists($from_unit, LIQUIDS)){
        return $value * LIQUIDS[$from_unit]; 
    } 
    else {
        return "Unsupported unit.";
    }
}

function convert_from_impGal($value, $to_unit) {
    if(array_key_exists($to_unit, LIQUIDS)){
        return $value / LIQUIDS[$to_unit]; 
    } 
    else {
        return "Unsupported unit.";
    }
}

function convert_length($value, $from_unit, $to_unit) {
  $impGal_value = convert_to_impGal($value, $from_unit);
  $new_value = convert_from_impGal($impGal_value, $to_unit);
  return $new_value;
}

//Outdated Irish Length Measurements Conversions

define('IRISH', array (
    "grain" => 0.7,
    "thumb-length" => 2.1,
    "palm" => 3.3,
    "fist" => 10.4,
    "foot" => 25,
    "step" => 62.5,
    "double-step" => 1500,
    "rod" => 3000
));

function convert_to_centimeters($value, $from_unit) {
    if(array_key_exists($from_unit, IRISH)){
        return $value * IRISH[$from_unit]; 
    } 
    else {
        return "Unsupported unit.";
    }
}

function convert_from_centimeters($value, $to_unit) {
    if(array_key_exists($to_unit, IRISH)){
        return $value / IRISH[$to_unit]; 
    } 
    else {
        return "Unsupported unit.";
    }
}

function convert_irish_length($value, $from_unit, $to_unit) {
    $centimeters_value = convert_to_centimeters($value, $from_unit);
    $new_value = convert_from_centimeters($centimeters_value, $to_unit);
    return $new_value;
  }