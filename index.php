<?php
    //Creare una variabile con un paragrafo di testo.
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quam, voluptates reiciendis voluptatem ullam facere";

    //Visualizzare a schermo il paragrafo con la relative lunghezza 
    echo $text;
    echo "<br> lunghezza: ";
    echo strlen($text);

    echo "<br>";

    //sostituire la badword passata in GET con tre *
    $badword = $_GET["badword"] ;

    echo str_replace($badword, "***", $text);
?>

<!--http://localhost/boolean/introPhp/?badword=voluptatem-->