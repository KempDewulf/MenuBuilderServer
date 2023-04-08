<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MenuController extends Controller
{

    function randomMenu() {
        $dishes = [ "beef", "chicken", "cod", "couscous", "eggrolls",
                    "gazpacho", "kebab", "linguine", "meatballs", "pork",
                    "quesadillas", "salad", "salmon", "sandwich",
                    "shrimp", "soup", "stirfry", "tacos", "zucchini" ];

        $dessert = ["icecream"];

        function randomFood($foodType) {
            return $foodType[array_rand($foodType)];
        }

        return ["menu" => array(
            "starter" => randomFood($dishes),
            "main" => randomFood($dishes),
            "dessert" => randomFood($dessert)
        )];
    }
}
