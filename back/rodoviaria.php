<?php
class Rodoviaria {
  protected $companhia;
  protected $portao;
  protected $lotacao;
  protected $classe;
  

  public function __construct($companhia,$portao,$lotacao,$classe){
  $this->companhia = $companhia;
  $this->portao = $portao;
  $this->lotacao = $lotacao;
  $this->classe = $classe;  
  }
  
  public function getCompanhia() {
    return "A companhia responsável por sua viagem será:"." ".$this->companhia;
  }
  
  public function getPortao() {
    return "A quantidade de plataforma de embarque nessa Rodoviária é de:"." ".$this->portao;
  }   
  
  public function getLotacao() {
    return "A capacidade máxima do ônibus é de:"." ".$this->lotacao;
  }  
  
  public function getClasse() {
    return "As classes disponiveis para escolha para a viagem são(Convencional,Leito e Executivo) e a que você escolheu foi:"." ".$this->classe;
  }
 
}
echo "Insira qual a classe de viagem você deseja,temos as opções(Convencional,Leito e Executivo):";
  $classe = trim(fgets(STDIN));
$v = 0;
while($v == 0){
   if($classe == 'Leito' || $classe == 'Convencional' || $classe == 'Executivo'){
     echo "Prossiga\n"; 
     $v++;
   }
   else{
     echo "Verifique se você escreveu exatamente como inserido nas opções \n";
     break;
   } 

echo "Insira qual é o numero do portão informado em sua passagem:";
  $portao = intval(fgets(STDIN));
$i = 0;
while($i == 0){
  
 if ($portao < 1 || $portao > 10){
echo "O numéro inserido não condiz com os números dos nossos portões para embarque/desembarque,volte a recepção para que o problema seja solucionado\n";
   break;
  }
 else{
   $i++;
 }
   $rodoviaria1 = new Rodoviaria("SmartTurismo\n","10 portões,os portões estão organizados de forma crescente basta seguir em frente até chegar ao seu portão de número {$portao}\n","60\n",$classe);
echo $rodoviaria1->getCompanhia()."\n";
echo $rodoviaria1->getPortao()."\n";
echo $rodoviaria1->getLotacao()."\n";
echo $rodoviaria1->getClasse()."\n";
  }
}