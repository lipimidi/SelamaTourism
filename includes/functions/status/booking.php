<?php

function getBookingStatuses($num)
{

    $statusArray = [
        'declined',//0
        'pending',//1
        'accepted',//2
        'cancelled',//3
        'delayed',//4
        'emergency',//5

    ];

    return $statusArray[$num];


}
