<?php $this->title = 'param'; ?>
<div class="container">

    <section class="col-lg-12 text-center">
        <div class="row">
        <form class="parambloc" action="/ProjetPhp/admin"  method="post">
            <input type="text" placeholder="Nombre  de discussions" name="d1"/>
            <input type="submit" name="action" value="Valider"/>
            <input type="text" placeholder="Nombre de messages" name="d2"/>
            <input type="submit" name="action" value="Valider"/>
            <input type="text" placeholder="Saisir le Pseudo" name="d3"/>
            <input type="submit" name="action" value="Supprimer"/>
            <input type="text" placeholder="Saisir le Titre" name="d4"/>
            <input type="submit" name="action" value="Supprimer"/>

<!--            <button type="submit" value="Validerrrr"> Valider </button>-->
        </form>
        </div>
        <div class="back">
            <a href="http://tpphp.alwaysdata.net/ProjetPhp" >retourner à la page d'accueil</a>
        </div>



    </section>
</div>



