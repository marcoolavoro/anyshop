<?php
    $handle = fopen("richieste.txt", "a");
    fwrite($handle, "Email: ");
    fwrite($handle, $_POST['ART2970WX_emailI']);
    fwrite($handle, "Quantità: ");
    fwrite($handle, $_POST['ART2970WX_numeroI']);
    fwrite($handle, "\n");
?>