function Dropdown(e, index) {
  var tobedisplayed = document.getElementsByName("dropdowntobedisplayed")[index]
  tobedisplayed.classList.toggle("show")
}

window.onclick = function(event) {
  if (!event.target.matches('.button')) {

    var dropdowns = document.getElementsByClassName("ContDrop");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


window.addEventListener("load", function() {
  var dropdowns = Array.from(document.getElementsByName("dropdown"))

  dropdowns.forEach( (el, index) => {
    el.addEventListener("click", function(e) {
      var i = index
      Dropdown(e, i)
    })
  })
})
