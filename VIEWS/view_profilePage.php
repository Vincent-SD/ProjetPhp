<?php $this -> title ='Profil';
require_once 'MODELS/models_user.php';

$user=unserialize($_SESSION['user']);
var_dump($user);

?>

<hr>
<div class="container">
    <table class="col-lg-12">

        <tr> <td> Pseudo : <?php echo $user->getPseudo();  ?> </td> </tr>
        <tr> <td> <a href="https://tpphp.alwaysdata.net/ProjetPhp/?page=accueil&action=changePassView"> Changer mot de passe  </a>          </td>  </tr>
        <tr> <td> Email :  <?php echo  $_SESSION['mail'];?>       </td> </tr>
        <tr> <td> Numéro : <?php echo  $_SESSION['phone']; ?>    </td> </tr>
        <tr> <td> Pays : <?php echo  $_SESSION['country']; ?>      </td> </tr>
        <tr> <td> date d'inscription : <?php
                $date = DateTime::createFromFormat('Y-m-d',$_SESSION['date']);
                echo $date->format('d-m-Y');  ?>      </td> </tr>
<!--        <tr> <td> id : --><?//  echo $_SESSION['userId'];  ?><!--</td></tr>-->

    </table>

    <hr>

</div >

