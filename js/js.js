console.log("coucou");


// $(".li-menu").hover(function(){
//     $(".link-menu").css("color","white");
// });


// $(".fa-bars").hover(function(){
//   $(".hidden-menu").css("display","block");
// },function(){
//   setTimeout(function(){
//     $(".hidden-menu").css("display","none");
//   },5000);
// });
// $(".hidden-menu").hover(function(){
//   $(".hidden-menu").css("display","block");
// },function(){
//   setTimeout(function(){
//     $(".hidden-menu").css("display","none");
//   },5000);
// });
$(".fa-bars").click(function(){
  $(".hidden-menu").toggle();
});



colorMenuHover(".li-menu1",".link-menu1");
colorMenuHover(".li-menu2",".link-menu2");
colorMenuHover(".li-menu3",".link-menu3");
colorMenuHover(".li-menu4",".link-menu4");
colorMenuHover(".li-menu5",".link-menu5");
colorMenuHover(".li-menu6",".link-menu6");
function colorMenuHover(li,link){
  $(li).hover(function(){
    $(link).css("color","white");
  },function(){
    $(link).css("color","rgb(151,151,151)");
  }
);
}
