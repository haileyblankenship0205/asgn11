<?php

function convert_to_impGal($value, $from_unit) {
  switch($from_unit) {
    case 'buckets':
      return $value * 4;
      break;
    case 'butts':
      return $value * 108;
      break;
    case 'firkin':
      return $value * 9;
      break;
    case 'hogshead':
      return $value * 54;
      break;
    case 'pints':
      return $value * 0.125;
      break;
    
    case 'impGal':
      return $value;
      break;
    
    default:
      return "Unsupported unit.";
  }
}
  
function convert_from_impGal($value, $to_unit) {
  switch($to_unit) {
    case 'buckets':
      return $value / 4;
      break;
    case 'butts':
      return $value / 108;
      break;
    case 'firkin':
      return $value / 9;
      break;
    case 'hogshead':
      return $value / 54;
      break;
    case 'pints':
      return $value / 0.125;
      break;
    
    case 'impGal':
      return $value;
      break;
    
      return "Unsupported unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $impGal_value = convert_to_impGal($value, $from_unit);
  $new_value = convert_from_impGal($impGal_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="buckets"<?php if($from_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($from_unit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkin"<?php if($from_unit == 'firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="hogshead"<?php if($from_unit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
            <option value="impGal"<?php if($from_unit == 'impGal') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($from_unit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="buckets"<?php if($to_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($to_unit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkin"<?php if($to_unit == 'firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="hogshead"<?php if($to_unit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
            <option value="impGal"<?php if($to_unit == 'impGal') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($to_unit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
