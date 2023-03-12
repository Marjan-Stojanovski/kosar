<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SY_Syria extends Seeder
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
    public $region = 'asia';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Syria';
        $this->official_name = 'Syrian Arab Republic';
        $this->iso_alpha_2 = 'SY';
        $this->iso_alpha_3 = 'SYR';
        $this->iso_numeric = '760';
        $this->international_phone = '963';
 
        $this->languages = ['ar'];
        $this->tld = ['.sy',"\u0633\u0648\u0631\u064a\u0627."];
        $this->wmo = 'SY';
        $this->geoname_id = '163843';
 
        $this->emoji = [
            'img' => '🇸🇾',
            'uCode' => 'U+1F1F8 U+1F1FE',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
                '#000000',
                '#008000',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
                '0,0,0',
                '0,128,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '35 00 N',
                'desc' => '35.03312683105469',
            ],
            'longitude' => [
                'classic' => '38 00 E',
                'desc' => '38.473472595214844',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '37.280278',
                'min' => '32',
            ],
            'longitude' => [
                'max' => '42.337778',
                'min' => '35.6',
            ],
        ];
 
        $this->geographical = json_decode($this->geographical(), true);
 
        Builder::country($this);
    }
 
    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sy"},"geometry":{"type":"Polygon","coordinates":[[[42.355614,37.106926],[42.377769,37.079163],[42.379166,37.076111],[42.379166,37.068314],[42.377228,37.064674],[42.3741,37.063164],[42.367287,37.055889],[41.835274,36.598885],[41.403046,36.525551],[41.36721,36.472771],[41.290276,36.355553],[41.25499,36.054993],[41.271103,36.027771],[41.356934,35.876381],[41.378052,35.838608],[41.378609,35.835274],[41.384163,35.636658],[41.383881,35.625275],[41.322495,35.55056],[41.277771,35.495544],[41.272491,35.468323],[41.270821,35.443329],[41.269722,35.403046],[41.2686,35.39444],[41.262215,35.367775],[41.254433,35.343323],[41.246101,35.319443],[41.240555,35.304436],[41.238602,35.301102],[41.222488,35.253609],[41.215271,35.224709],[41.21241,35.200623],[41.211388,35.19471],[41.211098,35.182487],[41.212494,35.112778],[41.214722,35.069153],[41.223053,34.916939],[41.229156,34.788322],[41.220543,34.777489],[41.099434,34.608597],[41.03054,34.47361],[41.003876,34.419434],[40.663605,34.260277],[40.199432,34.040825],[40.165543,34.024437],[40,33.947655],[39.79805,33.853333],[39.57914,33.75],[39.386108,33.658882],[38.961388,33.455551],[38.810272,33.382217],[38.794701,33.377594],[38.697495,33.327499],[38.533562,33.241104],[38.318924,33.128738],[37.958885,32.937492],[37.624992,32.758331],[37.498604,32.68972],[37.495667,32.688881],[37.493889,32.687218],[37.153275,32.50029],[36.866386,32.34166],[36.837776,32.313606],[36.724159,32.336662],[36.643051,32.349159],[36.516106,32.363052],[36.488609,32.375549],[36.486938,32.375832],[36.400276,32.381943],[36.346664,32.433052],[36.314438,32.459717],[36.197495,32.533333],[36.165604,32.518227],[36.125832,32.527771],[36.079994,32.543327],[36.025833,32.613609],[36.003326,32.66333],[35.933609,32.718887],[35.928886,32.721664],[35.79361,32.744164],[35.763321,32.748886],[35.698051,32.71611],[35.682777,32.708328],[35.681107,32.707222],[35.648888,32.685272],[35.64666,32.702774],[35.651939,32.727493],[35.665482,32.761993],[35.667496,32.781387],[35.664993,32.796661],[35.662216,32.803329],[35.656662,32.807495],[35.639206,32.815315],[35.642494,32.849716],[35.64222,32.86055],[35.63916,32.867493],[35.618607,32.891388],[35.614464,32.894905],[35.621941,32.901665],[35.62722,32.909996],[35.633331,32.930832],[35.634163,32.940552],[35.634995,33],[35.642494,33.050552],[35.650024,33.091209],[35.652496,33.124992],[35.666939,33.205276],[35.669022,33.212173],[35.683052,33.238884],[35.681938,33.249161],[35.676384,33.251106],[35.669617,33.251717],[35.66777,33.252777],[35.651382,33.255554],[35.640274,33.250549],[35.633583,33.246605],[35.62944,33.244164],[35.626663,33.244164],[35.623634,33.245728],[35.62056,33.271454],[35.624718,33.275551],[35.628334,33.277721],[35.633049,33.280548],[35.76944,33.34111],[35.786659,33.347221],[35.794167,33.350555],[35.810555,33.360832],[35.813332,33.363884],[35.816109,33.370827],[35.818886,33.388885],[35.821663,33.396942],[35.82444,33.402222],[35.826942,33.404999],[35.832497,33.408882],[35.851997,33.41729],[35.876389,33.425827],[35.887497,33.431389],[35.893051,33.435272],[35.934166,33.46666],[36.034439,33.553329],[36.059166,33.579437],[36.061104,33.587776],[36.05555,33.595833],[36.025551,33.619164],[35.973328,33.641663],[35.968048,33.641937],[35.954163,33.637497],[35.948608,33.63694],[35.943329,33.638885],[35.934998,33.646111],[35.933884,33.654716],[35.96833,33.714996],[35.973885,33.721382],[36.01722,33.769722],[36.07,33.827217],[36.072075,33.827835],[36.240829,33.856384],[36.353333,33.826942],[36.361382,33.82666],[36.36972,33.827499],[36.378052,33.831665],[36.386665,33.838608],[36.389442,33.842773],[36.391106,33.854439],[36.388611,33.858604],[36.385826,33.861107],[36.366661,33.877495],[36.361107,33.880272],[36.355827,33.881386],[36.347496,33.880554],[36.333611,33.877777],[36.325272,33.878883],[36.284439,33.907494],[36.281662,33.910828],[36.283333,33.91777],[36.32222,33.968048],[36.333611,33.981941],[36.350273,33.997215],[36.397499,34.033882],[36.516937,34.107216],[36.623741,34.204994],[36.594994,34.226944],[36.592216,34.229439],[36.546661,34.344162],[36.525833,34.431938],[36.454437,34.491386],[36.429993,34.501938],[36.351227,34.500748],[36.364166,34.538055],[36.397499,34.554443],[36.451385,34.593048],[36.454163,34.596382],[36.459999,34.625275],[36.459999,34.635277],[36.457222,34.635826],[36.376389,34.639442],[36.298592,34.641937],[36.123329,34.644165],[36.120552,34.644165],[36.114571,34.639473],[36.111382,34.638054],[36.087494,34.633888],[36.036385,34.632217],[36.025276,34.632774],[35.972771,34.647499],[35.949715,34.694443],[35.931389,34.738609],[35.883331,34.874443],[35.875275,34.902222],[35.874718,34.908333],[35.874992,34.918884],[35.877777,34.986382],[35.882774,35.064995],[35.885551,35.101387],[35.886665,35.105553],[35.923882,35.15361],[35.953049,35.189163],[35.957771,35.194717],[35.959442,35.198326],[35.958885,35.202217],[35.950829,35.22583],[35.941666,35.24472],[35.929146,35.262062],[35.919998,35.421104],[35.918053,35.424164],[35.858604,35.476944],[35.855553,35.479164],[35.733887,35.581665],[35.782494,35.638054],[35.826942,35.708611],[35.841942,35.734993],[35.845551,35.741661],[35.879166,35.863884],[35.92244,35.926994],[36.015831,35.899719],[36.109993,35.861382],[36.128052,35.852219],[36.144165,35.833611],[36.155876,35.818443],[36.157776,35.817497],[36.168053,35.817497],[36.171661,35.81916],[36.176384,35.824715],[36.182495,35.854996],[36.182495,35.879715],[36.183884,35.901382],[36.184998,35.905548],[36.187492,35.913605],[36.190826,35.920555],[36.213882,35.95472],[36.219162,35.960274],[36.228607,35.966385],[36.232773,35.967499],[36.299995,35.969719],[36.372192,35.995827],[36.377747,36],[36.383606,36.03054],[36.387215,36.083321],[36.38221,36.092499],[36.378609,36.102486],[36.377495,36.109993],[36.374718,36.173325],[36.374718,36.177498],[36.375542,36.182213],[36.39222,36.213326],[36.506653,36.23333],[36.535553,36.23555],[36.575554,36.227776],[36.608887,36.219994],[36.619431,36.218597],[36.628609,36.219437],[36.674431,36.226105],[36.678055,36.227486],[36.684441,36.231667],[36.690269,36.236107],[36.692215,36.239159],[36.693047,36.247765],[36.691666,36.283051],[36.688599,36.289444],[36.661133,36.310982],[36.582764,36.397491],[36.571106,36.414719],[36.567215,36.42083],[36.566109,36.424164],[36.549164,36.48333],[36.549988,36.49221],[36.586388,36.619713],[36.659714,36.800278],[36.663879,36.811935],[36.663322,36.824158],[36.659943,36.83371],[36.673607,36.834435],[36.702766,36.82943],[36.933601,36.778046],[36.976379,36.763611],[36.988045,36.758324],[36.994431,36.753876],[37.028046,36.729713],[37.038605,36.719994],[37.043053,36.714432],[37.127495,36.659157],[37.248878,36.664719],[37.26944,36.664444],[37.36055,36.657494],[37.371941,36.656097],[37.381386,36.653885],[37.533333,36.677773],[37.552498,36.689713],[37.566376,36.696381],[37.577209,36.700829],[37.669716,36.737221],[37.701378,36.746941],[37.719162,36.749718],[37.736107,36.747765],[37.762215,36.747208],[37.777222,36.747498],[37.784157,36.748604],[37.891388,36.781097],[37.910828,36.787766],[37.924721,36.794434],[37.94722,36.808884],[37.964989,36.816933],[37.993332,36.824715],[38.023369,36.83036],[38.05555,36.850548],[38.088326,36.869713],[38.095276,36.873055],[38.102776,36.876099],[38.181107,36.905823],[38.229996,36.913322],[38.244164,36.914444],[38.249718,36.913879],[38.386375,36.898331],[38.43277,36.885544],[38.513611,36.858047],[38.532776,36.849442],[38.549431,36.839165],[38.628319,36.768044],[38.684166,36.725548],[38.710831,36.70916],[38.721931,36.703606],[38.731377,36.701111],[38.736931,36.700554],[38.774712,36.698044],[38.912766,36.695],[38.922493,36.695267],[38.966103,36.696938],[38.987778,36.701111],[39.004166,36.705269],[39.011375,36.708054],[39.038048,36.708611],[39.048882,36.707764],[39.074715,36.702766],[39.096375,36.695541],[39.130547,36.683601],[39.164719,36.671654],[39.178596,36.667763],[39.205826,36.665543],[39.220276,36.665276],[39.229996,36.665276],[39.257767,36.668053],[39.308601,36.678322],[39.439301,36.697517],[39.588051,36.71888],[39.809998,36.751389],[39.826111,36.755829],[39.923325,36.786385],[39.942772,36.792763],[40.007767,36.814713],[40.214432,36.895821],[40.263878,36.919487],[40.279709,36.928596],[40.415268,37.001381],[40.439713,37.013054],[40.455826,37.017487],[40.482491,37.020821],[40.50721,37.021378],[40.518883,37.024994],[40.634987,37.068886],[40.663605,37.081383],[40.676941,37.088875],[40.67971,37.091385],[40.69722,37.099709],[40.770821,37.11805],[40.806656,37.12249],[40.901108,37.128609],[40.929993,37.129715],[41.118332,37.097488],[41.205826,37.076378],[41.216385,37.071381],[41.221657,37.071106],[41.362488,37.074997],[41.454163,37.078888],[41.483047,37.080269],[41.539162,37.08416],[41.557213,37.086388],[41.840271,37.12999],[41.99527,37.172768],[42.056931,37.192772],[42.083321,37.208321],[42.145821,37.256943],[42.151665,37.261658],[42.180832,37.290543],[42.215828,37.289444],[42.294434,37.269722],[42.345276,37.238602],[42.351105,37.233887],[42.354439,37.227768],[42.355263,37.224434],[42.356934,37.137215],[42.357216,37.122208],[42.355614,37.106926]]]}}]}';
    }
}
