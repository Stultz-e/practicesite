<?php 

require_once('lib/helpers.php');

function after_pagination() {
  echo 'shoenice';  
}

function after_pagination2() {
  echo 'glerpinstein';  
}

add_action('_practicetheme_after_pagination', 'after_pagination', 2 );
add_action('_practicetheme_after_pagination', 'after_pagination2', 1 );

add_action( 'wp_head', 'function_to_add');

  function function_to_add() {
    echo '<style>body{background-color:#f03; !important;}</style>';
  }


?>
