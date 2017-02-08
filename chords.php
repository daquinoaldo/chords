<?php
/*
* Plugin Name: Chords
* Description: Add chords using shortcodes! Usage: [showHide]Click-me to hide chords![showHide] [chords] [A]Lorem ip[E7]sum... [/Chords]
* Version: 1.0
* Author: Aldo D'Aquino
* Author URI: http://aldodaquino.com
*/

// Register and invoke the javascript
wp_enqueue_script('chordsSetup', plugin_dir_url(__FILE__) . 'chordsSetup.js');
wp_enqueue_script('showHide', plugin_dir_url(__FILE__) . 'showHide.js');

// Replace [chords] with the div and setup the style
function chords($atts, $content = "") {
  return "<div id=\"chords\">$content</div><script>chordsSetup();</script>";
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