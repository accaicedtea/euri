<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function card(): string
    {
        $data=[
            'title'=>'This is Euro Card'
        ];
        return view('card',$data);
    }
    public function testloop(): string
    {
        $data = [
            'items' => [
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'it',
                'size' => '2',
                'variant'=>'A',
                'release_year'=>2020
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'fr',
                'size' => '1',
                'variant' => 'B',
                'release_year' => 2019
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'de',
                'size' => '2',
                'variant' => 'C',
                'release_year' => 2021
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'es',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2018
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'it',
                'size' => '2',
                'variant' => 'B',
                'release_year' => 2020
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'pt',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2022
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'nl',
                'size' => '2',
                'variant' => 'C',
                'release_year' => 2019
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'be',
                'size' => '1',
                'variant' => 'B',
                'release_year' => 2021
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'gr',
                'size' => '2',
                'variant' => 'A',
                'release_year' => 2020
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'at',
                'size' => '1',
                'variant' => 'C',
                'release_year' => 2018
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'ie',
                'size' => '2',
                'variant' => 'B',
                'release_year' => 2022
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'fi',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2019
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'lu',
                'size' => '2',
                'variant' => 'C',
                'release_year' => 2021
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'mt',
                'size' => '1',
                'variant' => 'B',
                'release_year' => 2020
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'cy',
                'size' => '2',
                'variant' => 'A',
                'release_year' => 2018
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'sk',
                'size' => '1',
                'variant' => 'C',
                'release_year' => 2022
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'si',
                'size' => '2',
                'variant' => 'B',
                'release_year' => 2019
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'ee',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2021
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'lv',
                'size' => '2',
                'variant' => 'C',
                'release_year' => 2020
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'lt',
                'size' => '1',
                'variant' => 'B',
                'release_year' => 2018
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'it',
                'size' => '2',
                'variant' => 'A',
                'release_year' => 2022
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'fr',
                'size' => '1',
                'variant' => 'C',
                'release_year' => 2019
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'de',
                'size' => '2',
                'variant' => 'B',
                'release_year' => 2021
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'es',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2020
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'pt',
                'size' => '2',
                'variant' => 'C',
                'release_year' => 2018
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'nl',
                'size' => '1',
                'variant' => 'B',
                'release_year' => 2022
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'be',
                'size' => '2',
                'variant' => 'A',
                'release_year' => 2019
            ],
            [
                'title' => 'Primo titolo',
                'testo' => 'Primo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'gr',
                'size' => '1',
                'variant' => 'C',
                'release_year' => 2021
            ],
            [
                'title' => 'Secondo titolo',
                'testo' => 'Secondo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'at',
                'size' => '2',
                'variant' => 'B',
                'release_year' => 2020
            ],
            [
                'title' => 'Terzo titolo',
                'testo' => 'Terzo testo di esempio',
                'img' => base_url('euro.png'),
                'nationality' => 'ie',
                'size' => '1',
                'variant' => 'A',
                'release_year' => 2018
            ]
            ]
        ];
        return view('testloop', $data);
    }
}