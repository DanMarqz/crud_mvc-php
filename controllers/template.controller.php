<?php

class TemplateController{
  public function ctrGetTemplate(){
    #la función include es para vincular los archivos
    include('./views/template.php');
  }
}