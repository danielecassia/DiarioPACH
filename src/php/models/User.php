<?php

namespace php\models;

class User extends Model {

	protected $table = 'tb_user';

	public function verificaUserPassword($user, $senha) {
		$sql = "select count(*) as Total from {$this->table}
				where email= :email and senha= :senha";

		$list = $this->connection->prepare($sql);
		$list->bindValue('email', $user);	
		$list->bindValue('senha', $senha);	
		$list->execute();

		$fetch = $list->fetch();
		if($fetch->Total == '1') {
			return true;
		}
		else {
			return false;
		}
	}

	public function insert(array $attributes) {
		$sql = "insert into {$this->table}
			  (nm_user, dt_nasc, email, sexo, senha)
		value (:nm_user, :dt_nasc, :email, :sexo, :senha)";

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