<?php

include_once "./modele/dao.authentification.inc.php";

daoautentification::logout();

include "./vue/boot.html.php";
include "./vue/vueConnexion.php";
