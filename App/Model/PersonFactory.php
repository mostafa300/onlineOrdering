<?php 
/**
 * 
 */
include_once 'Visitor.php';
class PersonFactory 
{
	//this function to create user calss
	public static function createUser($data)
	{
		return new User($data);
	}

	//this function to create user calss
	public static function createAdmin()
	{
		return new Admin();
	}

	//this function to create visitor calss
	public static function createVisitor()
	{
		$x = new Visitor();
		return $x;
	}

	//this function to create order calss
	public static function createOrder($data)
	{
		return new Order($id);
	}


	//this function to create category calss
	public static function createCategory($data)
	{
		return new Category($data);
	}

	//this function to create fooditem calss
	public static function createFoodItem($data)
	{
		return new fooditem($data);
	}





}


?>