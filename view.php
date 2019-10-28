<?php

function render_all($res){
    foreach($res as $row){
        print_r($row);
        echo "<br />";
    }
}

?>