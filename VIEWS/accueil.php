<?php $title ='FreeNote'; ?>

<?php ob_start(); ?>

<?php
session_start();

?>

<hr>
<div class="container">
        <section class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center"><input class="newbouton" type="button" value="Nouvelle Discussion"> </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center"> <input class="refreshbouton" type="button" value="Actualiser"></div>
            </div>
<hr>

                <table class="col-lg-12">
                    <tr>
                        <td>Nom de la discussion</td>
                        <td>Statut</td>
                        <td>Dernier message</td>
                        <td>Auteur</td>
                        <td>Date</td>
                    </tr>
                    <tr>
                        <td>Nom de la discussion</td>
                        <td>Statut</td>
                        <td>Dernier message</td>
                        <td>Auteur</td>
                        <td>Date</td>
                    </tr>
                    <tr>
                        <td>Nom de la discussion</td>
                        <td>Statut</td>
                        <td>Dernier message</td>
                        <td>Auteur</td>
                        <td>Date</td>
                    </tr>
                </table>
            <div class="col-lg-12 text-center">
                <input type="image" alt="previous" src="gauche.jpg" width="30px" height="30px">
                <input type="image" alt="next" src="droite.jpg" width="30px" height="30px" >
            </div>

        </section>



</div >

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

