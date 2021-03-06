$(document).ready(function(){
    
    $('.newsPanel section').animate({height:'toggle'});
    
    var toggledNews;

    var imgItems = $('.slider li').length;
    var imgPosition =1;
    console.log(imgItems);

    for(var x=0; x < imgItems; x++)
      $('.pagination').append('<li><span></span></li>');

    $('.slider li').hide();
    $('.slider li:first').show();
    $('.pagination li:first span').css({'background': 'orange'});

    $('.pagination li').click(pagination);
    $('.right span').click({param1: 1}, movSlider);
    $('.left span').click({param1: -1}, movSlider);



    var timerId = setInterval(automaticMov, 6000);

    //---FUNCIONES---------------------------------
    function pagination(){
      var paginationPos = $(this).index() + 1;

        $('.slider li').hide();
        $('.slider li:nth-child('+ imgPosition +')').fadeOut();
        $('.slider li:nth-child('+ paginationPos +')').fadeIn();

        $('.pagination li span').css({'background':'#858585'});
        $(this).find("span").css({'background': 'orange'});

        imgPosition = paginationPos;
    }

    function automaticMov()
    {
      imgPosition++;
      if(imgPosition > imgItems)
          imgPosition = 1;

      $('.slider li').hide();

      $('.slider li:nth-child('+ imgPosition +')').fadeIn();

      $('.pagination li span').css({'background':'#858585'});
      $('.pagination li:nth-child('+imgPosition+') span').css({'background': 'orange'});

      
    }

    function movSlider(num)
    {
      clearTimeout(timerId);

      $('.slider li').hide();
      $('.slider li:nth-child('+ imgPosition +')').fadeOut();

      imgPosition = imgPosition + num.data.param1;
      if(imgPosition < 1)
          imgPosition=imgItems;
      if(imgPosition > imgItems)
          imgPosition = 1;

      $('.slider li:nth-child('+ imgPosition +')').fadeIn();

      $('.pagination li span').css({'background':'#858585'});
      $('.pagination li:nth-child('+imgPosition+') span').css({'background': 'orange'});

      timerId = setInterval(automaticMov, 5000);
    }
    
    $('.newsPanel li').hover(function(){
        toggledNews = $(this).index() + 1;

        $('.newsPanel li:nth-child(' + toggledNews +') section').animate({height:'toggle'});
        
    }, function(){
         $('.newsPanel li:nth-child(' + toggledNews +') section').animate({height:'toggle'});
    });
});
