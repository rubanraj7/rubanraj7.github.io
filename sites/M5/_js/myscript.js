  $(document).ready(function(){
    $(".mobileMenu").unbind("click").click(function(){
        $("#menuBar").slideToggle();
        console.log("toggle");
    });
});


$(function () {
    $('.showFirst').unbind('click').bind('click',function () {
        console.log("pressed");
        $(this).children('ul').slideToggle();
//        $('.showFirst > li').not(this).find('ul').slideUp();
    });
});
  