(function($) {
  var bibdkVejviser = {};

  bibdkVejviser.sleepAndGo = function(methodToExecute, time) {
    setTimeout(methodToExecute, time);
  };

  bibdkVejviser.clickSubmit = function(){
    var but = $("#edit-openagency-submit");
    but.click();
  };

  Drupal.behaviors.bibdkVejviserOnChange = {
    attach: function(context, settings) {

      var openagency_query = $("input[name='openagency_query']");

      openagency_query.change(function() {
        var value = $(this).val();
        $(this).val(value.replace("*", "?"));
      });

      openagency_query.keyup(function(event) {
        if(event.keyCode === 13) {
          // wait 0,01 sec to make the autocomplete go away
          bibdkVejviser.sleepAndGo(bibdkVejviser.clickSubmit, 100)
        }
      });
    }
  };

} (jQuery));
