(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// facaebook調整
$(function(){
 $(document).ready(function(){
  $('.fb-wraps').remove();
 });
});
// $(".container>.property-card").heightLine();



 $(function(){
 $('.recommend-list h2').each(function(){
  var txt = $(this).text();
  $(this).text(
   txt.replace(/aina/g,"")
  );
 });
});