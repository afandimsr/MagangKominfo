// let edit = document.getElementById("edit");
// edit.addEventListener("click", function () {
//     const eTitle = document.getElementById("exampleModalLongTitle");
//     eTitle.innerHTML = "Form Ubah Data Buku";
//     let title = document.getElementById('judul');
//     title.value = ;
// });

// console.log("ok");
// function ubahData() {

//     let eTitle = document.getElementById("exampleModalLongTitle");
//     eTitle.innerHTML = "Form Ubah Data BUku";
//     eTitle.style.display = "block !important";
//     eTitle.style.opacity = "1 !important";


// }

// function TambahData() {


// }

const tombolSidebare = document.getElementById('tombol');
const content = document.getElementById("content");

tombolSidebare.addEventListener('click', function () {
    tombolSidebare.innerHTML = "&#9776";

});

function sidebar() {
    const sidebarColum = document.getElementById("sidebar");
    const sidebareid = document.getElementById("sidebare");
    // const sidebare = document.getElementsByClassName("sidebar")[0];
    sidebareid.classList.toggle('sidebar');
    content.classList = "col-md-12";
    // tombolSidebare.innerHTML = "&#9776";
    // content.classList.toggle('col-md-12');
    console.log("ok");
}
