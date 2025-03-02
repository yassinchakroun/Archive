<?php
require '../Config.php';
class UserController{


public function getuser(){
    $sql='SELECT *FROM user';
    $db =config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    catch(Exception $e){
        die('Erreur:'.$e ->getMessage());
    

                                                                              
}}}
public function adduser($user){
$db = config::getConnexion();
$sql= 'INSERT INTO user (email,pwd) VALUES (:email,:pwd)';
try{
    $query = $db->prepare($sql);
    $query->execute([;
        'email'=> $user -> getEmail;
        'pwd'=> $user -> getPwd();
]);
}
catch(Exception $e){
    die('Erreur: '.$e ->getMessage());
?>
