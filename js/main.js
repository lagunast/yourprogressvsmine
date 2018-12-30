// JavaScript Document

$('document').ready(function () {
  showContainer();
  validForm();
  todayDate();
  chatBox();
  drag();
});

function drag() {
  $('.schedule').sortable();

  $('#add_tab').tabs();
} // end drag

function showContainer() {

  var width = $(window).width();

  if (width < 700) {
    alert(width);
  } else {
    $('.profile_head a, .schedule a, .signin a, .signup a, .forgotPassword ').click(function () {
      var linkPath = $(this).attr('href');
      var titleName = [];

      if (linkPath === '#signin') {
        titleName = 'Sign In';
      } else if (linkPath === '#signup') {
        titleName = 'Sign Up';
      } else if (linkPath === '#view') {
        titleName = 'Workout Details';
      } else if (linkPath === '#add') {
        titleName = 'Create Workout';
      } else if (linkPath === '#userPic') {
        titleName = 'Upload Image';
      } else if (linkPath === '#reset') {
        titleName = 'Reset Password';
      }

      $(linkPath).dialog({
        title: titleName,
        autoOpen: true,
        dialogClass: 'fixed-dialog',
        draggable: false,
        modal: true,
        resizable: false,
        width: 'auto'
      });
    });
  }
} // end showContainer

function validForm() {
  /* Login Validation */
  $('.login form').submit (function (evt) {
    evt.preventDefault();
    var uid = $('.login form .uid input').val();
    var pwd = $('.login form .password input').val();
    var submit = $('.login form #submit').val();

    $('.login .form-message').load('include/login.php', {
      uid: uid,
      pwd: pwd,
      submit: submit
    }); // end load
  }); // end submit
  /* End Login Validation */

  /* Signup Validation */
  $('.signup_form form').submit (function (evt) {
    evt.preventDefault();
    var uid = $('.signup_form form .uid input').val();
    var first = $('.signup_form form .first input').val();
    var last = $('.signup_form form .last input').val();
    var dob = $('.signup_form form .dob input').val();
    var goal = $('.signup_form form .goal select').val();
    var email = $('.signup_form form .email input').val();
    var gender = $('.signup_form form .male input, .signup_form form .female input').val();
    var pwd_one = $('.signup_form form .password_one input').val();
    var pwd_two = $('.signup_form form .password_two input').val();
    var qoute = $('.signup_form form .qoute textarea').val();
    var submit = $('.signup_form form #submit').val();

    $('.signup_form .form-message').load('include/signup.php', {
      uid: uid,
      first: first,
      last: last,
      dob: dob,
      goal: goal,
      email: email,
      gender: gender,
      pwd_one: pwd_one,
      pwd_two: pwd_two,
      qoute: qoute,
      submit: submit
    }); // end load
  }); // end submit
  /* End Signup Validation */

  $('#pickDate').datepicker({
    buttonImageOnly: true,
    changeYear: true,
    showOtherMonths: true,
    yearRange: '-50:+0'
  }); // end datepicker
} // end ValidForm

function todayDate() {

  /* Highlight The Day Of The Week */
  var now = new Date();
  var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

  var today = days[now.getDay()];
  document.getElementById(today).style.background = 'rgba(0, 0, 0, 0.30)';
  /* End Highlight The Day Of The Week */

} // end todayDate

function chatBox() {

  var chatCount = 1;
  $('#btn').click(function (evt) {
    evt.preventDefault();
    var chat = $('.chat-form textarea').val();
    $.post('include/chat.php', {
      message: chat
    });
    $('.chatlogs').load('include/chat.php');
  });
} // end chatBox
