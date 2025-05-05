<?php

function getGuideStatuses($num = null)
{
    // Define the status array
    $statusArray = [

        'not yet',//0
        'assigned',//1
        'ongoing',//2
        'finished',//3
        'cancelled',//4
        'delayed',//5
        'emergency',//6
    ];

    // If a number is provided, return the status at that index
    if ($num !== null && isset($statusArray[$num])) {
        return $statusArray[$num];
    }

    return $statusArray;
}