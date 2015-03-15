<?php
require 'db.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/users', 'getUsers');
$app->post('/user', 'addUser');
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
function addUser() {
  global $app;
  $req = $app->request();//Getting parameter
  $paramFName =  $req->params('fname');
  $paramLName =  $req->params('lname');
  $paramEmail =  $req->params('email');
  $paramMobNo =  $req->params('mobno');
  $sql = "INSERT INTO users (`firstname`, `lastname`, `email`, `mobileno`) VALUES ( :fname,:lname, :email, :mobno);";
  try {
    $db = getConnection();
    $stmt = $db->prepare($sql);
    $stmt->bindParam("firstname", $paramFName);
    $stmt->bindParam("lastname", $paramLName);
    $stmt->bindParam("email", $paramEmail);
    $stmt->bindParam("mobileno", $paramMobNo);
    $stmt->execute();
    $db = null;
    echo json_encode($user);
  } catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}';
  }
}

?>