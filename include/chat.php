<?php

include 'dbh.php';

$chatNewCount = $_POST['chatNewCount'];
    $sql = 'SELECT * FROM chat LIMIT 1';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['message'];
      }
      } else {
        echo '';
    }











//session_start();
//ob_start();
//header('Content-type: application/json');
//
//date_default_timezone_get('utc');
//
//include 'dbh.php';
//
//if(mysqli_connect_errno()) {
//  echo '<p>Error: Could not connect to database.<br> Please try again later.</p>';
//  exit;
//}
//try {
//  $currentTime = time();
//  $session_id = session_id();
//
//  $lastPoll = isset($SESSION['last_poll']) ? $_SESSION['last_poll'] : $currentTime;
//
//  $action = isset ($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD'] == 'POST') ? 'send' : 'poll';
//
//  switch($action) {
//    case 'poll':
//      $query = 'SELECT * FROM chat WHERE timestamp >= ?';
//
//      $stmt = $db->prepare($query);
//      $stmt->bind_param('s', $lastPoll);
//      $stmt->execute();
//      $stmt->bind_result($id, $message, $session_id, $date_created);
//      $result = $stmt->get_result();
//
//      $newChats = [];
//      while($chat = $result->fetch_assoc()) {
//
//        if($session_id == $chat['user_id']) {
//          $chat['user_id'] = 'self';
//        }
//        else {
//          $chat['user_id'] = 'other';
//        }
//
//        $newChats[] = $chat;
//      }
//
//      $_SESSION['last_poll'] = $currentTime;
//
//      print json_encode([
//        'success' => true,
//        'messages' => $newChats
//      ]);
//      exit;
//
//    case 'send':
//
//      $message = isset($_POST['message']) ? $_POST['message'] : '';
//      $message = strip_tags($message);
//
//      $query = 'INSERT INTO chat (message, user_id, timestamp) VALUES(?,?,?)';
//
//      $stmt = $db->prepare($query);
//      $stmt->bind_param('ssi', $message, $session_id, $currentTime);
//      $stmt->execute();
//
//      print json_encode(['success' => true]);
//      exit;
//  }
//  catch(\Exception $e) {
//    print json_encode([
//      'success' => false,
//      'error' => $e->getMessage()
//    ]);
//  }
//}
