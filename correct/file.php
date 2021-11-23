<?php

declare(strict_types=1);

function far(): void
{
}

far();

function name(Faker\Generator $faker)
{
    return $faker->name();
}
