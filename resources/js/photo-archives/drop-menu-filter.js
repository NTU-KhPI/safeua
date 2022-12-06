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