<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c31d4b18621             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\x62\141\143\153\154\151\x6e\153"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\57\147\x65\164\x2d\144\141\164\x61", ["\x61\x72\x67\163" => [], "\x6d\145\164\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\141\x63\153" => [$this, "\x73\145\171\171\x69\x71\155\x67\x77\x79\x6d\x79\x75\x6d\157\161"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { goto cogywoqcqummsyus; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\x75\x69\x72\x65\x20\x70\141\x72\x61\x6d\x65\x74\x65\162\163\x20\155\x69\163\163\x69\156\147\x2e", PR__MDL__DOMAIN_MANAGER), 400); goto gmwykkouysyaqwqm; cogywoqcqummsyus: $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { goto ocaguquugeamqckq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\x75\x65\163\x74\x65\144\x20\x63\157\x6d\x70\157\x6e\145\x6e\x74\x20\156\x6f\x74\x20\146\157\x75\156\x64\x2e", PR__MDL__DOMAIN_MANAGER), 400); goto eekcoeikaeaaeyii; ocaguquugeamqckq: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\164\137{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { goto qmkaeeomgkwggoyo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\40\156\157\164\x20\x67\x65\x6e\x65\162\141\164\x65\x20\x70\x61\x67\145\x20\x64\141\164\x61\56", PR__MDL__DOMAIN_MANAGER), 400); goto csammceowmqwaamq; qmkaeeomgkwggoyo: $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { goto cuumeogeomowqisc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\154\145\141\x73\145\x20\x74\x72\x79\40\x61\x67\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER)); goto gcckqucukawcasgk; cuumeogeomowqisc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x61\x74\141\40\147\145\x6e\x65\x72\x61\164\145\x64\x20\x73\x75\x63\x63\x65\x73\163\146\x75\154\x6c\171\56", PR__MDL__DOMAIN_MANAGER), $icwicymcioeyeyek); gcckqucukawcasgk: csammceowmqwaamq: eekcoeikaeaaeyii: gmwykkouysyaqwqm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
