<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b10bdaadf6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), ManipulateArray::get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) ManipulateArray::get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = ManipulateArray::get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto igymseewwyiocoug; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; igymseewwyiocoug: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto mqccmesakuemceqi; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; mqccmesakuemceqi: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); twkmiuomimomscew: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto eyiamcekkgkiawqy; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto ycakugokkqkuqyiu; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto siqagquguiemuoku; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; qwcegcuowwgiccos: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto kooskuwkuayiuose; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto qcessicwuikwqsis; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); qcessicwuikwqsis: goto qwcegcuowwgiccos; kooskuwkuayiuose: if (!$scmssumoqgwqewig) { goto coywmiyqgsweuiic; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto yssscwioiyygssec; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; yssscwioiyygssec: $ewgwqamkygiqaawc .= implode("\40", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto ieumumsgyguceusy; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: ycakugokkqkuqyiu: $momcykaoccoymeig++; goto twkmiuomimomscew; eyiamcekkgkiawqy: if ($usemgeggswwgesiy) { goto oouoqimaaqcmccay; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; oouoqimaaqcmccay: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto sycygoiaiqqageym; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\146" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, ''))); sycygoiaiqqageym: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\x20{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto wwkgkaecgiwggcck; } goto gygawoqywkukmqee; wwkgkaecgiwggcck: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto umgaesggesswoaqe; } $mmwoqcwiwemokkue++; goto qsygcycwieukkgwc; umgaesggesswoaqe: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; qsygcycwieukkgwc: kciouyuaqkyqomam: } gygawoqywkukmqee: if (!$jkwiusgeeuisquse) { goto kiwqkcaekqqyuegq; } $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); kiwqkcaekqqyuegq: return [self::ouywiegeiyuaaawo => implode("\55", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\40", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto cmqucgoewuyieoyk; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto gimmuoqwckiseaik; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: cmqucgoewuyieoyk: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
