// POP UP MODALS

const modalContainer =  document.querySelector('.modal-container');
const overlay =  document.querySelector('.overlay');
const add = document.querySelector('.add');

add.addEventListener('click', () =>{
    console.log("click red plus btn");
})

const showModal = () =>{
    console.log('Modal Successfully OPEN');


    modalContainer.classList.add('show');
    overlay.classList.add('active');
}

const closeModal = () =>{
    console.log('Modal Successfully CLOSE');


    modalContainer.classList.remove('show');
    overlay.classList.remove('active');
}


// SIDEBAR
const menu = document.querySelector('.menu-bar');
const close = document.querySelector('.close');
const sidebar = document.querySelector('.sidebar');

menu.addEventListener('click', () =>{
    // alert('testing');
    sidebar.classList.add('show');

})

close.addEventListener('click', () =>{
    sidebar.classList.remove('show');
    
})