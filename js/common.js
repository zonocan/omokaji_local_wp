// functions
// アコーディオン
// slideUp
const slideUp = (el, duration = 300) => {
    el.style.height = el.offsetHeight + "px";
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    setTimeout(() => {
      el.style.display = "none";
      el.style.removeProperty("height");
      el.style.removeProperty("padding-top");
      el.style.removeProperty("padding-bottom");
      el.style.removeProperty("margin-top");
      el.style.removeProperty("margin-bottom");
      el.style.removeProperty("overflow");
      el.style.removeProperty("transition-duration");
      el.style.removeProperty("transition-property");
      el.style.removeProperty("transition-timing-function");
    }, duration);
};  

// slideDown
const slideDown = (el, duration = 300) => {
    el.style.removeProperty("display");
    let display = window.getComputedStyle(el).display;
    if (display === "none") {
      display = "block";
    }
    el.style.display = display;
    let height = el.offsetHeight;
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.height = height + "px";
    el.style.removeProperty("padding-top");
    el.style.removeProperty("padding-bottom");
    el.style.removeProperty("margin-top");
    el.style.removeProperty("margin-bottom");
    setTimeout(() => {
      el.style.removeProperty("height");
      el.style.removeProperty("overflow");
      el.style.removeProperty("transition-duration");
      el.style.removeProperty("transition-property");
      el.style.removeProperty("transition-timing-function");
    }, duration);
}; 

// slideToggle
const slideToggle = (el, duration = 300) => {
    if (window.getComputedStyle(el).display === "none") {
      return slideDown(el, duration);
    } else {
      return slideUp(el, duration);
    }
};
// アコーディオン(終了)

const header = document.querySelector('.header');
window.addEventListener('scroll', function(){
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    header.classList.add('active');
  } else {
    header.classList.remove('active');
  }
});
// header

// const headerNavlnk = document.querySelectorAll('.pc-header-nav-link');
// for (let i = 0; i < headerNavlnk.length; i++) {
//   headerNavlnk[i].addEventListener("click", linkSwitch);
// }

// function linkSwitch() {
//   document.querySelectorAll(".link-active")[0].classList.remove('link-active');
//   this.classList.add('link-active');
// }


const humbtn = document.querySelector('.hum-btn');
const humlist = document.querySelector('.hum-list');
humbtn.addEventListener('click', () => {
  slideToggle(humlist, 300);  
  humbtn.classList.toggle('active');
});

// const humlist_a = document.querySelectorAll('.hum-list-accordion-contents li a');
// humlist_a.addEventListener('click', () => {
//   slideUp(humlist, 300);  
//   humbtn.classList.toggle('active');
// });
// バーガーメニュー

const hum_list_sitemap_home_accordion_triger_btn = document.querySelector('#hum-list-sitemap-home-accordion-triger-btn');
const hum_list_sitemap_home_accordion_list = document.querySelector('#hum-list-sitemap-home-accordion-list');

hum_list_sitemap_home_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_sitemap_home_accordion_list, 300);  
  hum_list_sitemap_home_accordion_triger_btn.classList.toggle('active');
});

const hum_list_sitemap_recomend_accordion_triger_btn = document.querySelector('#hum-list-sitemap-recomend-accordion-triger-btn');
const hum_list_sitemap_recomend_accordion_list = document.querySelector('#hum-list-sitemap-recomend-accordion-list');
hum_list_sitemap_recomend_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_sitemap_recomend_accordion_list, 300);  
  hum_list_sitemap_recomend_accordion_triger_btn.classList.toggle('active');
});

// const hum_list_sitemap_bonus_accordion_triger_btn = document.querySelector('#hum-list-sitemap-bonus-accordion-triger-btn');
// const hum_list_sitemap_bonus_accordion_list = document.querySelector('#hum-list-sitemap-bonus-accordion-list');
// hum_list_sitemap_bonus_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(hum_list_sitemap_bonus_accordion_list, 300);  
//   hum_list_sitemap_bonus_accordion_triger_btn.classList.toggle('active');
// });

