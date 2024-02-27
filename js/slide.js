// alert('hello');
const recomend_swiper = new Swiper(".recomend-swiper", {
    loop: true,
    speed: 300,
    spaceBetween: 20,
    slidesPerView: 1.3,  
    breakpoints: {
      960: {
          // ウィンドウ幅が600以上の時の表示枚数
          slidesPerView: 2.5,
          spaceBetween: 50,
      },
    },     
      
    centeredSlides: true,
    autoHeight: true,
    autoplay: {
      delay: 10000
    },
    //本来見えていない部分にスライドを複製する
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loopAdditionalSlides: 10
});


const partenership_swiper = new Swiper(".partenership-swiper", {
  loop: true,
  speed: 300,
  spaceBetween: 20,

  slidesPerView: 1.3,
  breakpoints: {
    960: {
        // ウィンドウ幅が600以上の時の表示枚数
        slidesPerView: 2.5,
        spaceBetween: 30,
    },
  },  
  centeredSlides: true,
  autoHeight: true,
  autoplay: {
    delay: 5000
  },
  //本来見えていない部分にスライドを複製する
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  loopAdditionalSlides: 10
});