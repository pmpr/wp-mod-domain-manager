<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a2dbe8c79             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\x62\141\143\x6b\154\151\x6e\153"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\x2f\147\x65\x74\x2d\144\x61\x74\x61", ["\141\162\147\x73" => [], "\x6d\145\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\x61\143\153" => [$this, "\163\145\x79\x79\151\161\x6d\x67\167\x79\155\x79\165\155\x6f\x71"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { goto qgeugwymkkiacwoc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\165\151\162\145\40\x70\x61\162\x61\x6d\145\x74\x65\162\x73\40\x6d\x69\x73\163\x69\x6e\147\x2e", PR__MOD__DOMAIN_MANAGER), 400); goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { goto ciykoyeioqgyaeqo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\145\x73\x74\x65\144\40\x63\x6f\x6d\x70\x6f\x6e\145\156\x74\40\156\x6f\164\x20\x66\x6f\x75\156\x64\x2e", PR__MOD__DOMAIN_MANAGER), 400); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\164\x5f{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { goto wcugqegqsuuuwqao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\156\x20\156\157\x74\x20\147\145\x6e\145\x72\141\164\145\x20\160\x61\x67\145\x20\x64\x61\x74\x61\56", PR__MOD__DOMAIN_MANAGER), 400); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { goto qoqskyuuwueqkquk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x6c\x65\141\163\x65\x20\x74\162\x79\40\x61\x67\141\151\156", PR__MOD__DOMAIN_MANAGER)); goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\141\x74\x61\x20\147\145\156\145\x72\x61\164\x65\144\40\x73\x75\x63\143\145\x73\163\146\165\x6c\154\171\56", PR__MOD__DOMAIN_MANAGER), $icwicymcioeyeyek); iwsuawwqomaowuii: asiqwuoswmigcaki: mqicocmqegwukkwg: emmsycooskoqmgeg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
