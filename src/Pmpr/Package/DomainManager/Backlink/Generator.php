<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b48cfc8e32             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::TITLES, []), ManipulateArray::get($qeqooyuoiasweuck, self::TITLE_AND_SLUG_PLACE, 1)); $icwicymcioeyeyek[self::CONTENT] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MIN_COUNT, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MAX_COUNT, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MIN_LENGTH, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MAX_LENGTH, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::STATEMENTS, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto yssscwioiyygssec; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; yssscwioiyygssec: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto ieumumsgyguceusy; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; ieumumsgyguceusy: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); siqagquguiemuoku: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto coywmiyqgsweuiic; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto qsygcycwieukkgwc; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto umgaesggesswoaqe; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; oouoqimaaqcmccay: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto ycakugokkqkuqyiu; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto sycygoiaiqqageym; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); sycygoiaiqqageym: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: if (!$scmssumoqgwqewig) { goto wwkgkaecgiwggcck; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto gygawoqywkukmqee; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; gygawoqywkukmqee: $ewgwqamkygiqaawc .= implode("\x20", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto kciouyuaqkyqomam; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; kciouyuaqkyqomam: wwkgkaecgiwggcck: umgaesggesswoaqe: qsygcycwieukkgwc: $momcykaoccoymeig++; goto siqagquguiemuoku; coywmiyqgsweuiic: if ($usemgeggswwgesiy) { goto kiwqkcaekqqyuegq; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; kiwqkcaekqqyuegq: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::ANCHOR_PREFIX); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ANCHOR_SUFFIX); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ANCHORS); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::BACKLINK); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto quwcqmyokicssyew; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\x65\146" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::ANCHOR, ''))); quwcqmyokicssyew: return "{$yuwymayicwwqiske}\40{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = []; $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto cmqucgoewuyieoyk; } goto iqcogmsguwoikame; cmqucgoewuyieoyk: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto yqykqysmiquwoasu; } $mmwoqcwiwemokkue++; goto ayyweymyuuiauamo; yqykqysmiquwoasu: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::SLUG, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::TITLE, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::PLACE, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; ayyweymyuuiauamo: gimmuoqwckiseaik: } iqcogmsguwoikame: return [self::SLUG => implode(self::DASH_SYMBOL, $aaokuekaimigoyue), self::TITLE => implode(self::SPACE_SYMBOL, $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto kqksuugcgsyeoayy; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::PLACE])) { goto ygcsmkuycoagwyou; } $sogksuscggsicmac[$igqsaukqcqscimok[self::PLACE]][] = $igqsaukqcqscimok; ygcsmkuycoagwyou: omugkkesagcyagmk: } mosqsmqimqgqoase: kqksuugcgsyeoayy: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
