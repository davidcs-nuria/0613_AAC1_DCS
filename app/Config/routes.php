<?php

use App\Controllers\HomeController;

    return [
                [
                "path"=>"/",
                "method"=>"GET",
                "handler"=>[HomeController::class, "index"]
                ],[
                "path"=>"/",
                "method"=>"GET",
                "handler"=>[HomeController::class, "compra"]
                ],[
                "path"=>"/",
                "method"=>"GET",
                "handler"=>[HomeController::class, "venta"]
                ],[
                "path"=>"/contact",
                "method"=>"GET",
                "handler"=>[HomeController::class, "contact"]
                ]
            ];