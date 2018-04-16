function Dropdown(e, index) {
  var tobedisplayed = document.getElementsByName("dropdowntobedisplayed")[index]
  tobedisplayed.classList.toggle("show")
}

function reset() {
    var toReset = Array.from(document.getElementsByClassName("showsong"))
    toReset.forEach( el => {
        el.classList.remove("showsong")
    })
}

function Show(e, index) {
  var tobedisplayed = document.getElementsByName("tobeshowed")[index]
  reset()
  tobedisplayed.classList.toggle("showsong")
}

window.addEventListener("load", function() {
  var dropdowns = Array.from(document.getElementsByName("dropdown"))
  var links = Array.from(document.getElementsByName("show"))
  //dropdown
  dropdowns.forEach( (el, index) => {
    el.addEventListener("click", function(e) {
      var i = index
      Dropdown(e, i)
    })
  })

    links.forEach( (el, index) => {
    el.addEventListener("click", function(e) {
      var i = index
      Show(e, i)
    })
  })
})
