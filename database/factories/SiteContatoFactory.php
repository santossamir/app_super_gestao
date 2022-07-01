<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome' => $this->faker->name,
        'telefone' => $this->faker->tollFreePhoneNumber,
        'email' => $this->faker->unique()->email,
        'motivo_contato' => $this->faker->numberBetween(1,3),
        'mensagem' => $this->faker->text(200),
    ];
});
