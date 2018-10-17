<?php
    namespace DAOS;

    Use Model\Client as Client;

    interface IClientDao
    {
      function Add(Client $Client);
      function Delete($ClientCode);
      function GetByClientCode($ClientCode);
      function getAll();
    }

 ?>
