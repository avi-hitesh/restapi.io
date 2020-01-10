<?php
/**
 * 
 */
class Post
{
	private $conn;
	private $table = 'posts';

	public $id;
	public $category_id;
	public $category_name;
	public $title;
	public $body;
	public $auther;
	public $created_at;

	public function __construct($db){
		$this->conn = $db;
	}

	public function read(){
		$query = 'SELECT c.name as category_name,
		p.id,
		p.category_id,
		p.title,
		p.body,
		p.author,
		p.created_at
		FROM
		'.$this->table.' p
		left join
		categories c on p.category_id = c.id
		order by
		p.created_at DESC';

		//prepare statements

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}
}
?>