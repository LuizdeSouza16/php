<?php

require_once __DIR__ . "/config.php";

echo session_save_path();

var_dump(session_status());
echo '</br>';
switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As Sessões estão desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "Sessões habilitadas ,mas não existe";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Sessões habilitadas e pelo menos uma existe";
        break;
}
