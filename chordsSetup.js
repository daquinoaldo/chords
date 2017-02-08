function chordsSetup() {
  // Initial display settings
  this.chordsDisplay = "initial";

  // Replace square brackets with a span
  var content = document.getElementById("chords").innerHTML;
  content = content.replace(/\[/g, "<span class=\"chord\">").replace(/\]/g, "</span>");
  document.getElementById("chords").innerHTML = content;

  // Set-up the span style
  chords = document.getElementsByClassName("chord");
  for (var i = 0; i < chords.length; i++) {
   chords[i].style.position = "relative";
    chords[i].style.top = "-1em";
    var width = parseInt(chords[i].getBoundingClientRect().width);
    chords[i].style.marginRight = -width+"px";
    var height = getComputedStyle(chords[i]).lineHeight.replace("px", "");
    chords[i].style.lineHeight = 2*height+"px";
  }
}