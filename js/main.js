// JavaScript Document

$('document').ready(function () {
  showContainer();
  validForm();
  todayDate();
  chatBox();
});

function showContainer() {

  $('a').click(function () {
    var linkPath = $(this).attr('href');
    var titleName = [];

    if (linkPath === '#modal') {
      titleName = 'Sign In';
    } else if (linkPath === '#signup') {
      titleName = 'Sign Up';
    } else if (linkPath === '#view') {
      titleName = 'Workout Details';
    } else if (linkPath === '#add') {
      titleName = 'Create Workout';
    } else if (linkPath === '#userPic') {
      titleName = 'Upload Image';
    }

    $(linkPath).dialog({
      title: titleName,
      autoOpen: true,
      dialogClass: 'X',
      draggable: false,
      modal: true,
      resizable: false,
      width: 'auto'
    });
  });
}

function validForm() {
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

//  $('.chat-form textarea').keyup(function() {
//    var chat = $('.chat-form textarea').val();
//    $.post('chat.php', {
//      message: chat
//    }, function() {
//      $('.chat-message').html(data);
//    });
//  })

  var chatCount = 1;
   $('#btn').click(function() {
     chatCount = chatCount +1;
    $('.chat-message').load('include/chat.php', {
      chatNewCount: chatCount
    });
  });
}
