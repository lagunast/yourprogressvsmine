// JavaScript Document

$('document').ready(function () {
  todayDate();
  showContainer();
});

function todayDate() {

  /* Highlight The Day Of The Week */
  var now = new Date();
  var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

  var today = days[now.getDay()];
  document.getElementById(today).style.background = 'rgba(0, 0, 0, 0.30)';
  /* End Highlight The Day Of The Week */

}

//function showContainer() {
//  $('.container').hide();
//
//  $('#tuesday').click(function() {
//    $('.container').show();
//  });
//}

//.container {
//  width: 100%;
//  height: 100%;
//  background: rgba(2, 70, 88, 0.8);
//  opacity: 0;
//  pointer-events: none;
//  transition: all 500ms ease; }
//
//.container:target {
//  opacity: 1;
//  pointer-events: auto; }
//
//.container > div {
//  transform: translate(0px, -50px);
//  transition: all 500ms ease; }
//
//.container:target > div {
//  transform: translate(0px, 0px); }
