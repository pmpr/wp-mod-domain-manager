<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c31d4b18621             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\144\157\x6d\141\151\x6e\55\155\x61\156\141\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\x74\x2d\x64\x6f\x6d\x61\151\x6e", [self::wwgusigoaksqmwsm => [$this, "\167\x77\141\167\151\x73\x63\153\x69\161\x65\x75\145\157\x75\141"]]); $this->register("\x2f\x67\145\x74\55\x64\157\155\x61\x69\156\x73", [self::wwgusigoaksqmwsm => [$this, "\x77\x69\161\x75\155\153\x6d\x71\x6b\161\157\171\143\x71\x79\151"]]); $this->register("\57\147\x65\164\x2d\144\x6f\x6d\141\x69\x6e\x2d\146\151\145\154\144\163", [self::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\143\x65\x63\x63\x67\167\x61\141\x61\x69\147\x69\x79"]]); $this->register("\x2f\163\x61\x76\x65\x2d\144\x6f\155\141\x69\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\155\x71\153\143\x61\x75\145\153\171\155\145\x6b\x71\x61\x6b\x69"]]); $this->register("\x2f\x75\160\144\141\164\x65\x2d\x64\157\155\141\x69\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x61\155\x6f\147\161\x79\143\157\143\157\x75\x77\141\x69\143\x6f"]]); $this->register("\57\x67\145\164\55\x64\157\x6d\x61\x69\156\x2d\164\141\x62\163", [self::wwgusigoaksqmwsm => [$this, "\153\143\163\x71\145\161\x6d\x63\x67\153\167\153\143\x79\157\165"]]); $this->register("\x2f\147\145\164\55\x6f\167\156\145\x72\x73\x68\x69\160\163", [self::wwgusigoaksqmwsm => [$this, "\155\x63\x6f\153\167\155\145\165\165\x63\x71\x67\157\165\157\163"]]); $this->register("\x2f\x67\x65\164\55\157\x77\156\x65\162\163\150\151\x70", [self::wwgusigoaksqmwsm => [$this, "\151\x63\151\155\157\x63\171\155\167\x63\157\x71\145\x65\x6d\157"]]); $this->register("\57\x76\x65\162\151\x66\171\x2d\144\157\155\x61\x69\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\145\x79\155\145\x73\x73\167\157\163\x6b\165\163\x6b\x6d\171\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto soqqemyioggmoakg; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto eegqyykygiccaoeo; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); eegqyykygiccaoeo: wmmggowmigekyoso: soqqemyioggmoakg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto oqugqwcyomiaaoqu; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto eeqesooyqagwawae; suswcqoyyqkkquuo: $keccaugmemegoimu = $swgwkyqkakceqeia->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\157\155\141\x69\x6e\x20\x73\x75\143\x63\145\163\163\x66\165\154\x6c\171\40\x75\160\x64\141\164\x65\144\56", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); acaqummmoyiemqss: eeqesooyqagwawae: oqugqwcyomiaaoqu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uguigkcmukuouway; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto usquiuuyiyqaeyiu; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko); if ($ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu)) { goto hoeeyiowekaeemko; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\x20\x61\x63\143\145\163\163\x20\164\157\40\164\x68\x69\x73\40\163\x65\x67\155\145\x6e\x74", PR__MDL__DOMAIN_MANAGER), 401); goto kymkucucyeoeikim; hoeeyiowekaeemko: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto foeeqckqsyockkak; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy([$ueomouiqmosykioc->scqakcemaqsqkema($ukamowomoeiweqky)]); goto iekumemscwieugqw; foeeqckqsyockkak: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); iekumemscwieugqw: kymkucucyeoeikim: qicwaskssogcokgm: uguigkcmukuouway: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto suqkuqygkkgwyaie; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto gaomwagkcciesyqy; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto aegysmeecgcgayyw; gaomwagkcciesyqy: $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto uqqaiagaeqgqgaiy; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\x77\x6e\145\x72\163\x68\x69\x70\40\156\x6f\x74\40\x66\157\165\x6e\144", PR__MDL__DOMAIN_MANAGER), 404); esuiysskoweawsue: aegysmeecgcgayyw: suqkuqygkkgwyaie: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ewymsmkkiksgwysk; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm) { goto syiqkaasoueowwui; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\111\104", PR__MDL__PANEL)); goto giaacoqqqsekcayy; syiqkaasoueowwui: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto skkamseieeusycye; } if (!$ueomouiqmosykioc->qumqowkwyaceeqwu([$ueomouiqmosykioc::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::qkmqmaeuyokqgemg => $aokagokqyuysuksm])) { goto soaccwqimeksgwiw; } $keccaugmemegoimu = $mokawwccycoiqeka; goto wiysogeqqwgioyka; soaccwqimeksgwiw: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\151\x73\40\x64\x6f\155\141\x69\x6e\x20\x6e\x6f\x74\x20\x62\145\x6c\157\x6e\147\163\x20\164\x6f\x20\171\157\x75\x2e", PR__MDL__DOMAIN_MANAGER), 400); wiysogeqqwgioyka: goto cgiscsqwwgqqaeqi; skkamseieeusycye: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x65\163\x74\x65\x64\x20\x64\157\155\141\151\156\40\x6e\x6f\x74\40\146\157\165\156\144\56", PR__MDL__DOMAIN_MANAGER), 404); cgiscsqwwgqqaeqi: giaacoqqqsekcayy: ewymsmkkiksgwysk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qmuwoecuacmkwgem; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto wkeuuycukmuqiaom; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\x6e\145\162\x73\x68\151\160\x20\x6e\x6f\x74\40\x66\157\x75\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto sggawugoykqcmsug; ueigkucgaucgeimc: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\x6d\141\151\156")); if ($mokawwccycoiqeka) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\x6f\x6d\141\x69\x6e\40\156\157\164\40\x66\x6f\x75\156\144", PR__MDL__DOMAIN_MANAGER), 404); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto omqiayeucoioqoao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\x69\162\145\40\160\x61\162\141\155\145\164\145\162\x73\40\156\x6f\x74\x20\x66\157\x75\156\x64", PR__MDL__DOMAIN_MANAGER), 400); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $iwywmkygwewiamwm = "\150\164\164\160\x73\72\57\57{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\56\150\x74\x6d\x6c"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\145\x73\160\x6f\156\163\x65"]["\x63\157\x64\145"]) && $sogksuscggsicmac["\x72\x65\163\x70\x6f\x6e\x73\145"]["\143\x6f\x64\x65"] == 200) { goto cewmoqyysgsmuiya; } if (is_wp_error($sogksuscggsicmac)) { goto egyyiccaeeiooaua; } $uamcoiueqaamsqma = __("\x43\x61\x6e\x20\x6e\157\x74\40\x66\x69\x6e\144\40\x66\151\x6c\145", PR__MDL__DOMAIN_MANAGER); goto scisgsyemmsekgos; egyyiccaeeiooaua: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); scisgsyemmsekgos: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\x72\x69\x66\x79\x20\106\x61\151\154\x65\144\72\x20\45\163", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto igooksugieceoege; cewmoqyysgsmuiya: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\142\157\144\x79"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto gkyawqqcmigqgaiq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\162\x69\146\x79\x20\106\x61\x69\x6c\x65\x64\x3a\x20\45\x73", PR__MDL__DOMAIN_MANAGER), __("\x46\x69\x6c\145\40\143\157\x6e\x74\x65\x6e\164\x20\156\157\x74\40\x76\141\154\x69\144", PR__MDL__DOMAIN_MANAGER))); goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\x6e\157\x77"))->format("\x59\x2d\x6d\55\144\x20\110\x3a\151\72\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto cmegwsegsosyqcai; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\162\151\x66\x79\40\106\141\x69\x6c\x65\144\x3a\40\x25\x73", PR__MDL__DOMAIN_MANAGER), __("\120\154\145\141\x73\x65\40\164\162\171\40\141\x67\x61\151\x6e", PR__MDL__DOMAIN_MANAGER)), 500); goto wmywuusgukmmaams; cmegwsegsosyqcai: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\x6d\x61\151\156\40\x56\x65\x72\x69\146\151\145\x64\40\x73\x75\x63\143\x65\x73\x73\x66\x75\x6c\x6c\x79\x2e", PR__MDL__DOMAIN_MANAGER)); wmywuusgukmmaams: ooeausyowguqicuo: igooksugieceoege: ugqaaewwmkocwwgy: kqgcyoscsusgoaqi: sggawugoykqcmsug: wakmayaoqoskekqy: qmuwoecuacmkwgem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = self::awysmmukegasimmq === $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck); $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\x69\164\x65\x20\157\x72\x20\123\x74\157\162\145\40\116\141\155\x65", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x49\156\x74\x65\x72\156\x65\x74\x20\104\157\x6d\x61\151\x6e", PR__MDL__DOMAIN_MANAGER), __("\x45\156\164\145\162\x20\x79\x6f\x75\x72\40\144\157\x6d\x61\151\x6e\40\167\x69\x74\x68\x6f\x75\164\40\150\x74\x74\160\x20\141\156\144\x20\167\x77\167", PR__MDL__DOMAIN_MANAGER))->kyiucygqsgequoys("\x65\x78\x61\155\x70\x6c\x65\x2e\x63\157\155")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconInterface::emuwacasoaaageiq); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto owmuceyswmgueasi; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); owmuceyswmgueasi: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mwsmsguqqkcwiiuk; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); mwsmsguqqkcwiiuk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto eogwckcymuugikuy; } $keccaugmemegoimu[] = "\x64\157\x6d\x61\x69\x6e\55\145\144\x69\x74"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto eeauyscekuckoues; } $keccaugmemegoimu[] = "\144\x6f\x6d\141\x69\156\55\x6f\167\x6e\145\x72\163\150\151\x70"; $keccaugmemegoimu[] = "\x64\157\x6d\x61\x69\156\x2d\x76\x65\x72\x69\146\x69\x63\141\x74\x69\157\x6e"; eeauyscekuckoues: eogwckcymuugikuy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
