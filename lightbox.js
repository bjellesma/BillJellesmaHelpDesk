(function($){
  //fn is used to extend functionality
  //essentially creates an object
  //object instantiation is on index page
  $.fn.modal = function(opt){
    var settings, createModal, body;
    //allows for default settings
    settings = $.extend({
      'thickbox': 'thickbox',
      'close': 'modal-close',
      'closeText': '',
      'shade': 'thickbox-shade'
    }, opt);
    //TODO change to a better selector than running thru entire doc
    body = $('body');
    closeModal = function(modal, shade){
      //remove elements from DOM
      modal.remove();
      shade.remove();
    };

    //refers to element being targetted by thickbox
    //since we're using "this", we need to have the funtion call further down in the dom
    this.on('click', function(e){
      var self = $(this);

      //ajax request to file
      $.ajax({
        url:self.data('content'),
        type: 'get',
        cache: false,
      }).done(function(data){
        createModal(data);
      // if err out
      }).error(function(){
        //TODO change
        createModal('An error has occured. Please contact the web admin. Error: 1');
      });

        e.preventDefault();

    });
    createModal = function(data){
      var shade, close, modal;
      console.log(data);
      shade = $('<div />', {
        //creates class attribute with what we have put for settings.shade in index
        class: settings.shade
        //the following will add the close variable that weve created
      }).on('click', function(){
        closeModal(modal, shade);
      });
      close = $('<a />', {
        text: settings.closeText,
        class: settings.close,
        href: '#'
      }).on('click', function(e){
        closeModal(modal, shade);
        //the following code prevents the default behavior of the browser so that the anchor doesnt take you back to the top
        e.preventDefault();
      });
      modal = $('<div />', {
        html: data,
        //creates class attribute with what we have put for settings.shade in index
        class: settings.thickbox
      }).append(close);


      body.prepend(shade, modal);
    };
  };
})(jQuery);
