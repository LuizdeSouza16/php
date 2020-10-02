<?php
   
    require_once __DIR__ ."/config.php";

    session_regenerate_id();

    echo session_id();