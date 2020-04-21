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
  
  $to_value = convert_irish_length($from_value, $from_unit, $to_unit);
}

include_once('includes/header.php');
$page_title ='Convert Length';
?>


    <div id="main-content">

      <h1>Convert Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="grain"<?php if($from_unit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($from_unit == 'thumb-length') { echo " selected"; } ?>>Thumb Length</option>
            <option value="palm"<?php if($from_unit == 'palm') { echo " selected"; } ?>>Palm</option>
            <option value="fist"<?php if($from_unit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($from_unit == 'foot') { echo " selected"; } ?>>Feet</option>
            <option value="step"<?php if($from_unit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="double-step"<?php if($from_unit == 'double-step') { echo " selected"; } ?>>Double-Step</option>
            <option value="rod"<?php if($from_unit == 'rod') { echo " selected"; } ?>>Rod</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="grain"<?php if($to_unit == 'grain') { echo " selected"; } ?>>Grain</option>
            <option value="thumb-length"<?php if($to_unit == 'thumb-length') { echo " selected"; } ?>>Thumb Length</option>
            <option value="palm"<?php if($to_unit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($to_unit == 'fist') { echo " selected"; } ?>>Fist</option>
            <option value="foot"<?php if($to_unit == 'foot') { echo " selected"; } ?>>Feet</option>
            <option value="step"<?php if($to_unit == 'step') { echo " selected"; } ?>>Step</option>
            <option value="double-step"<?php if($to_unit == 'double-step') { echo " selected"; } ?>>Double Step</option>
            <option value="rod"<?php if($to_unit == 'rod') { echo " selected"; } ?>>Rod</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  <?php
    include_once('includes/footer.php');
