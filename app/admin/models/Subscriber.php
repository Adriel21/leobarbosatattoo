<?php

namespace Admin\models;

use PDO, Exception;

class Subscriber{
    private int $id;
    private string $email;
    private string $accept;
    private PDO $connect;
}


?>