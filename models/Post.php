<?php 
class Post{
    private $conn;
    private $table='posts';
    
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    public function __construct($db){
        $this->conn =$db;

    }
    public function read(){
        $query = 'SELECT c.name as category_name,p.id, p.category,p.title, p.body,p.author,p.created';
    }
}
?>