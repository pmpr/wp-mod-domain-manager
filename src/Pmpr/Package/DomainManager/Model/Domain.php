<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066ea3e4c4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Backlink\Model as Backlink; use WP_Error; class Domain extends Common { const BACKLINK_ID = "\142\141\143\153\x6c\x69\x6e\x6b" . self::_ID; const OWNERSHIP_ID = "\157\167\156\145\x72\163\x68\x69\x70" . self::_ID; const PURCHASE_ID = "\160\165\162\x63\x68\x61\163\145" . self::_ID; const API_KEY_LENGTH = 32; const yqkomaiikewyeges = "\142\x6c\x6f\x63\x6b\145\144"; const ycaauyuekyyiuosk = "\x76\151\x6f\x6c\141\164\145\144"; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\104\157\155\141\151\x6e", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\x44\157\155\141\151\x6e\163", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->aseucqksocwomwos()->wkesqcmiekqoykag(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::NAME)->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\x44\157\x6d\x61\x69\x6e\40\x4e\141\x6d\145", PR__PKG__DOMAIN_MANAGER)), $this->qcyqgwuuymykkcke(self::API_KEY)->acceqyqygswoecwe(self::API_KEY_LENGTH)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\101\120\x49\x20\113\x65\x79", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::ciywsqoeiymemsys)->acceqyqygswoecwe(10)->eyygsasuqmommkua(self::eqewsqmqmsiocaeg)->gswweykyogmsyawy(__("\x53\x74\x61\x74\165\x73", PR__PKG__DOMAIN_MANAGER))->qkwyekmiceaogwci(false), $this->qcyqgwuuymykkcke(self::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\x44\x6f\x6d\141\x69\x6e\40\101\x64\144\162\x65\x73\163", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu()->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false), $this->ggiieomioscuigco(self::OWNERSHIP_ID)->gswweykyogmsyawy(__("\x4f\x77\x6e\145\x72\x73\150\x69\x70\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class), $this->ggiieomioscuigco(self::BACKLINK_ID)->gswweykyogmsyawy(__("\102\x61\143\x6b\154\151\156\153\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class), $this->ggiieomioscuigco(self::PURCHASE_ID)->gswweykyogmsyawy(__("\x50\165\x72\x63\150\x61\x73\145\163", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class)]); parent::ewaqwooqoqmcoomi(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $iwywmkygwewiamwm = ManipulateArray::get($mksyucucyswaukig, self::ciyoccqkiamemcmm); return sprintf("\x25\163\x20\50\x25\x73\x29", ManipulateArray::get($mksyucucyswaukig, self::NAME), $iwywmkygwewiamwm); } private function mqwogqieoumeoocw() : string { return ManipulateString::ycwmswocisskwuwg(self::API_KEY_LENGTH); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::eqewsqmqmsiocaeg => __("\101\x63\164\x69\x76\x65", PR__PKG__DOMAIN_MANAGER), self::ycaauyuekyyiuosk => __("\x56\151\157\154\x61\x74\145\144", PR__PKG__DOMAIN_MANAGER), self::yqkomaiikewyeges => __("\x42\154\x6f\x63\153\145\x64", PR__PKG__DOMAIN_MANAGER)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function aakiaoueckoiyoew() : ?string { return self::ciywsqoeiymemsys; } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\x3d", clone $siykeiywomwwuoiw)]; qqewoyookaskiuek: } iggyqogweyosuikc: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo) { $ymqmyyeuycgmigyo = ManipulateArray::get($icwicymcioeyeyek, self::NAME); $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo && $miowmmgaiagcuyoo) { goto foeeqckqsyockkak; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\122\145\x71\x75\x69\162\x65\x64\x20\146\151\x65\154\144\163\40\156\x6f\164\x20\x70\x61\x73\x73\x65\144\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto iekumemscwieugqw; foeeqckqsyockkak: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo); if (preg_match("\43\x5e\150\164\x74\160\x28\x73\x29\77\x3a\57\57\x23", $eqgoocgaqwqcimie)) { goto ssoucoucsgccekwe; } $eqgoocgaqwqcimie = "\150\164\164\160\163\x3a\x2f\57{$eqgoocgaqwqcimie}"; ssoucoucsgccekwe: if (ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto eeqesooyqagwawae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6e\164\145\162\145\144\x20\x64\157\x6d\141\151\x6e\40\x69\163\40\x6e\x6f\164\x20\166\141\x6c\x69\x64\56", PR__PKG__DOMAIN_MANAGER), 400); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $gmqiuuqqkwakoiiu = true; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\x2f\x5e\167\77\167\x3f\167\77\134\x2e\x2f", '', ManipulateFormat::gokuyqsimauyacke($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($eqgoocgaqwqcimie, self::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { goto qkcyqocqqwmqgqww; } $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $mokawwccycoiqeka = $swgwkyqkakceqeia->gscuuyuyauokoyuo([self::NAME => $ymqmyyeuycgmigyo, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::API_KEY => $this->mqwogqieoumeoocw()]); $kigowwqauiumummw = $mokawwccycoiqeka[self::ckcawaoawwioqecq]; miyqyeiwquwsacsm: if ($kigowwqauiumummw) { goto acaqummmoyiemqss; } $sogksuscggsicmac = $this->oemauiimmycumcsk($mokawwccycoiqeka[self::iwyueouqaqegmcas], 400); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $akyiigeggqowmqqq = ManipulateArray::get($mokawwccycoiqeka, $ceiwsaacewygcsqg); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($gmqiuuqqkwakoiiu) { goto eegqyykygiccaoeo; } $ukamowomoeiweqky = $ueomouiqmosykioc->oqomcmyuuakigusk([$ueomouiqmosykioc::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::DOMAIN_ID => $akyiigeggqowmqqq]); eegqyykygiccaoeo: if (!$ukamowomoeiweqky) { goto wmmggowmigekyoso; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\151\163\x20\144\157\x6d\141\151\x6e\40\141\154\x72\145\x61\144\171\40\x65\x78\151\x73\x74\40\151\156\x20\171\x6f\165\x72\40\144\157\x6d\141\x69\156\163\56", PR__PKG__DOMAIN_MANAGER), 401); goto soqqemyioggmoakg; wmmggowmigekyoso: $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($akyiigeggqowmqqq, $ycoeoaakqyskgykq); if (is_wp_error($sogksuscggsicmac)) { goto ywqgcegomwaiuquc; } $sogksuscggsicmac = [self::vswoiouoaykswgym => "\x64\x6f\x6d\141\151\156\x5f\141\x64\144\145\x64", $ceiwsaacewygcsqg => $akyiigeggqowmqqq, self::ciywsqoeiymemsys => 200, self::eoskkkieowogacws => sprintf("\x25\x73\74\x62\x72\57\76\x25\x73", __("\x44\157\x6d\141\151\x6e\40\x73\165\143\x63\145\x73\163\x66\165\154\x6c\x79\x20\141\x64\144\x65\x64\x2e", PR__PKG__DOMAIN_MANAGER), __("\120\x6c\x65\x61\x73\x65\x20\x76\145\162\151\146\x79\x20\x64\x6f\155\141\151\x6e\56", PR__PKG__DOMAIN_MANAGER))]; ywqgcegomwaiuquc: soqqemyioggmoakg: suswcqoyyqkkquuo: oqugqwcyomiaaoqu: iekumemscwieugqw: return $sogksuscggsicmac; } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $aokagokqyuysuksm = $this->keeuqgyooycqoygw($mokawwccycoiqeka); $ymqmyyeuycgmigyo = ManipulateArray::get($mokawwccycoiqeka, self::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { goto gaomwagkcciesyqy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\x69\162\145\144\40\x66\x69\x65\x6c\144\163\40\156\157\164\40\x70\x61\163\x73\145\x64\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto aegysmeecgcgayyw; gaomwagkcciesyqy: if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto uqqaiagaeqgqgaiy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\157\x75\x20\144\157\156\164\x20\150\141\166\x65\40\x70\145\162\x6d\151\x73\163\151\157\156\x20\x74\157\40\145\x64\151\x74\x20\164\x68\x69\x73\40\144\157\x6d\x61\x69\x6e\56", PR__PKG__DOMAIN_MANAGER), 401); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, self::NAME => $ymqmyyeuycgmigyo, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); if (!$eeamcawaiqocomwy) { goto hoeeyiowekaeemko; } $icwicymcioeyeyek[self::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; hoeeyiowekaeemko: if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto qicwaskssogcokgm; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kymkucucyeoeikim; } $sogksuscggsicmac = $this->oemauiimmycumcsk(implode("\x20", $sogksuscggsicmac[self::iwyueouqaqegmcas])); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $sogksuscggsicmac = $icwicymcioeyeyek; usquiuuyiyqaeyiu: goto uguigkcmukuouway; qicwaskssogcokgm: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\123\157\x72\x72\x79\x20\x79\157\165\40\x63\x61\x6e\40\156\157\x74\40\x75\x70\x64\x61\164\x65\x20\171\x6f\165\x72\40\144\x6f\x6d\141\x69\156\40\141\144\144\162\x65\x73\x73\x2e", PR__PKG__DOMAIN_MANAGER), 400); uguigkcmukuouway: esuiysskoweawsue: aegysmeecgcgayyw: return $sogksuscggsicmac; } public function wmyyiowksyygqesq($mokawwccycoiqeka, $wksoawcgagcgoask) : bool { if (!is_numeric($mokawwccycoiqeka)) { goto suqkuqygkkgwyaie; } $mokawwccycoiqeka = $this->akkkoiiymmamsauc($mokawwccycoiqeka); suqkuqygkkgwyaie: $qcioqakuekamgwkw = $this->iscemaoqqckmkago(self::BACKLINK_ID, $mokawwccycoiqeka, "\52", [Backlink::COMPONENT_ID => $wksoawcgagcgoask]); return empty($qcioqakuekamgwkw); } public function qkmaaeieyisccgia($mokawwccycoiqeka, $wksoawcgagcgoask) { $sogksuscggsicmac = false; if (!$this->wmyyiowksyygqesq($mokawwccycoiqeka, $wksoawcgagcgoask)) { goto soaccwqimeksgwiw; } $sogksuscggsicmac = Backlink::symcgieuakksimmu()->wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask); soaccwqimeksgwiw: return $sogksuscggsicmac; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if (!($mokawwccycoiqeka && $mkucggyaiaukqoce)) { goto cgiscsqwwgqqaeqi; } $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::ucmueuwwcmocgmig => Ownership::CAP_OWNER]); if ($ukamowomoeiweqky) { goto skkamseieeusycye; } $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::ucmueuwwcmocgmig => Ownership::CAP_UNVERIFIED]); if (!$ukamowomoeiweqky) { goto wiysogeqqwgioyka; } $yciaosuiyeieceug = true; wiysogeqqwgioyka: skkamseieeusycye: cgiscsqwwgqqaeqi: return $yciaosuiyeieceug; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto syiqkaasoueowwui; case self::ciywsqoeiymemsys: $eqgoocgaqwqcimie = $this->agausceiyceikeag($eqgoocgaqwqcimie); goto syiqkaasoueowwui; default: $eqgoocgaqwqcimie = parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto syiqkaasoueowwui; } giaacoqqqsekcayy: syiqkaasoueowwui: return $eqgoocgaqwqcimie; } public function ogkgcwiskmoiweki($esuksqieigiqcaie, $gwgucoaaqcwwciqq) { if (strlen($esuksqieigiqcaie) == self::API_KEY_LENGTH) { goto ewymsmkkiksgwysk; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x59\157\165\162\40\101\120\111\40\113\x65\171\x20\x69\163\x20\x6e\157\164\40\166\141\154\151\x64\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $sogksuscggsicmac = $this->oqomcmyuuakigusk([self::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, self::API_KEY => $esuksqieigiqcaie]); cmegwsegsosyqcai: return $sogksuscggsicmac; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { goto egyyiccaeeiooaua; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x65\x73\164\x20\x6f\x72\x69\x67\x69\156\x20\x6e\157\x74\x20\x64\x65\164\145\x63\164\x65\144\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto scisgsyemmsekgos; egyyiccaeeiooaua: $keccaugmemegoimu = $this->ogkgcwiskmoiweki($esuksqieigiqcaie, $mokawwccycoiqeka); if (is_wp_error($keccaugmemegoimu)) { goto ooeausyowguqicuo; } if ($keccaugmemegoimu) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\x6e\40\156\157\x74\x20\x66\157\165\156\144\40\x64\x6f\x6d\141\151\156\x2c\40\x70\154\x65\141\x73\145\x20\147\x65\164\40\141\156\x64\x20\141\160\x69\x20\153\145\x79\x20\142\171\x20\147\x75\x69\x64\x65\56", PR__PKG__DOMAIN_MANAGER), 404); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $keccaugmemegoimu = __("\101\120\111\40\113\145\171\x20\x69\163\40\166\x61\x6c\151\144\x2e", PR__PKG__DOMAIN_MANAGER); gkyawqqcmigqgaiq: ooeausyowguqicuo: scisgsyemmsekgos: return $keccaugmemegoimu; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); try { $wkkweuacukumqmya = [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]; if (!$kqwygogeauwwyoca) { goto cewmoqyysgsmuiya; } $wkkweuacukumqmya[Ownership::ucmueuwwcmocgmig] = [self::ciyoccqkiamemcmm => [Ownership::CAP_OWNER, Ownership::CAP_RESTRICT], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]; cewmoqyysgsmuiya: $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->ykuqokgcaymcskiw($wkkweuacukumqmya, Ownership::DOMAIN_ID); $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->kumuygiiqswoyasy() => [self::ciyoccqkiamemcmm => $oysoyeaucuawyaky, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); if ($goocueskqsmqagii) { goto igooksugieceoege; } $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iiqauwkoiguyeawu($siykeiywomwwuoiw)); goto omqiayeucoioqoao; igooksugieceoege: $wqogggcaamgeiwew = $this->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::imywcsggckkcywgk => $suaemuyiacqyugsm, self::PER_PAGE => $weyoqgcesqgeusiu]); omqiayeucoioqoao: } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } }
