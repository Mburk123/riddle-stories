<?php
// DIESES FILE ENTHÄLT EIGENE PHP-FUNKTIONEN

// Diese Funktion analysiert eine bestimmte Nummer und gibt dem User eine Rückmeldung in Form eines Strings.
//          $dataBase: Datenbank mit den hinterlegten Antworten (array), gewisse Nummern haben Antworten im String-Format hinterlegt.
//          $number: Zahl in Form eines Integers.
function returnAnswer($dataBase, $number) {
    $numberAsString = (string) $number; // Integer in einen String umwandeln
    $length = strlen($numberAsString); // Länge des Strings ermitteln
    
    if (isset($dataBase[$number])) {
        $output = $dataBase[$number];
    } else {
        if($length==6){
            $output = "Diese Verbindung scheint es nicht zu geben. Probier es weiter!";
        } else {
            $output = "Nur sechsstellige Zahlencodes kommen als Lösung in Frage. Probier es weiter!";
        } 
    }
return $output;
}

?>