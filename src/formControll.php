<?php 


class FormController{
        public $warning;


        public function __construct($tablettes,  $pc, $portable, $adresse)
        {
            $this->tablettes = $tablettes;
            $this->pc = $pc;
            $this->portable = $portable;
            $this->adresse = $adresse;
        }


        public function  warningMessages() : bool
        {
            if($this->tablettes == "" || $this->pc == "" || $this->portable == "" || $this->adresse == "")
            {
                $this->warning = '<p class="warning">Veuillez renseigner tous les champs!</p>';
                return false;
            }
            else if($this->tablettes < 0  || $this->pc < 0 || $this->portable < 0 )
            {
                $this->warning = '<p class="warning">La quantité des produits doivent être supérieur à 0</p>';
                return false;
            }
            else if($this->tablettes > 10 || $this->pc > 10 || $this->portable > 10)
             {
               $this->warning = '<p class="warning">Vous ne pouvez pas commander plus de 10 articles par produits</p>';
               return false;
             }
             else if($this->tablettes == 0 && $this->pc == 0 && $this->portable == 0){
                 $this->warning = '<p class="warning">Vous devez commander au moins un article</p>';
                 return false;
             }
             else{
                 return true;
             }
        }


        public function warningMsg()
        {
        $this->warningMessages();
        return $this->warning;
        }

}



?>