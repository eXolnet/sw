<?php

namespace App\Domain\Movies\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class MovieDataFetcherJob implements ShouldQueue
{
    use Dispatchable;

    /**
     * @return void
     */
    public function handle(): void
    {
        // todo: implement this job
        // 1. Fetch films data from SWApi
        // 2. Map the data to the format required by the Movie model
        // 3. Check if the data has changed in the database
        // 4. If there are changes, update the database
    }
}
