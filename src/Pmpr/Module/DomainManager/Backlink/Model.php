<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639210dfbe2d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const qkmqmaeuyokqgemg = "\x64\157\x6d\141\151\156" . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; public function ckgmycmaukqgkosk() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->usuqmwksoeaayaig("\142\x61\143\x6b\154\x69\156\x6b")->ckaeqgiaiqwsccke(20)->wiskakymeaywyeuw($wksoawcgagcgoask)->okgmqaeuaeymaocm($wksoawcgagcgoask)->muuwuqssqkaieqge(__("\102\141\143\153\154\x69\x6e\153\163", PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__("\102\x61\x63\153\x6c\x69\156\153", PR__MDL__DOMAIN_MANAGER))->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\x74\154\145", PR__MDL__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ouywiegeiyuaaawo)->gswweykyogmsyawy(__("\x53\x6c\165\x67", PR__MDL__DOMAIN_MANAGER)), $this->geqyygqiwiqusekc(self::iuqumwggccmcuyem)->acceqyqygswoecwe(4)->gswweykyogmsyawy(__("\x50\162\151\x6f\162\151\x74\171", PR__MDL__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\x44\x6f\155\x61\151\x6e", PR__MDL__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::ogqcgemayqiaucag)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\103\157\155\160\x6f\156\x65\156\x74", PR__MDL__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ssmskyqgcmeiayco)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\103\x6f\156\164\145\x6e\x74", PR__MDL__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qescuiwgsyuikume => ["\143\157\154" => "\155\x64\x2d\64", "\164\x79\x70\x65" => "\x74\145\x78\x74"], self::ouywiegeiyuaaawo => ["\154\164\x72", "\143\x6f\x6c" => "\155\x64\x2d\64", "\x74\171\x70\x65" => "\164\x65\x78\x74"], self::iuqumwggccmcuyem => ["\x61\x73\x2d\156\165\155\142\145\162", "\143\157\x6c" => "\155\x64\x2d\x34", "\164\x79\x70\145" => "\164\145\x78\x74"], self::qkmqmaeuyokqgemg => ["\143\x6f\x6c" => "\155\144\55\66"], self::ogqcgemayqiaucag => ["\x63\x6f\154" => "\x6d\x64\x2d\66"], self::ssmskyqgcmeiayco => []]; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::ogigqueukwysusii, ''); return sprintf("\x25\163\x20\x28\x25\163\x29", $meqocwsecsywiiqs, $aaokuekaimigoyue); } public function wqssmeicqigigsym($wqykqusigegasqeg, $syqougokmmgaoaee) { $suaemuyiacqyugsm = []; if (!($eaekkwggowaaogiu = Generator::symcgieuakksimmu())) { goto mwsmsguqqkcwiiuk; } if (!($qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($syqougokmmgaoaee))) { goto owmuceyswmgueasi; } if (!($suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck))) { goto qmuwoecuacmkwgem; } if (is_numeric($wqykqusigegasqeg)) { goto sggawugoykqcmsug; } $wqykqusigegasqeg = ManipulateArray::get($wqykqusigegasqeg, self::gouqcwikiiygyasc, 0); sggawugoykqcmsug: if (!$wqykqusigegasqeg) { goto wakmayaoqoskekqy; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::qkmqmaeuyokqgemg => $wqykqusigegasqeg, self::ogqcgemayqiaucag => $syqougokmmgaoaee])); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto wkeuuycukmuqiaom; } return $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas], 500); wkeuuycukmuqiaom: wakmayaoqoskekqy: qmuwoecuacmkwgem: owmuceyswmgueasi: mwsmsguqqkcwiiuk: return $suaemuyiacqyugsm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto eeauyscekuckoues; } eogwckcymuugikuy: eeauyscekuckoues: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
