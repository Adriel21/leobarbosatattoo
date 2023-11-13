<?php
namespace App\utilities;

abstract class Utilities {

    public static int $pg;
    public static int $limit = 6;
    public static int $start;
    public static string $category;
    public static string $dynamicLink;
    

    public static function parameters(){
           // Verifica se existe um parâmetro nomeado pg
           if(isset($_GET['pg'])) {
            $capture = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_URL);

        } else {

            $capture = '';

        }

     
        // Armazenando o resultado obtido na variável pg
        Utilities::$pg = ($capture == '' ? 1 : $capture);
        

        // Transformando o ponto de início de cada consulta, dinamicamente. 
        Utilities::$start = (Utilities::$pg*Utilities::$limit) - Utilities::$limit;
    

    if(isset($_GET['categoria'])) {
        Utilities::$category = $_GET['categoria'];
        Utilities::$dynamicLink = "blog?categoria=" . $_GET['categoria'] . "&";
    } else {
        Utilities::$category = '';
        Utilities::$dynamicLink = "blog?";
    }

}

public static function formatDateTime(string $dateTime): string {
    // Define o fuso horário para o horário brasileiro
    date_default_timezone_set('America/Sao_Paulo');
    
    // Formata a data e hora
    return date("d/m/Y H:i:s", strtotime($dateTime));
}


}



?>