<?php

define('CONVERSIONS', array (
    "buckets" => 4,
    "butts" => 108,
    "firkin" => 9,
    "hogshead" => 54,
    "pints" => 0.125,
    "impGal" => 1
));

function convert_to_impGal($value, $from_unit) {
    if(array_key_exists($from_unit, CONVERSIONS)){
        return $value * CONVERSIONS[$from_unit]; 
    } 
    else {
        return "Unsupported unit.";
    }
}

function convert_from_impGal($value, $to_unit) {
    if(array_key_exists($to_unit, CONVERSIONS)){
        return $value / CONVERSIONS[$to_unit]; 
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