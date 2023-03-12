<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class HU_Hungary extends Seeder
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
    public $region = 'europe';
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Hungary';
        $this->official_name = 'Hungary';
        $this->iso_alpha_2 = 'HU';
        $this->iso_alpha_3 = 'HUN';
        $this->iso_numeric = '348';
        $this->international_phone = '36';
 
        $this->languages = ['hu'];
        $this->tld = ['.hu'];
        $this->wmo = 'HU';
        $this->geoname_id = '719819';
 
        $this->emoji = [
            'img' => '🇭🇺',
            'uCode' => 'U+1F1ED U+1F1FA',
        ];
        $this->color = [
            'hex' => [
                '#ff0000',
                '#ffffff',
                '#008000',
            ],
            'rgb' => [
                '255,0,0',
                '255,255,255',
                '0,128,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '47 00 N',
                'desc' => '47.165733337402344',
            ],
            'longitude' => [
                'classic' => '20 00 E',
                'desc' => '19.416574478149414',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '48.983333',
                'min' => '45.75',
            ],
            'longitude' => [
                'max' => '22.866667',
                'min' => '16.183333',
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
      "properties": { "cca2": "hu" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [18.81702, 45.912964],
            [18.807499, 45.902771],
            [18.779999, 45.894722],
            [18.723331, 45.909439],
            [18.715553, 45.913605],
            [18.622219, 45.856941],
            [18.614719, 45.845833],
            [18.601665, 45.830276],
            [18.595276, 45.825554],
            [18.559444, 45.801666],
            [18.551666, 45.798332],
            [18.443333, 45.752777],
            [18.424164, 45.749161],
            [18.407497, 45.748329],
            [18.335831, 45.754166],
            [18.329441, 45.754715],
            [18.26083, 45.762497],
            [18.250553, 45.764442],
            [18.242775, 45.768326],
            [18.238052, 45.773888],
            [18.230831, 45.778328],
            [18.220833, 45.781105],
            [18.201942, 45.783333],
            [18.189163, 45.784439],
            [18.153332, 45.787216],
            [18.006386, 45.786942],
            [17.880833, 45.783882],
            [17.669441, 45.834999],
            [17.66, 45.838333],
            [17.657219, 45.840828],
            [17.652695, 45.853134],
            [17.649441, 45.877495],
            [17.640274, 45.893051],
            [17.62611, 45.90583],
            [17.591663, 45.93222],
            [17.585278, 45.936943],
            [17.576664, 45.940552],
            [17.458611, 45.954437],
            [17.427776, 45.952499],
            [17.432858, 45.945427],
            [17.434166, 45.943604],
            [17.434719, 45.93972],
            [17.431664, 45.937218],
            [17.423332, 45.934441],
            [17.418053, 45.934715],
            [17.389442, 45.938049],
            [17.358608, 45.949997],
            [17.351109, 45.953331],
            [17.311386, 45.975273],
            [17.256943, 46.01722],
            [17.255554, 46.020554],
            [17.25861, 46.023048],
            [17.254719, 46.053329],
            [17.239441, 46.083611],
            [17.23, 46.097221],
            [17.185555, 46.151939],
            [17.179996, 46.157219],
            [17.157497, 46.177773],
            [17.153889, 46.179993],
            [17.149719, 46.181664],
            [17.040276, 46.214165],
            [16.973053, 46.233604],
            [16.937771, 46.249451],
            [16.91972, 46.259995],
            [16.892776, 46.282494],
            [16.889999, 46.284996],
            [16.880577, 46.304504],
            [16.879025, 46.308571],
            [16.878887, 46.337494],
            [16.87833, 46.34111],
            [16.873886, 46.346939],
            [16.866108, 46.355827],
            [16.840553, 46.369995],
            [16.801388, 46.391388],
            [16.66111, 46.465553],
            [16.628609, 46.474998],
            [16.607872, 46.476234],
            [16.532497, 46.507774],
            [16.529442, 46.510277],
            [16.408607, 46.658882],
            [16.385555, 46.70166],
            [16.375328, 46.722771],
            [16.364998, 46.719162],
            [16.359444, 46.718887],
            [16.356388, 46.721382],
            [16.326385, 46.75444],
            [16.324165, 46.757217],
            [16.313889, 46.785553],
            [16.313889, 46.793884],
            [16.315277, 46.797775],
            [16.318886, 46.799995],
            [16.337219, 46.809166],
            [16.350555, 46.836937],
            [16.350555, 46.84111],
            [16.348888, 46.844444],
            [16.346107, 46.846939],
            [16.303055, 46.867775],
            [16.293331, 46.870827],
            [16.269722, 46.874443],
            [16.231941, 46.876663],
            [16.226944, 46.875832],
            [16.191666, 46.86972],
            [16.180832, 46.863609],
            [16.175831, 46.862495],
            [16.145554, 46.85833],
            [16.140831, 46.85833],
            [16.136387, 46.859993],
            [16.111805, 46.86972],
            [16.136108, 46.877777],
            [16.139721, 46.879997],
            [16.253609, 46.958328],
            [16.276665, 46.988052],
            [16.302776, 47.011383],
            [16.346943, 47.009995],
            [16.412498, 47.007774],
            [16.445, 47.004715],
            [16.481388, 47.000549],
            [16.497776, 47.00222],
            [16.506943, 47.004715],
            [16.510555, 47.00666],
            [16.510555, 47.009995],
            [16.505554, 47.114998],
            [16.466942, 47.146942],
            [16.461666, 47.146385],
            [16.456108, 47.146942],
            [16.452499, 47.148888],
            [16.421944, 47.205826],
            [16.420555, 47.20916],
            [16.420555, 47.213333],
            [16.444721, 47.244438],
            [16.469166, 47.257774],
            [16.47361, 47.259438],
            [16.477219, 47.261383],
            [16.491665, 47.279999],
            [16.491108, 47.283882],
            [16.456387, 47.368889],
            [16.450554, 47.407219],
            [16.450554, 47.41111],
            [16.451942, 47.415276],
            [16.454998, 47.41777],
            [16.459164, 47.419167],
            [16.470833, 47.419716],
            [16.482777, 47.418053],
            [16.592499, 47.425278],
            [16.655205, 47.458153],
            [16.705276, 47.521111],
            [16.713886, 47.543884],
            [16.668888, 47.611664],
            [16.663887, 47.617218],
            [16.648888, 47.629715],
            [16.645275, 47.631943],
            [16.636665, 47.63472],
            [16.630833, 47.635826],
            [16.624722, 47.635826],
            [16.602497, 47.628609],
            [16.590832, 47.629166],
            [16.493053, 47.64666],
            [16.44833, 47.659721],
            [16.429443, 47.666107],
            [16.425831, 47.668327],
            [16.426941, 47.671387],
            [16.450554, 47.698051],
            [16.555832, 47.756104],
            [16.561386, 47.75666],
            [16.612221, 47.759163],
            [16.635555, 47.760277],
            [16.715832, 47.734718],
            [16.723331, 47.730553],
            [16.725555, 47.727493],
            [16.729164, 47.713051],
            [16.734444, 47.703331],
            [16.737221, 47.700829],
            [16.7575, 47.686943],
            [16.761944, 47.685272],
            [16.768608, 47.684715],
            [16.824444, 47.683884],
            [16.910831, 47.690826],
            [16.955276, 47.694717],
            [17.053886, 47.709442],
            [17.071663, 47.728607],
            [17.068607, 47.768326],
            [17.058609, 47.789444],
            [17.054996, 47.799721],
            [17.054443, 47.847221],
            [17.060555, 47.876938],
            [17.108055, 47.971382],
            [17.146942, 48],
            [17.166386, 48.012497],
            [17.176388, 48.01944],
            [17.180832, 48.021111],
            [17.19083, 48.023048],
            [17.236664, 48.025833],
            [17.241713, 48.025551],
            [17.251656, 48.024994],
            [17.254166, 48.016106],
            [17.26083, 48.007217],
            [17.264442, 48.004997],
            [17.273331, 48.001663],
            [17.311943, 47.998055],
            [17.335831, 47.998329],
            [17.340553, 47.997498],
            [17.355553, 47.988884],
            [17.411884, 47.944748],
            [17.442219, 47.916664],
            [17.447498, 47.91111],
            [17.448887, 47.907776],
            [17.457775, 47.895828],
            [17.466389, 47.888329],
            [17.485867, 47.877968],
            [17.712219, 47.770554],
            [17.784409, 47.746803],
            [17.790161, 47.746056],
            [17.896942, 47.747551],
            [17.901386, 47.749161],
            [17.916386, 47.75222],
            [17.976109, 47.763611],
            [18.086109, 47.759438],
            [18.119164, 47.756943],
            [18.131664, 47.755272],
            [18.195831, 47.747772],
            [18.297222, 47.737221],
            [18.312222, 47.737778],
            [18.337498, 47.740829],
            [18.378609, 47.747215],
            [18.41333, 47.753883],
            [18.446941, 47.766937],
            [18.451664, 47.767776],
            [18.540833, 47.767494],
            [18.597221, 47.763054],
            [18.636944, 47.759163],
            [18.655277, 47.758606],
            [18.67083, 47.760826],
            [18.675278, 47.762497],
            [18.690552, 47.770271],
            [18.720554, 47.78611],
            [18.726944, 47.791107],
            [18.732498, 47.797218],
            [18.738609, 47.807495],
            [18.749729, 47.813156],
            [18.765831, 47.815552],
            [18.788055, 47.817215],
            [18.84972, 47.817772],
            [18.855831, 47.830276],
            [18.853611, 47.833054],
            [18.82, 47.855553],
            [18.792221, 47.86972],
            [18.787777, 47.871666],
            [18.774441, 47.873329],
            [18.769997, 47.874992],
            [18.766941, 47.877777],
            [18.759441, 47.90361],
            [18.758888, 47.907494],
            [18.75972, 47.921661],
            [18.760555, 47.926109],
            [18.771664, 47.965553],
            [18.827366, 48.036125],
            [18.841576, 48.047195],
            [18.849098, 48.051064],
            [18.904503, 48.057693],
            [18.910069, 48.058258],
            [18.965675, 48.059799],
            [18.989799, 48.067101],
            [19.00127, 48.068954],
            [19.041714, 48.070641],
            [19.13945, 48.061676],
            [19.208336, 48.059448],
            [19.460548, 48.085831],
            [19.472218, 48.087219],
            [19.476383, 48.089165],
            [19.480553, 48.095551],
            [19.494442, 48.127495],
            [19.498608, 48.138329],
            [19.501663, 48.150276],
            [19.50861, 48.17305],
            [19.524166, 48.205826],
            [19.532513, 48.210861],
            [19.540016, 48.213196],
            [19.630554, 48.233887],
            [19.644444, 48.233887],
            [19.66222, 48.231941],
            [19.754997, 48.209442],
            [19.783607, 48.201111],
            [19.787777, 48.199165],
            [19.791111, 48.196938],
            [19.7925, 48.193054],
            [19.788887, 48.181664],
            [19.90361, 48.131943],
            [19.907776, 48.130272],
            [19.912498, 48.129715],
            [19.91861, 48.129997],
            [19.937775, 48.135277],
            [19.941944, 48.137215],
            [19.963608, 48.150276],
            [19.974442, 48.156662],
            [20.004997, 48.172775],
            [20.015274, 48.174995],
            [20.05933, 48.176308],
            [20.09333, 48.198326],
            [20.140553, 48.226105],
            [20.235554, 48.274994],
            [20.276386, 48.256104],
            [20.280277, 48.254166],
            [20.286663, 48.253883],
            [20.291943, 48.254715],
            [20.299721, 48.258606],
            [20.317219, 48.269722],
            [20.340832, 48.28611],
            [20.359165, 48.300278],
            [20.366943, 48.308884],
            [20.400555, 48.355553],
            [20.40361, 48.362778],
            [20.405277, 48.371109],
            [20.411942, 48.394165],
            [20.416386, 48.405273],
            [20.435833, 48.433609],
            [20.443607, 48.442215],
            [20.458611, 48.455276],
            [20.499443, 48.483059],
            [20.500832, 48.50444],
            [20.539719, 48.536942],
            [20.645275, 48.559998],
            [20.660553, 48.563332],
            [20.713333, 48.56916],
            [20.811665, 48.57666],
            [20.818607, 48.576385],
            [20.830276, 48.574997],
            [20.839165, 48.571663],
            [20.847775, 48.563606],
            [20.869999, 48.550827],
            [20.940277, 48.526382],
            [20.949718, 48.523605],
            [20.955276, 48.522499],
            [21.084442, 48.513611],
            [21.153332, 48.511108],
            [21.253887, 48.522217],
            [21.308712, 48.54805],
            [21.43111, 48.576111],
            [21.442776, 48.575272],
            [21.447777, 48.573883],
            [21.507221, 48.548882],
            [21.614166, 48.498329],
            [21.616665, 48.495552],
            [21.620552, 48.488884],
            [21.621666, 48.485275],
            [21.622776, 48.476944],
            [21.622776, 48.46833],
            [21.628052, 48.44944],
            [21.712776, 48.361382],
            [21.718609, 48.356384],
            [21.726665, 48.352493],
            [21.731388, 48.351105],
            [21.777496, 48.340828],
            [21.784443, 48.340553],
            [21.824165, 48.340271],
            [21.828331, 48.342216],
            [21.835831, 48.351105],
            [21.845276, 48.358604],
            [21.848888, 48.361382],
            [21.853054, 48.363052],
            [21.862778, 48.365555],
            [21.935833, 48.379166],
            [21.964996, 48.381943],
            [22.029442, 48.387497],
            [22.056664, 48.386665],
            [22.073055, 48.383606],
            [22.085831, 48.378052],
            [22.096107, 48.376389],
            [22.101665, 48.37722],
            [22.110832, 48.380272],
            [22.150555, 48.408607],
            [22.151442, 48.411919],
            [22.171715, 48.409058],
            [22.205551, 48.41777],
            [22.217216, 48.418602],
            [22.228882, 48.416939],
            [22.268887, 48.407211],
            [22.271385, 48.40416],
            [22.271111, 48.400543],
            [22.269444, 48.396942],
            [22.270275, 48.359993],
            [22.347775, 48.274994],
            [22.378609, 48.245544],
            [22.383331, 48.244156],
            [22.454716, 48.243607],
            [22.484718, 48.250549],
            [22.489716, 48.251663],
            [22.495827, 48.251106],
            [22.5, 48.249355],
            [22.504444, 48.24749],
            [22.507774, 48.24527],
            [22.574718, 48.18721],
            [22.597218, 48.147774],
            [22.598331, 48.143883],
            [22.60194, 48.128601],
            [22.602497, 48.115829],
            [22.604996, 48.113052],
            [22.611532, 48.108433],
            [22.621151, 48.101639],
            [22.630289, 48.099052],
            [22.643522, 48.09531],
            [22.650551, 48.093323],
            [22.670551, 48.092216],
            [22.680828, 48.094154],
            [22.697216, 48.101387],
            [22.737774, 48.114441],
            [22.78194, 48.117493],
            [22.788052, 48.117767],
            [22.79361, 48.116661],
            [22.797497, 48.114716],
            [22.84444, 48.084717],
            [22.846464, 48.083221],
            [22.85083, 48.079994],
            [22.879997, 48.049721],
            [22.882496, 48.046944],
            [22.886108, 48.040276],
            [22.88694, 48.036659],
            [22.886662, 48.031937],
            [22.881107, 48.02166],
            [22.859165, 47.993889],
            [22.894804, 47.95454],
            [22.782776, 47.849159],
            [22.782497, 47.844719],
            [22.780277, 47.84166],
            [22.774441, 47.836388],
            [22.65361, 47.776382],
            [22.634163, 47.77166],
            [22.612221, 47.768608],
            [22.594997, 47.766937],
            [22.557499, 47.766106],
            [22.546944, 47.768051],
            [22.503609, 47.789719],
            [22.5, 47.790852],
            [22.489441, 47.794167],
            [22.472775, 47.796944],
            [22.454441, 47.796387],
            [22.445274, 47.793327],
            [22.323055, 47.747498],
            [22.318886, 47.745827],
            [22.276943, 47.728607],
            [22.270554, 47.723885],
            [22.226387, 47.680832],
            [22.224163, 47.677773],
            [22.191944, 47.630829],
            [22.19083, 47.626663],
            [22.189838, 47.603958],
            [22.186386, 47.59861],
            [22.177219, 47.59111],
            [22.158607, 47.585548],
            [22.118008, 47.57811],
            [22.043053, 47.536942],
            [22.032497, 47.530273],
            [22.023888, 47.522499],
            [22.015274, 47.514442],
            [22.010277, 47.508606],
            [22.006107, 47.496941],
            [22.006664, 47.484161],
            [22.009998, 47.473053],
            [22.018608, 47.456383],
            [22.021942, 47.445274],
            [22.020554, 47.425278],
            [22.015553, 47.395828],
            [22.013054, 47.388054],
            [22.00972, 47.380829],
            [22.0075, 47.377777],
            [22.004719, 47.374992],
            [21.996387, 47.371666],
            [21.985554, 47.369995],
            [21.962498, 47.36805],
            [21.937222, 47.362778],
            [21.932499, 47.361382],
            [21.925552, 47.357216],
            [21.922497, 47.354439],
            [21.874165, 47.299721],
            [21.869164, 47.293327],
            [21.843052, 47.238327],
            [21.841663, 47.234718],
            [21.84111, 47.225555],
            [21.84333, 47.21833],
            [21.846943, 47.211937],
            [21.84861, 47.203888],
            [21.84861, 47.191666],
            [21.844719, 47.184998],
            [21.790833, 47.120277],
            [21.782219, 47.112221],
            [21.769997, 47.106941],
            [21.751389, 47.101662],
            [21.734997, 47.094719],
            [21.709999, 47.07972],
            [21.653889, 47.032494],
            [21.651108, 47.029716],
            [21.651665, 47.025551],
            [21.653332, 47.022499],
            [21.655502, 47.020866],
            [21.690277, 47.010551],
            [21.693607, 47.008049],
            [21.695274, 47.004997],
            [21.695831, 47.000832],
            [21.691944, 46.994164],
            [21.67083, 46.961388],
            [21.613331, 46.884163],
            [21.545555, 46.839439],
            [21.529163, 46.828049],
            [21.526386, 46.825272],
            [21.519722, 46.815277],
            [21.493053, 46.763054],
            [21.488052, 46.752777],
            [21.489166, 46.749161],
            [21.494999, 46.743889],
            [21.502777, 46.739998],
            [21.521664, 46.734718],
            [21.528053, 46.729996],
            [21.529163, 46.726387],
            [21.528332, 46.722221],
            [21.526943, 46.718605],
            [21.521942, 46.712776],
            [21.493889, 46.686943],
            [21.489407, 46.684532],
            [21.467499, 46.685829],
            [21.45472, 46.685555],
            [21.449997, 46.685272],
            [21.441944, 46.681938],
            [21.329441, 46.622772],
            [21.326664, 46.619995],
            [21.324718, 46.616943],
            [21.308887, 46.59166],
            [21.30722, 46.588051],
            [21.29361, 46.532494],
            [21.288887, 46.460548],
            [21.219166, 46.408333],
            [21.208332, 46.402222],
            [21.19722, 46.391388],
            [21.191387, 46.381386],
            [21.185276, 46.362495],
            [21.178608, 46.326942],
            [21.178055, 46.299164],
            [21.176666, 46.295555],
            [21.08083, 46.246941],
            [21.059444, 46.239166],
            [21.053608, 46.238884],
            [21.048332, 46.239998],
            [21.03611, 46.245277],
            [20.989719, 46.254715],
            [20.86861, 46.276108],
            [20.846386, 46.27916],
            [20.82972, 46.277222],
            [20.820274, 46.274719],
            [20.795898, 46.265724],
            [20.783054, 46.259438],
            [20.761387, 46.246941],
            [20.75333, 46.238884],
            [20.720554, 46.191666],
            [20.719997, 46.187492],
            [20.726955, 46.17556],
            [20.72583, 46.171104],
            [20.720554, 46.16555],
            [20.706387, 46.156662],
            [20.69589, 46.150391],
            [20.679443, 46.14222],
            [20.624722, 46.130272],
            [20.619442, 46.131386],
            [20.582775, 46.154999],
            [20.563332, 46.164993],
            [20.535275, 46.17305],
            [20.48695, 46.181107],
            [20.340275, 46.159439],
            [20.285275, 46.146942],
            [20.276665, 46.144722],
            [20.270832, 46.139717],
            [20.264442, 46.130272],
            [20.261024, 46.114853],
            [20.257774, 46.11805],
            [20.20472, 46.149719],
            [20.200832, 46.151382],
            [20.118332, 46.166939],
            [20.112221, 46.167496],
            [19.961109, 46.17083],
            [19.859722, 46.155273],
            [19.850277, 46.152771],
            [19.845833, 46.151382],
            [19.842499, 46.149162],
            [19.74472, 46.162216],
            [19.70372, 46.176392],
            [19.672775, 46.180832],
            [19.660275, 46.181389],
            [19.570553, 46.173607],
            [19.559998, 46.171944],
            [19.50861, 46.143883],
            [19.505833, 46.141106],
            [19.504444, 46.137497],
            [19.506386, 46.134438],
            [19.517498, 46.123886],
            [19.518887, 46.120277],
            [19.517498, 46.116661],
            [19.511387, 46.111664],
            [19.46722, 46.078606],
            [19.460552, 46.074165],
            [19.286388, 45.989441],
            [19.281666, 45.988327],
            [19.16111, 45.986664],
            [19.155277, 45.987221],
            [19.151386, 45.988884],
            [19.148609, 45.991661],
            [19.136387, 46.014999],
            [19.130554, 46.019997],
            [19.123886, 46.023605],
            [19.119164, 46.024994],
            [19.107498, 46.025833],
            [19.096386, 46.024437],
            [19.087776, 46.021385],
            [19.080555, 46.01722],
            [19.012775, 45.968887],
            [19.006664, 45.963882],
            [18.995552, 45.952499],
            [18.858887, 45.91111],
            [18.835831, 45.91111],
            [18.81702, 45.912964]
          ]
        ]
      }
    }
  ]
}
';
    }
}
