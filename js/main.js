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
}

function showContainer() {

  var width = $(window).width();

  if (width < 700) {
    alert(width);
  } else {
    $('.profile_head a, .schedule a, .signin a, .signup a ').click(function () {
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
}

function validForm() {
  $('input').removeAttr('required');

  $('.signup form').validate({
    rules: {
      uid: 'required',
      first: 'required',
      last: 'required',
      dob: 'required',
      email: 'required',
      gender: 'required',
      pwd: 'required',
      pwd_one: 'required',
      pwd_two: 'required'
    }
  });

  $('#pickDate').datepicker({
    buttonImageOnly: true,
    changeYear: true,
    showOtherMonths: true,
    yearRange: '-50:+0'
  });
}

function todayDate() {

  /* Highlight The Day Of The Week */
  var now = new Date();
  var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

  var today = days[now.getDay()];
  document.getElementById(today).style.background = 'rgba(0, 0, 0, 0.30)';
  /* End Highlight The Day Of The Week */

}

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
}
