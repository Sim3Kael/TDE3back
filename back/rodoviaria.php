<?php
class Rodoviaria {
  private $id;
  protected $companhia;
  protected $portao;
  protected $lotacao;
  protected $classe;
  

  public function __construct($id,$companhia,$portao,$lotacao,$classe){
  $this->id = $id;
  $this->companhia = $companhia;
  $this->portao = $portao;
  $this->lotacao = $lotacao;
  $this->classe = $classe;  
  }

  public function getId(){
    return $this->id;
  }
  
  public function getCompanhia() {
    return $this->companhia;
  }
  
  public function getPortao() {
    return $this->portao;
  }   
  
  public function getLotacao() {
    return $this->lotacao;
  }  
  
  public function getClasse() {
    return $this->classe;
  }
}
