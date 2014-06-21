/*
*  learning-tool-vector-calculator.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {

  $('#submit_components').live('click', function() {
    var field = document.getElementById('comp_x');
    var testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      alert("X component field was left blank. Please input a value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('comp_y');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
        alert("Y component field was left blank. Please input a value.");
        field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
        field.focus();
        return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    _gaq.push(['_trackEvent', 'Physics', 'Vector Computation', 'Build vector from components']);
  }); //end submit click handler





  $('#submit_combination').live('click', function() {
    var field = document.getElementById('vector_1');
    var testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      alert("The vector magnitude field was left blank. Please input a value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else if(testvalue<0) {
      alert("The vector magnitude field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('vector_ang_1');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
        alert("The vector angle field was left blank. Please input a value.");
        field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
        field.focus();
        return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }


    field = document.getElementById('vector_2');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      alert("The vector magnitude field was left blank. Please input a value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
    return false;
    }
    else if(testvalue<0) {
      alert("The vector magnitude field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('vector_ang_2');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
        alert("The vector angle field was left blank. Please input a value.");
        field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
        field.focus();
        return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }


    field = document.getElementById('vector_3');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      field.value = 0;
    }
    else if(testvalue<0) {
      alert("The vector magnitude field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }


    field = document.getElementById('vector_ang_3');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      field.value = 0;
    }
    _gaq.push(['_trackEvent', 'Physics', 'Vector Addition', 'Construct vector from vectors']);
  }); //end submit click handler





  $('#submit_vector').live('click', function() {
    var field = document.getElementById('vector_mag');
    var testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
      alert("The vector magnitude field was left blank. Please input a value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else if(testvalue<0) {
      alert("The vector magnitude field provided was negative. Please input a positive value.");
      field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
      field.focus();
      return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    field = document.getElementById('vector_ang');
    testvalue = field.value;
    if((testvalue==null)||(testvalue=="")) {
        alert("The vector angle field was left blank. Please input a value.");
        field.style.cssText = 'color:#990000;background:#ffccff;font-weight:bold;';
        field.focus();
        return false;
    }
    else {
      field.style.cssText = 'color:#000;background:#fff;font-weight:normal;';
    }

    _gaq.push(['_trackEvent', 'Physics', 'Vector Decomposition', 'Resolve a vector into its components']);
  }); //end submit click handler

}); //end document ready function