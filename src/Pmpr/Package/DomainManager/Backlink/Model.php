<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7f191715             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const DOMAIN_ID = "\144\x6f\x6d\141\x69\x6e" . self::_ID; const EXPIRE_DATE = "\145\x78\x70\151\x72\x65\x5f\144\x61\x74\145"; const COMPONENT_ID = "\143\x6f\x6d\x70\157\156\x65\x6e\164" . self::_ID; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { goto yuimwyoywaiiqacs; yuimwyoywaiiqacs: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto ocywegekakimmwcq; emqswoaawgeyosmi: parent::ckgmycmaukqgkosk(); goto iwsmmkqaoksmocok; ocywegekakimmwcq: $this->oyeskqayoscwciem()->myysgyqcumekoueo()->okgmqaeuaeymaocm($wksoawcgagcgoask)->usuqmwksoeaayaig("\x62\141\143\x6b\x6c\x69\x6e\153")->muuwuqssqkaieqge(__("\x42\141\143\x6b\154\x69\x6e\153\x73", PR__PKG__DOMAIN_MANAGER))->guiaswksukmgageq(__("\x42\141\143\x6b\154\x69\156\x6b", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->aseucqksocwomwos(); goto emqswoaawgeyosmi; iwsmmkqaoksmocok: } public function kssgsuewkcwgiksa() : array { return [self::EXPIRE_DATE => ["\x63\157\x6c" => "\x6d\x64\x2d\x34", self::TYPE => "\x64\x61\164\145"]]; } public function iysseyicgouwysgk($mksyucucyswaukig) : ?string { goto esikeyqyuikmaiek; okkmcocqokkskasy: $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::LINK, ''); goto qiiigwkqeoewsuwm; qiiigwkqeoewsuwm: return sprintf("\x25\x73\40\x28\x25\x73\x29", $meqocwsecsywiiqs, $aaokuekaimigoyue); goto esaqcqqwuussiiwo; esikeyqyuikmaiek: $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::SLUG, ''); goto okkmcocqokkskasy; esaqcqqwuussiiwo: } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ymuegqgyuagyucws(self::TITLE)->gswweykyogmsyawy(__("\x54\151\164\x6c\145", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::SLUG)->gswweykyogmsyawy(__("\x53\x6c\x75\147", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::CONTENT)->gswweykyogmsyawy(__("\103\157\156\164\x65\x6e\x74", PR__PKG__DOMAIN_MANAGER)), $this->ceqawoymcymsaeqo(self::EXPIRE_DATE)->gswweykyogmsyawy(__("\105\x78\160\x69\162\x65\40\104\141\x74\145", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::DOMAIN_ID)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\104\x6f\155\x61\151\x6e", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::COMPONENT_ID)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\103\x6f\155\x70\x6f\x6e\145\156\164", PR__PKG__DOMAIN_MANAGER))]); } public function wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask, $owiuekcekysskaoe) { goto qsgqwyqaqiowkmco; oocuemosmeeekgas: return $suaemuyiacqyugsm; goto qkcsykuocwuyaice; qikaewekoecykeou: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\x67\x65\164\137{$eaekkwggowaaogiu->meygkqeicyeyycoe($wksoawcgagcgoask)}\x5f\x73\x65\164\164\x69\156\147\x73", []); goto eucqomyqykgoiuge; oqousikwiiqagoyw: $mokawwccycoiqeka = ManipulateArray::get($mokawwccycoiqeka, self::ID, 0); goto zayqqeqgcwkekwws; yqagomygmeoecwey: $eaekkwggowaaogiu = Generator::symcgieuakksimmu(); goto qikaewekoecykeou; agkmiayuawacakau: wwukgaquuyoissgy: goto syuaummumssgwwee; ucuoeymyqeokgsya: return $this->oemauiimmycumcsk($sogksuscggsicmac[self::ERRORS], 500); goto yuuyikiacmmueosu; sguskaeaaqcagqgc: suqcsgaosywaauuu: goto agkmiayuawacakau; mysueeoswqgccmui: $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::DOMAIN_ID => $mokawwccycoiqeka, self::EXPIRE_DATE => $owiuekcekysskaoe, self::COMPONENT_ID => $wksoawcgagcgoask])); goto egmayaiikwsskgmy; qsgqwyqaqiowkmco: $suaemuyiacqyugsm = []; goto yqagomygmeoecwey; zayqqeqgcwkekwws: ikqeeaysmqgcgawq: goto aueaceeyommgkicu; eucqomyqykgoiuge: if (!$qeqooyuoiasweuck) { goto gsygwgsiawgmqiyi; } goto usymasgsyqgsuocg; egmayaiikwsskgmy: if ($sogksuscggsicmac[self::SUCCESS]) { goto mscgewkcqcoowweg; } goto ucuoeymyqeokgsya; yuuyikiacmmueosu: mscgewkcqcoowweg: goto sguskaeaaqcagqgc; aueaceeyommgkicu: if (!$mokawwccycoiqeka) { goto suqcsgaosywaauuu; } goto mysueeoswqgccmui; syuaummumssgwwee: gsygwgsiawgmqiyi: goto oocuemosmeeekgas; sqyokemumceysegy: if (is_numeric($mokawwccycoiqeka)) { goto ikqeeaysmqgcgawq; } goto oqousikwiiqagoyw; aiccyaswigkaycqk: if (!$suaemuyiacqyugsm) { goto wwukgaquuyoissgy; } goto sqyokemumceysegy; usymasgsyqgsuocg: $suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck); goto aiccyaswigkaycqk; qkcsykuocwuyaice: } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto qiaimmucomukkeka; osuscoaaomwcqkew: uoeasoimegouymka: goto ciucewqgyoiouesq; ciucewqgyoiouesq: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto cgmgqucewwssmicq; qiaimmucomukkeka: switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: case self::EXPIRE_DATE: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto uoeasoimegouymka; } goto aoquoewagkseayug; aoquoewagkseayug: egsycocugqyyswsi: goto osuscoaaomwcqkew; cgmgqucewwssmicq: } }
