/*
*  learning-tool-rational-root-identifier.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {

print_rational_roots = function () {
  var q = $('#constant').val();
  var fieldname = "#coeff_" + $('#order option:selected').val();
  var p = $(fieldname).val();
	if((p==null)||(p=="")) {
    p = 1;
  }
  //alert("Polynomial is of order# " + fieldname + ". Leading coefficient value is: " + p + "; constant term q is: " + q + ".");

  //determine factors of p and q and output.
  $('#p_list').html( factor( p ) );
  $('#q_list').html( factor( q ) );

  var p_list = $('#p_list').html().split(" ").slice(3);
  var q_list = $('#q_list').html().split(" ").slice(3);
  console.log(p_list,q_list);
  for(i = 0; i<p_list.length; i++) {
    p_list[i] = p_list[i].replace(",","");
  }
  for(i = 0; i<q_list.length; i++) {
    q_list[i] = q_list[i].replace(",","");
  }
  console.log('after comma removal: ',p_list,q_list);

  var pq_list = new Array();
  for(i = 0; i<p_list.length; i++) {
    for(j = 0; j<q_list.length; j++) {
      pq_list.push( p_list[i] + '/' + q_list[j] );
    }
  }
  console.log(pq_list);
  var pq_listHTML = "";
  for(i = 0; i<pq_list.length; i++) {
    pq_listHTML += pq_list[i] + ', ';
  }
  pq_listHTML = pq_listHTML.substring(0,pq_listHTML.length-2);
  $('#pq_list').html( pq_listHTML );

};


// modified factorization javascript, original factorization script by Jeff LeMieux,  http://4umi.com/web/javascript/factor.php
factor = function( a ) {
 var b = a, c, output = 'Factors of ' + a + ': ';
 for(i = 1; i<=a; i++ ) {
  c = a / i;
  if( c===Math.floor( c ) ) { output += i + ', '; }
 }
 output = output.substr( 0, output.length - 2 );
 return output;
};


  var terms = null;
	$('#third').hide();
	$('#fourth').hide();
	$('#fifth').hide();
	$('#sixth').hide();
	$('#seventh').hide();
	$('#eighth').hide();
	$('#ninth').hide();
	$('#tenth').hide();

	$('input.coeff').autoNumeric({vMin: '-9999999', vMax: '999999'});


    $('#order').live('change', function() {
        terms = $('#order option:selected').val();
		var i;
		for(i=2;i<=terms;i++)
		{
			switch(i) {
			case 2:
				$('#second').show();
				break;
			case 3:
				$('#third').show();
				break;
			case 4:
				$('#fourth').show();
				break;
			case 5:
				$('#fifth').show();
				break;
			case 6:
				$('#sixth').show();
				break;
			case 7:
				$('#seventh').show();
				break;
			case 8:
				$('#eighth').show();
				break;
			case 9:
				$('#ninth').show();
				break;
			case 10:
				$('#tenth').show();
				break;
			} //end switch
		} //end for
		terms++;
		var hidestart = terms;
		for(i=hidestart;i<11;i++)
		{
			switch(i) {
			case 2:
				$('#second').hide();
				break;
			case 3:
				$('#third').hide();
				break;
			case 4:
				$('#fourth').hide();
				break;
			case 5:
				$('#fifth').hide();
				break;
			case 6:
				$('#sixth').hide();
				break;
			case 7:
				$('#seventh').hide();
				break;
			case 8:
				$('#eighth').hide();
				break;
			case 9:
				$('#ninth').hide();
				break;
			case 10:
				$('#tenth').hide();
				break;
			} // end switch
		} // end for
	}); //end option change function for order select

  //once a constant term has been supplied, calculate the possible rational roots
  $('#constant').live('change', function() {
      print_rational_roots();
  }); //end solution/root change function for possible rational roots

  $('.coeff').live('change', function() {
      print_rational_roots();
  }); //end solution/root change function for possible rational roots


}); //end document ready function