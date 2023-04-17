const navbar_links = document.getElementById('navbar_links');
const menu_btn = document.getElementById('menu_btn');

menu_btn.addEventListener('click', mobilemenu);

function mobilemenu(){
    navbar_links.classList.toggle('hidden');
}