<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bba595949c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\144\157\x6d\141\x69\x6e\137\151\x64"; const ymamoeqaciwakwue = "\x70\x72\151\x76\x69\154\x65\x67\x65\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->guiaswksukmgageq(__("\x44\x6f\x6d\141\151\156", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\157\155\x61\151\156\x73", PR__PKG__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\x70\157\163\x69\x74\151\157\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\x44\x6f\x6d\141\151\156", PR__PKG__DOMAIN_MANAGER)), $this->kwwgyikigsyesgoo(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x44\x6f\x6d\x61\151\156\x20\x50\162\151\x76\x69\154\x65\x67\145", PR__PKG__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\143\x6f\154" => "\155\x64\x2d\x34"], self::ymamoeqaciwakwue => ["\x63\x6f\x6c" => "\155\x64\55\x34", self::squoamkioomemiyi => "\x63\150\x65\x63\x6b\x62\157\170", "\141\x73\x2d\x69\x6e\154\151\x6e\x65", "\x70\x61\162\x65\156\x74\x2d\x63\x6c\141\163\163" => "\x20\155\164\55\x6d\x64\x2d\141\x75\x74\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ukamowomoeiweqky = Ownership::symcgieuakksimmu(); $ywoucyskcquysiwc["\x6f\x77\x6e\145\162\163\x68\151\160\163"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto qcessicwuikwqsis; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto kooskuwkuayiuose; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\116\x6f\40\157\x77\x6e\x65\x72\163\150\151\160\x20\x68\x61\163\x20\x62\x65\145\x6e\40\x72\145\147\x69\x73\x74\145\x72\145\x64\40\x66\157\x72\40\164\150\151\x73\x20\144\x6f\x6d\x61\x69\156\x20\x79\145\164\56", PR__PKG__DOMAIN_MANAGER), ["\x63\154\x61\163\163" => "\146\x6f\x6e\164\x2d\61\65"]); goto qwcegcuowwgiccos; kooskuwkuayiuose: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->ggqekkkocygywmoy(ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto twkmiuomimomscew; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; twkmiuomimomscew: eyiamcekkgkiawqy: } mqccmesakuemceqi: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\x73\x65\x72", PR__PKG__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\103\141\x70\141\142\x69\154\x69\164\171", PR__PKG__DOMAIN_MANAGER)], ["\143\x6c\x61\163\x73" => "\x66\x6f\x6e\164\x2d\x31\65\40\x74\141\142\x6c\x65\55\163\x74\x72\151\160\145\144\x20\164\x61\142\154\145\x2d\x62\157\162\144\x65\162\154\145\x73\x73"]); qwcegcuowwgiccos: qcessicwuikwqsis: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto yssscwioiyygssec; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\x68\x74\x74\160\163\x3a\x2f\x2f{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); yssscwioiyygssec: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (is_numeric($mokawwccycoiqeka)) { goto ieumumsgyguceusy; } $mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka); ieumumsgyguceusy: if (!$mokawwccycoiqeka) { goto coywmiyqgsweuiic; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); coywmiyqgsweuiic: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto siqagquguiemuoku; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto oouoqimaaqcmccay; } $wkaqekwwgqsqwcoi = IconFontawesomeInterface::cugwqwigakiwyiuk; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\120\162\151\x76\151\154\x65\147\x65\x64\40\x44\157\x6d\x61\151\156", PR__PKG__DOMAIN_MANAGER); goto sycygoiaiqqageym; oouoqimaaqcmccay: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::umkismkaiusiugkg; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\116\x6f\x74\x20\120\x72\x69\166\151\x6c\145\147\x65\x64\x20\x44\157\155\141\x69\x6e", PR__PKG__DOMAIN_MANAGER); sycygoiaiqqageym: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\x61\x73\163" => "\x66\x75\x6c\154\55\157\160\x61\x63\x69\x74\x79\40\151\x63\x6f\x6e\x2d\x73\155\x20\x69\x63\157\156\x2d{$sqeykgyoooqysmca}", "\x74\151\x74\x6c\x65" => $meqocwsecsywiiqs]); goto siqagquguiemuoku; } ycakugokkqkuqyiu: siqagquguiemuoku: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
