(function($) {

  Drupal.behaviors.bibdkVejviserOnChange = {
    attach: function(context, settings) {

      var openagency_query = $("input[name='openagency_query']");

      openagency_query.change(function() {
        var value = $(this).val();
        $(this).val(value.replace("*", "?"));
      });
    }
  };

} (jQuery));
