<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639210dfbe2d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), ManipulateArray::get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) ManipulateArray::get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = ManipulateArray::get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto qgeugwymkkiacwoc; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; qgeugwymkkiacwoc: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto emmsycooskoqmgeg; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; emmsycooskoqmgeg: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); mugqyyeayeyggqqk: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto ouamogymawucwswu; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto kqqiegkuqagcqsya; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto miweggwqeiaeweia; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; oomguqikqokqwgku: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto acsqgiuageaasiyy; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto samwkqgwouggsguc; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); samwkqgwouggsguc: goto oomguqikqokqwgku; acsqgiuageaasiyy: if (!$scmssumoqgwqewig) { goto kkumywowcoycymeo; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto wyuemgggaqogsmsq; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; wyuemgggaqogsmsq: $ewgwqamkygiqaawc .= implode("\x20", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto guykyqecgswcsmws; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; guykyqecgswcsmws: kkumywowcoycymeo: miweggwqeiaeweia: kqqiegkuqagcqsya: $momcykaoccoymeig++; goto mugqyyeayeyggqqk; ouamogymawucwswu: if ($usemgeggswwgesiy) { goto ousiuuwgwkiyikyq; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; ousiuuwgwkiyikyq: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto ogsaaqsaogcqiouy; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\x65\146" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, ''))); ogsaaqsaogcqiouy: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto aomysykcgikegiau; } goto iwekmyyccgiyuecc; aomysykcgikegiau: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto cwwmimggaaecmucw; } $mmwoqcwiwemokkue++; goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; awoaooyoeoyeeqee: ikqqskkqqwmwssoo: } iwekmyyccgiyuecc: if (!$jkwiusgeeuisquse) { goto ogqmesokykywseys; } $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); ogqmesokykywseys: return [self::ouywiegeiyuaaawo => implode("\x2d", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\x20", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto gicyayswqyuoekcq; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto kosaqwikueyksqmw; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; kosaqwikueyksqmw: mqkmcysgoiaouiwm: } ykomgumacooyomsk: gicyayswqyuoekcq: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
