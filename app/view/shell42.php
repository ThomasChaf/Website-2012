<?php
// ****************************************************************************
//                                                                            *
//                                SHELL42 PHP                                 *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  21  /  11  /  2013  *
// ****************************************************************************

$this->css("slider");
$this->css("project");
$this->css("navbar");
$this->render("header");
$this->render("navbar");
?>
<hr class="container">
<section class="container project">
  <h1><span class="left"></span>42 sh<span class="right"></span></h1>
  <p>Projet réalisé en deux mois en groupe de 5</p>
  <p>Le 42sh est un projet qui permet de recoder un shell unix en utilisant un minimum de fonction systeme. Notre shell est codé suivant le modèle du shell tcsh</p>
  <div class="row commandes">
    <div class="col-md-4">
      <h2>Commandes</h2>
      <ul>
        <li>Pipes <span>ls | ls | ls | . </span></li>
        <li>Redirections commandes-fichier/flux <span>ls >> file ; cat << EOL </span></li>
        <li>Redirections exotiques <span>>> file ls ; << EOL cat </span></li>
        <li>Séparateurs <span>ls && error || echo "error"</span></li>
      </ul>
    </div>
    <div class="col-md-4">
      <h2>Built-in</h2>
        <ul>
          <li>cd <span>cd ~ && cd /home</span></li>
          <li>env, setenv, unsetenv</li>
          <li>echo</li>
          <li>exit <span>exit 42</span></li>
        </ul>
      </div>
    <div class="col-md-4">
      <h2>Autour du projet</h2>
        <ul>
          <li>Edition de ligne en termcaps like emacs</li>
          <li>Historique</li>
          <li>Auto-complétion (stokage n-aire en optimisation)</li>
          <li>Globing</li>
          <li>Parenthèses partielles</li>
          <li>Variables locales d'environnement</li>
          <li>Configuration à partir d'un fichier (like .tcsh)</li>
          <li>Utilisation d'un garbage collector</li>
        </ul>
      </div>
  </div>
</section>
<hr class="container">
<?php
$this->render("footer");
