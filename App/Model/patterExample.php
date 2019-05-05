<?php
/*
class MotorcycleDucati {
  public function __construct() {
    var_dump(__METHOD__);
  }
}

class MotorcycleHonda {
  public function __construct() {
    var_dump(__METHOD__);
  }
}

class MotorcycleYamaha {
  public function __construct() {
    var_dump(__METHOD__);
  }
}

class MotorcycleFactory {
  public static function create($type) {
    if (empty($type)) {
      Throw new \Exception('$type must contain a valid Motorcycle type.');
    }
    else {
      $full_classname = __NAMESPACE__ . '\Motorcycle' . ucwords($type);
      if (class_exists($full_classname)) {
        return new $full_classname;
      }
      else {
        Throw new \Exception('Motorcycle type not found.');
      }
    }
  }
}

$yamaha = MotorcycleFactory::create('yamaha');
$honda = MotorcycleFactory::create('honda');
$ducati = MotorcycleFactory::create('ducati');

---------------------------------------------------------------------------------------
*/
//simplefactory 
class Motorcycle {
  private $motorcycle_make;
  private $motorcycle_model;
  public function __construct($make, $model)
  {
    $this->motorcycle_make = $make;
    $this->motorcycle_model = $model;
  }
  public function getMakeAndModel() {
    return $this->motorcycle_make . ' ' . $this->motorcycle_model;
  }
}

class MotorcycleFactory {
  public static function create($make, $model) {
    return new Motorcycle($make, $model);
  }
}

$motorcycle = MotorcycleFactory::create('Kawasaki', 'Ninja');
print $motorcycle->getMakeAndModel() . '<br>';
$motorcycle = MotorcycleFactory::create('Yamaha', 'R6');
print $motorcycle->getMakeAndModel() . '<br>';
$motorcycle = MotorcycleFactory::create('Suzuki', 'GSX-R1000');
print $motorcycle->getMakeAndModel() . '<br>';


/*
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
	public static function createVisitor($data)
	{
		return new Visitor($data);
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

$visitor = PersonFactory::createVisitor();

}
*/
?>