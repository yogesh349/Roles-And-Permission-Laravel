// window.onload = function(){
//   var divToHide = document.getElementsByClassName('choose_role');
//   console.log(divToHide[0]);
//   document.onclick = function(e){
//     if(e.target!== divToHide[0]){
//       $(".choose_role").css("display","none");

//     }
//   };
// };


$("#ham_logo").click(function(e){
    e.preventDefault();
  $(".slidebar-nav").toggle(10);
  });

  

  
  