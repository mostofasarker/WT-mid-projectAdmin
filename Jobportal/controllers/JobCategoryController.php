<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
	require_once 'models/db_config.php';
	$err_db="";
	$catnameErr="";
	$check=false;
	//validation variables
	if(isset($_POST["add_category"])){
		//do validations
		//if no error
		if(empty($_POST["name"]))
		{
			$catnameErr="* Category Must Be Field";
			$check=true;
		}
		
		if(!$check)
		{
			$rs = insertCategory($_POST["name"]);
			if($rs === true){
				header("Location: allcategories.php");
			}
			$err_db = $rs;
		}

		
	}
	else if (isset($_POST["edit_category"])){
		//do validations
		//if no error

		if(empty($_POST["name"]))
		{
			$catnameErr="* Category Must Be Field";
			$check=true;
		}
		if(!$check)
		{
			$rs = updateCategory($_POST["name"],$_POST["id"]);
			if($rs === true){
				header("Location: allcategories.php");
			}
			$err_db = $rs;
		}

	}

	else if (isset($_POST["delete_category"])){
		//do validations
		//if no error
		$rs = delete_category($_POST["id"]);
		if($rs === true){
			header("Location: allcategories.php");
		}
		$err_db = $rs;
	}
	 
	function insertCategory($name){
		$query="insert into jobcategory values (NULL,'$name')";
		return execute($query);
	}
	
	function getAllCategories(){
		$query = "select * from jobcategory";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from jobcategory where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateCategory($name,$id)
	{
		$query = "update jobcategory set name='$name' where id = $id";
		return execute($query);
	}

	function delete_category($id)
	{
		$query = "delete from jobcategory where id = $id";
		return execute($query);
	}


?>