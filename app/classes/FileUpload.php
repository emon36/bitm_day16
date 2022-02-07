<?php


namespace App\classes;


class FileUpload
{
    protected $image;
    protected $ImageName;
    protected $directory;
    public function __construct($post=null)
    {
        $this->image = $post;

    }

    public  function index()
    {
        print_r($this->image);

        $this->ImageName = $_FILES['image']['name'];

        $this->directory = 'assets/img/upload/'.$this->ImageName ;

        move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);

        echo 'success';

    }

}