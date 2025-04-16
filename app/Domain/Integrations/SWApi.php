<?php

namespace App\Domain\Integrations;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

// todo: Complete this Class

/**
 * Class SWApi
 * @url https://swapi.tech/
 */
class SWApi
{
    // public function getFilms(): array
    // {
    //     return $this->makeRequest()...
    // }

    /**
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function makeRequest(): PendingRequest
    {
        // todo: Complete this method
        return Http::baseUrl('https://www.swapi.tech/api/');
    }
}
