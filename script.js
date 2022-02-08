$(function(){
    $(window).scroll(function(){
        var skill_h=$(".skill_h").offset().top;
        var cover_1=$(".cover_1").offset().top;
        var cover_2=$(".cover_2").offset().top;
        var cover_3=$(".cover_3").offset().top;
        var cover_4=$(".cover_4").offset().top;
        var skill_1=$(".skill_1>.text").offset().top;
        var skill_2=$(".skill_2>.text").offset().top;
        var skill_3=$(".skill_3>.text").offset().top;
        var skill_4=$(".skill_4>.text").offset().top;
        var works_h=$(".works_h").offset().top;
        var contact_h=$(".contact_h").offset().top;
        var window_h=$(window).height();
        $(".center").css("top",window_h/2);
        var center=$(".center").offset().top;
        console.log(skill_1);
        console.log(center);
        // console.log(skill_h);
        if(center>skill_h){
          $(".skill>h2").addClass("appear");
        }
        if(center>cover_1){
            $(".cover_1").addClass("appear");
            $(".item_1").addClass("appear");
            
        }
        if(center>cover_2){
            $(".cover_2").addClass("appear");
            $(".item_2").addClass("appear");
        }
        if(center>cover_3){
            $(".cover_3").addClass("appear");
            $(".item_3").addClass("appear");
        }
        if(center>cover_4){
            $(".cover_4").addClass("appear");
            $(".item_4").addClass("appear");
        }
        if(center>skill_1){
            $(".skill_1>.text").addClass("appear");
        }
        if(center>skill_2){
            $(".skill_2>.text").addClass("appear");
        }
        if(center>skill_3){
            $(".skill_3>.text").addClass("appear");
        }
        if(center>skill_4){
            $(".skill_4>.text").addClass("appear");
        }
        if(center>works_h){
            $(".works>h2").addClass("appear");
        }
        if(center>contact_h){
            $(".contact>h2").addClass("appear");
        }
    });
});
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 2,
    spaceBetween: 15,
    centeredSlides:true,
    loop:true,
    effect: 'coverflow',
    speed:600,
    autoplay: {
      delay: 8000,
      disableOnInteraction: true,
    },
    // cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
});

// const swiper = new Swiper('.swiper-container', {
//     slidesPerView: 1.5,
//     spaceBetween: 30,
//     loop:true,
//     effect: 'coverflow',
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//   });


