//
import '../css/app.css'; 

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.mySwiper', {
    modules: [Navigation], 
    
    slidesPerView: 1,       
    spaceBetween: 10,       
    slidesPerGroup: 1,      
    loop: true,             
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('ratingContainer');
  const inputHidden = document.getElementById('ratingValue');
  
  if (!container || !inputHidden) return;
  
  const stars = container.querySelectorAll('.star-item');
  
  function renderStars(value) {
    stars.forEach(star => {
      const starValue = parseInt(star.getAttribute('data-value'));
      const icon = star.querySelector('i');
      
      if (starValue <= value) {
        star.classList.add('active');
        icon.classList.remove('bi-star');
        icon.classList.add('bi-star-fill'); 
      } else {
        star.classList.remove('active');
        icon.classList.remove('bi-star-fill');
        icon.classList.add('bi-star'); 
      }
    });
  }
  
  stars.forEach(star => {
    star.addEventListener('click', () => {
      const clickedValue = parseInt(star.getAttribute('data-value'));
      const currentValue = parseInt(inputHidden.value);
      let newValue = clickedValue;
      
      if (currentValue === clickedValue) {
        newValue = 0;
      }
      
      inputHidden.value = newValue;
      renderStars(newValue);
      
      if (typeof Livewire !== 'undefined') {
        const component = Livewire.find(container.closest('[wire\\:id]').getAttribute('wire:id'));
        if (component) {
          component.set('rating', newValue);
        }
      }
    });
    
    star.addEventListener('mouseenter', () => {
      renderStars(parseInt(star.getAttribute('data-value')));
    });
  });
  
  container.addEventListener('mouseleave', () => {
    renderStars(parseInt(inputHidden.value));
  });
});

