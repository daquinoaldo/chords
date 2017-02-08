// Set-up the show/hide button
function showHide() {
  if (this.display == "none") this.display = "initial";
  else this.display = "none";
  for (var i = 0; i < chords.length; i++) {
    chords[i].style.display = this.display;
  }
}