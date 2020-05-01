<?php

require 'vendor/autoload.php';
$app = new Slim\App();










$app->get('/user', function() {
    require_once('db.php');
    $query = "select * from users order by id";
    $result = $connection->query($query);
     //var_dump($result);
    while ($row = $result->fetch_assoc()){
   $data[] = $row;
    }
    $json = json_encode($data);
    echo $json;

});
$app->get('/user/{id}', function($request) {
    require_once('db.php');
    $get_id = $request->getAttribute('id');
    $query = "select * from users WHERE id = $get_id";
    $result = $connection->query($query);
     //var_dump($result);
    while ($row = $result->fetch_assoc()){
   $data[] = $row;
    }
    $json = json_encode($data);
    echo $json;
});   
$app->post('/user', function($request){
    require_once('db.php');
    $query = "INSERT INTO users (username) VALUES (?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s",$username);
    $username = $request->getParsedBody()['username'];
     $stmt->execute();
});
$app->put('/user/{id}', function($request){
    require_once('db.php');
    $get_id = $request->getAttribute('id');
    $query = "UPDATE users SET username = ? WHERE id = $get_id";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s",$username);
    $username = $request->getParsedBody()['book_name'];
    $stmt->execute();
});
$app->delete('/user/{id}', function($request){
    require_once('db.php');
    $get_id = $request->getAttribute('id');
    $query = "DELETE from users WHERE id = $get_id";
    $result = $connection->query($query);
});

$app->run();