const hum_list_sitemap_search_accordion_triger_btn = document.querySelector('#hum-list-sitemap-search-accordion-triger-btn');
const hum_list_sitemap_search_accordion_list = document.querySelector('#hum-list-sitemap-search-accordion-list');
hum_list_sitemap_search_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_sitemap_search_accordion_list, 300);  
  hum_list_sitemap_search_accordion_triger_btn.classList.toggle('active');
});

const hum_list_sitemap_payment_accordion_triger_btn = document.querySelector('#hum-list-sitemap-payment-accordion-triger-btn');
const hum_list_sitemap_payment_accordion_list = document.querySelector('#hum-list-sitemap-payment-accordion-list');
hum_list_sitemap_payment_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_sitemap_payment_accordion_list, 300);  
  hum_list_sitemap_payment_accordion_triger_btn.classList.toggle('active');
});

// const hum_list_sitemap_guide_accordion_triger_btn = document.querySelector('#hum-list-sitemap-guide-accordion-triger-btn');
// const hum_list_sitemap_guide_accordion_list = document.querySelector('#hum-list-sitemap-guide-accordion-list');
// hum_list_sitemap_guide_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(hum_list_sitemap_guide_accordion_list, 300);  
//   hum_list_sitemap_guide_accordion_triger_btn.classList.toggle('active');
// });

// const hum_list_sitemap_event_accordion_triger_btn = document.querySelector('#hum-list-sitemap-event-accordion-triger-btn');
// const hum_list_sitemap_event_accordion_list = document.querySelector('#hum-list-sitemap-event-accordion-list');
// hum_list_sitemap_event_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(hum_list_sitemap_event_accordion_list, 300);  
//   hum_list_sitemap_event_accordion_triger_btn.classList.toggle('active');
// });

const hum_list_sitemap_games_accordion_triger_btn = document.querySelector('#hum-list-sitemap-games-accordion-triger-btn');
const hum_list_sitemap_games_accordion_list = document.querySelector('#hum-list-sitemap-games-accordion-list');
hum_list_sitemap_games_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_sitemap_games_accordion_list, 300);  
  hum_list_sitemap_games_accordion_triger_btn.classList.toggle('active');
});

const hum_list_relation_site_triger_btn = document.querySelector('#hum-list-relation-site-triger-btn');
const hum_list_relation_site_accordion_list = document.querySelector('#hum-list-relation-site-accordion-list');
hum_list_relation_site_triger_btn.addEventListener('click', () => {
  slideToggle(hum_list_relation_site_accordion_list, 300);  
  hum_list_relation_site_triger_btn.classList.toggle('active');
});
// バーガーリストアコーディオン

const pc_header_nav_link_home = document.querySelector('#pc-header-nav-link-home');
const header_hover_lists_home = document.querySelector('#header-hover-lists-home');
pc_header_nav_link_home.addEventListener("mouseenter", () => {
  slideDown(header_hover_lists_home, 300);
});
pc_header_nav_link_home.addEventListener("mouseleave", () => {
  slideUp(header_hover_lists_home, 300);
});

const pc_header_nav_link_recomend = document.querySelector('#pc-header-nav-link-recomend');
const header_hover_lists_recomend = document.querySelector('#header-hover-lists-recomend');
pc_header_nav_link_recomend.addEventListener("mouseenter", () => {
  slideDown(header_hover_lists_recomend, 300);
});
pc_header_nav_link_recomend.addEventListener("mouseleave", () => {
  slideUp(header_hover_lists_recomend, 300);
});

const pc_header_nav_link_search = document.querySelector('#pc-header-nav-link-search');
const header_hover_lists_search = document.querySelector('#header-hover-lists-search');
pc_header_nav_link_search.addEventListener("mouseenter", () => {
  slideDown(header_hover_lists_search, 300);
});
pc_header_nav_link_search.addEventListener("mouseleave", () => {
  slideUp(header_hover_lists_search, 300);
});

const pc_header_nav_link_payment = document.querySelector('#pc-header-nav-link-payment');
const header_hover_lists_payment = document.querySelector('#header-hover-lists-payment');
pc_header_nav_link_payment.addEventListener("mouseenter", () => {
  slideDown(header_hover_lists_payment, 300);
});
pc_header_nav_link_payment.addEventListener("mouseleave", () => {
  slideUp(header_hover_lists_payment, 300);
});

