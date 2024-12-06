<?php

return [

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Domain\Users\Models\User::class,
        ],
    ],

];
