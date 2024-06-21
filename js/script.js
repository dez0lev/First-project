const list = document.querySelectorAll(".dropdown-btn")
const hdown = () => {
    list.forEach(item => {
        item.parentElement.classList.remove('menu_active')
    })
}

list.forEach(item => {
    item.addEventListener('click', (e) => {
        if(e.target.closest('.menu').classList.contains('menu_active')) return hdown();
        hdown()
        item.parentElement.classList.toggle('menu_active');
    })
})

window.addEventListener('click', e => {
    const target = e.target 
    if ((!target.closest('.menu') && !target.closest('button')) || target.closest('.dropdown-container')) {
      hdown() 
    }
  })

const burger = document.querySelector('.burger');
const lines = document.querySelectorAll('.burger__line');
const header_nav = document.querySelectorAll ('.header_nav')

function toggleBurger() {
    header_nav.forEach((line) => line.classList.toggle('header_nav_active'));
    lines.forEach((line) => line.parentElement.classList.toggle('open'));
    document.body.classList.toggle('hidden');
}

burger.addEventListener('click', toggleBurger);



