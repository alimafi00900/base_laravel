
$(".top-main-slider-owl-carousel").owlCarousel({
  'loop': true,
  'items': 1,
  'autoplay': true,
  'dots': true,
  'autoplayTimeout': 6000,

});
try{
document.getElementById("tab1-button").onclick=function(){
  tabSelector('tab1-body')
}
document.getElementById("tab2-button").onclick=function(){
  tabSelector('tab2-body')
}
document.getElementById("tab3-button").onclick=function(){
  tabSelector('tab3-body')
}
document.getElementById("tab4-button").onclick=function(){
  tabSelector('tab4-body')
}
}catch{}
function tabSelector(tabIndex) {
  let res = document.getElementsByClassName('tab-bar')[0].innerHTML;
  let list_mach = res.match(/id=\"(.*?)\"/gm);
  for (let i = 0; i < list_mach.length; i++) {
    let ff = list_mach[i].replace('id=\"', '');
    let ress = ff.replace('\"', '');
    document.getElementById(ress).style.background = "transparent"
    let rexs = ress.replace('button', 'body');
    document.getElementById(rexs).style.display = "none";
  }
  document.getElementById(tabIndex).style.display = "flex";
  let mm = tabIndex
  document.getElementById(mm.replace('body', 'button')).style.background = "#0466c8"
}
function clearSearch_box() {
  document.getElementById('site-profile-search-input').value = "";
}
$(".fit-body-row").owlCarousel({

  'rtl': true,
  'dots': false,
  'center': true,
  'autoplayTimeout': 5000,
  'loop': true,
  'margin': 10,
  'nav': true,
  'responsive': {
    0: {
      'items': 1
    },
    557: {
      'items': 2
    },
    853: {
      'items': 3
    }
  }
});


function classAdd(id,className){
 try{document.getElementById(id).classList.add(className)}catch{}
}
function classRemove(id,className){
 try{document.getElementById(id).classList.remove(className)}catch{}
}




window.onscroll = function () {
  top_main_nav_row_fluid_fixed();

}
let topNavRow = document.getElementById("top-main-nav-row-fluid")
let topNavRowSticy =129;
 /*   topNavRow.offsetTop*/
function top_main_nav_row_fluid_fixed() {
  if (window.pageYOffset > topNavRowSticy && window.innerWidth > 853) {
    topNavRow.classList.add("top-main-nav-row-fluid-row-fixed")
    classAdd("top-header-row-con","top-header-row-con-fix")
  }
  else {
    topNavRow.classList.remove("top-main-nav-row-fluid-row-fixed")
    classRemove("top-header-row-con","top-header-row-con-fix")
  }

}

document.getElementById("menu-button").onclick=function (){
  classAdd("menu-mobile-nav","menu-mobile-nav-js");
  classAdd("menu-mobile-background","menu-mobile-background-js")
  classAdd("body","body-fix")
}
document.getElementById("menu-mobile-background").onclick=function(){
  classRemove("menu-mobile-nav","menu-mobile-nav-js")
  classRemove("menu-mobile-background","menu-mobile-background-js")
  classRemove("body","body-fix")
}

let darkMood = false;
document.getElementById("dark-mood-button").onclick=function (){
  darkmood()
}
function darkmood() {
  if (darkMood == false) {
    darkMood = true
    classAdd("dark-mood-button","dark-mood-button-hover")
    classAdd("dark-mood-button-button","dark-mood-button-hover-button")
    classAdd("top-header-row","darkmood-header")
    classAdd("body-tab-menutab-bar","darkmood")
    classAdd("content-body-row","darkmood")
    classAdd("body-description-row","darkmood")
    classAdd("body-articles-row","darkmood")
    classAdd("footer","darkmood")
    classAdd("body","darkmood-body")
    classAdd("footer-main-body","darkmood-footer")
    classAdd("site-profile-search","darkmood-body-search-box")
    classAdd("top-main-nav-row","darkmood-header-nav")
    classAdd("body-main-products-row","darkmood")
    classAdd("body-main-products-row-head","darkmood-header-nav")
    classAdd("product-main-row","darkmood-header")
    classAdd("specifications-row","darkmood-header")
    classAdd("support-row-body","darkmood-header")
    classAdd("support-row-head","darkmood-header-nav")

  } else {
    darkMood = false
    classRemove("dark-mood-button","dark-mood-button-hover")
    classRemove("dark-mood-button-button","dark-mood-button-hover-button")
    classRemove("top-header-row","darkmood-header")
    classRemove("body-tab-menutab-bar","darkmood")
    classRemove("content-body-row","darkmood")
    classRemove("body-description-row","darkmood")
    classRemove("body-articles-row","darkmood")
    classRemove("footer","darkmood")
    classRemove("body","darkmood-body")
    classRemove("footer-main-body","darkmood-footer")
    classRemove("site-profile-search","darkmood-body-search-box")
    classRemove("top-main-nav-row","darkmood-header-nav")
    classRemove("body-main-products-row","darkmood")
    classRemove("body-main-products-row-head","darkmood-header-nav")
    classRemove("product-main-row","darkmood-header")
    classRemove("support-row-body","darkmood-header")
    classRemove("support-row-head","darkmood-header-nav")
  };

}


$(".mimi-pic-slider-owl-carousel").owlCarousel({
  'rtl': true,
  'dots': false,
  'nav': false,

});
