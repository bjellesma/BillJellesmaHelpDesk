//TODO e.preventDefault
'use strict';
//the way that this slider works is it stores all the images on one line so we basically need to move the margin left with this javascript code
//set it to document load
$(function() {

    //settings for slider
    var width = 720;
    var animationSpeed = 1000;
    var pause = 3000;
    var currentSlide = 1;
    var runAgain = 0;
    var noPause = 0;

    //cache DOM elements
    //using $ in variable names is just to know it's a jquery variable, it's arbitrary
    var $slider = $('#slider');
    //find slides class in slider variable
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;

    function startSlider() {
      if(runAgain === 1){
        setTimeout(function(){}, pause);
        runAgain = 0;
      }
      //making a variable here is good coding for js
      //after 3 seconds, this will animate for 1 second to the next slide
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
              //if last slide, go to image 1
              //listen for mouseenter and pause
              if (++currentSlide === $slides.length) {
                   currentSlide = 1;
                   $slideContainer.animate({'margin-left': '+='+(width*($slides.length-1))}, 100, function(){});

               }
             });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    startSlider();


});
