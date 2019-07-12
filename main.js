$(document).ready(function(){
 /*Start DocumentReady*/
 var url=document.location.href;
 $.each($("#slidetabsmenu a"),function(){
   if(this.href==url){
//     alert(this.href);
//     $(this).addClass('current');};
//     $(this).setAttribute('id','current');
//       $("li.current").removeClass("current");
       $(this).children().addClass("active");
    }else
       $(this).children().addClass("noactive");
 });
 /*End DocumentReady*/
});
