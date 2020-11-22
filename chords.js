function setupChords() {
  const chords = document.getElementsByClassName("chord")
  for (let chord of chords) {
    chord.style.display = "inline-block"
    chord.style.position = "relative"
    const width = chord.getBoundingClientRect().width
    chord.style.marginRight = "-" + width + "px"
    let height = getComputedStyle(chord).lineHeight.replace("px", "")
    if (Number.isNaN(Number.parseFloat(height))) height = chord.clientHeight
    if (height != 0) height = height + "px"
    else height = "1em"
    chord.style.top = "-" + height
    chord.style.paddingTop = height
  }
}
setupChords()
window.addEventListener("load", setupChords)
