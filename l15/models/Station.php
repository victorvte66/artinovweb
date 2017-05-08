<?php
class Station{
	public static function createStation(	
										$name,
										$description,
										$is_real=false,
										$neighboring_stop,
										$map_x,
										$map_y,
										$latitude,
										$longitude
										){
		$DBH = Db::getConnection(); 
	
			$sql = '
				INSERT INTO station
					SET
						name=:name,
						description=:description,
						is_real=:is_real,
						neighboring_stop=:neighboring_stop,
						map_x=:map_x,
						map_y=:map_y,
						latitude=:latitude,
						longitude=:longitude

			';
			
			$query = $DBH->prepare($sql);

			$query->bindParam(":name", 	$name, 	PDO::PARAM_STR);
			$query->bindParam(":description", $description, 	PDO::PARAM_STR);
			$query->bindParam(":is_real", 	$is_real, 	PDO::PARAM_INT);
			$query->bindParam(":neighboring_stop", 		$neighboring_stop, 	PDO::PARAM_STR);
			$query->bindParam(":map_x", 	$map_x, 	PDO::PARAM_STR);
			$query->bindParam(":map_y", 	$map_y, 	PDO::PARAM_STR);
			$query->bindParam(":latitude", 	$latitude, 	PDO::PARAM_STR);
			$query->bindParam(":longitude", $longitude, PDO::PARAM_STR);
			
			$query->execute();

	}

	public static function getAllStations(){
		
		# MySQL через PDO_MYSQL  
			
		$DBH = Db::getConnection(); 

		$sql = '
				SELECT id,name 
				FROM station
			';
			
		$query = $DBH->prepare($sql);
		
		$query->execute();

		return $query->fetchAll();
	}

	public static function getStationById($id){
		
		# MySQL через PDO_MYSQL  
			
		$DBH = Db::getConnection(); 

		$sql = '
				SELECT * 
				FROM station
				WHERE id = :id
			';
			
		$query = $DBH->prepare($sql);
		$query->bindParam(":id", 	$id, 	PDO::PARAM_INT);
		
		$query->execute();

		return $query->fetch();
	}

	public static function editStation(
										$id,	
										$name,
										$description,
										$is_real=false,
										$neighboring_stop,
										$map_x,
										$map_y,
										$latitude,
										$longitude
										){
	
		$DBH = Db::getConnection(); 
	
			$sql = '
				UPDATE station
					SET
						name=:name,
						description=:description,
						is_real=:is_real,
						neighboring_stop=:neighboring_stop,
						map_x=:map_x,
						map_y=:map_y,
						latitude=:latitude,
						longitude=:longitude
					WHERE id = :id

			';
			
			$query = $DBH->prepare($sql);

			$query->bindParam(":id", 	$id, 	PDO::PARAM_INT);
			$query->bindParam(":name", 	$name, 	PDO::PARAM_STR);
			$query->bindParam(":description", $description, 	PDO::PARAM_STR);
			$query->bindParam(":is_real", 	$is_real, 	PDO::PARAM_INT);
			$query->bindParam(":neighboring_stop", 		$neighboring_stop, 	PDO::PARAM_STR);
			$query->bindParam(":map_x", 	$map_x, 	PDO::PARAM_STR);
			$query->bindParam(":map_y", 	$map_y, 	PDO::PARAM_STR);
			$query->bindParam(":latitude", 	$latitude, 	PDO::PARAM_STR);
			$query->bindParam(":longitude", $longitude, PDO::PARAM_STR);
			
			$query->execute();

	}

	public static function deleteStationById($id){
		
		# MySQL через PDO_MYSQL  
			
		$DBH = Db::getConnection(); 

		$sql = '
				DELETE  
				FROM station
				WHERE id = :id
			';
			
		$query = $DBH->prepare($sql);
		$query->bindParam(":id", 	$id, 	PDO::PARAM_INT);
		
		$query->execute();

	}
}