const btnSort = document.querySelector(".btn-menu-sort");

if(btnSort != null){
    btnSort.addEventListener("click", function(e){
        btnSort.classList.toggle("_active");
    });
}  
window.onclick = function(event) {
    if(btnSort != null){
        if (!event.target.matches('.btn-menu-sort') && btnSort.classList.contains('_active')) {
            btnSort.classList.remove('_active');
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