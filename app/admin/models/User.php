<?php
    namespace Admin\models;

    use PDO, Exception;

    final class User{
       private int $id;
       private string $name;
       private string $email;
       private string $password;
       private PDO $connect;

       public function __construct()
       {
        $this->connect = Database::connect();
       }
 

       public function search(){
        $sql = "SELECT * from user WHERE email = :email";

        try{
            $query = $this->connect->prepare($sql);

            $query->bindParam(':email', $this->email, PDO::PARAM_STR);

            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

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

       /**
        * Get the value of password
        */ 
       public function getPassword()
       {
              return $this->password;
       }

       /**
        * Set the value of password
        *
        * @return  self
        */ 
       public function setPassword($password)
       {
              $this->password = $password;

              return $this;
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

              return $this;
       }
    }


?>