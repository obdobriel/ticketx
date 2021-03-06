<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\ClientInfo::class, function (Faker\Generator $faker) {
    $start = 1420041600; //2015-01-01 00:00:00
    $end = 1499356800; //2017-07-07 00:00:00

    $int = mt_rand(0, 9999);
    $float = mt_rand(0, 99);
    $fee = strval($int) . '.' . strval($float);

    return [
        'fuyou_account'          => str_random(30),
        'pay_type'               => mt_rand(1, 5),
        'deduct_time'            => date('H:i:s', mt_rand($start, $end)),
        'posno'                  => str_random(10),
        'fee'                    => floatval($fee),
        'import_bank'            => str_random('64'),
        'import_account'         => str_random('32'),
        'import_name'            => str_random('16'),
        'export_bank'            => str_random('64'),
        'export_account'         => str_random('32'),
        'export_name'            => str_random('16'),
        'area_id'                => mt_rand(1, 255),
        'area_name'              => str_random('16'),
        'city_id'                => mt_rand(1, 255),
        'city_name'              => str_random('16'),
        'section'                => str_random('32'),
        'director'               => str_random('16'),
        'area_manager'           => str_random('16'),
        'city_manager'           => str_random('16'),
        'store_manager'          => str_random('16'),
        'team_manager'           => str_random('16'),
        'account_manager'        => str_random('16'),
        'account_manager_cardid' => str_random('18'),
        'status'                 => mt_rand(1, 9),
        'client_id'              => function () {
            return factory(App\Model\Client::class)->create()->id;
        },
        'deleted_at'             => null,
        'created_at'             => mt_rand($start, $end),
        'updated_at'             => mt_rand($start, $end)
    ];
});
