<?php

function distance(array $ponit1,array $point2):float
{
    $dist = sqrt(($point2['x'] - $ponit1['x'])** 2 + ($point2['y'] - $ponit1['y'])** 2);
    return $dist;
}