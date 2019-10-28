<?php

require ("modele.php");
require ("view.php");

$res = getEtudiants();

render_all($res);

?>