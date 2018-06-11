// JavaScript Document

/* Highlight The Day Of The Week */
var now = new Date();
var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

var today = days[ now .getDay() ];
document.getElementById(today).style.background = 'rgba(0, 0, 0, 0.30)';
/* End Highlight The Day Of The Week */