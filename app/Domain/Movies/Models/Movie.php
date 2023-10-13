<?php

namespace App\Domain\Movies\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property int $episode_id
 * @property string $opening_crawl
 * @property string $director
 * @property string $producer
 * @property string $release_date
 * @property \Illuminate\Support\Carbon $created
 * @property \Illuminate\Support\Carbon $edited
 * @property string|null $poster_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 */
class Movie extends Model
{
    use HasFactory;

    // TODO-SG: Remove this to generate a bug <sgaudreau@exolnet.com>
    protected $fillable = [
        'title',
        'episode_id',
        'opening_crawl',
        'director',
        'producer',
        'release_date',
        'created',
        'edited',
        'poster_url',
    ];
}
