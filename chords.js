function chordsSetup() {
  // Initial display settings
  this.chordsDisplay = "initial";

  // Replace square brackets with a span of class chords
  var container = document.getElementById("chords");
  if (container == null) return;   
  var content = container.innerHTML;
  content = content.replace(/\[/g, "<span class=\"chord\">").replace(/\]/g, "</span>");
  container.innerHTML = content;
  
  // Set-up the span style
  chords = document.getElementsByClassName("chord");  
  for (var i = 0; i < chords.length; i++) {
    chords[i].style.display = "inline-block";
    chords[i].style.position = "relative";        
    var width = chords[i].getBoundingClientRect().width;
    chords[i].style.marginRight = "-"+width+"px";
    var height = getComputedStyle(chords[i]).lineHeight.replace("px", "");
    if (Number.isNaN(Number.parseFloat(height))) height = chords[i].clientHeight;
    if (height != 0) height = height+"px"  
    else height = "1em";
    chords[i].style.top = "-"+height;
    chords[i].style.paddingTop = height;    
  }
}
chordsSetup();

// Set-up the show/hide button
function showHide() {
  if (this.display == "none") this.display = "inline-block";
  else this.display = "none";
  for (var i = 0; i < chords.length; i++) {
    chords[i].style.display = this.display;
  }
}