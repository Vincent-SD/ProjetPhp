<?php $title ='Profil';

 ob_start();
$user=$_SESSION['user'];
?>

<hr>
<div class="container">
    <table class="col-lg-12">

        <tr> <td> Pseudo : <?php echo $_SESSION['login'];  ?> </td> </tr>
        <tr> <td> <a href="view_changePass.html"> Changer mot de passe  </a>          </td>  </tr>
        <tr> <td> Email :  <?php echo  $_SESSION['mail'];?>       </td> </tr>
        <tr> <td> Numéro : <?php echo  $user->getPhone(); ?>    </td> </tr>
        <tr> <td> Pays : <?php echo  $_SESSION['country']; ?>      </td> </tr>

    </table>

    <hr>

</div >
<?php $content = ob_get_clean(); ?>

<?php require('view_template.php'); ?>