<?php


namespace App\Libs;


class CircleAreaLib
{
    public function getCircleArea(int $diameter): int
    {
        return (M_PI * $diameter**2)/4;
    }
}