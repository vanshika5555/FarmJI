$('.test-container').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  margin:10,
  nav:true,
  navText:["<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>"],

  responsive:{
      0:{
          items:1
      },
      768:{
          items:2
      },
     
  }
})