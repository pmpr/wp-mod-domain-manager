<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7f191715             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\157\155\x61\x69\x6e\55\155\x61\x6e\141\147\145\x72"; parent::__construct(); } public function register_routes() { goto qwigomakwmyiwkgo; csscmcacoikwsecs: $this->register("\57\x73\141\166\x65\x2d\x64\x6f\x6d\141\151\156", ["\x61\162\x67\163" => [], "\155\x65\164\x68\157\144\163" => self::CREATABLE, "\143\x61\154\x6c\142\x61\x63\153" => [$this, "\x6d\161\153\x63\x61\x75\x65\x6b\x79\x6d\x65\x6b\x71\x61\153\x69"]]); goto cuykwgmswkskqkyi; qwigomakwmyiwkgo: $this->register("\57\147\x65\x74\55\x64\157\155\x61\151\x6e", ["\x61\x72\147\x73" => [], "\155\145\x74\x68\157\144\163" => self::READABLE, "\143\x61\154\x6c\142\x61\x63\153" => [$this, "\167\x77\141\167\x69\163\143\x6b\151\x71\145\165\145\x6f\x75\141"]]); goto myoicgcuugciueis; sciwggaeogcoesiu: $this->register("\57\147\145\x74\x2d\x6f\167\156\x65\162\x73\150\151\x70", ["\x61\162\x67\x73" => [], "\x6d\145\x74\150\x6f\x64\x73" => self::READABLE, "\x63\x61\x6c\x6c\x62\141\143\153" => [$this, "\x69\143\x69\x6d\x6f\x63\x79\x6d\167\x63\157\161\x65\x65\155\157"]]); goto eqkauqciwewmgeoi; asmecuqiyyswueqe: $this->register("\x2f\147\145\x74\55\144\157\155\141\x69\x6e\55\146\x69\145\x6c\144\x73", ["\141\162\x67\163" => [], "\155\145\164\x68\157\x64\x73" => self::READABLE, "\x63\141\x6c\154\x62\141\x63\153" => [$this, "\x75\147\155\143\x65\x63\143\x67\167\141\141\141\151\x67\x69\171"]]); goto csscmcacoikwsecs; kwagwqyusyiyoaqs: $this->register("\x2f\143\150\145\143\153\55\141\160\x69\153\145\171", ["\x61\162\x67\163" => [], "\155\145\164\x68\157\144\x73" => self::READABLE, "\143\141\154\154\142\141\143\x6b" => [$this, "\153\145\x71\167\x79\141\x6b\141\x77\x63\141\141\157\147\x69\145"], "\160\145\162\x6d\x69\x73\163\x69\157\x6e\x5f\x63\x61\154\154\142\x61\143\153" => "\137\137\x72\x65\164\165\x72\156\x5f\164\x72\165\145"]); goto yowsmsiyimmimemc; cuykwgmswkskqkyi: $this->register("\57\x75\160\x64\x61\164\x65\x2d\x64\157\x6d\141\151\x6e", ["\141\x72\x67\x73" => [], "\x6d\145\x74\x68\157\x64\x73" => self::CREATABLE, "\143\141\154\x6c\x62\141\x63\x6b" => [$this, "\x61\155\157\x67\161\x79\x63\157\143\x6f\165\167\141\151\143\157"]]); goto kuicqywysciceggs; kuicqywysciceggs: $this->register("\x2f\147\x65\x74\x2d\x64\157\x6d\141\x69\x6e\55\164\141\x62\163", ["\141\x72\147\x73" => [], "\x6d\x65\164\150\157\x64\x73" => self::READABLE, "\143\x61\x6c\x6c\x62\141\x63\x6b" => [$this, "\x6b\x63\x73\x71\x65\161\155\x63\x67\153\167\153\x63\171\157\x75"]]); goto mkwskuycuyguqqok; myoicgcuugciueis: $this->register("\x2f\x67\x65\x74\55\144\x6f\x6d\x61\x69\156\163", ["\141\x72\x67\163" => [], "\155\x65\x74\150\x6f\144\x73" => self::READABLE, "\143\141\154\x6c\x62\x61\143\x6b" => [$this, "\x77\151\161\x75\x6d\x6b\x6d\x71\x6b\x71\157\171\143\x71\x79\x69"]]); goto asmecuqiyyswueqe; eqkauqciwewmgeoi: $this->register("\57\x76\145\162\x69\146\x79\x2d\144\157\155\141\151\156", ["\x61\162\147\163" => [], "\x6d\x65\x74\x68\x6f\x64\163" => self::CREATABLE, "\x63\x61\x6c\154\x62\x61\143\153" => [$this, "\145\x79\x6d\x65\163\x73\167\x6f\163\x6b\x75\x73\153\x6d\171\x77"]]); goto kwagwqyusyiyoaqs; mkwskuycuyguqqok: $this->register("\57\x67\145\x74\55\x6f\167\x6e\145\162\x73\150\151\x70\163", ["\141\162\147\x73" => [], "\155\145\x74\x68\157\144\x73" => self::READABLE, "\143\141\154\154\x62\x61\x63\x6b" => [$this, "\155\x63\157\153\167\155\x65\x75\x75\143\x71\x67\157\x75\157\163"]]); goto sciwggaeogcoesiu; yowsmsiyimmimemc: } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { goto iomcaiwewsawiamu; ocokwuuquaokmasc: kiqogmwcgcamwiig: goto yiwiqaqmwiogawym; uukumskkeggaowck: if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto kiqogmwcgcamwiig; } goto cggowoquuiwqkyew; sqiciiuwmykocycc: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto eequksumcoogyoem; yiwiqaqmwiogawym: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto goacqqsgaaigyuaw; iomcaiwewsawiamu: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x70\x69\x5f\153\145\171"); goto sqiciiuwmykocycc; eequksumcoogyoem: $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); goto uukumskkeggaowck; cggowoquuiwqkyew: $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); goto ocokwuuquaokmasc; goacqqsgaaigyuaw: } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { goto kecwuwwcwokuksyq; ygkcacsyyckescqs: goto mswsoaimesegiiic; goto cuoqqgaygogsmmic; mqccmesakuemceqi: meawswgwagoqgkye: goto eyiamcekkgkiawqy; qcessicwuikwqsis: mswsoaimesegiiic: goto yssscwioiyygssec; qgegkeomwscwwiuw: if (is_wp_error($keccaugmemegoimu)) { goto egasokooagakisiy; } goto qmiwsequckckoaei; qwcegcuowwgiccos: wcesymwqykqoyuqk: goto qcessicwuikwqsis; cgewcsueoyaeikgm: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::CAP_OWNER) { goto meawswgwagoqgkye; } goto sukskmcwsoysiuqu; cuoqqgaygogsmmic: usqgaogkqgemuima: goto cgewcsueoyaeikgm; sukskmcwsoysiuqu: $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto igymseewwyiocoug; ieumumsgyguceusy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto coywmiyqgsweuiic; eyiamcekkgkiawqy: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE); goto twkmiuomimomscew; ickcmqoiosquugwe: if ($ukamowomoeiweqky) { goto usqgaogkqgemuima; } goto qmeoaqmsuseueqiy; twkmiuomimomscew: $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); goto kooskuwkuayiuose; kecwuwwcwokuksyq: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto qgegkeomwscwwiuw; goeoymmqqqeeoime: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param("\x64\x6f\x6d\141\151\156"); goto eiawsoasmscmqswa; eiawsoasmscmqswa: $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); goto ickcmqoiosquugwe; qmiwsequckckoaei: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto goeoymmqqqeeoime; qmeoaqmsuseueqiy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\x20\141\x63\143\x65\x73\163\40\164\x6f\40\x74\x68\151\163\40\x73\145\x67\x6d\x65\156\164", PR__PKG__DOMAIN_MANAGER), 401); goto ygkcacsyyckescqs; igymseewwyiocoug: goto wcesymwqykqoyuqk; goto mqccmesakuemceqi; kooskuwkuayiuose: $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); goto qwcegcuowwgiccos; yssscwioiyygssec: egasokooagakisiy: goto ieumumsgyguceusy; coywmiyqgsweuiic: } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { goto sycygoiaiqqageym; umgaesggesswoaqe: if (!$keccaugmemegoimu) { goto siqagquguiemuoku; } goto qsygcycwieukkgwc; iqcogmsguwoikame: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\156\x65\162\x73\150\151\160\x20\x6e\157\164\x20\146\x6f\165\x6e\x64", PR__PKG__DOMAIN_MANAGER), 404); goto gimmuoqwckiseaik; kciouyuaqkyqomam: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto wwkgkaecgiwggcck; quwcqmyokicssyew: siqagquguiemuoku: goto iqcogmsguwoikame; sycygoiaiqqageym: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto gygawoqywkukmqee; qsygcycwieukkgwc: $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc::USER, $ueomouiqmosykioc::VERIFY_DATE]); goto kiwqkcaekqqyuegq; gygawoqywkukmqee: if (is_wp_error($keccaugmemegoimu)) { goto oouoqimaaqcmccay; } goto kciouyuaqkyqomam; cmqucgoewuyieoyk: oouoqimaaqcmccay: goto yqykqysmiquwoasu; kiwqkcaekqqyuegq: goto ycakugokkqkuqyiu; goto quwcqmyokicssyew; wwkgkaecgiwggcck: $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($aqmwamyiwgeeymqa->get_param("\144\x6f\155\141\151\156"), $keccaugmemegoimu); goto umgaesggesswoaqe; gimmuoqwckiseaik: ycakugokkqkuqyiu: goto cmqucgoewuyieoyk; yqykqysmiquwoasu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ayyweymyuuiauamo; ayyweymyuuiauamo: } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { goto ssoucoucsgccekwe; gaomwagkcciesyqy: iggyqogweyosuikc: goto aegysmeecgcgayyw; oqugqwcyomiaaoqu: if ($ukamowomoeiweqky) { goto mosqsmqimqgqoase; } goto foeeqckqsyockkak; eegqyykygiccaoeo: $aokagokqyuysuksm = $aqmwamyiwgeeymqa->get_param(self::ID); goto ywqgcegomwaiuquc; miyqyeiwquwsacsm: if (is_wp_error($keccaugmemegoimu)) { goto qqewoyookaskiuek; } goto eegqyykygiccaoeo; qicwaskssogcokgm: $keccaugmemegoimu = $mokawwccycoiqeka; goto uguigkcmukuouway; uqqaiagaeqgqgaiy: kqksuugcgsyeoayy: goto esuiysskoweawsue; aegysmeecgcgayyw: qqewoyookaskiuek: goto suqkuqygkkgwyaie; hoeeyiowekaeemko: omugkkesagcyagmk: goto kymkucucyeoeikim; wmmggowmigekyoso: if (!$aokagokqyuysuksm) { goto ygcsmkuycoagwyou; } goto soqqemyioggmoakg; acaqummmoyiemqss: $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::ID, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::VALUE, $swgwkyqkakceqeia::API_KEY, $swgwkyqkakceqeia::CREATED_AT]); goto suswcqoyyqkkquuo; suswcqoyyqkkquuo: if (!$mokawwccycoiqeka) { goto omugkkesagcyagmk; } goto eeqesooyqagwawae; eeqesooyqagwawae: $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::OWNERSHIP_ID, $mokawwccycoiqeka, ["\52"], [self::USER => $ycoeoaakqyskgykq]); goto oqugqwcyomiaaoqu; kymkucucyeoeikim: ygcsmkuycoagwyou: goto usquiuuyiyqaeyiu; foeeqckqsyockkak: $mokawwccycoiqeka = null; goto iekumemscwieugqw; ssoucoucsgccekwe: $mokawwccycoiqeka = null; goto qkcyqocqqwmqgqww; esuiysskoweawsue: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\x75\x65\x73\164\x65\x64\40\144\x6f\155\141\x69\156\x20\156\x6f\x74\40\146\x6f\x75\156\144\x2e", PR__PKG__DOMAIN_MANAGER), 404); goto gaomwagkcciesyqy; soqqemyioggmoakg: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto acaqummmoyiemqss; usquiuuyiyqaeyiu: if (!$mokawwccycoiqeka) { goto kqksuugcgsyeoayy; } goto qicwaskssogcokgm; iekumemscwieugqw: mosqsmqimqgqoase: goto hoeeyiowekaeemko; qkcyqocqqwmqgqww: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto miyqyeiwquwsacsm; suqkuqygkkgwyaie: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto soaccwqimeksgwiw; uguigkcmukuouway: goto iggyqogweyosuikc; goto uqqaiagaeqgqgaiy; ywqgcegomwaiuquc: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); goto wmmggowmigekyoso; soaccwqimeksgwiw: } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { goto skkamseieeusycye; syiqkaasoueowwui: $keccaugmemegoimu = Domain::symcgieuakksimmu()->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); goto giaacoqqqsekcayy; ewymsmkkiksgwysk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto cmegwsegsosyqcai; cgiscsqwwgqqaeqi: if (is_wp_error($keccaugmemegoimu)) { goto wiysogeqqwgioyka; } goto syiqkaasoueowwui; skkamseieeusycye: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cgiscsqwwgqqaeqi; giaacoqqqsekcayy: wiysogeqqwgioyka: goto ewymsmkkiksgwysk; cmegwsegsosyqcai: } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { goto qmuwoecuacmkwgem; emmsycooskoqmgeg: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::VALUE); goto ouamogymawucwswu; ogsaaqsaogcqiouy: scisgsyemmsekgos: goto iwekmyyccgiyuecc; uaukmuiwskcemcsw: wkeuuycukmuqiaom: goto sockeswygwcskeuq; cwwmimggaaecmucw: goto omqiayeucoioqoao; goto awoaooyoeoyeeqee; ykomgumacooyomsk: if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY)) { goto ooeausyowguqicuo; } goto mqkmcysgoiaouiwm; ugqwuugsweqgmywk: ueigkucgaucgeimc: goto uaukmuiwskcemcsw; cogywoqcqummsyus: omqiayeucoioqoao: goto gmwykkouysyaqwqm; wcugqegqsuuuwqao: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($aqmwamyiwgeeymqa->get_param("\144\157\x6d\x61\x69\156")); goto asiqwuoswmigcaki; iwsuawwqomaowuii: sggawugoykqcmsug: goto wcugqegqsuuuwqao; eeauyscekuckoues: $iecimaigkkceeska = $aqmwamyiwgeeymqa->get_param(self::ID); goto eogwckcymuugikuy; eekcoeikaeaaeyii: egyyiccaeeiooaua: goto cogywoqcqummsyus; guykyqecgswcsmws: $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); goto kkumywowcoycymeo; wagqgeqymeqoeuyi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\167\x6e\145\x72\x73\150\x69\x70\x20\156\x6f\x74\x20\146\x6f\x75\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto qoqskyuuwueqkquk; gmwykkouysyaqwqm: wgewmqieuamsoayy: goto ugqwuugsweqgmywk; mugqyyeayeyggqqk: if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto ugqaaewwmkocwwgy; } goto acsqgiuageaasiyy; ouamogymawucwswu: $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY); goto mugqyyeayeyggqqk; awoaooyoeoyeeqee: igooksugieceoege: goto ogqmesokykywseys; owmuceyswmgueasi: if (is_wp_error($keccaugmemegoimu)) { goto wakmayaoqoskekqy; } goto mwsmsguqqkcwiiuk; qoqskyuuwueqkquk: goto wkeuuycukmuqiaom; goto iwsuawwqomaowuii; ousiuuwgwkiyikyq: goto cewmoqyysgsmuiya; goto ogsaaqsaogcqiouy; asiqwuoswmigcaki: if ($mokawwccycoiqeka) { goto kqgcyoscsusgoaqi; } goto ciykoyeioqgyaeqo; acsqgiuageaasiyy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\165\x69\162\x65\40\x70\141\x72\141\x6d\145\x74\x65\x72\x73\x20\156\157\164\x20\x66\157\165\156\x64", PR__PKG__DOMAIN_MANAGER), 400); goto oomguqikqokqwgku; gcckqucukawcasgk: goto gkyawqqcmigqgaiq; goto qmkaeeomgkwggoyo; qmuwoecuacmkwgem: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto owmuceyswmgueasi; gicyayswqyuoekcq: ooeausyowguqicuo: goto iikiiioqiyegyaak; mwsmsguqqkcwiiuk: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto eeauyscekuckoues; sockeswygwcskeuq: wakmayaoqoskekqy: goto mkwkkmkgiqiamacc; ikqqskkqqwmwssoo: cewmoqyysgsmuiya: goto aomysykcgikegiau; cuumeogeomowqisc: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\151\x66\x79\x20\106\x61\151\x6c\145\x64\x3a\40\45\x73", PR__PKG__DOMAIN_MANAGER), __("\120\x6c\145\x61\x73\145\40\x74\162\x79\40\141\x67\141\x69\156", PR__PKG__DOMAIN_MANAGER)), 500); goto gcckqucukawcasgk; qgeugwymkkiacwoc: kqgcyoscsusgoaqi: goto emmsycooskoqmgeg; iwekmyyccgiyuecc: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); goto ikqqskkqqwmwssoo; ocaguquugeamqckq: gkyawqqcmigqgaiq: goto eekcoeikaeaaeyii; kosaqwikueyksqmw: goto egyyiccaeeiooaua; goto gicyayswqyuoekcq; miweggwqeiaeweia: if (is_wp_error($sogksuscggsicmac)) { goto scisgsyemmsekgos; } goto kqqiegkuqagcqsya; kqqiegkuqagcqsya: $uamcoiueqaamsqma = __("\x43\141\156\40\x6e\x6f\x74\40\x66\151\x6e\144\x20\146\151\x6c\x65", PR__PKG__DOMAIN_MANAGER); goto ousiuuwgwkiyikyq; uiosisocuwokwkie: if ($sogksuscggsicmac[self::SUCCESS]) { goto wmywuusgukmmaams; } goto cuumeogeomowqisc; mqkmcysgoiaouiwm: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\162\x69\146\171\40\106\141\151\x6c\145\144\x3a\x20\45\163", PR__PKG__DOMAIN_MANAGER), __("\x46\x69\154\145\40\143\x6f\156\x74\x65\x6e\x74\x20\x6e\157\x74\40\x76\141\154\151\144", PR__PKG__DOMAIN_MANAGER))); goto kosaqwikueyksqmw; mqicocmqegwukkwg: goto ueigkucgaucgeimc; goto qgeugwymkkiacwoc; samwkqgwouggsguc: ugqaaewwmkocwwgy: goto wyuemgggaqogsmsq; ciykoyeioqgyaeqo: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\x6f\155\141\x69\x6e\40\156\157\x74\x20\146\x6f\165\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto mqicocmqegwukkwg; mkwkkmkgiqiamacc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto uaqackioaiqwcocy; aomysykcgikegiau: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\162\151\146\171\x20\106\141\x69\x6c\x65\144\x3a\40\x25\163", PR__PKG__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto cwwmimggaaecmucw; wyuemgggaqogsmsq: $iwywmkygwewiamwm = "\150\164\164\160\x3a\57\x2f{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\x2e\150\x74\155\154"; goto guykyqecgswcsmws; ogqmesokykywseys: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\x6f\x64\x79"] ?? ''); goto ykomgumacooyomsk; iikiiioqiyegyaak: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::CAPABILITY => Ownership::CAP_OWNER, $ueomouiqmosykioc::VERIFY_DATE => (new Datetime("\x6e\157\167"))->format("\131\x2d\155\55\144\40\x48\x3a\x69\72\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); goto uiosisocuwokwkie; msemumccgceyugmg: if ($ukamowomoeiweqky) { goto sggawugoykqcmsug; } goto wagqgeqymeqoeuyi; csammceowmqwaamq: $keccaugmemegoimu = ["\x63\157\x64\x65" => 200, "\x6d\x65\163\x73\141\147\145" => __("\104\157\x6d\141\151\156\40\x56\145\162\x69\146\151\145\144\x20\163\165\x63\143\145\x73\163\x66\165\154\x6c\x79\x2e")]; goto ocaguquugeamqckq; qmkaeeomgkwggoyo: wmywuusgukmmaams: goto csammceowmqwaamq; oomguqikqokqwgku: goto wgewmqieuamsoayy; goto samwkqgwouggsguc; eogwckcymuugikuy: $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); goto msemumccgceyugmg; kkumywowcoycymeo: if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\145\163\160\157\x6e\163\145"]["\143\157\x64\145"]) && $sogksuscggsicmac["\x72\145\163\160\157\x6e\163\x65"]["\143\x6f\144\x65"] == 200) { goto igooksugieceoege; } goto miweggwqeiaeweia; uaqackioaiqwcocy: } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { goto isgwkwacoyimiauk; eeyyskqsmquyquqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ewscugeuicukkycc; cgyakcqgugqgkqiw: cscusseysqygsoiy: goto eeyyskqsmquyquqw; uegouoiuyoqkcscg: $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); goto cgyakcqgugqgkqiw; isgwkwacoyimiauk: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto mggeqkcksyaymcsa; mggeqkcksyaymcsa: if (is_wp_error($keccaugmemegoimu)) { goto cscusseysqygsoiy; } goto uegouoiuyoqkcscg; ewscugeuicukkycc: } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { goto wusciwkkckmqigms; gommacygsykyussk: kqswcsysqawkcgye: goto ukqocwewouckikso; ukqocwewouckikso: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; goto ucqmumuygcywwqma; uykousayyomcaeaa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto uimeeckqksqeekqq; ucqmumuygcywwqma: $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); goto uykousayyomcaeaa; mwysseaekcsiesmm: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto amgsueumgaguceaa; wusciwkkckmqigms: $kiicsyeqweiekmgc = $aqmwamyiwgeeymqa->get_param(self::CONTEXT) == "\x65\144\x69\x74"; goto iiiccouaaqsyikae; uougwgeyiokewkkm: $eeamcawaiqocomwy->oykaosmaegqwmoga(); goto gommacygsykyussk; iiiccouaaqsyikae: $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\116\x61\155\145", PR__PKG__DOMAIN_MANAGER))->askmmuauqcuuqsea("\120\x61\x6e\145\x6c\124\x65\170\164\x49\156\160\x75\x74")->eumecwmqmukqgyea(); goto ukkcmocamwgiqayu; amgsueumgaguceaa: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::ID); goto gygwewcqsmwqismo; ukkcmocamwgiqayu: $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::VALUE, __("\125\122\114", PR__PKG__DOMAIN_MANAGER), __("\105\x6e\164\x65\x72\x20\x79\x6f\165\162\x20\x64\x6f\x6d\141\x69\156\x20\167\151\164\x68\x6f\x75\x74\40\150\x74\x74\160\x20\141\156\x64\40\167\167\x77", PR__PKG__DOMAIN_MANAGER))->askmmuauqcuuqsea("\120\x61\156\145\x6c\x54\145\170\164\111\x6e\160\x75\164")->saemoowcasogykak(IconFontawesomeInterface::ICON_LINK)->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->xkgcwkwsqysqamic(); goto mwysseaekcsiesmm; gygwewcqsmwqismo: if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto kqswcsysqawkcgye; } goto uougwgeyiokewkkm; uimeeckqksqeekqq: } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { goto kocqqoyymosmuksu; sioekkmekwygemyc: $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); goto yiowgigkkwsoqcci; qukocuwgakemmyga: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE); goto sioekkmekwygemyc; uqokiksoqcwwqgio: if (is_wp_error($keccaugmemegoimu)) { goto iuuuususuuuaieem; } goto qukocuwgakemmyga; yiowgigkkwsoqcci: $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); goto ieqesiiageaauiuw; gamqcwuwkikwqoay: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto mscyggqcesgqqksu; ieqesiiageaauiuw: iuuuususuuuaieem: goto gamqcwuwkikwqoay; kocqqoyymosmuksu: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto uqokiksoqcwwqgio; mscyggqcesgqqksu: } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { goto wsesqmcqoiyyqkqi; uckewycoogsogwiy: oyeyomcgkmgymogq: goto ikuuiauwouuqawuw; kwiggogcgciwuwqk: $keccaugmemegoimu[] = "\x64\x6f\155\x61\x69\156\x2d\166\x65\162\x69\146\151\143\141\x74\151\157\x6e"; goto uckewycoogsogwiy; oeocukauoyosicso: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::ID); goto suqceasgacskcmkc; ikuuiauwouuqawuw: iesekaeqeomeuaui: goto yoqakewookqoqacm; wsesqmcqoiyyqkqi: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto mogkoocsoeuyoqqa; mogkoocsoeuyoqqa: $keccaugmemegoimu = []; goto wkwamkgkwykeqkec; oimkeqocuguqqsqk: $keccaugmemegoimu[] = "\144\157\155\141\151\156\55\x65\x64\x69\x74"; goto oeocukauoyosicso; yoqakewookqoqacm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto gswcoeiisamakwii; yykqaowwsqgqysmq: $keccaugmemegoimu[] = "\x64\x6f\155\x61\x69\156\x2d\157\x77\x6e\x65\162\163\150\151\160"; goto kwiggogcgciwuwqk; wkwamkgkwykeqkec: if (is_wp_error($mkucggyaiaukqoce)) { goto iesekaeqeomeuaui; } goto oimkeqocuguqqsqk; suqceasgacskcmkc: if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto oyeyomcgkmgymogq; } goto yykqaowwsqgqysmq; gswcoeiisamakwii: } }
