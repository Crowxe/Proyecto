<?php
    namespace Model;

    class Client
    {
      private $ID;
      private $Name;
      private $Surname;
      private $DNI;


      function __construct($ID)
      {
        $this->setID($ID);
      }

      public function setID($ID)
      {
          $this->ID = $ID;

          return $this;
      }

      public function getID()
      {
          return $this->ID;
      }

      public function setName($Name)
      {
          $this->Name = $Name;

          return $this;
      }

      public function getName()
      {
          return $this->Name;
      }

      public function setSurname($Surname)
      {
          $this->Surname = $Surname;

          return $this;
      }

      public function getSurname()
      {
          return $this->Surname;
      }

      public function setDNI($DNI)
      {
          $this->DNI = $DNI;

          return $this;
      }

      public function getDNI()
      {
          return $this->DNI;
      }

}
 ?>
