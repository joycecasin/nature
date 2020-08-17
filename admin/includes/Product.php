<?php


class Product extends Db_object
{
// Variabelen toevoegen
    protected static $db_table = "product";
    protected static $db_table_fields = array('product_img', 'naam', 'omschrijving', 'serienummer', 'prijs', 'filename', 'type', 'size');
    public $id;
    public $product_img;
    public $naam;
    public $omschrijving;
    public $serienummer;
    public $prijs;
    public $filename;
    public $type;
    public $size;

    //Variabele voor img path
    public $tmp_path;
    public $upload_directory = ' img/products';


    // Functie die de foutmeldingen opvangen
    public  function  set_file($file){
        if (empty($file) || !$file || !is_array($file)){
            $this->errors[] = "No file uploaded!";
            return false ;
        }elseif($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        }else{
            $this->filename = basename($file['name']);
            $this->tmp_path = $file['temp_path'];
            $this->type = $file['type'];
            $this->size = $file['size'];
        }
    }

    // Save functie om de foto's op te laden naar de database.
    public function save (){
        if ($this->id){
            $this->update();
        }else{
            if (!empty($this->errors)){
                return false;
            }
            if (empty($this->filename) || empty($this->tmp_path)){
                $this->errors[] = "File not available";
                return false ;
            }
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;

            if (file_exists($target_path)){
                $this->errors[] = "File {$this->filename} exists";
                return false;
            }
            if (move_uploaded_file($this->tmp_path, $target_path)){
                if ($this->create()){
                    unset($this->tmp_path);
                    return true;
                }
            }else{
                $this->errors[] = "This folder has no write rights";
                return false ;
            }
        }
    }

    // Picture path creëren naar de locatie waar onze bestanden zijn opgeladen samen met de bestandsnamen
    public function picture_path(){
        return $this->upload_directory . DS . $this->filename;
    }

    // Delete product functie
    public function delete_product(){
        if ($this->delete()){
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->picture_path();
            return unlink($target_path) ? true : false;
        }else{
            return false;
        }
    }
}