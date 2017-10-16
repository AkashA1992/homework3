<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//instantiate the program object
$obj = new main();

class main {

    public function __construct(){
       $page=new  homepage();
       $name = $page->getForm();       
       print_r($name);
    } 
}

class homepage {

    public function getForm() {        
        $form='<form action="display.php" method="post" enctype="multipart/form-data">';      
        $form.='Select file to upload:';
        $form.='<input type="file" name="fileToUpload" id="fileToUpload">';
        $form.='<input type="submit" value="Upload" name="submit">';
        $form.='</form>';   
        
        return $form;     
    }

}
?>