<?php
require 'db.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/users', 'getUsers');
$app->post('/user', 'insertUser');
$app->run();

//  https://task-manager-karthikabaskar-2.c9.io/api/users
function getUsers() {
  $sql = "select * FROM users";
  try {
    $db = getConnection();
    $stmt = mysqli_query($db, $sql);
    while ( $user = mysqli_fetch_array($stmt)){
    echo json_encode($user);
    }
    $db = null;
  }
  catch(PDOException $e) {
    echo json_encode($e->getMessage());
  }
}

// POST http://www.yourwebsite.com/api/updates
function insertUser() {
  $request = $app->request();
  $user = json_decode($request->getBody());
  $sql = "INSERT INTO users (`firstname`, `lastname`, `email`, `mobileno`) VALUES ( :fname,:lname, :mail, :mobileno);";
  try {
    $db = getConnection();
    $stmt = $db->prepare($sql);
    $stmt = bindParam("firstname", $user->fname);
    $stmt = bindParam("lastname", $user->lname);
    $stmt = bindParam("email", $user->mail);
    $stmt = bindParam("mobileno", $user->mobileno);
    $stmt->execute();
    $db = null;
    echo json_encode($user);
  } catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}';
  }
}

?>