<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978be87ea82             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\x64\x6f\155\141\x69\x6e\137\x69\x64"; const ymamoeqaciwakwue = "\x70\x72\151\x76\151\x6c\145\147\145\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->guiaswksukmgageq(__("\104\157\x6d\x61\151\x6e", PR__MDL__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\157\155\141\151\156\163", PR__MDL__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\x70\157\x73\x69\164\x69\x6f\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\x6f\x6d\141\151\x6e", PR__MDL__DOMAIN_MANAGER)), $this->kwwgyikigsyesgoo(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x44\x6f\x6d\141\x69\156\40\120\x72\151\166\151\154\145\147\x65", PR__MDL__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\x63\157\x6c" => "\x6d\144\55\x34"], self::ymamoeqaciwakwue => ["\x63\157\x6c" => "\x6d\x64\55\64", self::squoamkioomemiyi => "\143\x68\145\143\x6b\142\x6f\x78", "\141\163\55\151\156\x6c\151\x6e\x65", "\160\141\x72\145\x6e\164\55\x63\154\141\x73\x73" => "\40\155\x74\55\155\144\55\x61\x75\x74\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { if (!($ukamowomoeiweqky = Ownership::symcgieuakksimmu())) { goto cecuyayqoioasumi; } $ywoucyskcquysiwc["\157\167\x6e\145\162\x73\150\151\160\163"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; cecuyayqoioasumi: return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto asmecuqiyyswueqe; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto qwigomakwmyiwkgo; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\x4e\157\40\157\167\156\x65\x72\x73\150\x69\x70\40\x68\x61\x73\x20\x62\x65\145\x6e\x20\162\145\x67\151\x73\164\x65\x72\145\144\40\x66\157\162\x20\x74\x68\151\x73\40\x64\157\155\141\x69\156\40\171\x65\x74\x2e", PR__MDL__DOMAIN_MANAGER), ["\143\154\x61\163\163" => "\x66\157\x6e\x74\55\x31\x35"]); goto myoicgcuugciueis; qwigomakwmyiwkgo: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->yomgsemomcmgekyi(self::ucmueuwwcmocgmig, ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto qgoiooayqmqqsiok; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\163\x65\x72", PR__MDL__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\x61\160\x61\142\x69\154\x69\164\x79", PR__MDL__DOMAIN_MANAGER)], ["\x63\154\x61\163\163" => "\x66\x6f\x6e\164\55\61\x35\x20\x74\x61\x62\154\145\x2d\163\164\162\151\x70\x65\x64\40\164\141\142\154\x65\x2d\142\157\162\x64\145\162\154\x65\x73\x73"]); myoicgcuugciueis: asmecuqiyyswueqe: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::qkmqmaeuyokqgemg, 0); if (!(is_numeric($pkyyagewkiyckmwy) && ($mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig)))) { goto cuykwgmswkskqkyi; } $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto csscmcacoikwsecs; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\x68\164\x74\x70\x73\x3a\x2f\x2f{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); csscmcacoikwsecs: cuykwgmswkskqkyi: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (!($mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto kuicqywysciceggs; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); kuicqywysciceggs: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto mkwskuycuyguqqok; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto eqkauqciwewmgeoi; } $wkaqekwwgqsqwcoi = IconInterface::ucomcyskmkiqysee; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x50\162\151\166\x69\x6c\145\x67\x65\x64\x20\x44\157\x6d\x61\x69\156", PR__MDL__DOMAIN_MANAGER); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $wkaqekwwgqsqwcoi = IconInterface::ggokgkyiweugsokc; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\x6f\x74\x20\x50\162\x69\166\x69\x6c\145\x67\145\144\x20\x44\157\x6d\141\x69\156", PR__MDL__DOMAIN_MANAGER); kwagwqyusyiyoaqs: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\x73\x73" => "\146\x75\154\x6c\55\157\160\141\143\x69\x74\171\40\x69\x63\157\x6e\55\163\x6d\x20\151\143\x6f\x6e\x2d{$sqeykgyoooqysmca}", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs]); goto mkwskuycuyguqqok; } sciwggaeogcoesiu: mkwskuycuyguqqok: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
