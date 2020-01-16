

const tombolSidebare = document.getElementById('tombol');
const content = document.getElementById("content");

tombolSidebare.addEventListener('click', function () {
    tombolSidebare.innerHTML = "&#9776";

});

function sidebar() {
    
    const sidebareid = document.getElementById("sidebare");
    
    sidebareid.classList.toggle('notShowContent');
    content.classList.toggle('col-md');
    content.classList.toggle('col-md-10');
    console.log("ok");
}
