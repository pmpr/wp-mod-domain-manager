<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe28e8e4ff             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Backlink\Model as Backlink; use WP_Error; class Domain extends Common { const BACKLINK_ID = "\x62\141\143\153\154\x69\156\x6b" . self::_ID; const OWNERSHIP_ID = "\157\167\x6e\x65\x72\x73\x68\151\160" . self::_ID; const PURCHASE_ID = "\160\x75\162\143\x68\x61\163\145" . self::_ID; const API_KEY_LENGTH = 32; const BLOCKED = "\142\x6c\x6f\x63\x6b\145\x64"; const VIOLATED = "\166\x69\157\154\141\164\x65\x64"; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\x44\157\155\141\151\x6e", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\x6f\155\x61\151\156\x73", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->aseucqksocwomwos()->wkesqcmiekqoykag(); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->qcyqgwuuymykkcke(self::NAME)->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\x44\157\155\x61\x69\156\40\116\x61\x6d\x65", PR__PKG__DOMAIN_MANAGER)), $this->qcyqgwuuymykkcke(self::API_KEY)->acceqyqygswoecwe(self::API_KEY_LENGTH)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\x41\x50\111\40\x4b\145\171", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::STATUS)->acceqyqygswoecwe(10)->eyygsasuqmommkua(self::ACTIVE)->gswweykyogmsyawy(__("\x53\164\x61\164\x75\x73", PR__PKG__DOMAIN_MANAGER))->qkwyekmiceaogwci(false), $this->qcyqgwuuymykkcke(self::VALUE)->gswweykyogmsyawy(__("\x44\157\x6d\x61\151\156\40\101\x64\144\x72\x65\x73\x73", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu()->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false), $this->ggiieomioscuigco(self::OWNERSHIP_ID)->gswweykyogmsyawy(__("\117\167\156\145\162\163\150\x69\160\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class), $this->ggiieomioscuigco(self::BACKLINK_ID)->gswweykyogmsyawy(__("\x42\x61\143\153\154\x69\156\x6b\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class), $this->ggiieomioscuigco(self::PURCHASE_ID)->gswweykyogmsyawy(__("\x50\x75\162\x63\150\141\163\x65\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class)]); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $iwywmkygwewiamwm = ManipulateArray::get($mksyucucyswaukig, self::VALUE); return sprintf("\45\x73\40\50\45\163\51", ManipulateArray::get($mksyucucyswaukig, self::NAME), $iwywmkygwewiamwm); } private function mqwogqieoumeoocw() : string { return ManipulateString::ycwmswocisskwuwg(self::API_KEY_LENGTH); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::ACTIVE => __("\101\143\x74\x69\166\145", PR__PKG__DOMAIN_MANAGER), self::VIOLATED => __("\x56\151\x6f\154\x61\x74\145\144", PR__PKG__DOMAIN_MANAGER), self::BLOCKED => __("\102\x6c\157\x63\x6b\x65\x64", PR__PKG__DOMAIN_MANAGER)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function aakiaoueckoiyoew() : ?string { return self::STATUS; } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array { goto eckcqesiokgwkkiw; eckcqesiokgwkkiw: $oqseeekuqisekiwy = $this->agausceiyceikeag(); goto ecouwqosmoyyqmkw; ecouwqosmoyyqmkw: foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::TITLE => $meqocwsecsywiiqs, self::COUNT => $this->ieieyoeqmmeysauc(self::STATUS, $iueymcwwscwqkiyq)]; yoagcooekomeokwg: } goto mqiiqkuaoekeuswo; qmoocweoekqueuyy: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw); goto sgiwoiscywusgmmm; mqiiqkuaoekeuswo: yamyagayiooyeekg: goto qmoocweoekqueuyy; sgiwoiscywusgmmm: } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo) { goto wgiygcmqaokywuqa; ykqsuiyyosyeyscc: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\x69\163\40\144\157\155\141\x69\156\40\x61\x6c\x72\145\141\x64\171\x20\145\170\x69\163\x74\x20\x69\156\x20\x79\x6f\x75\x72\40\x64\x6f\155\x61\x69\x6e\163\x2e", PR__PKG__DOMAIN_MANAGER), 401); goto ugogoekeckgcmuaw; owgsameoayaogsma: eyiwqgqcsqakwqss: goto kyiwsiakwgiwouyi; mqimkwickkgqqeoi: mmgmqogugasaqkgg: goto kwyimqumkuuyaiku; saauykgakaeiyoua: $mokawwccycoiqeka = $swgwkyqkakceqeia->gscuuyuyauokoyuo([self::NAME => $ymqmyyeuycgmigyo, self::VALUE => $eqgoocgaqwqcimie, self::API_KEY => $this->mqwogqieoumeoocw()]); goto qwemkcoaseywkuuc; mceucsaeouuwyumm: goto eyiwqgqcsqakwqss; goto ceiuqsiqgiuiekem; kicwiowcogmauwiy: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\162\145\x64\40\x64\x6f\155\141\x69\x6e\40\x69\163\x20\x6e\157\164\40\166\141\154\151\x64\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto cwswueuqoamqasya; gsymkkskwsgggoic: $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); goto ugykmcouiwiscoqu; iwueukqcywkiyqge: ooqksueucyagyuoe: goto ykwasaaoeeiuomim; uscokkmquayiukag: if (!$ukamowomoeiweqky) { goto mgcuiguaomoqwwwm; } goto ykqsuiyyosyeyscc; omykokikgocoikec: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto csieaismmmocyacu; sqwuqegeiisoiiuq: wmumywgyyeagqoeq: goto uscokkmquayiukag; igmmqwyawcuuckkq: if ($gmqiuuqqkwakoiiu) { goto wmumywgyyeagqoeq; } goto eouwacqiommmeaqc; egesuwkqkmaigaoe: mgcuiguaomoqwwwm: goto syusgosewwkoagoq; agemwookwseyycqo: $gmqiuuqqkwakoiiu = false; goto cquecqekuucwoumw; suuskagowwgsouqw: $gmqiuuqqkwakoiiu = true; goto omykokikgocoikec; ykwasaaoeeiuomim: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo); goto acggikioyeueeowg; egaymskkosukqeao: skuqigsokaguscas: goto kaiesowkgwogqseg; cwswueuqoamqasya: goto yssqmyoaokkksukc; goto kgmeiwiakwicgkkk; iauwuugggmegwisk: $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE); goto aukucaieceiwesmm; kgmeiwiakwicgkkk: sckioayasmkcoeoo: goto suuskagowwgsouqw; eouwacqiommmeaqc: $ukamowomoeiweqky = $ueomouiqmosykioc->oqomcmyuuakigusk([$ueomouiqmosykioc::USER => $ycoeoaakqyskgykq, $ueomouiqmosykioc::DOMAIN_ID => $akyiigeggqowmqqq]); goto sqwuqegeiisoiiuq; ceiuqsiqgiuiekem: yuoeumyiuqkuouey: goto gsymkkskwsgggoic; qwemkcoaseywkuuc: $kigowwqauiumummw = $mokawwccycoiqeka[self::SUCCESS]; goto mqimkwickkgqqeoi; oeamoqweiueaueay: eoyiumycaigawmmc: goto owgsameoayaogsma; isewysikysqewkis: $ukamowomoeiweqky = null; goto wiwoiyoakywqyaiy; syusgosewwkoagoq: $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($akyiigeggqowmqqq, $ycoeoaakqyskgykq); goto mcqucouuiuoagqwc; aukucaieceiwesmm: if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo && $miowmmgaiagcuyoo) { goto ooqksueucyagyuoe; } goto kqyoakickmseyyeq; micceocwuwkyusic: goto osmmoyqkqoucsgow; goto iwueukqcywkiyqge; kaiesowkgwogqseg: if (ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto sckioayasmkcoeoo; } goto kicwiowcogmauwiy; gqimwsyemoewagcy: return $sogksuscggsicmac; goto aoaqwygkaagiuuws; cquecqekuucwoumw: $kigowwqauiumummw = true; goto koiscokkkaimiecq; awgmegueeqeyqamu: osmmoyqkqoucsgow: goto gqimwsyemoewagcy; gkqiqaqecmoogmaa: $sogksuscggsicmac = $this->oemauiimmycumcsk($mokawwccycoiqeka[self::ERRORS], 400); goto mceucsaeouuwyumm; icumkkykaoqycqqu: smcguieygyqcaqgs: goto oeamoqweiueaueay; ugykmcouiwiscoqu: $akyiigeggqowmqqq = ManipulateArray::get($mokawwccycoiqeka, $ceiwsaacewygcsqg); goto isewysikysqewkis; kwyimqumkuuyaiku: if ($kigowwqauiumummw) { goto yuoeumyiuqkuouey; } goto gkqiqaqecmoogmaa; acggikioyeueeowg: if (preg_match("\x23\136\150\x74\164\x70\x28\x73\51\x3f\72\x2f\57\43", $eqgoocgaqwqcimie)) { goto skuqigsokaguscas; } goto cwikoaeqmmoimmso; ugogoekeckgcmuaw: goto eoyiumycaigawmmc; goto egesuwkqkmaigaoe; owuuuiekkaeoeacq: quyogmwugsyoaaiu: goto saauykgakaeiyoua; kqyoakickmseyyeq: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\x69\x72\145\144\40\x66\x69\145\154\144\163\x20\x6e\x6f\x74\40\160\141\163\163\x65\144\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto micceocwuwkyusic; aquqkiggamaoegoo: $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($eqgoocgaqwqcimie, self::VALUE); goto mykiyqcqiegkiqys; eweaaismksecwagy: $sogksuscggsicmac = [self::CODE => "\144\157\155\141\151\156\x5f\141\x64\144\x65\x64", $ceiwsaacewygcsqg => $akyiigeggqowmqqq, self::STATUS => 200, self::MESSAGE => sprintf("\45\163\x3c\x62\x72\57\x3e\x25\x73", __("\104\x6f\155\x61\151\156\40\163\165\143\143\145\x73\163\146\x75\154\x6c\171\40\141\144\x64\145\144\56", PR__PKG__DOMAIN_MANAGER), __("\120\154\145\141\x73\x65\x20\x76\x65\x72\x69\x66\x79\40\144\157\x6d\141\x69\x6e\x2e", PR__PKG__DOMAIN_MANAGER))]; goto icumkkykaoqycqqu; wiwoiyoakywqyaiy: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto igmmqwyawcuuckkq; cwikoaeqmmoimmso: $eqgoocgaqwqcimie = "\x68\164\x74\x70\x73\72\x2f\x2f{$eqgoocgaqwqcimie}"; goto egaymskkosukqeao; mcqucouuiuoagqwc: if (is_wp_error($sogksuscggsicmac)) { goto smcguieygyqcaqgs; } goto eweaaismksecwagy; csieaismmmocyacu: $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\57\136\x77\77\x77\x3f\x77\x3f\x5c\x2e\x2f", '', ManipulateFormat::gokuyqsimauyacke($eqgoocgaqwqcimie))); goto aquqkiggamaoegoo; koiscokkkaimiecq: goto mmgmqogugasaqkgg; goto owuuuiekkaeoeacq; kyiwsiakwgiwouyi: yssqmyoaokkksukc: goto awgmegueeqeyqamu; wgiygcmqaokywuqa: $ymqmyyeuycgmigyo = ManipulateArray::get($icwicymcioeyeyek, self::NAME); goto iauwuugggmegwisk; mykiyqcqiegkiqys: if (!$mokawwccycoiqeka) { goto quyogmwugsyoaaiu; } goto agemwookwseyycqo; aoaqwygkaagiuuws: } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { goto oeusomaaeekakake; ousmyagwsiooumos: maaisuqwkymeguys: goto qeuyekusasqmcqms; kyiuewcikkqagwwg: goto yggseoaommssscwo; goto aumowowgewgqmwci; iwkckkeimmeoquyq: ayceeyuocgowqwsa: goto masakmomqmeocqqg; auumaoycmsmsgigs: goto qkyciyiwkmgkmquk; goto ousmyagwsiooumos; yoqsigmoyaaceqky: return $sogksuscggsicmac; goto suqckoccuyeeymww; iymaiwqimisgacmk: $ysyswymameciiyce = true; goto mugscgugcogcasue; masakmomqmeocqqg: yggseoaommssscwo: goto yksywwikmeksikqc; yiceawuuiusakwiq: qkyciyiwkmgkmquk: goto sgocecweikecwwgq; yksywwikmeksikqc: yyqygaokeccgugos: goto yoqsigmoyaaceqky; ygcgoaokauigwuus: if ($sogksuscggsicmac[self::SUCCESS]) { goto maaisuqwkymeguys; } goto ysiqakyaiooyscwy; aumowowgewgqmwci: iuwkiyimqmgguose: goto oasggeyceiyieuuo; qyyyycwaookqaoke: if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto sksgcusuyqcwqswe; } goto ssywsaaqqaucesau; gcucsowqoeiwmyyq: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\157\x75\40\x64\x6f\x6e\164\x20\150\x61\x76\x65\40\160\145\x72\155\x69\163\x73\x69\x6f\156\40\164\157\40\x65\x64\x69\x74\40\164\x68\x69\163\40\x64\157\155\x61\151\x6e\56", PR__PKG__DOMAIN_MANAGER), 401); goto kyiuewcikkqagwwg; qeuyekusasqmcqms: $sogksuscggsicmac = $icwicymcioeyeyek; goto yiceawuuiusakwiq; ikcwmsgocyuqiumc: aeiemwacaiygemmg: goto eqiiaokcgakicaye; qwisiamkmkkwucyo: sksgcusuyqcwqswe: goto yqcusaeysomccaok; wwcqoeuwskquakwy: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::VALUE); goto quamuugoocyyceec; qcssigmcayuyweiy: $icwicymcioeyeyek[self::VALUE] = $eeamcawaiqocomwy; goto iymaiwqimisgacmk; cyosacayacumuaks: goto yyqygaokeccgugos; goto ikcwmsgocyuqiumc; sicgyiyiocyygkoc: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x69\x72\145\144\x20\146\151\145\154\144\163\x20\156\x6f\164\40\x70\141\x73\x73\x65\x64\56", PR__PKG__DOMAIN_MANAGER), 400); goto cyosacayacumuaks; eqiiaokcgakicaye: if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto iuwkiyimqmgguose; } goto gcucsowqoeiwmyyq; ssywsaaqqaucesau: $sogksuscggsicmac = $this->gscuuyuyauokoyuo($icwicymcioeyeyek); goto ygcgoaokauigwuus; mugscgugcogcasue: esagiiawomyacuiw: goto qyyyycwaookqaoke; ysiqakyaiooyscwy: $sogksuscggsicmac = $this->oemauiimmycumcsk(implode("\x20", $sogksuscggsicmac[self::ERRORS])); goto auumaoycmsmsgigs; omuauimgkygcecsc: $ysyswymameciiyce = false; goto wwcqoeuwskquakwy; quamuugoocyyceec: if (!$eeamcawaiqocomwy) { goto esagiiawomyacuiw; } goto qcssigmcayuyweiy; kwuckkyqaygwgcuy: $ymqmyyeuycgmigyo = ManipulateArray::get($mokawwccycoiqeka, self::NAME); goto giuccakymqymawgk; oasggeyceiyieuuo: $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, self::NAME => $ymqmyyeuycgmigyo, self::STATUS => self::ACTIVE]; goto omuauimgkygcecsc; sgocecweikecwwgq: goto ayceeyuocgowqwsa; goto qwisiamkmkkwucyo; giuccakymqymawgk: if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { goto aeiemwacaiygemmg; } goto sicgyiyiocyygkoc; yqcusaeysomccaok: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\x6f\x72\162\x79\40\171\x6f\165\x20\143\141\x6e\x20\x6e\157\164\40\x75\x70\144\x61\164\x65\x20\171\157\165\162\x20\x64\x6f\155\141\x69\x6e\x20\141\x64\144\162\145\x73\x73\56", PR__PKG__DOMAIN_MANAGER), 400); goto iwkckkeimmeoquyq; oeusomaaeekakake: $aokagokqyuysuksm = $this->keeuqgyooycqoygw($mokawwccycoiqeka); goto kwuckkyqaygwgcuy; suqckoccuyeeymww: } public function wmyyiowksyygqesq($mokawwccycoiqeka) : bool { goto acgqaeakoyasgkku; acgqaeakoyasgkku: if (!is_numeric($mokawwccycoiqeka)) { goto giugwaeuwaomossq; } goto sycougcyeqmeiagk; ekoqieigyoeyauqa: return empty($qcioqakuekamgwkw); goto cuwcsamuuqyuyqsu; ssagcgqaucssyego: giugwaeuwaomossq: goto mqgeseysuwcaqwiy; sycougcyeqmeiagk: $mokawwccycoiqeka = $this->akkkoiiymmamsauc($mokawwccycoiqeka); goto ssagcgqaucssyego; mqgeseysuwcaqwiy: $qcioqakuekamgwkw = $this->iscemaoqqckmkago(self::BACKLINK_ID, $mokawwccycoiqeka, "\x2a", [Backlink::EXPIRE_DATE => [self::VALUE => date("\x6e\x6f\x77"), self::CLAUSE => self::DATE, self::OPERATOR => self::GE_SYMBOL]]); goto ekoqieigyoeyauqa; cuwcsamuuqyuyqsu: } public function qkmaaeieyisccgia($mokawwccycoiqeka, $wksoawcgagcgoask, $owiuekcekysskaoe) { goto ksckqkmwiqggykke; iqsgossweywksoia: $sogksuscggsicmac = Backlink::symcgieuakksimmu()->wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask, $owiuekcekysskaoe); goto awaqksikyomsuaeo; ksckqkmwiqggykke: $sogksuscggsicmac = false; goto igwkcikeyoowosoi; igwkcikeyoowosoi: if (!$this->wmyyiowksyygqesq($mokawwccycoiqeka)) { goto mimacwyuueomgwwy; } goto iqsgossweywksoia; cuommomwmsackoqc: return $sogksuscggsicmac; goto ggeoqeowscwkeumy; awaqksikyomsuaeo: mimacwyuueomgwwy: goto cuommomwmsackoqc; ggeoqeowscwkeumy: } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { goto yggmaskeguaqkusc; ukwoswyyogmsygqg: if (!($mokawwccycoiqeka && $mkucggyaiaukqoce)) { goto uqcsksaywyqeumig; } goto jsmisuccwyukksgc; mwieyyqamgwicgco: uqcsksaywyqeumig: goto wkiymcoqqiigqaaw; jsmisuccwyukksgc: $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::USER => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::CAPABILITY => Ownership::CAP_OWNER]); goto kwmiwaecqcgiaqye; gkoaeuekqockuoiq: if (!$ukamowomoeiweqky) { goto qyeswawykmasuqye; } goto eekaiaeqewiqkkgm; yggmaskeguaqkusc: $yciaosuiyeieceug = false; goto ukwoswyyogmsygqg; kceuusiekagyeoys: qyeswawykmasuqye: goto uyeyscsaigimsqwq; wkiymcoqqiigqaaw: return $yciaosuiyeieceug; goto esqwswmoegiqcckg; yqicwmekwuoywyus: $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::USER => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::CAPABILITY => Ownership::CAP_UNVERIFIED]); goto gkoaeuekqockuoiq; uyeyscsaigimsqwq: uwaimsisescsgyqk: goto mwieyyqamgwicgco; eekaiaeqewiqkkgm: $yciaosuiyeieceug = true; goto kceuusiekagyeoys; kwmiwaecqcgiaqye: if ($ukamowomoeiweqky) { goto uwaimsisescsgyqk; } goto yqicwmekwuoywyus; esqwswmoegiqcckg: } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto qksckewucmosemuo; qksckewucmosemuo: switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto qmokwkocmcyeyesc; case self::STATUS: $eqgoocgaqwqcimie = $this->agausceiyceikeag($eqgoocgaqwqcimie); goto qmokwkocmcyeyesc; default: $eqgoocgaqwqcimie = parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto qmokwkocmcyeyesc; } goto kmooekeyemqgucci; kmooekeyemqgucci: mosuacsuaasssciu: goto skuuyysooocugyww; cmmusgkieoqyymgs: return $eqgoocgaqwqcimie; goto mkgmaguyswskyioa; skuuyysooocugyww: qmokwkocmcyeyesc: goto cmmusgkieoqyymgs; mkgmaguyswskyioa: } public function ogkgcwiskmoiweki($esuksqieigiqcaie, $gwgucoaaqcwwciqq) { goto gicuuwuuuwumyooa; gicuuwuuuwumyooa: if (strlen($esuksqieigiqcaie) == self::API_KEY_LENGTH) { goto skwusmoyomgqkimm; } goto kakkuyeccaacewyo; ismeikacqqyqcmqe: skwusmoyomgqkimm: goto qsokkkyoackoycie; casgoamcqkekgeeo: usyckeewsgwaysam: goto yseyyukqaowwouua; kakkuyeccaacewyo: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x59\x6f\165\162\x20\101\x50\111\x20\x4b\145\171\40\151\163\40\156\x6f\x74\x20\x76\141\154\151\144\56", PR__PKG__DOMAIN_MANAGER), 400); goto cysgqimowcqoqqsc; qsokkkyoackoycie: $sogksuscggsicmac = $this->oqomcmyuuakigusk([self::VALUE => $gwgucoaaqcwwciqq, self::API_KEY => $esuksqieigiqcaie]); goto casgoamcqkekgeeo; yseyyukqaowwouua: return $sogksuscggsicmac; goto qcgyggiaowuqswuw; cysgqimowcqoqqsc: goto usyckeewsgwaysam; goto ismeikacqqyqcmqe; qcgyggiaowuqswuw: } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { goto ekakkiuuquqkccse; wswikooyuaaouqgk: $keccaugmemegoimu = $this->ogkgcwiskmoiweki($esuksqieigiqcaie, $mokawwccycoiqeka); goto awwaiioyywmokwsm; gsqcoqqsioiyoykq: sooecucuakgkuyis: goto goaowamiyyamueiw; oqwwacmigasucsoc: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\145\163\x74\40\x6f\x72\x69\147\151\156\x20\156\157\164\x20\144\x65\x74\145\143\x74\145\x64\56", PR__PKG__DOMAIN_MANAGER), 400); goto egkeqqgakieyimuq; cumeycwmuuqawwyu: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\156\x20\x6e\157\x74\40\146\157\x75\x6e\144\x20\144\x6f\155\141\x69\x6e\x2c\x20\x70\x6c\x65\141\x73\145\x20\147\145\x74\x20\141\x6e\x64\40\141\x70\x69\40\x6b\145\171\x20\x62\171\40\x67\x75\151\x64\145\x2e", PR__PKG__DOMAIN_MANAGER), 404); goto uaicwcqwauosmsqm; ookcgumoacskyymy: return $keccaugmemegoimu; goto cuseccewekgcgkyg; awwaiioyywmokwsm: if (is_wp_error($keccaugmemegoimu)) { goto kwsqgqmwyyeykgum; } goto ckwmkquuyyugigom; uaicwcqwauosmsqm: goto ywqakqkmmcoceqka; goto gsqcoqqsioiyoykq; owisckseoogsugqq: koukiyqaccegmquc: goto ookcgumoacskyymy; ekakkiuuquqkccse: if ($mokawwccycoiqeka) { goto emauuoieewwoeyqq; } goto oqwwacmigasucsoc; iaomqomgiwiegoca: ywqakqkmmcoceqka: goto ysweqawmawicakeo; egkeqqgakieyimuq: goto koukiyqaccegmquc; goto cakuguiciaiaeukg; ckwmkquuyyugigom: if ($keccaugmemegoimu) { goto sooecucuakgkuyis; } goto cumeycwmuuqawwyu; ysweqawmawicakeo: kwsqgqmwyyeykgum: goto owisckseoogsugqq; cakuguiciaiaeukg: emauuoieewwoeyqq: goto wswikooyuaaouqgk; goaowamiyyamueiw: $keccaugmemegoimu = __("\101\120\111\x20\113\145\171\x20\x69\x73\40\x76\x61\154\x69\144\x2e", PR__PKG__DOMAIN_MANAGER); goto iaomqomgiwiegoca; cuseccewekgcgkyg: } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { goto wmaeicoyyciuaiuy; ooysmgyeqoiesgqm: try { goto acesyuieuuqwgkwm; ugswokwmkumcmigc: kgysyqkoqgwmoscq: goto gwiaimosqoiquwkc; asaowisseacciyia: if (!$kqwygogeauwwyoca) { goto kgysyqkoqgwmoscq; } goto qiaaqkymeuuueoqk; owgakkqgckqcegoi: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->kumuygiiqswoyasy() => [self::VALUE => $oysoyeaucuawyaky, self::CLAUSE => self::CONTAIN]]); goto cigesysuauaiccms; wwswmaewcaisauei: $wqogggcaamgeiwew = $this->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, self::PER_PAGE => $weyoqgcesqgeusiu]); goto wsemeeocquawyauo; kkewoqqowugagwoy: makomwwyomweyamm: goto wwswmaewcaisauei; gwiaimosqoiquwkc: $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->ykuqokgcaymcskiw($wkkweuacukumqmya, Ownership::DOMAIN_ID); goto owgakkqgckqcegoi; qiaaqkymeuuueoqk: $wkkweuacukumqmya[Ownership::CAPABILITY] = [self::VALUE => [Ownership::CAP_OWNER, Ownership::CAP_RESTRICT], self::CLAUSE => self::CONTAIN]; goto ugswokwmkumcmigc; cigesysuauaiccms: if ($goocueskqsmqagii) { goto makomwwyomweyamm; } goto qumkwsqqocooyuoq; gcskyqewysqaceeg: goto oqwcmgwimeisusoe; goto kkewoqqowugagwoy; acesyuieuuqwgkwm: $wkkweuacukumqmya = [self::USER => $ycoeoaakqyskgykq]; goto asaowisseacciyia; wsemeeocquawyauo: oqwcmgwimeisusoe: goto ocgkwqqmgasuoies; qumkwsqqocooyuoq: $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iiqauwkoiguyeawu($siykeiywomwwuoiw)); goto gcskyqewysqaceeg; ocgkwqqmgasuoies: } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } goto kwoyiysciqumswcy; wmaeicoyyciuaiuy: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); goto ooysmgyeqoiesgqm; kwoyiysciqumswcy: return $wqogggcaamgeiwew; goto aaogeemgkogagkai; aaogeemgkogagkai: } }
