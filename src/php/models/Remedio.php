<?php

namespace php\models;

class Post extends Model {

	protected $table = 'tb_post';

	public function insert(array $attributes) {
		$sql = "insert into {$this->table}
			  (titulo, dt_hr, humor, sexo, sintomas, texto, peso, agua, sono, atv_fisica, remedio)
		value (:titulo, :dt_hr, :humor, :sexo, :sintomas, :texto, :peso, :agua, :sono, :atv_fisica, :remedio)";

		$insert = $this->connection->prepare($sql);
		foreach ($attributes as $key => $value) {
			$insert->bindValue($key, $value);
		}
	
		return $insert->execute($attributes);

		// $list->bindValue('nome', $nm_user);	
		// $list->bindValue('dt_nasc', $dt_nasc);
		// $list->bindValue('email', $user);	
		// $list->bindValue('sexo', $sexo);
		// $list->bindValue('senha', $senha);
	}

	// public function update(array $attributes) {
	// 	$sql = "update {$this->table} set name = :name, email = :email, password =:password where id = :id";
	// 	$update = $this->connection->prepare($sql);
	// 	$update->execute($attributes);

	// 	return $update->rowCount();
	// }

}