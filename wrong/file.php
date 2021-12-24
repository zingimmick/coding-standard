<?php


function far(){}
far();

function name(\Faker\Generator $faker):string
{
    return $faker->name;
}
