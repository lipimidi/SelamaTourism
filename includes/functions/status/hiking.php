<?php


function getHikingStatuses($num = null)
{

    $statusArray = [

        'not yet',  //0
        'ongoing', //1
        'finished',//2
        'cancelled',//3
        'delayed',//4
        'emergency',//5
    ];

    // If a number is provided, return the status at that index
    if ($num !== null && isset($statusArray[$num])) {
        return $statusArray[$num];
    }


    return $statusArray;


}
