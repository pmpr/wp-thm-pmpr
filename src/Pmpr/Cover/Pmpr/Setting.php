<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb604c47065             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Setting extends BaseClass implements CommonInterface { const aycugmweyouqeiea = "\141\x67\x72\145\145\x6d\x65\156\x74"; const mgwmuqmguauukqeq = "\152\x6f\142\x5f\164\151\164\x6c\145"; const guaaeawmegqeouuy = "\x74\x65\x61\x6d\x5f\x63\x6f\165\156\164"; const oeouaqyskusqoasi = "\141\143\164\x69\157\x6e\x5f\164\x65\170\x74"; const miykmmqkcuaakoom = "\164\x65\x61\155\137\x65\170\160\145\162\x69\x65\156\143\145"; const eigsugyqaecywyeq = "\163\x65\143\x74\151\157\156\137"; const wmuocueiuqacmqsc = self::eigsugyqaecywyeq . "\61\137"; const qoauigwkukeecage = self::eigsugyqaecywyeq . "\62\x5f"; const wwkkwcgwceoueauo = self::eigsugyqaecywyeq . "\63\x5f"; const emgcmwcicoekgsik = self::eigsugyqaecywyeq . "\64\137"; const quswgwuygqegmiqu = self::eigsugyqaecywyeq . "\x35\x5f"; const iuuyqwoiyoeyiiga = self::eigsugyqaecywyeq . "\x36\137"; const gcgaogswqsukoeig = self::wmuocueiuqacmqsc . "\x74\157\160\137\x6c\x69\163\x74"; const wqeqaueukmiwkwik = self::wmuocueiuqacmqsc . "\164\157\160\137\x73\x6c\151\x64\x65\162"; const sqemmgwmwwawgecq = self::wmuocueiuqacmqsc . "\x62\x6f\164\164\x6f\155\x5f\154\151\x73\164"; const qggmmsccekaeawoc = self::wqeqaueukmiwkwik . self::oeouaqyskusqoasi; const goaeygisucequeqs = self::qoauigwkukeecage . self::qescuiwgsyuikume; const gwokiiwmeucmigem = self::qoauigwkukeecage . self::eqkeooqcsscoggia; const iiokomyaiiwokwgu = self::qoauigwkukeecage . "\156\x65\167\x65\163\x74\137\160\162\x6f\x64\x75\143\164\x73"; const mokwceeesgoiqykk = self::qoauigwkukeecage . self::oguseymmyyoyaako . self::oeouaqyskusqoasi; const ecgcgowekkgwywuk = self::wwkkwcgwceoueauo . self::iockmgiyoygcswog . "\x5f"; const yeoauowmckkwokys = self::wwkkwcgwceoueauo . "\164\x65\141\x6d\163"; const kqaykcwsmauommaw = self::ecgcgowekkgwywuk . self::NAME; const gaayaukqcmygkmsg = self::ecgcgowekkgwywuk . self::mkousmkiawwousws; const iyysyggsoauagagu = self::ecgcgowekkgwywuk . "\x62\141\x64\x67\145\163"; const cuiomisokkyumoso = self::ecgcgowekkgwywuk . "\x61\x63\164\151\x6f\x6e\x5f\x70\x6f\x73\164"; const cwgaumwyaysmkgwe = self::ecgcgowekkgwywuk . "\x61\143\x74\x69\x6f\156\137\x74\x69\164\154\145"; const eqqscegsgukyuwky = self::emgcmwcicoekgsik . "\160\157\x73\164\x73"; const goemqugwaiiaukec = self::emgcmwcicoekgsik . self::oeouaqyskusqoasi; const eimskssquwymsqyu = self::quswgwuygqegmiqu . "\x70\x6f\x73\x74\163\137\157\162\144\x65\x72"; const yayugsaemuciyscs = self::quswgwuygqegmiqu . "\x61\143\164\x69\157\156\x5f\x70\157\163\164"; const oiigmckuoekemays = self::quswgwuygqegmiqu . "\141\x63\x74\x69\157\156\x5f\x74\151\x74\x6c\145"; const kmwomuiqseaeigcy = self::quswgwuygqegmiqu . "\x62\x6c\157\147\x5f\163\x74\x61\164\x73"; public function __construct() { $this->name = self::akuociswqmoigkas(); $this->parentMenu = "\x74\x68\145\x6d\x65\x73\x2e\160\x68\x70"; parent::__construct(); } public function gogaagekwoisaqgu() { $this->menuTitle = __("\x53\145\164\164\151\156\147", PR__CVR__PMPR); $this->pageTitle = __("\x43\157\x76\x65\x72\x20\x53\145\x74\x74\151\x6e\147", PR__CVR__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\107\145\156\145\x72\141\154", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x68\157\x6d\145", __("\x48\x6f\155\145", PR__CVR__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x68\157\155\145\55\163\145\143\164\151\x6f\156\x73", __("\123\x65\143\x74\151\x6f\x6e\x73", PR__CVR__PMPR))->aucimgwswmgaocae($this->mismyewsggusymya(1)->mkksewyosgeumwsa(self::iseogkiymousogom(self::gcgaogswqsukoeig, __("\x54\157\x70\40\114\151\163\x74", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk())->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qggmmsccekaeawoc, __("\123\x6c\x69\144\145\x72\40\101\x63\x74\151\157\156\40\124\x65\170\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\122\145\x61\x64\40\x4d\x6f\162\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::wqeqaueukmiwkwik, __("\x4e\x65\167\163\x20\x53\x6c\x69\144\145\162", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::iseogkiymousogom(self::sqemmgwmwwawgecq, __("\x42\x6f\164\164\157\155\x20\114\151\x73\x74", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq()->sosuookgumsgyyyc(2))->gswweykyogmsyawy(__("\124\157\x70\x20\123\145\x63\x74\151\x6f\x6e", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::wyoeksgmkucuigyg))->aucimgwswmgaocae($this->mismyewsggusymya(2)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mokwceeesgoiqykk, __("\101\x63\x74\x69\157\156\x20\x54\145\170\164", PR__CVR__PMPR))->eyygsasuqmommkua(__("\x42\165\x79\x20\x4e\x6f\167\41", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::iiokomyaiiwokwgu, __("\x4e\145\x77\x65\x73\164\40\x50\x72\x6f\144\165\143\x74\163", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\120\x72\x6f\144\x75\x63\x74", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\x69\x74\x6c\145", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\x44\x65\163\143\x72\151\x70\x74\x69\x6f\x6e", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\105\x78\x63\145\x72\x70\x74", PR__CVR__PMPR)))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\x61\143\153\x67\x72\x6f\x75\156\144\x20\x49\x6d\x61\147\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\106\x65\x61\x74\x75\x72\x65\144\40\x49\155\141\147\145", PR__CVR__PMPR))))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\x50\x72\x6f\144\165\x63\164\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::qagokqwiiyqccoky))->aucimgwswmgaocae($this->mismyewsggusymya(3)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kqaykcwsmauommaw, __("\117\167\x6e\x65\x72\40\x4e\141\155\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gaayaukqcmygkmsg, __("\117\167\x6e\145\162\x20\x49\x6d\141\x67\x65", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::iyysyggsoauagagu, __("\x4f\167\156\x65\x72\40\x42\x61\144\x67\145\163", PR__CVR__PMPR), $this->iiacsiaagsusawuw())->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::cuiomisokkyumoso, __("\101\x63\164\x69\x6f\156\40\x50\157\163\164", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::cwgaumwyaysmkgwe, __("\x41\143\x74\151\x6f\x6e\40\124\151\164\154\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\151\x74\x6c\x65", PR__CVR__PMPR), __("\101\x63\x74\151\x6f\x6e\40\x50\x6f\x73\164", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::iseogkiymousogom(self::yeoauowmckkwokys, __("\x54\x65\141\155\163", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x61\142\40\x54\151\164\154\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::NAME, __("\x4d\141\156\141\147\145\162\40\x4e\141\x6d\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mkousmkiawwousws, __("\x4d\x61\156\x61\x67\x65\162\x20\x49\155\x61\147\145", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mgwmuqmguauukqeq, __("\x4a\157\142\x20\124\x69\x74\154\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qsskmqwcucisywqy, __("\123\165\142\x74\145\x78\x74", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::guaaeawmegqeouuy, __("\124\x65\141\x6d\40\103\157\165\156\164", PR__CVR__PMPR), __("\124\x68\151\163\40\x76\x61\x6c\x75\145\40\x61\x64\x64\x65\x64\40\164\x6f\40\x72\x65\141\x6c\40\x76\141\154\x75\x65\40\142\x61\x73\x65\144\40\157\x6e\x20\x61\143\143\x65\160\164\145\144\x20\x61\147\x72\x65\x65\155\145\156\x74\x20\x72\x65\x71\165\x65\163\x74\x73", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::miykmmqkcuaakoom, __("\124\x65\x61\x6d\x20\x45\170\x70\x65\162\151\145\x6e\x63\145", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::aycugmweyouqeiea, __("\101\x67\x72\145\x65\x6d\145\156\x74", PR__CVR__PMPR))->wkqyoukciomqiyew()->oeewiaacscgyamai(Agreement::class))->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\117\x77\x6e\145\x72\40\141\x6e\x64\x20\124\145\141\x6d\163", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::giigokemwyckgmoc))->aucimgwswmgaocae($this->mismyewsggusymya(4)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::goemqugwaiiaukec, __("\x41\143\164\x69\157\156\40\x54\145\170\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\126\151\145\167\40\123\x74\x6f\162\171", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eqqscegsgukyuwky, __("\x50\x6f\x73\x74\163", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai("\x73\x75\x63\143\145\163\x73\x2d\163\164\x6f\162\171")->oikgogcweiiaocka())->gswweykyogmsyawy(__("\x53\x75\x63\x63\145\163\163\40\x53\164\x6f\x72\151\x65\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::kaioacisqgoaausg))->aucimgwswmgaocae($this->mismyewsggusymya(5)->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eimskssquwymsqyu, __("\x4f\162\144\145\x72\x20\142\x79", PR__CVR__PMPR), [self::kumuoysauoagaiiy => __("\116\145\167\x65\163\164", PR__CVR__PMPR)]))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::kmwomuiqseaeigcy, __("\x53\x74\x61\164\163", PR__CVR__PMPR), $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\x65\x74\141\x64\141\164\141\137\163\x74\141\x74\x5f\147\x65\164\x5f\141\154\154\x5f\x69\164\x65\x6d\163"), []))->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::yayugsaemuciyscs, __("\x41\x63\x74\x69\157\x6e\40\120\x6f\163\164", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oiigmckuoekemays, __("\101\143\164\151\x6f\156\40\124\151\x74\154\145", PR__CVR__PMPR)))->gswweykyogmsyawy(__("\102\x6c\x6f\x67\x20\x50\x6f\x73\x74\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::qomsekkgsuoqooos))->aucimgwswmgaocae($this->mismyewsggusymya(6)->gswweykyogmsyawy(__("\x43\157\x6e\x74\141\x63\x74\x20\x55\x53", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::ioeakwcgiicgscuu))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako))->saemoowcasogykak(IconFontawesomeInterface::iakqeokqeigmiawo)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::yeoauowmckkwokys); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } private function iiacsiaagsusawuw(array $ywmkwiwkosakssii = []) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\x74\x5f\142\141\x64\x67\145\163"), [], $ywmkwiwkosakssii); } private function mismyewsggusymya(int $awcmekyiwwkeyisq) : Tab { $uusmaiomayssaecw = "\163\x65\x63\164\x69\157\156\137{$awcmekyiwwkeyisq}"; return self::sgsmqaoowiyocqaa($uusmaiomayssaecw, sprintf(__("\x53\145\x63\x74\151\x6f\156\40\x25\163", PR__CVR__PMPR), $this->msywmyaoqmaegsuy($awcmekyiwwkeyisq)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::agkkyokkmaksskoi . $uusmaiomayssaecw, __("\x44\x69\x73\141\142\x6c\145\40\123\145\x63\164\x69\x6f\x6e", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws($uusmaiomayssaecw . self::icmokuskwoskgace, __("\x54\x69\x74\154\145\x20\x6f\x66\40\123\145\143\x74\x69\x6f\x6e", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg($uusmaiomayssaecw . self::oiuiymiygsoiasug, __("\x44\145\x73\143\x72\151\160\164\151\x6f\156\x20\157\x66\x20\123\x65\143\164\151\157\156", PR__CVR__PMPR))->qsecygiycssgacqs(3)); } private function qoammkgymwwcmumk(int $awcmekyiwwkeyisq) : array { $uusmaiomayssaecw = "\163\x65\x63\x74\151\157\x6e\x5f{$awcmekyiwwkeyisq}"; $ksaameoqigiaoigg = []; if (self::eiwcuqigayigimak(self::agkkyokkmaksskoi . $uusmaiomayssaecw, false)) { goto kocqqoyymosmuksu; } $ksaameoqigiaoigg = [self::qescuiwgsyuikume => self::eiwcuqigayigimak($uusmaiomayssaecw . self::icmokuskwoskgace, ''), self::eqkeooqcsscoggia => self::eiwcuqigayigimak($uusmaiomayssaecw . self::oiuiymiygsoiasug, '')]; kocqqoyymosmuksu: return $ksaameoqigiaoigg; } private function zosugeiykwsowuuk(bool $qykkaqkwmecqcyai = false) : array { $ikgwqyuyckaewsow = [self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\120\157\x73\164", PR__CVR__PMPR))->smmismmuuccmscya()->oeeumggeiyyckkom('', [self::yoayaissyomokiui, self::ogigqueukwysusii]), self::ckuwucygcwsiawms(self::yoayaissyomokiui, __("\x54\145\162\x6d", PR__CVR__PMPR))->yyayequseyasoyks()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::ogigqueukwysusii]), self::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\x4c\151\156\153", PR__CVR__PMPR))->xkgcwkwsqysqamic()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::yoayaissyomokiui]), self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\164\x6c\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\124\x69\164\154\x65", PR__CVR__PMPR)))]; if (!$qykkaqkwmecqcyai) { goto uqokiksoqcwwqgio; } $ikgwqyuyckaewsow[] = self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\x44\145\x73\143\x72\x69\x70\164\x69\157\x6e", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x45\x78\x63\145\162\160\x74", PR__CVR__PMPR)))->qsecygiycssgacqs(3); $ikgwqyuyckaewsow[] = self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\x61\143\x6b\147\x72\157\x75\156\x64\x20\x49\x6d\141\x67\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\106\145\x61\164\x75\x72\145\x64\x20\111\155\141\147\145", PR__CVR__PMPR))); uqokiksoqcwwqgio: return $ikgwqyuyckaewsow; } private function wmsmscymqimmamoi($aiowsaccomcoikus, $ccamueccusigaaio = null) : string { if ($ccamueccusigaaio) { goto qukocuwgakemmyga; } $ccamueccusigaaio = sprintf("\45\x73\x2f\x25\163", __("\120\157\163\164", PR__CVR__PMPR), __("\124\x65\x72\x6d", PR__CVR__PMPR)); qukocuwgakemmyga: return sprintf(__("\x4c\x65\141\x76\x65\40\145\x6d\x70\x74\x79\x20\x69\146\40\x79\157\x75\x20\x77\141\x6e\164\40\x73\150\157\167\x20\45\163\40\x25\x73\x2e", PR__CVR__PMPR), $ccamueccusigaaio, $aiowsaccomcoikus); } public function iaoqaucmqmweqmae(string $amakmumgguksgmum, bool $qykkaqkwmecqcyai = false) : array { $ksaameoqigiaoigg = []; $wgiowequysowwsky = self::eiwcuqigayigimak($amakmumgguksgmum); if (!($wgiowequysowwsky && is_array($wgiowequysowwsky))) { goto uckewycoogsogwiy; } foreach ($wgiowequysowwsky as $igqsaukqcqscimok) { $qsqwqsymmqeoqwcu = []; $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws . self::mswocgcucqoaesaa); $ukwokcuqauuosmoo = ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia); if (isset($igqsaukqcqscimok[self::mswoacegomcucaik])) { goto oimkeqocuguqqsqk; } if (isset($igqsaukqcqscimok[self::yoayaissyomokiui])) { goto oeocukauoyosicso; } if ($meqocwsecsywiiqs && isset($igqsaukqcqscimok[self::ogigqueukwysusii])) { goto suqceasgacskcmkc; } goto wkwamkgkwykeqkec; oimkeqocuguqqsqk: $post = $igqsaukqcqscimok[self::mswoacegomcucaik]; if ($meqocwsecsywiiqs) { goto ieqesiiageaauiuw; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post); ieqesiiageaauiuw: if (!$qykkaqkwmecqcyai) { goto oyeyomcgkmgymogq; } if ($ukwokcuqauuosmoo) { goto gamqcwuwkikwqoay; } $ukwokcuqauuosmoo = ManipulatePost::masoymaamekuykso($post); gamqcwuwkikwqoay: if ($mcqieaigyeeyaksm) { goto mscyggqcesgqqksu; } $mcqieaigyeeyaksm = ManipulatePost::wsiiswmaagmyiaiw($post); mscyggqcesgqqksu: oyeyomcgkmgymogq: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($post); goto wkwamkgkwykeqkec; oeocukauoyosicso: $iwewcwusemqaiggk = $igqsaukqcqscimok[self::yoayaissyomokiui]; if ($meqocwsecsywiiqs) { goto iesekaeqeomeuaui; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); iesekaeqeomeuaui: if (!$qykkaqkwmecqcyai) { goto mogkoocsoeuyoqqa; } if ($ukwokcuqauuosmoo) { goto wsesqmcqoiyyqkqi; } $ukwokcuqauuosmoo = DecoratorTerm::meqceykmywmqgoym($iwewcwusemqaiggk); wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk); goto wkwamkgkwykeqkec; suqceasgacskcmkc: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = $igqsaukqcqscimok[self::ogigqueukwysusii]; wkwamkgkwykeqkec: if (!$qsqwqsymmqeoqwcu) { goto kwiggogcgciwuwqk; } $qsqwqsymmqeoqwcu[self::qescuiwgsyuikume] = $meqocwsecsywiiqs; if (!$qykkaqkwmecqcyai) { goto yykqaowwsqgqysmq; } $qsqwqsymmqeoqwcu[self::mkousmkiawwousws] = $mcqieaigyeeyaksm; $qsqwqsymmqeoqwcu[self::eqkeooqcsscoggia] = $ukwokcuqauuosmoo; yykqaowwsqgqysmq: $ksaameoqigiaoigg[] = $qsqwqsymmqeoqwcu; kwiggogcgciwuwqk: yiowgigkkwsoqcci: } sioekkmekwygemyc: uckewycoogsogwiy: return $ksaameoqigiaoigg; } public function gyiawqogoyoymcis() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(1); if (!$ksaameoqigiaoigg) { goto ikuuiauwouuqawuw; } $ksaameoqigiaoigg["\x73\154\151\x64\x65\162"] = $this->iaoqaucmqmweqmae(self::wqeqaueukmiwkwik, true); $ksaameoqigiaoigg["\x74\157\160\137\154\151\163\x74"] = $this->iaoqaucmqmweqmae(self::gcgaogswqsukoeig); $ksaameoqigiaoigg["\x62\157\x74\x74\x6f\155\137\154\151\163\164"] = $this->iaoqaucmqmweqmae(self::sqemmgwmwwawgecq, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::qggmmsccekaeawoc, __("\x52\145\141\144\40\115\157\162\x65", PR__CVR__PMPR)); ikuuiauwouuqawuw: return $ksaameoqigiaoigg; } public function ageqswwkkqywckco() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(2); if (!$ksaameoqigiaoigg) { goto yoqakewookqoqacm; } $ksaameoqigiaoigg["\x70\x72\x6f\144\165\143\164\163"] = $this->iaoqaucmqmweqmae(self::iiokomyaiiwokwgu, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::mokwceeesgoiqykk, __("\x42\x75\171\40\116\157\167\x21", PR__CVR__PMPR)); yoqakewookqoqacm: return $ksaameoqigiaoigg; } public function agcggaoesgiameyi() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(3); if (!$ksaameoqigiaoigg) { goto wwukgaquuyoissgy; } if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto suqcsgaosywaauuu; } $aiamqeawckcsuaou = self::eiwcuqigayigimak(self::cuiomisokkyumoso); if (!($memkywmosqicmcqs = self::eiwcuqigayigimak(self::iyysyggsoauagagu))) { goto gswcoeiisamakwii; } $memkywmosqicmcqs = $this->iiacsiaagsusawuw([self::ackcaikowcokggsc => $memkywmosqicmcqs, self::aisguagukaewucii => self::ckmqoekmugkggeym]); gswcoeiisamakwii: $ksaameoqigiaoigg[self::iockmgiyoygcswog] = ["\142\141\x64\147\x65\x73" => $memkywmosqicmcqs, self::NAME => self::eiwcuqigayigimak(self::kqaykcwsmauommaw), self::mkousmkiawwousws => $eygsasmqycagyayw->uakscggyguwqmkoe(self::eiwcuqigayigimak(self::gaayaukqcmygkmsg)), self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::oeouaqyskusqoasi => self::eiwcuqigayigimak(self::cwgaumwyaysmkgwe, ManipulatePost::qcgakseyaikigqco($aiamqeawckcsuaou))]; if (!($iaseaecuamsukckm = self::eiwcuqigayigimak(self::yeoauowmckkwokys, []))) { goto mscgewkcqcoowweg; } foreach ($iaseaecuamsukckm as $momcykaoccoymeig => $ksuesqoiqqiiyqsq) { if (!($mcqieaigyeeyaksm = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::mkousmkiawwousws))) { goto emqswoaawgeyosmi; } $ksuesqoiqqiiyqsq[self::mkousmkiawwousws] = $eygsasmqycagyayw->uakscggyguwqmkoe($mcqieaigyeeyaksm); emqswoaawgeyosmi: if (!($wmmioqqsqesggsei = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::miykmmqkcuaakoom))) { goto iwsmmkqaoksmocok; } $ksuesqoiqqiiyqsq[self::miykmmqkcuaakoom] = sprintf(__("\45\163\x20\171\x65\141\x72\x73\x20\157\146\x20\x74\x65\x61\x6d\x20\145\170\x70\x65\162\x69\x65\156\143\145", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($wmmioqqsqesggsei), ["\143\154\x61\x73\x73" => "\146\157\156\164\x2d\167\145\x69\147\x68\164\55\142\157\x6c\144"])); iwsmmkqaoksmocok: $bauwgewmoqokkmkm = 0; if (!($xssuewsokckmigqk = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::aycugmweyouqeiea))) { goto esaqcqqwuussiiwo; } if (!$this->omseesogaocascyo("\123\141\154\141\x72\171")) { goto qiiigwkqeoewsuwm; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($kueeocmceokoouqa && $mssuumukiiaqmcka)) { goto okkmcocqokkskasy; } $gikyaoiioawywyeu = $xssuewsokckmigqk; $xssuewsokckmigqk = $mssuumukiiaqmcka->akkkoiiymmamsauc($xssuewsokckmigqk); $iueymcwwscwqkiyq = $mssuumukiiaqmcka->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk); $bauwgewmoqokkmkm = $kueeocmceokoouqa->asskucacysemeoiu([$kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => $gikyaoiioawywyeu]); if (!($mssuumukiiaqmcka::aqugcqsyeisayuog !== $iueymcwwscwqkiyq)) { goto esikeyqyuikmaiek; } $ksuesqoiqqiiyqsq[self::aycugmweyouqeiea] = ["\151\163\137\157\x70\145\x6e" => self::miswkosqicsksgok === $iueymcwwscwqkiyq, self::qescuiwgsyuikume => __("\x44\157\x20\171\157\165\40\x77\x61\156\164\40\x74\x6f\x20\x77\x6f\162\x6b\x20\x77\151\164\x68\40\164\x68\151\163\40\164\145\141\x6d\77", PR__CVR__PMPR), self::ucoiewcoucauqwko => __("\103\x6f\x6f\160\145\162\x61\164\x69\157\x6e\x20\x54\145\162\155\x73", PR__CVR__PMPR), self::ckmqoekmugkggeym => $xssuewsokckmigqk, self::sauwwsocmukoaayu => ManipulateServer::oiucukewkckkwiqc("\x2f\x73\141\154\141\x72\x79\57\141\160\x70\x6c\x79\57{$gikyaoiioawywyeu}", self::ismwwqmwgmqqocke), "\x73\x75\142\155\151\164\137\162\145\x71\165\145\163\x74" => __("\123\165\x62\x6d\x69\164\40\122\x65\161\x75\x65\163\164\x20\146\x6f\x72\40\x43\157\157\x70\145\x72\141\x74\151\157\156", PR__CVR__PMPR)]; esikeyqyuikmaiek: okkmcocqokkskasy: qiiigwkqeoewsuwm: esaqcqqwuussiiwo: if (!($ymmgsoswiamqoiae = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::guaaeawmegqeouuy))) { goto ikqeeaysmqgcgawq; } $ksuesqoiqqiiyqsq[self::guaaeawmegqeouuy] = sprintf(__("\x25\x73\x20\x6d\x65\155\142\x65\162\x73\x20\164\x65\141\x6d", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($ymmgsoswiamqoiae + $bauwgewmoqokkmkm), ["\143\x6c\x61\x73\x73" => "\146\x6f\x6e\x74\x2d\167\x65\151\147\150\x74\55\x62\157\x6c\x64"])); ikqeeaysmqgcgawq: $iaseaecuamsukckm[$momcykaoccoymeig] = $ksuesqoiqqiiyqsq; ocywegekakimmwcq: } yuimwyoywaiiqacs: $ksaameoqigiaoigg["\x74\145\x61\155\x73"] = $iaseaecuamsukckm; mscgewkcqcoowweg: suqcsgaosywaauuu: wwukgaquuyoissgy: return $ksaameoqigiaoigg; } public function usgiygmmoewsoqic($ywmkwiwkosakssii = []) : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(4); if (!$ksaameoqigiaoigg) { goto usymasgsyqgsuocg; } if (!($wyoiwuqokyeeuguk = self::eiwcuqigayigimak(self::eqqscegsgukyuwky, []))) { goto eucqomyqykgoiuge; } foreach ($wyoiwuqokyeeuguk as $momcykaoccoymeig => $post) { $yyimiwcuegayoskq = ManipulatePost::auosyisuakguyimw($post, $ywmkwiwkosakssii); $cmwygeyygwqaemaq = ManipulateHTML::iaaacsuskiakkwui(__("\123\165\x63\143\x65\163\163\40\163\164\157\x72\171\x20\x6f\146", PR__CVR__PMPR)); $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\45\163\x20\x75\x73\x69\156\147", PR__CVR__PMPR), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($yyimiwcuegayoskq, self::NAME)))); $eoycqimaqkcquymo = ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco(ManipulateArray::get($yyimiwcuegayoskq, "\x6f\162\144\x65\x72\145\x64\x5f\160\162\157\144\165\143\164"))); if ($mcgkyouewgkokmmm = ManipulateArray::get($yyimiwcuegayoskq, "\142\165\163\x69\x6e\x65\x73\163\x5f\x6e\141\x6d\x65")) { goto yqagomygmeoecwey; } $cmwygeyygwqaemaq .= $eoycqimaqkcquymo; goto qikaewekoecykeou; yqagomygmeoecwey: $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\45\x73\x20\x69\156", PR__CVR__PMPR), $eoycqimaqkcquymo)); $cmwygeyygwqaemaq .= ManipulateHTML::ciuuiyckmsygceis($mcgkyouewgkokmmm, ["\143\x6c\141\x73\x73" => "\155\x62\55\x33"]); qikaewekoecykeou: $yyimiwcuegayoskq[self::TEXT] = $cmwygeyygwqaemaq; $wyoiwuqokyeeuguk[$momcykaoccoymeig] = $yyimiwcuegayoskq; qsgqwyqaqiowkmco: } gsygwgsiawgmqiyi: $ksaameoqigiaoigg["\x70\157\x73\164\163"] = $wyoiwuqokyeeuguk; $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::goemqugwaiiaukec, __("\x56\x69\145\x77\40\123\x74\x6f\x72\171", PR__CVR__PMPR)); eucqomyqykgoiuge: usymasgsyqgsuocg: return $ksaameoqigiaoigg; } public function cykwscocqwykiocm() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(5); if (!$ksaameoqigiaoigg) { goto zayqqeqgcwkekwws; } $umwqusowiqmyseom = self::eiwcuqigayigimak(self::eimskssquwymsqyu, self::kumuoysauoagaiiy); $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas(self::mswoacegomcucaik, [self::gqiasegggowomgie => $umwqusowiqmyseom, self::goqgcigmiawyauai => 7]); if (!$wyoiwuqokyeeuguk) { goto oqousikwiiqagoyw; } $ksaameoqigiaoigg["\x70\x6f\163\164\x73"] = $wyoiwuqokyeeuguk; if (!($gaciecykoqycioyu = self::eiwcuqigayigimak(self::kmwomuiqseaeigcy, []))) { goto aiccyaswigkaycqk; } $ksaameoqigiaoigg["\163\164\x61\x74\x73"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\164\141\x64\x61\x74\141\137\x73\164\x61\x74\x5f\x67\x65\x74\x5f\x68\164\155\154"), '', [self::ackcaikowcokggsc => $gaciecykoqycioyu, self::uouymeyqasaeckso => self::mswoacegomcucaik]); aiccyaswigkaycqk: if (!($aiamqeawckcsuaou = self::eiwcuqigayigimak(self::yayugsaemuciyscs))) { goto sqyokemumceysegy; } $meqocwsecsywiiqs = self::eiwcuqigayigimak(self::oiigmckuoekemays); $ksaameoqigiaoigg[self::uqgcmmosieyimiku] = [self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::qescuiwgsyuikume => $meqocwsecsywiiqs ?: ManipulatePost::qcgakseyaikigqco()]; sqyokemumceysegy: oqousikwiiqagoyw: zayqqeqgcwkekwws: return $ksaameoqigiaoigg; } public function isyicyuwucckmckg() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(6); if (!$ksaameoqigiaoigg) { goto aueaceeyommgkicu; } $ksaameoqigiaoigg["\x69\156\x66\157\162\x6d\141\x74\x69\x6f\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\143\157\x6e\164\141\143\164\137\151\156\146\157\x72\x6d\x61\x74\x69\157\156"), [], [self::aisguagukaewucii => self::ckmqoekmugkggeym]); aueaceeyommgkicu: return $ksaameoqigiaoigg; } }
