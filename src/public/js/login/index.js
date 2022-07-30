$(function(){
  $('.toggle').on('click', function(){
    $('.container').addClass('active');
  });


  $('.close').on('click', function(){
    $('.container').removeClass('active');
  });
});