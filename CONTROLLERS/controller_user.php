<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});
session_start();
$action = $_POST['action'];

$_SESSION['user']=new user;


if($action =='inscription')
{

    $_SESSION['user']->register();
}

if($action == 'login')
{
    $_SESSION['user'] -> login();

}

if($action == 'modifier')
{
    $_SESSION['user']->changePassword();
}

if($_SESSION['redirection']  == 'newDisc')
{
    header('Location: ../VIEWS/view_discussion.html');
}

if($_SESSION['redirection']  == 'refresh')
{
    header('Location: ../VIEWS/view_accueil.php');
}