;(function ($, window, document, undefined) {
  'use strict';
    var App = {
        
        cache: {
            window: $(window),
            body: $("body")
        },
        
        init: function() {
            $(document).foundation();
            this.bindEvents();
        },
        
        bindEvents: function() {


        }
    };
    App.init();
}(jQuery, this, this.document));

