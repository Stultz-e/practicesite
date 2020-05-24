<?php 

require_once('lib/helpers.php');

function after_pagination() {
  echo 'shoenice';  
}
add_action('_practicetheme_after_pagination', 'after_pagination' );
?>