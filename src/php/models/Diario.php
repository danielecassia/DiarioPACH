<?php

namespace php\models;

class Diario extends Model {

	protected $table = 'tb_post';

	public function insert($userLogado,array $attributes) {
		$sqlPost = "insert into tb_post
		(cd_user, titulo, dt_hr, humor, sintomas, texto, peso, agua, sono, medicamentos)
		value (:cd_user, :titulo, :dt_hr, :humor, :sintomas, :texto, :peso, :agua, :sono, :medicamentos)";

		$sqlOutros = "insert into tb_outros
		(cd_outros, cd_post)
		value (:cd_outros, :cd_post)";

		$sqlAtv = "insert into tb_atvFisica
		(cd_atv, cd_post)
		value (:cd_atv, :cd_post)";

		// $sqlRemedio = "insert into tb_atvFisica
		// (titulo, cod_atv, cd_post)
		// value (:cod_atv, :cd_post)";

		$this->connection->beginTransaction();

		$insertPost = $this->connection->prepare($sqlPost);
		$insertPost->bindValue("cd_user", $userLogado);
		$insertPost->bindValue("titulo", $attributes["titulo"]);
		$insertPost->bindValue("dt_hr", date('Y-m-d H:i:s'));
		$insertPost->bindValue("humor", $attributes["humor"]);
		$insertPost->bindValue("sintomas", $attributes["sintomas"]);
		$insertPost->bindValue("texto", $attributes["texto"]);
		$insertPost->bindValue("peso", $attributes["peso"]);
		$insertPost->bindValue("agua", $attributes["agua"]);
		$insertPost->bindValue("sono", $attributes["sono"]);
		$insertPost->bindValue("medicamentos", $attributes["medicamentos"]);
		$insertPost->execute();
		$cdPost= $this->connection->lastInsertId(); 
		
		foreach($attributes["outros"] as &$item) {
			$insertOutros = $this->connection->prepare($sqlOutros);
			$insertOutros->bindValue("cd_outros", $item);
			$insertOutros->bindValue("cd_post", $cdPost);
			$insertOutros->execute();
		}

		foreach($attributes["atv_fisica"] as &$item) {
			$insertAtv = $this->connection->prepare($sqlAtv);
			$insertAtv->bindValue("cd_atv", $item);
			$insertAtv->bindValue("cd_post", $cdPost);
			$insertAtv->execute();
		}
		$this->connection->commit();
		return true;

		// $insertRemedio = $this->connection->prepare($sqlRemedio);
		// $insertRemedio->bindValue($key, $value);
		// return $insertRemedio->execute();
	}

	// public function update(array $attributes) {
	// 	$sql = "update {$this->table} set name = :name, email = :email, password =:password where id = :id";
	// 	$update = $this->connection->prepare($sql);
	// 	$update->execute($attributes);

	// 	return $update->rowCount();
	// }

}