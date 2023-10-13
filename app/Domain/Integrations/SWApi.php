<?php

namespace App\Domain\Integrations;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

// todo: Complete this Class

/**
 * Class SWApi
 * @url https://swapi.dev/
 */
class SWApi
{
    /**
     * @var int
     */
    public const DEFAULT_TIMEOUT = 100;

    /**
     * @var int
     */
    protected int $timeout = self::DEFAULT_TIMEOUT;

    /**
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function makeRequest(): PendingRequest
    {
        // todo: Complete this method
        return $this->makeRequestBase();
    }

    /**
     * @return \Illuminate\Http\Client\PendingRequest
     */
    protected function makeRequestBase(): PendingRequest
    {
        return Http::timeout($this->timeout);
    }
}
