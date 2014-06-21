jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function

    var i = 8;

    while(i>0) {
      $('#tourette_syndrome_widget.tic-on').effect( "bounce", "slow" );
      $('#tourette_syndrome_widget.tic-on').effect( "pulsate", "normal" );
      $('#tourette_syndrome_widget.tic-on').effect( "shake", "fast" );
      $('#tourette_syndrome_widget.tic-on').effect( "pulsate", "normal" );
      i--;
    }


    $('#stop').click(function() {
      $('#tourette_syndrome_stop_button').hide();
      $('#tourette_syndrome_widget.tic-on').hide();
      $('#tourette_syndrome_widget.tic-off').show();
      });

    var content;
    content = $('#ts-overlay').html();

    $("a[rel^='prettyPhoto']").prettyPhoto({
			opacity: 0.80, /* Value between 0 and 1 */
			default_width: 720,
			theme: 'light_rounded' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
    });

});

