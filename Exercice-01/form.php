<?php

class Form{
    private $data;
    public $toLine = 'p';

    //ucfirst()

    public function startForm($method,$action){
        return '<form method="$_'.$method.'" action="'.$action.'">';
    }

    public function endForm(){
        return '</form>';
    }

    public function __constructor($data = array()){
        $this->data = $data;
    }

    private function toLine($html){
        return "<{$this->toLine}>{$html}</{$this->toLine}>";
    }

    public function input($type,$name,$value = array()){
        $this->value = $value;
        if($type=="radio"){
            $radio='<label for="'.$name.'">'.ucfirst($name).': </label>';
            foreach($value as $key => $row){
                $radio.='<input type="'.$type.'" name="'.$name.'" value="'.$row.'">'.$row;
            }
            return $this->toLine(
                $radio
            );
        } else if ($type=="checkbox"){
            $checkbox='<label for="'.$name.'">'.ucfirst($name).': </label>';
            foreach($value as $key => $row){
                $checkbox.='<input type="'.$type.'" name="'.$name.$key.'" value="'.$row.'">'.$row;
            }
            return $this->toLine(
                $checkbox
            );
        } else {
            return $this->toLine(
                '<label for="'.$name.'">'.ucfirst($name).': </label><input type="'.$type.'" name="'.$name.'">'
            );
        }
    }

    public function select($name,$value = array()){
        $this->value = $value;
        $selected='<option value="">Choisissez votre '.$name.'</option>';
        foreach($value as $key => $row){
            $selected.='<option value="'.$row.'">'.$row.'</option>';
        }
        return $this->toLine(
            '<label for="'.$name.'">'.ucfirst($name).': </label><select name="'.$name.'">'.$selected.'</select>'
        );
    }

    public function textarea($name){
        return $this->toLine(
            '<label for="'.$name.'">'.ucfirst($name).': </label><textarea rows="5" name="'.$name.'"></textarea>'
        );
    }

    public function submit($name){
        return $this->toLine(
            '<button type="submit">'.$name.'</button>'
        );
    }
}