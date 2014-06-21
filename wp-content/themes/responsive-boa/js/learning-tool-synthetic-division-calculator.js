/*
*  learning-tool-synthetic-division-calculator.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {

  var terms = null;
	$('#third').hide();
	$('#fourth').hide();
	$('#fifth').hide();
	$('#sixth').hide();
	$('#seventh').hide();
	$('#eighth').hide();
	$('#ninth').hide();
	$('#tenth').hide();

	$('input.solution').autoNumeric({vMin: '-999999', vMax: '999999'});


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


$('#submit_divide').live('click', function() {
        var order = $('#order option:selected').val();
//       alert("order of polynomial in numerator is: " + order);
		var fields_to_validate = parseInt(order)+1;
//		alert("The number of fields to validate is " + fields_to_validate);
		for(i=0;i<=fields_to_validate;i++) {
//			alert("Field to validate is field #" + i);
      switch(i) {
			case 0:
			{
        fieldname = "#solution";
				break;
			}
			case 1:
			{
				fieldname = "#constant";
				break;
			}
			default:
			{
				fieldname = "#coeff_" + (i-1).toString();
				break;
			}
			}// end switch

            var testvalue = $(fieldname).val();

//			alert("Validating field " + fieldname + " value of =" + testvalue);

			if((testvalue==null)||(testvalue=="")) {
//				alert("Field " + fieldname + " was left blank, being set to 1");
				$(fieldname).attr('value',1);
//				alert("Field " + fieldname + " has been set to 1");
				}

        } //end for

	}); //end submit click handler

}); //end document ready function