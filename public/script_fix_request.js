
let menuToggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let clicknext = document.querySelector('.c');
let logo = document.querySelector('.title');
let title = document.querySelector('.title_2');
let title_3 = document.querySelector('.title_3')
menuToggle.onclick = function(){
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active-side');
    clicknext.classList.toggle('active');
    logo.classList.toggle('active');
    title.classList.toggle('active');
    title_3.classList.toggle('active');
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

let lists = document.querySelectorAll('.lists');
for (let i = 0; i<lists.length; i++){
    lists[i].onclick = function(){
        let j = 0;
        while(j < lists.length){
            lists[j++].className = 'lists';
        }
        lists[i].className = 'lists active';
    }
}
