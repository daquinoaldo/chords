<?php
/*
* Plugin Name: Chords
* Description: Add chords using shortcodes! Usage: [showHide]Click-me to hide chords![showHide] [chords] [A]Lorem ip[E7]sum... [/Chords]
* Version: 1.0
* Author: Aldo D'Aquino
* Author URI: http://aldodaquino.com
*/

// Register and invoke the javascript
wp_enqueue_script('chords', plugin_dir_url(__FILE__) . 'chords.js');

// Replace [chords] with the div and setup the style
function chords($atts, $content = "") {
  // chordsSetup is called twice: first time for a first impagination, second
  // time when all resources are loaded: the page can change during the loading
  // and margins may need to be recalculated.
  return "<div id=\"chords\">$content</div><script>chordsSetup(); window.onload = chordsSetup;</script>";
}
add_shortcode('chords', 'chords');


// Replace [showHide] with the button
function showHide($atts, $content = "") {
  if (!empty($atts[text])) return "<button onclick=\"showHide()\">$atts[text]</button>";
  if (!empty($content)) return "<button onclick=\"showHide()\">$content</button>";
  return "Show/hide chords";
}
add_shortcode('showHide', 'showHide');

?>