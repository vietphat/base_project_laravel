<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getPageValidate(string $codePage){
        $pageControls = config("controls." . $codePage);

        $validate = [];

        foreach ($pageControls as $key => $value) {
            # code...
            $validate[$key] = $value['validate'];
        }
        return $validate;
    }
}
