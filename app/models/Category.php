<?php

namespace App\models;

use PDO, Exception;



final class Category{

    private int $id;

    private  $name;

    private ?PDO $connect = null; // Altere a tipagem para ?PDO para permitir null

    
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
          if ($this->connect) {
              // Feche a conexão apenas se ela estiver aberta
              $this->connect = null;
          }
      }

      public function allCategories():array {
        $this->openConnection(); // Abra a conexão antes de usar

        $sql = "SELECT id, name FROM category";

        try {

            $query = $this->connect->prepare($sql);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);

         } catch (Exception $erro) {

             die("Erro: ". $erro->getMessage());

         }

         $this->closeConnection(); // Feche a conexão após o uso

         return $result;

    }
  

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}