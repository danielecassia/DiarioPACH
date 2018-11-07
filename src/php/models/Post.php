<?php

namespace php\models;

class Post extends Model {

	protected $table = 'tb_post';

	public function insert(array $attributes) {
		$sql = "insert into {$this->table}
		(titulo, dt_hr, humor, sintomas, texto, peso, agua, sono)
		value (:titulo, :dt_hr, :humor, :sintomas, :texto, :peso, :agua, :sono)";

		$insert = $this->connection->prepare($sql);
		foreach ($attributes as $key => $value) {
			$insert->bindValue($key, $value);
		}
	
		return $insert->execute($attributes);
	}

	// public function update(array $attributes) {
	// 	$sql = "update {$this->table} set name = :name, email = :email, password =:password where id = :id";
	// 	$update = $this->connection->prepare($sql);
	// 	$update->execute($attributes);

	// 	return $update->rowCount();
	// }

}