<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class HM_HeardIslandandMcDonaldIslands extends Seeder
{
 
    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $lang = 'en';
 
    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $region = 'oceania';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Heard Island and McDonald Islands';
        $this->official_name = 'Heard Island and McDonald Islands';
        $this->iso_alpha_2 = 'HM';
        $this->iso_alpha_3 = 'HMD';
        $this->iso_numeric = '672';
        $this->international_phone = '672';
 
        $this->languages = ['en'];
        $this->tld = ['.hm','.aq'];
        $this->wmo = '0';
        $this->geoname_id = '1547314';
 
        $this->emoji = [
            'img' => '🇭🇲',
            'uCode' => 'U+1F1ED U+1F1F2',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '53 06 S',
                'desc' => '-53.080108642578125',
            ],
            'longitude' => [
                'classic' => '72 31 E',
                'desc' => '73.56218719482422',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-52.9',
                'min' => '-53.2',
            ],
            'longitude' => [
                'max' => '73.85',
                'min' => '72.566667',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "hm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [73.77388, -53.125031],
            [73.746658, -53.126945],
            [73.719711, -53.13195],
            [73.688599, -53.140839],
            [73.66777, -53.148895],
            [73.647766, -53.157784],
            [73.635818, -53.164169],
            [73.624985, -53.171112],
            [73.618332, -53.174171],
            [73.56749, -53.191948],
            [73.550552, -53.195839],
            [73.531662, -53.198334],
            [73.509995, -53.199448],
            [73.474442, -53.194168],
            [73.460541, -53.189171],
            [73.430267, -53.166115],
            [73.396652, -53.138336],
            [73.358597, -53.080833],
            [73.35582, -53.075279],
            [73.288055, -53.026672],
            [73.255554, -53.019173],
            [73.242493, -53.006668],
            [73.234985, -52.997223],
            [73.234436, -52.987785],
            [73.299438, -52.964172],
            [73.307495, -52.966118],
            [73.35083, -53.004448],
            [73.35582, -53.008614],
            [73.36055, -53.012505],
            [73.372498, -53.019173],
            [73.434158, -53.029724],
            [73.444443, -53.030281],
            [73.462494, -53.026947],
            [73.469162, -53.02417],
            [73.479996, -53.016945],
            [73.486374, -53.014168],
            [73.522491, -53.011673],
            [73.531662, -53.012779],
            [73.578888, -53.024445],
            [73.632767, -53.046394],
            [73.647217, -53.05806],
            [73.654709, -53.067505],
            [73.66333, -53.076118],
            [73.677765, -53.088058],
            [73.706375, -53.105003],
            [73.719437, -53.11084],
            [73.747208, -53.120834],
            [73.77388, -53.125031]
          ]
        ]
      }
    }
  ]
}
';
    }
}
