<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller{

public function Getimage(){
    $result = $this->result;
    $this->json(
      [
        "error"=>"0",
        "data"=>$result,
      ]
    );
}
}


