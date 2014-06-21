/*
*  learning-tool-incline-force-calculator.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {


  $('#submit_incline_data').live('click', function() {
    var field = document.getElementById('mass');
    var testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      alert("The mass field was left blank. Please input a value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else if(testvalue<0) {
      alert("The mass field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('inclination_angle');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
        alert("The angle of inclination  was left blank. Please input a value.");
        field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
        field.focus();
        return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('coeff_static');
    testvalue = field.value;
    if(testvalue<0) {
      alert("The Coefficient of Static Friction provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else if(testvalue>1) {
      alert("The Coefficient of Static Friction provided was greater than 1. Please input a positive value between 0 and 1.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('coeff_kinetic');
    testvalue = field.value;
    if(testvalue<0) {
      alert("The Coefficient of Kinetic Friction field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else if(testvalue>1) {
      alert("The Coefficient of Kinetic Friction provided was greater than 1. Please input a positive value between 0 and 1.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
      if( (testvalue>0) && (testvalue<1) ) {
        field = document.getElementById('friction_application');
        if($('#friction_application option:selected').val()=='none') {
          alert("Please indicate how Kinetic Friction applies to this problem.");
          field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
          field.focus();
          return false;
        }
        else {
          field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
        }
      }
    }

    _gaq.push(['_trackEvent', 'Physics', 'Incline Force Calculator', 'Compute force vectors for an object on incline']);
  }); //end submit click handler

}); //end document ready function