const pc_header_nav_link_games = document.querySelector('#pc-header-nav-link-games');
const header_hover_lists_games = document.querySelector('#header-hover-lists-games');
pc_header_nav_link_games.addEventListener("mouseenter", () => {
  slideDown(header_hover_lists_games, 300);
});
pc_header_nav_link_games.addEventListener("mouseleave", () => {
  slideUp(header_hover_lists_games, 300);
});
// hover アコーディオン

const footer_sitemap_home_accordion_triger_btn = document.querySelector('#footer-sitemap-home-accordion-triger-btn');
const footer_sitemap_home_accordion_list = document.querySelector('#footer-sitemap-home-accordion-list');
footer_sitemap_home_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(footer_sitemap_home_accordion_list, 300);  
  footer_sitemap_home_accordion_triger_btn.classList.toggle('active');
});

const footer_sitemap_recomend_accordion_triger_btn = document.querySelector('#footer-sitemap-recomend-accordion-triger-btn');
const footer_sitemap_recomend_accordion_list = document.querySelector('#footer-sitemap-recomend-accordion-list');
footer_sitemap_recomend_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(footer_sitemap_recomend_accordion_list, 300);  
  footer_sitemap_recomend_accordion_triger_btn.classList.toggle('active');
});

// const footer_sitemap_bonus_accordion_triger_btn = document.querySelector('#footer-sitemap-bonus-accordion-triger-btn');
// const footer_sitemap_bonus_accordion_list = document.querySelector('#footer-sitemap-bonus-accordion-list');
// footer_sitemap_bonus_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(footer_sitemap_bonus_accordion_list, 300);  
//   footer_sitemap_bonus_accordion_triger_btn.classList.toggle('active');
// });

const footer_sitemap_search_accordion_triger_btn = document.querySelector('#footer-sitemap-search-accordion-triger-btn');
const footer_sitemap_search_accordion_list = document.querySelector('#footer-sitemap-search-accordion-list');
footer_sitemap_search_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(footer_sitemap_search_accordion_list, 300);  
  footer_sitemap_search_accordion_triger_btn.classList.toggle('active');
});

const footer_sitemap_payment_accordion_triger_btn = document.querySelector('#footer-sitemap-payment-accordion-triger-btn');
const footer_sitemap_payment_accordion_list = document.querySelector('#footer-sitemap-payment-accordion-list');
footer_sitemap_payment_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(footer_sitemap_payment_accordion_list, 300);  
  footer_sitemap_payment_accordion_triger_btn.classList.toggle('active');
});

// const footer_sitemap_guide_accordion_triger_btn = document.querySelector('#footer-sitemap-guide-accordion-triger-btn');
// const footer_sitemap_guide_accordion_list = document.querySelector('#footer-sitemap-guide-accordion-list');
// footer_sitemap_guide_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(footer_sitemap_guide_accordion_list, 300);  
//   footer_sitemap_guide_accordion_triger_btn.classList.toggle('active');
// });

// const footer_sitemap_event_accordion_triger_btn = document.querySelector('#footer-sitemap-event-accordion-triger-btn');
// const footer_sitemap_event_accordion_list = document.querySelector('#footer-sitemap-event-accordion-list');
// footer_sitemap_event_accordion_triger_btn.addEventListener('click', () => {
//   slideToggle(footer_sitemap_event_accordion_list, 300);  
//   footer_sitemap_event_accordion_triger_btn.classList.toggle('active');
// });

const footer_sitemap_games_accordion_triger_btn = document.querySelector('#footer-sitemap-games-accordion-triger-btn');
const footer_sitemap_games_accordion_list = document.querySelector('#footer-sitemap-games-accordion-list');
footer_sitemap_games_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(footer_sitemap_games_accordion_list, 300);  
  footer_sitemap_games_accordion_triger_btn.classList.toggle('active');
});

const footer_relation_site_triger_btn = document.querySelector('#footer-relation-site-triger-btn');
const footer_relation_site_accordion_list = document.querySelector('#footer-relation-site-accordion-list');
footer_relation_site_triger_btn.addEventListener('click', () => {
  slideToggle(footer_relation_site_accordion_list, 300);  
  footer_relation_site_triger_btn.classList.toggle('active');
});
// footer アコーディオン