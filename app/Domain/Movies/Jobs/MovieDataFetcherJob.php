<?php

namespace App\Domain\Movies\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

// todo: Complete this Class using the SWApi class
class MovieDataFetcherJob implements ShouldQueue
{
    use Dispatchable;

    /**
     * @return void
     */
    public function handle(): void
    {
        // todo: implement
    }

    protected function updateMovies(?array $externalMoviesData): ?array
    {
        // todo: implement
        return null;
    }

    protected function sendEmailNotificationWithDiff(): void
    {
        // todo: implement
        // Send email notification with the diff of the movies data
    }
}
