let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});


let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

if (loadMoreBtn) {
   loadMoreBtn.addEventListener('click', () => {
      let boxes = [...document.querySelectorAll('.packages .box-container .box')];
      if (boxes.length === 0) {
         console.error('No boxes found to display');
         return;
      }
      let end = Math.min(currentItem + 3, boxes.length);
      for (let i = currentItem; i < end; i++) {
         boxes[i].style.display = 'inline-block';
      }
      currentItem = end;
      if (currentItem >= boxes.length) {
         loadMoreBtn.style.display = 'none';
      }
   });
} else {
   console.error('Load more button not found');
}
