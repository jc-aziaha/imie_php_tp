<?php


    $data = "abcd";

    $tab1 = ["a", "b", "c", "d"];

    $tab2 = ["a", "b", "c", "d", 1, 2, true, false, 4.2];

    $tab3 = ["a", "b", "c", "d", 1, 2, true, false, 4.2, [0 => "data1", 1 => "data2", 2 => 4]];

    $tab4 = ["a", "b", "c", "d", 1, 2, true, false, 4.2, ["data1" => $data, 1 => "data2", 2 => 4]];

    echo $tab4[9]["data1"];



    // $data = "hello";

    // $var = 1;

    // $tableau = ["a", 1, 2.2, true, ["kjhkjykj" => $var]];

    // echo $tableau[4]["data"];

    // for() {

    // }

    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }

    // 1ere forme
    // foreach ($variable as $value) 
    // {
    //     # code...
    // }
    
    // // 2nde forme
    // foreach ($variable as $key => $value) 
    // {
    //     # code...
    // }
