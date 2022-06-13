<?php

namespace BankasV2\Controllers;
use BankasV2\Messages as M;
use BankasV2\App;
use BankasV2\Safe;
use BankasV2\Validations as V;

class CreateController
{
    public function __construct()
  {
      if (!LogController::isLogged()) {
          App::redirect('login');
      }
  }
    public function toCreatePage()
    {

        $id = Safe::clientId();
        $iban = CreateController::acountNr();
        return App::view('create', ['title' => 'Bankas', 'id' => $id, 'iban' => $iban, 'messages' => M::get()]);
    }

    public static function acountNr()
    {
        $controlNumber = '';
        $bankCode = '23456';
        for ($i = 0; $i < 2; $i++) {
            $controlNumber .= rand(0, 9);
        }
        $uniqNumber = '';
        for ($j = 0; $j < 11; $j++) {
            $uniqNumber .= rand(0, 9);
        }

        return 'LT' . $controlNumber . $bankCode . $uniqNumber;
    }
    
    public function keep()
    {
        if(
            !empty($_POST)
            && V::nameValid($_POST['name'])
            && V::nameValid($_POST['surname'])
            && V::idValid($_POST['personId'])
        ){ 
        $acount = [];
        $acount = ['client' => ($_POST['client'] ?? 0),
        'sasNr' => ($_POST['code'] ?? 0), 
        'name' => ($_POST['name'] ?? 0), 
        'surname' => ($_POST['surname'] ?? 0), 
        'personId' => ($_POST['personId'] ?? 0), 
        'suma' => 0];
        Safe::get()->create($acount);
        M::add('Naujas vartotojas pridėtas į sistemą', 'success');
        return App::redirect('accounts');
        }
        
        return App::redirect('create');   
    }
}