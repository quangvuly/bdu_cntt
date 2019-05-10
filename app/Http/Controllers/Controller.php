<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\InfoModel;
use App\Model\HomeModel;
use App\Model\CommunicateModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $infoMod = new InfoModel;
        $infoGet = $infoMod->infoGet(1);

        $contactMod = new HomeModel;
        $contact = $contactMod->homePageContact();

        $commMod = new CommunicateModel;
        $comm = $commMod->listComm();

        view()->share([
            'infoGet' => $infoGet,
            'contact' => $contact,
            'comm' => $comm
        ]);
    }
}
