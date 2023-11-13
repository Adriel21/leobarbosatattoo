<?php
    namespace Admin\models;

    use PDO, Exception;

    final class Category{
       private int $id;
       private string $name;
       private PDO $connect;

       public function __construct()
       {
        $this->connect = Database::connect();
       }
 

       public function allCategories(){
        $sql = "SELECT * from category";

        try{
            $query = $this->connect->prepare($sql);

            $query->execute();
            

            $result = $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $erro){
            die("Erro: ". $erro->getMessage());
        }

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


?>