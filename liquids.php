<?php

include_once('includes/functions.php');

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

$page_title ='Convert Liquids';
include_once("includes/header.php");
?>

    <link href="includes/styles.css" rel="stylesheet">
    <div id="main-content">

      <h1>Volumizer - Liquid Measurement Converter</h1>
  
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
  <?php
    include_once('includes/footer.php');
