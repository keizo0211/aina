<?php
/*
Template Name: single
*/
if ( in_category('1,22,15,17,19,23,21') ) {
  include(TEMPLATEPATH . '/single-rent.php');
} else if ( in_category('') ) {
  include(TEMPLATEPATH . '/single-rent.php');
}else {
  include(TEMPLATEPATH . '/single-rent.php');
}
?>
