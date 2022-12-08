const btnSort = document.querySelector(".btn-menu-sort");
const dropMenuSort = document.querySelector(".dropdown-menu-sort");

if(btnSort != null && dropMenuSort != null){
    btnSort.addEventListener("click", function(e){
        btnSort.classList.toggle("show");
        dropMenuSort.classList.toggle("show");
    });
}
window.onclick = function(event) {
    if (!event.target.matches('.btn-menu-sort')) {
      var dropdowns = document.getElementsByClassName("dropdown-menu-sort");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

// const btnFilter = document.querySelector(".btn-menu-filter");

// if(btnSort != null){
//     btnFilter.addEventListener("click", function(e){
//         btnFilter.classList.toggle("_active");
//     });
// }  
// window.onclick = function(event) {
//     if(btnFilter != null){
//         if (!event.target.matches('.btn-menu-filter') && btnFilter.classList.contains('_active')) {
//             btnFilter.classList.remove('_active');
//         }
//     }
// }