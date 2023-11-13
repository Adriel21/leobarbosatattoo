<?php

namespace App\models;

use PDO, Exception;

class Subscriber{
    private string $email;

    private int $accept_registration;

    private string $date;

    private ?PDO $connect = null;

    // ... (propriedades)

    public function __construct()
    {
        // Mantenha a conexão como nula por padrão
        $this->connect = null;

    }

    private function openConnection()
    {
        if (!$this->connect) {
            // Abra a conexão somente se ela estiver fechada
            $this->connect = Database::connect();
        }
    }

    private function closeConnection()
    {
        if ($this->connect !== null) {
            $this->connect = null;
        }
    }

    public function searchUser(){

        $this->openConnection();

        $sql = "SELECT email from subscriber WHERE email = :email";

        try{
            $query = $this->connect->prepare($sql);

            $query->bindParam(':email', $this->email, PDO::PARAM_STR);

            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $erro){
            die("Erro: ". $erro->getMessage());
        }

        return $result;

        $this->closeConnection(); // Feche a conexão após o uso

       }

    public function insertRegistration(){
        $this->openConnection();

        $sql = "INSERT INTO subscriber(email, accept_registration, date) VALUES(:email, :accept_registration, :date)";

        try{
            $query = $this->connect->prepare($sql);
            $query->bindParam(':email', $this->email, PDO::PARAM_STR);
            $query->bindParam(':accept_registration', $this->accept_registration, PDO::PARAM_INT);
            $query->bindParam(':date', $this->date, PDO::PARAM_STR);
        

            $query->execute();

        }catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }

        $this->closeConnection(); // Feche a conexão após o uso

    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

    }

 

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of accept_registration
     */ 
    public function getAccept_registration()
    {
        return $this->accept_registration;
    }

    /**
     * Set the value of accept_registration
     *
     * @return  self
     */ 
    public function setAccept_registration($accept_registration)
    {
        $this->accept_registration = $accept_registration;

    }
}


?>