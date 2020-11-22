<?php
/*
* Plugin Name: Chords
* Description: Add chords using shortcodes!
* Version: 2.0
* Author: Aldo D'Aquino
* Author URI: http://ald.ooo
*/

// TODO: settings page
add_option("chord_sep_l", "[");
add_option("chord_sep_r", "]");

// Replace everything inside [chords] with the rendered html
add_shortcode('chords', function($atts, $content = "") {
  $content = str_replace(get_option("chord_sep_l", "{"), "<span class=\"chord\">", $content);
  $content = str_replace(get_option("chord_sep_r", "}"), "</span>", $content);
  return '<script src="'.plugin_dir_url(__FILE__).'chords.js"></script><section id="chords">'.$content.'</section>';
});

// Replace [toggleChords] with the button
function toggleChords($atts, $content = "Toggle chords") {
  return '<button onclick=\'[...document.getElementsByClassName("chord")]
  .forEach(c => c.style.display = c.style.display === "none" ? "inline-block" : "none")\'>'.$content.'</button>';
}
add_shortcode('toggleChords', 'toggleChords');
add_shortcode('showHide', 'toggleChords');  // backwards compatibility

?>
