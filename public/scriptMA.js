let menuToggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let clicknext = document.querySelector('.c');
let logo = document.querySelector('.title');
let title = document.querySelector('.title_2');
let title_3 = document.querySelector('.title_3');
let title_4 = document.querySelector('.title_4')
let title_5 = document.querySelector('.title_5')
menuToggle.onclick = function(){
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active-side');
    clicknext.classList.toggle('active');
    logo.classList.toggle('active');
    title.classList.toggle('active');
    title_3.classList.toggle('active');
    title_4.classList.toggle('active');
    title_5.classList.toggle('active');
}

let subMenu = document.getElementById("subMenu");

function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}

// <!-- add active class in selected list item -->
let list = document.querySelectorAll('.list');
for (let i = 0; i<list.length; i++){
    list[i].onclick = function(){
        let j = 0;
        while(j < list.length){
            list[j++].className = 'list';
        }
        list[i].className = 'list active';
    }
}

// // add hovered class in selected list item
// let list = document.querySelectorAll('.navigation li');
// function activeLink(){
//     list.forEach((item) =>
//     item.classList.remove('hovered'));
//     this.classList.add('hovered');
// }
// list.forEach((item) =>
// item.addEventListener('mouseover',activeLink));

// //MenuToggle
// let toggle = document.querySelector('.toggle');
// let navigator = document.querySelector('.navigator');
// let main = document.querySelector('.main');

// toggle.onclick = function(){
//     navigator.classList.toggle('active');
//     main.classList.toggle('active');
// }