<?php

//Change any WordPress Text on Entire Site for multiple

function wpfi_change_text( $translated_text ) {
if ( $translated_text == 'ORIGINAL TEXT1' ) {
	$translated_text = 'NEW TEXT1';
}

if ( $translated_text == 'ORIGINAL TEXT2' ) {
	$translated_text = 'NEW TEXT2';
}

if ( $translated_text == 'ORIGINAL TEXT3' ) {
	$translated_text = 'NEW TEXT3';
}

if ( $translated_text == 'ORIGINAL TEXT4' ) {
	$translated_text = 'NEW TEXT4';
}
return $translated_text;
}
add_filter( 'gettext', 'wpfi_change_text', 20 );




// it's for single text

function wpfi_change_text( $translated_text ) {
 if ( $translated_text == 'ORIGINAL TEXT' ) {
  $translated_text = 'NEW TEXT';
 }
 return $translated_text;
}
add_filter( 'gettext', 'wpfi_change_text', 20 );