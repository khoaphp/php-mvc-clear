<?php

class Home extends Controller{
    
    public function SayHi(){
        echo "Home - SayHi";
    }

    public function SinhVien(){
        // Model
        $sv = $this->model("Students");
   
        // View
        $this->view("master1", [
            "page"=> "Home",
            "ds"  => $sv->SinhVien() ,
            "ds2" => $sv->SinhVien2()
        ] );
    }

}


?>