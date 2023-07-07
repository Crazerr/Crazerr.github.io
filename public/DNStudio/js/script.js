let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
let preveiwContainer = document.querySelector('.package-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

document.querySelectorAll('.container .row').forEach(row =>{
  row.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = row.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});