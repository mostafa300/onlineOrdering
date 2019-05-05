<?php
include_once '../Model/Visitor.php';
include_once '../Model/User.php';
//this add for PersonFactory
    include_once '../../Model/PersonFactory.php';
if($_POST){
    if(isset($_POST['submit']) && ($_POST['submit'] == 'Register')){
    	//var_dump($_POST);
    	$data = array();

        
        $data['Fullname'] = $_POST['fullName'];
        $data['Email'] = $_POST['email'];
        $data['Password'] = $_POST['password'];
        $data['Username'] = $_POST['username'];
        $data['Address'] = $_POST['address'];
        $data['Phone'] = $_POST['phone'];
       
        try{
        	//$instance = new Visitor($data);
  			$instance = PersonFactory::createVisitor($data);
            $state = $instance->register($data);
            //$visitor = new Visitor();
            //$state = $visitor->register($data);
           
            $msg = '';
            if($state = 1){
                $msg = "Successfully Registered !!";

            }else{
                $msg = "Please Try Again ..";
            }
        	header('Location:../../App/Viewer/Register View.php?msg='.$msg);   
        }catch(Exception $EXC){
        	//echo $EXC->getMessage();
            header('Location:../../App/Viewer/Register View.php?msg='.'Error!!');
        	// stay same page showing that dublicated username
        }
  		 

    	
  	}
}



?>