<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066ea3e4c4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), ManipulateArray::get($qeqooyuoiasweuck, self::TITLE_AND_SLUG_PLACE, 1)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = ManipulateArray::get($qeqooyuoiasweuck, self::BACKLINK_PRIORITY, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MIN_COUNT, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MAX_COUNT, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MIN_LENGTH, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::PARAGRAPH_MAX_LENGTH, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto sqiciiuwmykocycc; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; sqiciiuwmykocycc: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto eequksumcoogyoem; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; eequksumcoogyoem: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); cggowoquuiwqkyew: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto uukumskkeggaowck; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto egasokooagakisiy; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto mswsoaimesegiiic; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; yiwiqaqmwiogawym: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto ocokwuuquaokmasc; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto goacqqsgaaigyuaw; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); goacqqsgaaigyuaw: goto yiwiqaqmwiogawym; ocokwuuquaokmasc: if (!$scmssumoqgwqewig) { goto usqgaogkqgemuima; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto meawswgwagoqgkye; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; meawswgwagoqgkye: $ewgwqamkygiqaawc .= implode("\x20", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto wcesymwqykqoyuqk; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; wcesymwqykqoyuqk: usqgaogkqgemuima: mswsoaimesegiiic: egasokooagakisiy: $momcykaoccoymeig++; goto cggowoquuiwqkyew; uukumskkeggaowck: if ($usemgeggswwgesiy) { goto kecwuwwcwokuksyq; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; kecwuwwcwokuksyq: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::ANCHOR_PREFIX); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ANCHOR_SUFFIX); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto qgegkeomwscwwiuw; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, ''))); qgegkeomwscwwiuw: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\x20{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = []; $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto eiawsoasmscmqswa; } goto qmiwsequckckoaei; eiawsoasmscmqswa: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto ickcmqoiosquugwe; } $mmwoqcwiwemokkue++; goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::ugqsimokykgqaeiq, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; qmeoaqmsuseueqiy: goeoymmqqqeeoime: } qmiwsequckckoaei: return [self::ouywiegeiyuaaawo => implode("\55", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\40", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto sukskmcwsoysiuqu; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto cgewcsueoyaeikgm; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; cgewcsueoyaeikgm: cuoqqgaygogsmmic: } ygkcacsyyckescqs: sukskmcwsoysiuqu: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
