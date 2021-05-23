$(document).ready(function(){
    $(".list-group-item img").css({"opacity":0.5})

    $(".list-group-item img").mouseenter(function(){
      $(this).css({"opacity":1});
    });

    $(".list-group-item img").mouseleave(function(){
        $(this).css({"opacity":0.5});
      });
  });