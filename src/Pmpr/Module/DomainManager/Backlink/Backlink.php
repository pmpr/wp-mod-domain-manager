<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82862fe89             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Backlink extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\x74\137\x61\160\x69\x5f\x69\156\x69\164", [$this, "\x74\151\x73\x77\141\171\x73\x71\x61\167\x75\143\x67\147\165\x63"])->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x67\x75\165\x77\x69\157\x6d\157\x6d\167\x6b\163\161\x79\x67\x69"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\143\157\x6d\160\157\156\x65\156\x74\137\x72\x65\163\x74\x5f\x67\x65\x74\x5f\151\164\x65\155\x5f\162\x65\163\160\x6f\x6e\163\x65"), [$this, "\145\147\143\x61\x79\x6b\143\171\x6b\143\145\151\x61\147\153\x79"], 10, 3)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\154\151\143\145\156\x73\x65\137\x63\x68\x65\x63\x6b\x5f\x76\141\154\151\x64\141\x74\151\x6f\156\137\162\145\x73\x70\x6f\x6e\163\145\x5f\x64\141\x74\x61"), [$this, "\x65\147\143\x61\x79\153\143\x79\x6b\x63\145\x69\141\x67\153\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); } public function tiswaysqawucgguc() { REST::symcgieuakksimmu()->register_routes(); } public function egcaykcykceiagky($icwicymcioeyeyek, $akyiigeggqowmqqq, $wksoawcgagcgoask) { $uqigicauqkogsuuc = ManipulateArray::get($wksoawcgagcgoask, self::gouqcwikiiygyasc); if ($uqigicauqkogsuuc) { goto cuoqqgaygogsmmic; } $this->saqqeqmcyyoeqici("\143\157\155\160\157\x6e\x65\156\x74\x20\151\x73\40\x6e\157\x74\40\162\x65\x63\157\x67\156\x69\x7a\x65\x64\x2e"); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $okgiqegieoooemuq = $this->moyiakuigiusagwo($uqigicauqkogsuuc, self::igmwackauwsummys); if ($okgiqegieoooemuq) { goto qmeoaqmsuseueqiy; } $this->saqqeqmcyyoeqici("\142\x61\x63\153\154\x69\156\153\40\146\x6f\x6f\164\145\162\x20\x74\x65\x78\x74\x20\x69\163\40\145\155\160\164\171\x2e", [$uqigicauqkogsuuc]); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $ggcusimcgowkewyk = Model::symcgieuakksimmu()->oqomcmyuuakigusk([Model::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, Model::ogqcgemayqiaucag => $uqigicauqkogsuuc], [Model::ouywiegeiyuaaawo, Model::qescuiwgsyuikume, Model::ssmskyqgcmeiayco, Model::iuqumwggccmcuyem]); if ($ggcusimcgowkewyk) { goto eiawsoasmscmqswa; } $this->saqqeqmcyyoeqici("\x63\x61\156\x20\156\x6f\164\40\x66\x69\x6e\144\40\x62\141\x63\x6b\154\151\x6e\x6b\40\162\x65\x63\157\x72\144\x20\164\x6f\40\x61\144\144\40\162\x65\x73\165\154\x74\x2e"); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $ggcusimcgowkewyk = (array) $ggcusimcgowkewyk; $ggcusimcgowkewyk[self::igmwackauwsummys] = $okgiqegieoooemuq; $ggcusimcgowkewyk[self::ocwsuwyiiasigqaa] = ManipulateArray::get($wksoawcgagcgoask, self::NAME, $wksoawcgagcgoask); $icwicymcioeyeyek = ManipulateArray::set($icwicymcioeyeyek, [self::momcisyewgkeguye => $ggcusimcgowkewyk]); ickcmqoiosquugwe: ygkcacsyyckescqs: cgewcsueoyaeikgm: return $icwicymcioeyeyek; } public function guuwiomomwksqygi() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eyiamcekkgkiawqy; } $uuskcymsqowqgkyo = $this->yoieqkskckuicoiu(); if (!$uuskcymsqowqgkyo) { goto mqccmesakuemceqi; } foreach ($uuskcymsqowqgkyo as $iiumgusgeekimkya) { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$iiumgusgeekimkya}\x5f\x74\x61\142\x73"), [$this, "\165\155\165\155\165\x71\x79\171\167\x77\141\x6d\x6d\163\165\x79"], 10, 2); igymseewwyiocoug: } sukskmcwsoysiuqu: mqccmesakuemceqi: eyiamcekkgkiawqy: } public function umumuqyywwammsuy($ywoucyskcquysiwc, $uqcooyiiyysckskk) { $ymqmyyeuycgmigyo = $uqcooyiiyysckskk->cisyiemkeykgkomc(); $ywoucyskcquysiwc[] = Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\x62\141\x63\x6b\154\151\x6e\153\x5f\x63\x6f\156\x66\151\x67", __("\102\x61\143\x6b\x6c\x69\x6e\153\40\x43\157\156\146\x69\147", PR__MDL__DOMAIN_MANAGER))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::iusoecsswgekecks, __("\107\x65\x6e\145\x72\x61\154", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ckuwucygcwsiawms(self::momcisyewgkeguye, __("\x42\141\143\153\154\151\x6e\x6b", PR__MDL__DOMAIN_MANAGER))->smmismmuuccmscya())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::sikqccmyeogmuosk, __("\x42\141\x63\153\154\x69\156\153\x20\x50\x72\x69\x6f\x72\x69\x74\171", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo())->mkksewyosgeumwsa(Tab::sciaycsmsiekqueg(self::igmwackauwsummys, __("\106\x6f\x6f\164\145\x72\40\124\x65\170\164", PR__MDL__DOMAIN_MANAGER))->qsecygiycssgacqs(2)->gsomueooycksswcy())->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . "\x5f\143\x6f\x6e\x74\x65\156\164\163", __("\103\157\156\164\x65\156\x74\x73", PR__MDL__DOMAIN_MANAGER))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x5f\164\x69\164\154\145\137\x61\156\x64\137\163\x6c\165\147", __("\x54\x69\164\154\x65\x20\101\156\144\x20\x53\154\165\147", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ameuayawimeoysmc, __("\x54\151\x74\154\145\x20\x61\156\144\x20\123\154\165\147\40\x50\x6c\141\143\145\163", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::wcwmusaouiqaqeww(self::syoumqikoowgswma, __("\x52\145\166\x65\162\x73\145\x20\123\154\x75\147", PR__MDL__DOMAIN_MANAGER)))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::awweqicqwikkykis, __("\124\151\164\154\x65", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\x74\154\145", PR__MDL__DOMAIN_MANAGER)))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ouywiegeiyuaaawo, __("\x53\x6c\165\x67", PR__MDL__DOMAIN_MANAGER))->yskkmqiusguummwa())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\x50\154\141\143\x65", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ksssumoioemcmcgo, __("\120\x6c\141\143\x65\40\x4c\145\156\x67\x74\150", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::wsigcqmysiucgwuo))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x5f\x61\156\x63\150\x6f\x72\163", __("\101\156\143\x68\157\x72\x73", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::mecugimsqkeicksm, __("\x41\x6e\143\150\x6f\x72\x20\x50\x72\x65\x66\151\170", PR__MDL__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ouauqossmqiwwsui, __("\x41\x6e\143\150\157\x72\x20\x53\x75\x66\146\151\x78", PR__MDL__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ogcquccysekeyisc, __("\x41\x6e\x63\x68\157\x72\163", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::kweqeqcagwaiucik, __("\x41\156\x63\x68\157\x72", PR__MDL__DOMAIN_MANAGER)))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::kmiqqoqiyyimiegg))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x5f\163\164\x61\x74\x65\155\145\x6e\164\163", __("\123\164\x61\164\145\155\x65\x6e\164\x73", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::qigcuyyegqmimoym, __("\x4d\151\x6e\x69\x6d\165\x6d\40\x43\x6f\x75\x6e\164", PR__MDL__DOMAIN_MANAGER), __("\115\151\156\151\155\165\x6d\x20\160\141\x72\x61\147\x72\x61\x70\150\x20\x63\157\x75\x6e\x74", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(5)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::cyukygkewseoqouw, __("\115\x61\170\x69\x6d\x75\x6d\x20\103\x6f\165\x6e\164", PR__MDL__DOMAIN_MANAGER), __("\x4d\141\x78\x69\x6d\x75\x6d\40\160\x61\162\x61\x67\x72\141\160\x68\x20\143\x6f\x75\156\x74", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(14)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::oecykcwqcimuygkw, __("\115\x69\156\x69\x6d\x75\155\x20\x4c\x65\156\147\x74\150", PR__MDL__DOMAIN_MANAGER), __("\115\x69\156\x69\x6d\x75\x6d\x20\x73\x74\141\x74\x65\155\145\156\x74\x20\143\157\165\x6e\164\x20\x75\163\145\x64\x20\x69\156\40\145\x61\x63\150\x20\160\x61\x72\141\147\x72\x61\160\x68", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::swikuukssgyqwkue, __("\x4d\x61\x78\151\155\165\x6d\x20\x4c\145\x6e\147\164\x68", PR__MDL__DOMAIN_MANAGER), __("\115\x61\x78\151\x6d\x75\155\40\x73\x74\141\x74\x65\x6d\145\156\x74\40\143\x6f\x75\x6e\164\x20\x75\163\145\144\x20\151\156\x20\x65\x61\x63\x68\40\160\141\x72\141\x67\162\141\160\x68", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(6)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ooqaewiocugokqco, __("\123\164\x61\164\x65\155\145\156\164", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::uouyygwcgsmygaee(self::TEXT, __("\x54\145\170\164", PR__MDL__DOMAIN_MANAGER))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\127\x68\151\x63\x68\40\120\141\162\141\x67\162\141\x70\x68", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::akamkkecckgyeyck))->saemoowcasogykak(IconFontawesomeInterface::qwwkuisyyscowceo))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); return $ywoucyskcquysiwc; } }
