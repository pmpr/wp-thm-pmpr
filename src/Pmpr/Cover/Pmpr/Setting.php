<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634bf8b26c087             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Setting extends BaseClass implements CommonInterface { const aycugmweyouqeiea = "\141\147\x72\x65\x65\x6d\x65\156\164"; const mgwmuqmguauukqeq = "\x6a\x6f\142\x5f\164\151\164\x6c\145"; const guaaeawmegqeouuy = "\164\145\141\x6d\x5f\143\157\x75\156\x74"; const oeouaqyskusqoasi = "\141\143\164\151\x6f\156\137\164\145\170\164"; const miykmmqkcuaakoom = "\x74\145\x61\155\137\x65\170\x70\145\x72\151\145\x6e\x63\145"; const eigsugyqaecywyeq = "\163\x65\x63\x74\151\x6f\156\137"; const wmuocueiuqacmqsc = self::eigsugyqaecywyeq . "\61\137"; const qoauigwkukeecage = self::eigsugyqaecywyeq . "\62\x5f"; const wwkkwcgwceoueauo = self::eigsugyqaecywyeq . "\x33\x5f"; const emgcmwcicoekgsik = self::eigsugyqaecywyeq . "\64\x5f"; const quswgwuygqegmiqu = self::eigsugyqaecywyeq . "\65\137"; const iuuyqwoiyoeyiiga = self::eigsugyqaecywyeq . "\66\137"; const gcgaogswqsukoeig = self::wmuocueiuqacmqsc . "\x74\157\160\x5f\154\x69\163\x74"; const wqeqaueukmiwkwik = self::wmuocueiuqacmqsc . "\164\x6f\x70\x5f\x73\x6c\x69\x64\x65\162"; const sqemmgwmwwawgecq = self::wmuocueiuqacmqsc . "\x62\157\164\x74\x6f\x6d\137\x6c\151\163\164"; const qggmmsccekaeawoc = self::wqeqaueukmiwkwik . self::oeouaqyskusqoasi; const goaeygisucequeqs = self::qoauigwkukeecage . self::qescuiwgsyuikume; const gwokiiwmeucmigem = self::qoauigwkukeecage . self::eqkeooqcsscoggia; const iiokomyaiiwokwgu = self::qoauigwkukeecage . "\156\145\x77\x65\x73\x74\x5f\x70\162\157\144\x75\143\x74\163"; const mokwceeesgoiqykk = self::qoauigwkukeecage . self::oguseymmyyoyaako . self::oeouaqyskusqoasi; const ecgcgowekkgwywuk = self::wwkkwcgwceoueauo . self::iockmgiyoygcswog . "\137"; const yeoauowmckkwokys = self::wwkkwcgwceoueauo . "\164\x65\x61\155\163"; const kqaykcwsmauommaw = self::ecgcgowekkgwywuk . self::NAME; const gaayaukqcmygkmsg = self::ecgcgowekkgwywuk . self::mkousmkiawwousws; const iyysyggsoauagagu = self::ecgcgowekkgwywuk . "\142\x61\x64\147\145\163"; const cuiomisokkyumoso = self::ecgcgowekkgwywuk . "\x61\x63\164\x69\157\x6e\137\x70\157\163\164"; const cwgaumwyaysmkgwe = self::ecgcgowekkgwywuk . "\141\x63\164\x69\157\156\x5f\x74\x69\164\x6c\145"; const eqqscegsgukyuwky = self::emgcmwcicoekgsik . "\x70\157\x73\164\163"; const goemqugwaiiaukec = self::emgcmwcicoekgsik . self::oeouaqyskusqoasi; const eimskssquwymsqyu = self::quswgwuygqegmiqu . "\160\157\x73\x74\x73\137\x6f\x72\144\145\x72"; const yayugsaemuciyscs = self::quswgwuygqegmiqu . "\141\x63\x74\151\x6f\156\x5f\160\x6f\163\164"; const oiigmckuoekemays = self::quswgwuygqegmiqu . "\141\x63\x74\151\x6f\156\x5f\x74\x69\x74\154\145"; const kmwomuiqseaeigcy = self::quswgwuygqegmiqu . "\142\x6c\x6f\x67\x5f\x73\x74\141\x74\163"; const kasskqiyaswguqcg = "\x63\157\155\160\x6f\x6e\145\156\164\163\x5f"; const quugakkwosgsoqsg = self::kasskqiyaswguqcg . "\x77\157\x6f\143\x6f\155\155\145\x72\143\x65\137"; const ecomaekukeyouiay = self::quugakkwosgsoqsg . "\x63\x61\x72\164\x5f\151\x6d\x61\x67\x65"; public function __construct() { $this->name = self::akuociswqmoigkas(); $this->parentMenu = "\x74\x68\145\155\x65\163\56\160\150\160"; parent::__construct(); } public function gogaagekwoisaqgu() { $this->menuTitle = __("\123\x65\x74\164\x69\156\147", PR__CVR__PMPR); $this->pageTitle = __("\x43\157\166\145\162\40\x53\x65\164\164\151\x6e\147", PR__CVR__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\107\x65\156\145\x72\141\154", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\150\x6f\x6d\x65", __("\110\157\155\x65", PR__CVR__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\150\x6f\x6d\x65\x2d\x73\x65\x63\x74\151\x6f\x6e\x73", __("\123\145\x63\x74\151\x6f\x6e\x73", PR__CVR__PMPR))->aucimgwswmgaocae($this->mismyewsggusymya(1)->mkksewyosgeumwsa(self::iseogkiymousogom(self::gcgaogswqsukoeig, __("\124\157\x70\40\x4c\x69\163\x74", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk())->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qggmmsccekaeawoc, __("\123\154\151\x64\145\162\40\x41\143\x74\x69\x6f\x6e\x20\x54\145\x78\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\x52\x65\141\x64\40\115\x6f\162\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::wqeqaueukmiwkwik, __("\x4e\x65\167\x73\x20\x53\154\151\144\x65\162", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq())->mkksewyosgeumwsa(self::iseogkiymousogom(self::sqemmgwmwwawgecq, __("\102\x6f\164\x74\157\x6d\x20\114\x69\163\x74", PR__CVR__PMPR))->ewweaossowcqywaw($this->zosugeiykwsowuuk(true))->wygoskowywcuyaiq()->sosuookgumsgyyyc(2))->gswweykyogmsyawy(__("\124\157\x70\x20\123\x65\x63\x74\x69\x6f\156", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::wyoeksgmkucuigyg))->aucimgwswmgaocae($this->mismyewsggusymya(2)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mokwceeesgoiqykk, __("\101\x63\x74\x69\157\x6e\40\x54\x65\170\x74", PR__CVR__PMPR))->eyygsasuqmommkua(__("\x42\x75\171\x20\116\157\167\x21", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::iiokomyaiiwokwgu, __("\116\x65\167\x65\x73\x74\40\120\162\157\x64\165\x63\164\163", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\x50\x72\157\144\165\x63\x74", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\151\164\x6c\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\151\164\x6c\x65", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\104\145\163\x63\162\151\x70\x74\x69\x6f\x6e", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\105\x78\143\x65\162\x70\x74", PR__CVR__PMPR)))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\141\x63\x6b\147\162\x6f\165\x6e\x64\x20\x49\x6d\141\x67\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x46\145\141\x74\x75\162\x65\x64\40\x49\x6d\x61\147\145", PR__CVR__PMPR))))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\120\162\157\x64\165\x63\x74\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::qagokqwiiyqccoky))->aucimgwswmgaocae($this->mismyewsggusymya(3)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kqaykcwsmauommaw, __("\117\167\156\145\x72\x20\116\141\x6d\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gaayaukqcmygkmsg, __("\x4f\x77\x6e\x65\162\x20\111\155\x61\x67\145", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::iyysyggsoauagagu, __("\117\x77\156\x65\162\x20\102\141\144\x67\x65\x73", PR__CVR__PMPR), $this->iiacsiaagsusawuw())->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::cuiomisokkyumoso, __("\101\x63\x74\151\x6f\156\x20\120\x6f\163\x74", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::cwgaumwyaysmkgwe, __("\x41\143\164\x69\x6f\x6e\x20\124\x69\x74\x6c\x65", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\x69\164\x6c\x65", PR__CVR__PMPR), __("\101\143\164\x69\x6f\156\40\x50\157\163\x74", PR__CVR__PMPR))))->mkksewyosgeumwsa(self::iseogkiymousogom(self::yeoauowmckkwokys, __("\x54\145\141\x6d\x73", PR__CVR__PMPR))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x61\x62\x20\x54\151\x74\x6c\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::NAME, __("\x4d\x61\156\141\147\x65\162\x20\116\141\155\x65", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mkousmkiawwousws, __("\x4d\x61\x6e\141\147\x65\x72\x20\111\x6d\141\147\145", PR__CVR__PMPR))->euagkaqymgiigyaa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mgwmuqmguauukqeq, __("\112\x6f\142\x20\x54\151\164\154\145", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qsskmqwcucisywqy, __("\123\x75\x62\164\x65\170\x74", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::guaaeawmegqeouuy, __("\x54\145\x61\x6d\x20\x43\x6f\165\156\x74", PR__CVR__PMPR), __("\124\x68\151\x73\40\166\x61\x6c\x75\x65\x20\x61\x64\x64\x65\x64\x20\x74\157\40\162\145\x61\x6c\40\x76\x61\154\165\x65\x20\x62\141\163\x65\144\x20\157\x6e\40\x61\x63\x63\145\160\x74\145\144\x20\x61\x67\x72\145\x65\x6d\145\156\x74\x20\x72\x65\161\x75\x65\163\x74\x73", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::miykmmqkcuaakoom, __("\124\145\x61\x6d\x20\105\x78\x70\145\x72\151\145\156\143\145", PR__CVR__PMPR))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::aycugmweyouqeiea, __("\x41\x67\162\x65\x65\x6d\145\x6e\164", PR__CVR__PMPR))->wkqyoukciomqiyew()->oeewiaacscgyamai(Agreement::class))->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->gswweykyogmsyawy(__("\117\167\x6e\x65\x72\x20\x61\156\x64\40\x54\x65\141\x6d\163", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::giigokemwyckgmoc))->aucimgwswmgaocae($this->mismyewsggusymya(4)->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::goemqugwaiiaukec, __("\101\143\x74\151\x6f\156\40\x54\145\x78\164", PR__CVR__PMPR))->eyygsasuqmommkua(__("\126\x69\145\167\40\x53\x74\x6f\x72\x79", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eqqscegsgukyuwky, __("\x50\x6f\x73\164\163", PR__CVR__PMPR))->smmismmuuccmscya()->oeewiaacscgyamai("\x73\165\143\x63\x65\163\x73\55\x73\x74\157\x72\x79")->oikgogcweiiaocka())->gswweykyogmsyawy(__("\123\165\143\x63\x65\163\163\x20\123\164\157\x72\x69\145\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::kaioacisqgoaausg))->aucimgwswmgaocae($this->mismyewsggusymya(5)->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::eimskssquwymsqyu, __("\117\x72\144\x65\162\x20\142\x79", PR__CVR__PMPR), [self::kumuoysauoagaiiy => __("\116\x65\x77\145\x73\x74", PR__CVR__PMPR)]))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::kmwomuiqseaeigcy, __("\123\164\x61\164\163", PR__CVR__PMPR), $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\164\x61\144\141\x74\141\137\163\164\x61\164\137\x67\x65\164\x5f\141\x6c\x6c\x5f\x69\x74\145\155\163"), []))->oikgogcweiiaocka())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::yayugsaemuciyscs, __("\101\x63\x74\151\157\x6e\x20\x50\157\x73\164", PR__CVR__PMPR))->smmismmuuccmscya())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oiigmckuoekemays, __("\x41\x63\x74\x69\157\x6e\40\x54\151\164\154\x65", PR__CVR__PMPR)))->gswweykyogmsyawy(__("\x42\154\x6f\147\40\x50\157\163\x74\x73", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::qomsekkgsuoqooos))->aucimgwswmgaocae($this->mismyewsggusymya(6)->gswweykyogmsyawy(__("\103\157\x6e\164\141\143\x74\x20\x55\x53", PR__CVR__PMPR))->saemoowcasogykak(IconFontawesomeInterface::ioeakwcgiicgscuu))->saemoowcasogykak(IconFontawesomeInterface::gemusawikyiokako))->saemoowcasogykak(IconFontawesomeInterface::iakqeokqeigmiawo))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x63\157\x6d\x70\157\x6e\x65\156\164\x73", __("\103\x6f\x6d\160\x6f\156\145\x6e\x74\x73\x20\x26\x20\x50\154\x75\147\x69\x6e\x73", PR__CVR__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\167\x6f\x6f\x63\x6f\155\x6d\x65\162\143\x65", __("\x57\157\157\143\157\x6d\155\145\162\143\145", PR__CVR__PMPR))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::ecomaekukeyouiay, __("\x43\141\162\164\x20\111\x6d\x61\x67\x65", PR__CVR__PMPR))->eswksowyeqcsokew(self::MEDIUM))->saemoowcasogykak(IconFontawesomeInterface::kwacookqcskgsyku))->saemoowcasogykak(IconFontawesomeInterface::eoiaoegmeyqksuec)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::yeoauowmckkwokys); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } private function iiacsiaagsusawuw(array $ywmkwiwkosakssii = []) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\142\141\x64\x67\x65\x73"), [], $ywmkwiwkosakssii); } private function mismyewsggusymya(int $awcmekyiwwkeyisq) : Tab { $uusmaiomayssaecw = "\163\x65\x63\x74\151\157\x6e\x5f{$awcmekyiwwkeyisq}"; return self::sgsmqaoowiyocqaa($uusmaiomayssaecw, sprintf(__("\x53\145\143\x74\151\157\x6e\40\x25\x73", PR__CVR__PMPR), $this->msywmyaoqmaegsuy($awcmekyiwwkeyisq)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::agkkyokkmaksskoi . $uusmaiomayssaecw, __("\104\x69\x73\x61\142\154\145\40\x53\x65\x63\164\x69\x6f\156", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws($uusmaiomayssaecw . self::icmokuskwoskgace, __("\x54\x69\x74\154\145\x20\x6f\x66\40\x53\x65\x63\x74\x69\157\x6e", PR__CVR__PMPR)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg($uusmaiomayssaecw . self::oiuiymiygsoiasug, __("\104\x65\x73\143\162\x69\x70\164\151\x6f\x6e\40\157\146\40\x53\145\143\x74\x69\157\x6e", PR__CVR__PMPR))->qsecygiycssgacqs(3)); } private function qoammkgymwwcmumk(int $awcmekyiwwkeyisq) : array { $uusmaiomayssaecw = "\x73\x65\x63\164\x69\157\156\x5f{$awcmekyiwwkeyisq}"; $ksaameoqigiaoigg = []; if (self::eiwcuqigayigimak(self::agkkyokkmaksskoi . $uusmaiomayssaecw, false)) { goto usquiuuyiyqaeyiu; } $ksaameoqigiaoigg = [self::qescuiwgsyuikume => self::eiwcuqigayigimak($uusmaiomayssaecw . self::icmokuskwoskgace, ''), self::eqkeooqcsscoggia => self::eiwcuqigayigimak($uusmaiomayssaecw . self::oiuiymiygsoiasug, '')]; usquiuuyiyqaeyiu: return $ksaameoqigiaoigg; } private function zosugeiykwsowuuk(bool $qykkaqkwmecqcyai = false) : array { $ikgwqyuyckaewsow = [self::ckuwucygcwsiawms(self::mswoacegomcucaik, __("\x50\x6f\163\164", PR__CVR__PMPR))->smmismmuuccmscya()->oeeumggeiyyckkom('', [self::yoayaissyomokiui, self::ogigqueukwysusii]), self::ckuwucygcwsiawms(self::yoayaissyomokiui, __("\x54\145\162\x6d", PR__CVR__PMPR))->yyayequseyasoyks()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::ogigqueukwysusii]), self::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\114\x69\x6e\153", PR__CVR__PMPR))->xkgcwkwsqysqamic()->oeeumggeiyyckkom('', [self::mswoacegomcucaik, self::yoayaissyomokiui]), self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\151\164\x6c\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x54\x69\x74\154\x65", PR__CVR__PMPR)))]; if (!$qykkaqkwmecqcyai) { goto qicwaskssogcokgm; } $ikgwqyuyckaewsow[] = self::uouyygwcgsmygaee(self::eqkeooqcsscoggia, __("\104\145\163\x63\x72\x69\x70\164\x69\157\x6e", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\x45\170\143\145\x72\x70\164", PR__CVR__PMPR)))->qsecygiycssgacqs(3); $ikgwqyuyckaewsow[] = self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x42\x61\x63\x6b\x67\162\x6f\165\x6e\144\40\x49\155\141\147\145", PR__CVR__PMPR), $this->wmsmscymqimmamoi(__("\106\145\x61\x74\165\x72\x65\x64\x20\x49\155\x61\147\x65", PR__CVR__PMPR))); qicwaskssogcokgm: return $ikgwqyuyckaewsow; } private function wmsmscymqimmamoi($aiowsaccomcoikus, $ccamueccusigaaio = null) : string { if ($ccamueccusigaaio) { goto uguigkcmukuouway; } $ccamueccusigaaio = sprintf("\45\163\x2f\45\163", __("\x50\157\x73\164", PR__CVR__PMPR), __("\124\x65\162\155", PR__CVR__PMPR)); uguigkcmukuouway: return sprintf(__("\114\145\x61\166\145\40\145\x6d\x70\164\171\x20\151\146\40\x79\157\165\40\167\141\156\x74\40\x73\150\x6f\x77\x20\x25\163\40\45\x73\x2e", PR__CVR__PMPR), $ccamueccusigaaio, $aiowsaccomcoikus); } public function iaoqaucmqmweqmae(string $amakmumgguksgmum, bool $qykkaqkwmecqcyai = false) : array { $ksaameoqigiaoigg = []; $wgiowequysowwsky = self::eiwcuqigayigimak($amakmumgguksgmum); if (!($wgiowequysowwsky && is_array($wgiowequysowwsky))) { goto ooeausyowguqicuo; } foreach ($wgiowequysowwsky as $igqsaukqcqscimok) { $qsqwqsymmqeoqwcu = []; $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws . self::mswocgcucqoaesaa); $ukwokcuqauuosmoo = ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia); if (isset($igqsaukqcqscimok[self::mswoacegomcucaik])) { goto giaacoqqqsekcayy; } if (isset($igqsaukqcqscimok[self::yoayaissyomokiui])) { goto ewymsmkkiksgwysk; } if ($meqocwsecsywiiqs && isset($igqsaukqcqscimok[self::ogigqueukwysusii])) { goto cmegwsegsosyqcai; } goto syiqkaasoueowwui; giaacoqqqsekcayy: $post = $igqsaukqcqscimok[self::mswoacegomcucaik]; if ($meqocwsecsywiiqs) { goto gaomwagkcciesyqy; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post); gaomwagkcciesyqy: if (!$qykkaqkwmecqcyai) { goto soaccwqimeksgwiw; } if ($ukwokcuqauuosmoo) { goto aegysmeecgcgayyw; } $ukwokcuqauuosmoo = ManipulatePost::masoymaamekuykso($post); aegysmeecgcgayyw: if ($mcqieaigyeeyaksm) { goto suqkuqygkkgwyaie; } $mcqieaigyeeyaksm = ManipulatePost::wsiiswmaagmyiaiw($post); suqkuqygkkgwyaie: soaccwqimeksgwiw: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulatePost::ycqquoiyyuesegsy($post); goto syiqkaasoueowwui; ewymsmkkiksgwysk: $iwewcwusemqaiggk = $igqsaukqcqscimok[self::yoayaissyomokiui]; if ($meqocwsecsywiiqs) { goto wiysogeqqwgioyka; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); wiysogeqqwgioyka: if (!$qykkaqkwmecqcyai) { goto cgiscsqwwgqqaeqi; } if ($ukwokcuqauuosmoo) { goto skkamseieeusycye; } $ukwokcuqauuosmoo = DecoratorTerm::meqceykmywmqgoym($iwewcwusemqaiggk); skkamseieeusycye: cgiscsqwwgqqaeqi: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk); goto syiqkaasoueowwui; cmegwsegsosyqcai: $qsqwqsymmqeoqwcu[self::sauwwsocmukoaayu] = $igqsaukqcqscimok[self::ogigqueukwysusii]; syiqkaasoueowwui: if (!$qsqwqsymmqeoqwcu) { goto gkyawqqcmigqgaiq; } $qsqwqsymmqeoqwcu[self::qescuiwgsyuikume] = $meqocwsecsywiiqs; if (!$qykkaqkwmecqcyai) { goto wmywuusgukmmaams; } $qsqwqsymmqeoqwcu[self::mkousmkiawwousws] = $mcqieaigyeeyaksm; $qsqwqsymmqeoqwcu[self::eqkeooqcsscoggia] = $ukwokcuqauuosmoo; wmywuusgukmmaams: $ksaameoqigiaoigg[] = $qsqwqsymmqeoqwcu; gkyawqqcmigqgaiq: esuiysskoweawsue: } uqqaiagaeqgqgaiy: ooeausyowguqicuo: return $ksaameoqigiaoigg; } public function gyiawqogoyoymcis() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(1); if (!$ksaameoqigiaoigg) { goto egyyiccaeeiooaua; } $ksaameoqigiaoigg["\x73\x6c\x69\144\145\162"] = $this->iaoqaucmqmweqmae(self::wqeqaueukmiwkwik, true); $ksaameoqigiaoigg["\x74\x6f\x70\137\x6c\x69\163\164"] = $this->iaoqaucmqmweqmae(self::gcgaogswqsukoeig); $ksaameoqigiaoigg["\142\157\x74\164\157\155\x5f\x6c\151\163\164"] = $this->iaoqaucmqmweqmae(self::sqemmgwmwwawgecq, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::qggmmsccekaeawoc, __("\x52\x65\141\144\40\115\x6f\x72\x65", PR__CVR__PMPR)); egyyiccaeeiooaua: return $ksaameoqigiaoigg; } public function ageqswwkkqywckco() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(2); if (!$ksaameoqigiaoigg) { goto scisgsyemmsekgos; } $ksaameoqigiaoigg["\160\162\157\x64\165\143\164\163"] = $this->iaoqaucmqmweqmae(self::iiokomyaiiwokwgu, true); $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::mokwceeesgoiqykk, __("\102\165\x79\40\116\157\x77\x21", PR__CVR__PMPR)); scisgsyemmsekgos: return $ksaameoqigiaoigg; } public function agcggaoesgiameyi() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(3); if (!$ksaameoqigiaoigg) { goto mwsmsguqqkcwiiuk; } if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto owmuceyswmgueasi; } $aiamqeawckcsuaou = self::eiwcuqigayigimak(self::cuiomisokkyumoso); if (!($memkywmosqicmcqs = self::eiwcuqigayigimak(self::iyysyggsoauagagu))) { goto cewmoqyysgsmuiya; } $memkywmosqicmcqs = $this->iiacsiaagsusawuw([self::ackcaikowcokggsc => $memkywmosqicmcqs, self::aisguagukaewucii => self::ckmqoekmugkggeym]); cewmoqyysgsmuiya: $ksaameoqigiaoigg[self::iockmgiyoygcswog] = ["\x62\x61\x64\147\145\163" => $memkywmosqicmcqs, self::NAME => self::eiwcuqigayigimak(self::kqaykcwsmauommaw), self::mkousmkiawwousws => $eygsasmqycagyayw->uakscggyguwqmkoe(self::eiwcuqigayigimak(self::gaayaukqcmygkmsg)), self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::oeouaqyskusqoasi => self::eiwcuqigayigimak(self::cwgaumwyaysmkgwe, ManipulatePost::qcgakseyaikigqco($aiamqeawckcsuaou))]; if (!($iaseaecuamsukckm = self::eiwcuqigayigimak(self::yeoauowmckkwokys, []))) { goto qmuwoecuacmkwgem; } foreach ($iaseaecuamsukckm as $momcykaoccoymeig => $ksuesqoiqqiiyqsq) { if (!($mcqieaigyeeyaksm = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::mkousmkiawwousws))) { goto ugqaaewwmkocwwgy; } $ksuesqoiqqiiyqsq[self::mkousmkiawwousws] = $eygsasmqycagyayw->uakscggyguwqmkoe($mcqieaigyeeyaksm); ugqaaewwmkocwwgy: if (!($wmmioqqsqesggsei = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::miykmmqkcuaakoom))) { goto wgewmqieuamsoayy; } $ksuesqoiqqiiyqsq[self::miykmmqkcuaakoom] = sprintf(__("\45\x73\40\x79\x65\x61\x72\163\x20\157\146\x20\x74\x65\x61\x6d\x20\x65\170\160\145\162\x69\145\156\143\x65", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($wmmioqqsqesggsei), ["\143\x6c\141\163\163" => "\146\x6f\156\164\x2d\167\145\151\147\150\164\55\142\x6f\x6c\x64"])); wgewmqieuamsoayy: $bauwgewmoqokkmkm = 0; if (!($xssuewsokckmigqk = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::aycugmweyouqeiea))) { goto wkeuuycukmuqiaom; } if (!$this->omseesogaocascyo("\123\141\x6c\x61\x72\171")) { goto sggawugoykqcmsug; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($kueeocmceokoouqa && $mssuumukiiaqmcka)) { goto ueigkucgaucgeimc; } $gikyaoiioawywyeu = $xssuewsokckmigqk; $xssuewsokckmigqk = $mssuumukiiaqmcka->akkkoiiymmamsauc($xssuewsokckmigqk); $iueymcwwscwqkiyq = $mssuumukiiaqmcka->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk); $bauwgewmoqokkmkm = $kueeocmceokoouqa->asskucacysemeoiu([$kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => $gikyaoiioawywyeu]); if (!($mssuumukiiaqmcka::aqugcqsyeisayuog !== $iueymcwwscwqkiyq)) { goto kqgcyoscsusgoaqi; } $ksuesqoiqqiiyqsq[self::aycugmweyouqeiea] = ["\x69\163\137\157\160\145\156" => self::miswkosqicsksgok === $iueymcwwscwqkiyq, self::qescuiwgsyuikume => __("\104\x6f\40\x79\157\x75\40\x77\x61\156\x74\40\x74\157\40\x77\x6f\x72\x6b\x20\167\151\164\x68\x20\164\x68\x69\x73\x20\164\145\x61\x6d\x3f", PR__CVR__PMPR), self::ucoiewcoucauqwko => __("\x43\157\157\160\145\162\x61\x74\x69\157\156\40\x54\145\162\155\163", PR__CVR__PMPR), self::ckmqoekmugkggeym => $xssuewsokckmigqk, self::sauwwsocmukoaayu => ManipulateServer::oiucukewkckkwiqc("\57\163\x61\x6c\x61\162\171\x2f\141\160\x70\x6c\171\x2f{$gikyaoiioawywyeu}", self::ismwwqmwgmqqocke), "\x73\165\x62\155\x69\x74\x5f\162\145\161\165\145\163\164" => __("\123\x75\x62\x6d\x69\164\40\x52\x65\x71\x75\145\163\x74\40\146\157\162\40\103\157\157\160\x65\x72\x61\164\x69\157\156", PR__CVR__PMPR)]; kqgcyoscsusgoaqi: ueigkucgaucgeimc: sggawugoykqcmsug: wkeuuycukmuqiaom: if (!($ymmgsoswiamqoiae = ManipulateArray::unset($ksuesqoiqqiiyqsq, self::guaaeawmegqeouuy))) { goto wakmayaoqoskekqy; } $ksuesqoiqqiiyqsq[self::guaaeawmegqeouuy] = sprintf(__("\45\163\40\x6d\145\x6d\x62\x65\x72\163\40\x74\x65\x61\x6d", PR__CVR__PMPR), ManipulateHTML::gmqyuaqwgiayskei($this->msywmyaoqmaegsuy($ymmgsoswiamqoiae + $bauwgewmoqokkmkm), ["\143\154\x61\x73\x73" => "\x66\x6f\156\164\x2d\167\145\x69\147\150\x74\x2d\x62\x6f\154\x64"])); wakmayaoqoskekqy: $iaseaecuamsukckm[$momcykaoccoymeig] = $ksuesqoiqqiiyqsq; omqiayeucoioqoao: } igooksugieceoege: $ksaameoqigiaoigg["\x74\145\x61\155\x73"] = $iaseaecuamsukckm; qmuwoecuacmkwgem: owmuceyswmgueasi: mwsmsguqqkcwiiuk: return $ksaameoqigiaoigg; } public function usgiygmmoewsoqic($ywmkwiwkosakssii = []) : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(4); if (!$ksaameoqigiaoigg) { goto iwsuawwqomaowuii; } if (!($wyoiwuqokyeeuguk = self::eiwcuqigayigimak(self::eqqscegsgukyuwky, []))) { goto qoqskyuuwueqkquk; } foreach ($wyoiwuqokyeeuguk as $momcykaoccoymeig => $post) { $yyimiwcuegayoskq = ManipulatePost::auosyisuakguyimw($post, $ywmkwiwkosakssii); $cmwygeyygwqaemaq = ManipulateHTML::iaaacsuskiakkwui(__("\x53\x75\x63\143\145\x73\x73\40\163\x74\157\162\171\40\157\146", PR__CVR__PMPR)); $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\x25\x73\40\165\163\x69\156\147", PR__CVR__PMPR), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($yyimiwcuegayoskq, self::NAME)))); $eoycqimaqkcquymo = ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco(ManipulateArray::get($yyimiwcuegayoskq, "\157\162\x64\145\162\145\x64\x5f\x70\162\x6f\x64\165\143\x74"))); if ($mcgkyouewgkokmmm = ManipulateArray::get($yyimiwcuegayoskq, "\142\x75\163\151\x6e\145\163\x73\137\156\x61\x6d\145")) { goto msemumccgceyugmg; } $cmwygeyygwqaemaq .= $eoycqimaqkcquymo; goto wagqgeqymeqoeuyi; msemumccgceyugmg: $cmwygeyygwqaemaq .= ManipulateHTML::iaaacsuskiakkwui(sprintf(__("\x25\163\x20\x69\x6e", PR__CVR__PMPR), $eoycqimaqkcquymo)); $cmwygeyygwqaemaq .= ManipulateHTML::ciuuiyckmsygceis($mcgkyouewgkokmmm, ["\x63\x6c\141\163\x73" => "\x6d\142\55\63"]); wagqgeqymeqoeuyi: $yyimiwcuegayoskq[self::TEXT] = $cmwygeyygwqaemaq; $wyoiwuqokyeeuguk[$momcykaoccoymeig] = $yyimiwcuegayoskq; eogwckcymuugikuy: } eeauyscekuckoues: $ksaameoqigiaoigg["\160\157\x73\x74\163"] = $wyoiwuqokyeeuguk; $ksaameoqigiaoigg[self::oeouaqyskusqoasi] = self::eiwcuqigayigimak(self::goemqugwaiiaukec, __("\x56\x69\145\167\40\x53\x74\x6f\x72\x79", PR__CVR__PMPR)); qoqskyuuwueqkquk: iwsuawwqomaowuii: return $ksaameoqigiaoigg; } public function cykwscocqwykiocm() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(5); if (!$ksaameoqigiaoigg) { goto mqicocmqegwukkwg; } $umwqusowiqmyseom = self::eiwcuqigayigimak(self::eimskssquwymsqyu, self::kumuoysauoagaiiy); $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas(self::mswoacegomcucaik, [self::gqiasegggowomgie => $umwqusowiqmyseom, self::goqgcigmiawyauai => 7]); if (!$wyoiwuqokyeeuguk) { goto ciykoyeioqgyaeqo; } $ksaameoqigiaoigg["\160\157\163\164\x73"] = $wyoiwuqokyeeuguk; if (!($gaciecykoqycioyu = self::eiwcuqigayigimak(self::kmwomuiqseaeigcy, []))) { goto wcugqegqsuuuwqao; } $ksaameoqigiaoigg["\x73\164\x61\x74\163"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\x64\141\x74\141\137\x73\164\x61\164\137\147\145\164\x5f\x68\x74\155\x6c"), '', [self::ackcaikowcokggsc => $gaciecykoqycioyu, self::uouymeyqasaeckso => self::mswoacegomcucaik]); wcugqegqsuuuwqao: if (!($aiamqeawckcsuaou = self::eiwcuqigayigimak(self::yayugsaemuciyscs))) { goto asiqwuoswmigcaki; } $meqocwsecsywiiqs = self::eiwcuqigayigimak(self::oiigmckuoekemays); $ksaameoqigiaoigg[self::uqgcmmosieyimiku] = [self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($aiamqeawckcsuaou), self::qescuiwgsyuikume => $meqocwsecsywiiqs ?: ManipulatePost::qcgakseyaikigqco()]; asiqwuoswmigcaki: ciykoyeioqgyaeqo: mqicocmqegwukkwg: return $ksaameoqigiaoigg; } public function isyicyuwucckmckg() : array { $ksaameoqigiaoigg = $this->qoammkgymwwcmumk(6); if (!$ksaameoqigiaoigg) { goto qgeugwymkkiacwoc; } $ksaameoqigiaoigg["\151\156\x66\x6f\x72\x6d\141\x74\151\157\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\x5f\143\157\x6e\x74\x61\143\164\x5f\151\156\146\x6f\x72\155\x61\x74\151\157\156"), [], [self::aisguagukaewucii => self::ckmqoekmugkggeym]); qgeugwymkkiacwoc: return $ksaameoqigiaoigg; } }
