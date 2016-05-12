//this function tells the browser to wait until the document is loaded to start doing this function
$(function() {
  //when clicking on a panel
  //the $ is a document selector
  $('.tab-panels .tabs li').on('click', function(){
    //this variable only gets the tab-panels that we're in
    //not necessary but better for security and performance
    var $panel = $(this).closest('.tab-panels');

    //remove active class from li that had it
    $panel.find('.tabs li.active').removeClass('active');
    //add active class to li being selected
    $(this).addClass('active');
    //figure out which panel to show
    var panelToShow = $(this).attr('rel');
    //hide current panel
    //it's a better coding practice to use a named function instead of a callback function that would require details
    $panel.find('.panel.active').slideUp(300, showNextPanel);
    //show new panel
    function showNextPanel(){
      //remove active from the panel that is being slid up
      $(this).removeClass('active');
      //the function on the end is called a callback function
      //almost everything in js can have a callback function
      //a callback function will wait until the end to be performed
      $('#'+panelToShow).slideDown(300, function(){
        //add the panel to the tab being activated
        $(this).addClass('active');
      });
    }
  });
});
