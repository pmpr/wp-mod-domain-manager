<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066ea3e4c4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Backlink extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x73\164\x5f\141\x70\x69\x5f\x69\156\151\164", [$this, "\164\151\x73\167\141\171\163\161\141\x77\x75\x63\x67\147\165\143"])->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\147\165\165\167\151\157\155\x6f\x6d\x77\x6b\163\x71\x79\147\x69"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\154\151\x63\x65\156\163\145\137\143\150\x65\143\x6b\137\166\141\x6c\151\x64\141\x74\x69\157\156\x5f\162\145\163\x70\x6f\x6e\163\145\x5f\x64\141\x74\x61"), [$this, "\145\147\143\141\171\153\143\171\153\x63\145\151\141\x67\153\x79"], 10, 4); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); } public function tiswaysqawucgguc() { REST::symcgieuakksimmu()->register_routes(); } public function egcaykcykceiagky($icwicymcioeyeyek, $akyiigeggqowmqqq, $uqigicauqkogsuuc, $wmqsyyyeksgsmmya) { $okgiqegieoooemuq = $this->moyiakuigiusagwo($uqigicauqkogsuuc, self::FOOTER_TEXT); if ($okgiqegieoooemuq) { goto mqccmesakuemceqi; } goto eyiamcekkgkiawqy; mqccmesakuemceqi: $ggcusimcgowkewyk = Model::symcgieuakksimmu()->oqomcmyuuakigusk([Model::DOMAIN_ID => $akyiigeggqowmqqq, Model::COMPONENT_ID => $uqigicauqkogsuuc], [Model::ouywiegeiyuaaawo, Model::qescuiwgsyuikume, Model::ssmskyqgcmeiayco, Model::iuqumwggccmcuyem]); if (!$ggcusimcgowkewyk) { goto igymseewwyiocoug; } $ggcusimcgowkewyk = (array) $ggcusimcgowkewyk; $ggcusimcgowkewyk[self::FOOTER_TEXT] = $okgiqegieoooemuq; $ggcusimcgowkewyk["\x63\157\x6d\x70\157\156\x65\x6e\164"] = ManipulateArray::get($wmqsyyyeksgsmmya, self::NAME); $icwicymcioeyeyek[self::momcisyewgkeguye] = $ggcusimcgowkewyk; igymseewwyiocoug: eyiamcekkgkiawqy: return $icwicymcioeyeyek; } public function guuwiomomwksqygi() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qcessicwuikwqsis; } $uuskcymsqowqgkyo = $this->yoieqkskckuicoiu(); if (!$uuskcymsqowqgkyo) { goto qwcegcuowwgiccos; } foreach ($uuskcymsqowqgkyo as $iiumgusgeekimkya) { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$iiumgusgeekimkya}\x5f\x74\141\142\x73"), [$this, "\x75\155\165\155\165\x71\171\171\x77\x77\141\155\155\163\165\171"], 10, 2); kooskuwkuayiuose: } twkmiuomimomscew: qwcegcuowwgiccos: qcessicwuikwqsis: } public function umumuqyywwammsuy($ywoucyskcquysiwc, $uqcooyiiyysckskk) { $ymqmyyeuycgmigyo = $uqcooyiiyysckskk->cisyiemkeykgkomc(); $ywoucyskcquysiwc[] = Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\x62\141\143\x6b\x6c\x69\156\x6b\x5f\x63\x6f\x6e\x66\x69\x67", __("\102\141\x63\x6b\x6c\x69\x6e\x6b\x20\103\x6f\x6e\x66\151\x67", PR__PKG__DOMAIN_MANAGER))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::_GENERAL, __("\x47\x65\156\x65\162\x61\154", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ckuwucygcwsiawms(self::momcisyewgkeguye, __("\x42\141\143\153\x6c\x69\156\153", PR__PKG__DOMAIN_MANAGER))->smmismmuuccmscya())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::BACKLINK_PRIORITY, __("\x42\141\143\153\x6c\151\156\153\x20\120\162\151\157\162\151\x74\x79", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo())->mkksewyosgeumwsa(Tab::sciaycsmsiekqueg(self::FOOTER_TEXT, __("\106\157\x6f\164\x65\162\40\x54\145\170\x74", PR__PKG__DOMAIN_MANAGER))->qsecygiycssgacqs(2)->gsomueooycksswcy())->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . "\137\143\x6f\156\164\145\x6e\x74\163", __("\x43\157\x6e\x74\145\x6e\x74\x73", PR__PKG__DOMAIN_MANAGER))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\x74\x69\x74\154\x65\x5f\x61\x6e\144\137\x73\154\x75\147", __("\x54\x69\164\154\x65\x20\x41\x6e\x64\40\x53\154\x75\x67", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::TITLE_AND_SLUG_PLACE, __("\x54\x69\x74\x6c\145\40\x61\x6e\x64\40\x53\154\165\x67\x20\120\x6c\141\x63\145\163", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::awweqicqwikkykis, __("\124\151\x74\154\x65", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\164\154\145", PR__PKG__DOMAIN_MANAGER)))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ouywiegeiyuaaawo, __("\123\154\x75\147", PR__PKG__DOMAIN_MANAGER))->yskkmqiusguummwa())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\120\x6c\141\143\x65", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::PLACE_LENGTH, __("\120\x6c\141\x63\145\40\x4c\145\156\147\x74\x68", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::ICON_HEADING))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x5f\141\156\x63\x68\x6f\162\x73", __("\101\156\143\x68\157\162\x73", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ANCHOR_PREFIX, __("\101\x6e\143\150\157\162\x20\120\x72\x65\146\151\x78", PR__PKG__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ANCHOR_SUFFIX, __("\101\x6e\x63\x68\x6f\162\40\123\x75\146\146\x69\170", PR__PKG__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ogcquccysekeyisc, __("\x41\x6e\143\150\157\x72\163", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::kweqeqcagwaiucik, __("\x41\x6e\x63\150\x6f\x72", PR__PKG__DOMAIN_MANAGER)))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::ICON_ANCHOR))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\x73\164\x61\164\145\x6d\x65\x6e\164\x73", __("\123\x74\141\164\145\155\145\x6e\164\x73", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::PARAGRAPH_MIN_COUNT, __("\x4d\151\156\151\155\x75\155\x20\x43\157\165\156\x74", PR__PKG__DOMAIN_MANAGER), __("\115\151\156\x69\x6d\x75\155\x20\160\141\162\141\147\x72\x61\x70\150\40\x63\x6f\165\x6e\164", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(5)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::PARAGRAPH_MAX_COUNT, __("\115\141\x78\x69\x6d\x75\x6d\40\x43\157\x75\156\164", PR__PKG__DOMAIN_MANAGER), __("\x4d\141\x78\x69\x6d\165\155\x20\160\141\x72\141\x67\162\x61\x70\x68\40\x63\157\165\x6e\x74", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(14)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::PARAGRAPH_MIN_LENGTH, __("\x4d\x69\156\x69\155\x75\155\x20\x4c\145\x6e\147\164\x68", PR__PKG__DOMAIN_MANAGER), __("\x4d\151\x6e\x69\x6d\x75\x6d\40\163\x74\x61\x74\145\x6d\145\x6e\x74\x20\x63\x6f\x75\x6e\164\x20\165\x73\x65\144\40\151\x6e\40\145\141\143\150\40\160\141\x72\141\147\162\141\160\x68", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::PARAGRAPH_MAX_LENGTH, __("\x4d\x61\170\151\155\x75\x6d\40\114\145\x6e\147\164\150", PR__PKG__DOMAIN_MANAGER), __("\115\x61\x78\x69\x6d\165\155\40\163\x74\141\x74\x65\x6d\145\156\164\x20\143\x6f\x75\x6e\164\40\x75\163\145\x64\40\x69\x6e\40\145\141\x63\150\40\160\141\x72\x61\x67\x72\x61\x70\x68", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(6)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ooqaewiocugokqco, __("\123\164\x61\x74\x65\155\145\156\164", PR__PKG__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::uouyygwcgsmygaee(self::TEXT, __("\x54\145\x78\x74", PR__PKG__DOMAIN_MANAGER))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\x57\150\x69\x63\x68\40\x50\141\162\141\147\162\141\x70\x68", PR__PKG__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::ICON_TEXT))->saemoowcasogykak(IconFontawesomeInterface::ICON_PARAGRAPH))->saemoowcasogykak(IconFontawesomeInterface::ICON_LINK); return $ywoucyskcquysiwc; } }
