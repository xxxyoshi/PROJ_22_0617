$(function () {
  $('.sent_message').click(function () {
    var data = $(this).data();

    $("#date").text(data['date']);
    $("#email").text(data['email']);
    $("#title").text(data['title']);
    $("#messages").text(data['messages']);
  });
});

$(function (){
  $('.task').click(function (){
    $(this).toggleClass('open');

    if($(this).hasClass('open')){
      $('.tasklist').slideDown();
    }else{
      $('.tasklist').slideUp();
    }
  });
});

$(function (){
  $('.top-task').click(function (){
      $('.cover').fadeIn();
  });
  $('.cover').on('click', function(){
    $('.cover').fadeOut();
  });
  $('.tasklist').click(function(event){
    event.stopPropagation();
  });
});