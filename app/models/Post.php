<?php

namespace App\models;

use PDO, Exception;



final class Post{

    private int $id;

    private string $title;

    private string $summary;

    private string $content;

    private string $coverPhoto;

    private string $date;

    private int $userId;

    private int $categoryId;

    private string $term;
    
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
          if ($this->connect !== null) {
              $this->connect = null;
          }
      }
      
  
    public function limitedPost(): array {

        $this->openConnection(); // Abra a conexão antes de usar

        $sql = "SELECT id, title, summary, content, cover_photo, date, categoryId, userId FROM post 
                ORDER BY date DESC
                LIMIT 6";
    
        try {
            $query = $this->connect->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
    
        $this->closeConnection(); // Feche a conexão após o uso

        return $result;
    }
    


    public function allPosts(int $start, int $limit):array {
        $this->openConnection(); // Abra a conexão antes de usar

        $sql = "SELECT id, title, summary, content, cover_photo, date, categoryId, userId FROM post  ORDER BY date DESC LIMIT $start, $limit";

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

    public function navPosts():array {
        $this->openConnection(); // Abra a conexão antes de usar

        if(isset($_GET['categoria'])){
            $categoryName = filter_input(INPUT_GET, 'categoria', FILTER_SANITIZE_URL);
            $sql = "SELECT post.id
            FROM post
            INNER JOIN category ON post.categoryId = category.id
            WHERE category.name = :categoryName";

            
        try {
            $query = $this->connect->prepare($sql);
            $query->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            die("Erro: " . $error->getMessage());
        }
        } else { 
        $sql = "SELECT id FROM post";

        try {

            $query = $this->connect->prepare($sql);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);

         } catch (Exception $erro) {

             die("Erro: ". $erro->getMessage());

         }

        }

         $this->closeConnection(); // Feche a conexão após o uso

         return $result;

    }
    

    public function onePost():array {
        $this->openConnection(); // Abra a conexão antes de usar

        $sql = "SELECT id, title, summary, content, cover_photo, date, categoryId, userId FROM post WHERE id = :id";



        try {

            $query = $this->connect->prepare($sql);

            $query->bindParam(':id', $this->id, PDO::PARAM_INT);

            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

         } catch (Exception $erro) {

             die("Erro: ". $erro->getMessage());

         }

            $this->closeConnection(); // Feche a conexão após o uso

            return $result;

    }

    public function postsByCategory(string $categoryName, int $start, int $limit): array {
        $this->openConnection(); // Abra a conexão antes de usar
    
        $sql = "SELECT post.id AS id, post.title AS title, post.summary AS summary, post.content AS content, post.cover_photo AS cover_photo, post.date AS date, post.categoryId AS categoryId, post.userId AS userId, category.id AS category_id, category.name AS category_name
                FROM post
                INNER JOIN category ON post.categoryId = category.id
                WHERE category.name = :categoryName LIMIT $start, $limit";
    
        try {
            $query = $this->connect->prepare($sql);
            $query->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            die("Erro: " . $error->getMessage());
        }
    
        $this->closeConnection(); // Feche a conexão após o uso
    
        return $result;
    }


    public function search():array {

        $this->openConnection(); // Abra a conexão antes de usar


        $sql = "SELECT title, id, summary, content, cover_photo, date FROM post WHERE title LIKE :term OR summary LIKE :term OR content LIKE :term OR cover_photo LIKE :term OR date LIKE :term";


        try {

            $consulta = $this->connect->prepare($sql);

            $consulta->bindValue(":term", '%'.$this->term.'%', PDO::PARAM_STR);

            $consulta->execute();

            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $erro) {

            die("Erro: ". $erro->getMessage());

        }

        return $resultado;

        $this->closeConnection(); // Feche a conexão após o uso

    }
    


 

    public function getId()

    {

        return $this->id;

    }



   

    public function setId($id)

    {

        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);



    }



   

    public function getTitle()

    {

        return $this->title;

    }



 

    public function setTitle($title)

    {

        $this->title = filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);

    }



    

    public function getSummary()

    {

        return $this->summary;

    }



  

    public function setSummary($summary)

    {

        $this->summary = filter_var($summary, FILTER_SANITIZE_SPECIAL_CHARS);

    }




    public function getDate()

    {

        return $this->date;

    }



 



    public function setDate($date)

    {

        $this->date = filter_var($date, FILTER_SANITIZE_SPECIAL_CHARS);

    }



    /**

     * Get the value of conexao

     */ 

    public function getConnect()

    {

        return $this->connect;

    }


    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of coverPhoto
     */ 
    public function getCoverPhoto()
    {
        return $this->coverPhoto;
    }

    /**
     * Set the value of coverPhoto
     *
     * @return  self
     */ 
    public function setCoverPhoto($coverPhoto)
    {
        $this->coverPhoto = $coverPhoto;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

      /**
     * Get the value of userId
     */ 
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setTerm($term)
    {
        $this->term = $term;

    }
    /**
     * Get the value of categoryId
     */ 
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set the value of categoryId
     *
     * @return  self
     */ 
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

}