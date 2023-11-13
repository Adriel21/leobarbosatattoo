<?php

namespace Admin\models;

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

    private PDO $connect;


    public function __construct()
    {
       $this->connect = Database::connect();
    }


    public function allPosts():array {

        $sql = "SELECT id, title, summary, content, cover_photo, date, categoryId, userId FROM post";

        try {

            $query = $this->connect->prepare($sql);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);

         } catch (Exception $erro) {

             die("Erro: ". $erro->getMessage());

         }

         return $result;

    }

    public function onePost():array {

        $sql = "SELECT id, title, summary, content, cover_photo, date, categoryId, userId FROM post WHERE id = :id";



        try {

            $query = $this->connect->prepare($sql);

            $query->bindParam(':id', $this->id, PDO::PARAM_INT);

            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

         } catch (Exception $erro) {

             die("Erro: ". $erro->getMessage());

         }



            return $result;

    }


    public function insertPost():void {   
        $sql = "INSERT INTO post(title, summary, content, cover_photo, date, categoryId, userId) VALUES(:title, :summary, :content, :cover_photo, :date, :categoryId, :userId)";

        try{
            $query = $this->connect->prepare($sql);
            $query->bindParam(':title', $this->title, PDO::PARAM_STR);
            $query->bindParam(':summary', $this->summary, PDO::PARAM_STR);
            $query->bindParam(':content', $this->content, PDO::PARAM_STR);
            $query->bindParam(':cover_photo', $this->coverPhoto, PDO::PARAM_STR);
            $query->bindParam(':date', $this->date, PDO::PARAM_STR);
            $query->bindParam(':categoryId', $this->categoryId, PDO::PARAM_INT);
            $query->bindParam(':userId', $this->userId, PDO::PARAM_INT);

            $query->execute();

        }catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }
    }

    public function updatePost():void {   
        $sql = "UPDATE post SET title = :title, summary = :summary, content = :content, cover_photo = :cover_photo, date = :date, categoryId = :categoryId WHERE id = :id";

        try{
            $query = $this->connect->prepare($sql);
            $query->bindParam(':title', $this->title, PDO::PARAM_STR);
            $query->bindParam(':summary', $this->summary, PDO::PARAM_STR);
            $query->bindParam(':content', $this->content, PDO::PARAM_STR);
            $query->bindParam(':cover_photo', $this->coverPhoto, PDO::PARAM_STR);
            $query->bindParam(':date', $this->date, PDO::PARAM_STR);
            $query->bindParam(':categoryId', $this->categoryId, PDO::PARAM_INT);
            $query->bindParam(':id', $this->id, PDO::PARAM_INT);

            $query->execute();

        }catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }
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