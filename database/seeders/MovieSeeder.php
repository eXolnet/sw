<?php

namespace Database\Seeders;

use App\Domain\Movies\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::query()->updateOrCreate(
            ['id' => 1],
            [
                'title' => 'A New Hope',
                'episode_id' => 4,
                'opening_crawl' => 'It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden ' .
                    'base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring ' .
                    'the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire\'s\r\nultimate ' .
                    'weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an ' .
                    'entire planet.\r\n\r\nPursued by the Empire\'s\r\nsinister agents, Princess\r\nLeia races home ' .
                    'aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and ' .
                    'restore\r\nfreedom to the galaxy....',
                'director' => 'George Lucas',
                'producer' => 'Gary Kurtz, Rick McCallum',
                'release_date' => '1977-05-25',
                'poster_url' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg',
                'created' => '2014-12-10T14:23:31.880000Z',
                'edited' => '2014-12-20T19:49:45.256000Z',
            ]
        );

        Movie::query()->updateOrCreate(
            ['id' => 2],
            [
                'title' => 'A New Hope',
                'episode_id' => 5,
                'poster_url' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/nNAeTmF4CtdSgMDplXTDPOpYzsX.jpg',
                'opening_crawl' => "It is a dark time for the\r\nRebellion. Although the Death\r\nStar has been " .
                    "destroyed,\r\nImperial troops have driven the\r\nRebel forces from their hidden\r\nbase and" .
                    " pursued them across\r\nthe galaxy.\r\n\r\nEvading the dreaded Imperial\r\nStarfleet, a group" .
                    " of freedom\r\nfighters led by Luke Skywalker\r\nhas established a new secret\r\nbase on the " .
                    "remote ice world\r\nof Hoth.\r\n\r\nThe evil lord Darth Vader,\r\nobsessed with finding " .
                    "young\r\nSkywalker, has dispatched\r\nthousands of remote probes into\r\nthe far reaches" .
                    " of space....",
                'director' => 'Irvin Kershner',
                'producer' => 'Gary Kurtz, Rick McCallum',
                'release_date' => '1980-05-17',
                'created' => '2014-12-12T11:26:24.656000Z',
                'edited' => '2014-12-15T13:07:53.386000Z',
            ]
        );

        Movie::query()->updateOrCreate(
            ['id' => 3],
            [
                'title' => 'Return of the Jedi',
                'episode_id' => 6,
                'poster_url' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/jQYlydvHm3kUix1f8prMucrplhm.jpg',
                'opening_crawl' => "Luke Skywalker has returned to\r\nhis home planet of Tatooine in\r\nan attempt" .
                    " to rescue his\r\nfriend Han Solo from the\r\nclutches of the vile gangster\r\nJabba the" .
                    " Hutt.\r\n\r\nLittle does Luke know that the\r\nGALACTIC EMPIRE has secretly\r\nbegun " .
                    "construction on a new\r\narmored space station even\r\nmore powerful than the first\r\ndreaded" .
                    " Death Star.\r\n\r\nWhen completed, this ultimate\r\nweapon will spell certain doom\r\nfor the" .
                    " small band of rebels\r\nstruggling to restore freedom\r\nto the galaxy...",
                'director' => 'Richard Marquand',
                'producer' => 'Howard G. Kazanjian, George Lucas, Rick McCallum',
                'release_date' => '1983-05-25',
                'created' => '2014-12-18T10:39:33.255000Z',
                'edited' => '2014-12-20T09:48:37.462000Z',
            ]
        );

        Movie::query()->updateOrCreate(
            ['id' => 4],
            [
                'title' => 'The Phantom Menace',
                'episode_id' => 1,
                'poster_url' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/6wkfovpn7Eq8dYNKaG5PY3q2oq6.jpg',
                'opening_crawl' => "Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes" .
                    " to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a" .
                    " blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping" .
                    " to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly" .
                    " debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched" .
                    " two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to" .
                    " settle the conflict....",
                'director' => 'George Lucas',
                'producer' => 'Rick McCallum',
                'release_date' => '1999-05-19',
                'created' => '2014-12-19T16:52:55.740000Z',
                'edited' => '2014-12-20T10:54:07.216000Z',
            ]
        );
    }
}
