<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe241872d2             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Navigation; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Menu extends Common { const LOCATION_AFFILIATE = "\x61\x66\146\151\x6c\151\141\164\x65"; const LOCATION_ACCOUNT = "\141\143\x63\157\x75\x6e\x74"; const LOCATION_MAIN = "\x6d\141\x69\x6e"; const LOCATION_USER = "\165\x73\145\x72"; const ICON_FILED = "\145\x64\151\164\x2d\x6d\x65\156\165\55\x69\x74\145\155\x2d\x69\x63\x6f\156"; const ICON_FILED_META = "\x5f\155\x65\156\x75\x5f\x69\x74\x65\155\x5f\x69\x63\x6f\x6e"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x79\161\151\161\171\155\x73\x6f\x69\167\x75\143\143\153\x77\x69"])->qcsmikeggeemccuu("\167\160\137\x6e\141\x76\137\x6d\145\156\x75\137\x61\x72\x67\x73", [$this, "\167\x69\x6b\155\155\143\x67\x79\x6b\x73\x6b\171\x65\145\x79\x79"])->qcsmikeggeemccuu("\163\141\166\145\137\160\x6f\x73\x74", [$this, "\x67\161\x63\x67\x61\145\x73\x6b\161\157\x69\x77\x65\x6b\165\161"], 10, 2)->qcsmikeggeemccuu("\x77\160\x5f\x6e\141\166\137\155\x65\x6e\x75\137\x69\x74\x65\155\137\143\x75\163\164\x6f\155\x5f\x66\x69\145\154\x64\163", [$this, "\145\x79\167\153\x6d\x73\x69\143\145\157\141\147\141\x61\153\153"], 10, 5); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { MenuItem::symcgieuakksimmu(); } public function eywkmsiceoagaakk($item_id, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aokagokqyuysuksm) { $wkaqekwwgqsqwcoi = ManipulatePost::igawqaomowicuayw(self::ICON_FILED_META, $item_id, true); MetaBox::scgissgkcwaumgky(self::ICON_FILED . "\133{$item_id}\135")->qcgocuceocquqcuw("\151\x64", self::ICON_FILED . "\x2d{$item_id}")->iygyugseyaqwywyg($wkaqekwwgqsqwcoi)->yoimakcqmoqokkcu()->render(true); } public function gqcgaeskqoiwekuq($aokagokqyuysuksm, $post) { goto gmckgcsamacayoiy; gmckgcsamacayoiy: if (!(ManipulatePost::gueasuouwqysmomu($post) === "\x6e\141\166\137\155\x65\x6e\165\137\151\164\145\x6d")) { goto uoieeoimcawgsacs; } goto kysaoseimkmckcoc; iscaisuqmaikumko: uoieeoimcawgsacs: goto yuciwasueswewmqw; csimcqggmigoacwk: if (!$wkaqekwwgqsqwcoi) { goto wmiysuwsmawyogmu; } goto suykumskkmicioig; suykumskkmicioig: ManipulatePost::ksmqawcowkmegigw(self::ICON_FILED_META, stripslashes($wkaqekwwgqsqwcoi), $aokagokqyuysuksm); goto sqkuwuwiceguscku; kysaoseimkmckcoc: $wkaqekwwgqsqwcoi = ManipulateArray::get(ManipulateServer::ayueggmoqeeukqmq(self::ICON_FILED), $aokagokqyuysuksm, ''); goto csimcqggmigoacwk; sqkuwuwiceguscku: wmiysuwsmawyogmu: goto iscaisuqmaikumko; yuciwasueswewmqw: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { goto oksouuguouqowuyq; okygssymuimommeg: $ycmguuqqaiisymgg = [ "\145\143\150\157" => true, "\x6d\145\156\165" => '', "\144\145\x70\164\150" => 0, "\141\x66\x74\145\162" => '', "\x77\141\154\153\145\162" => new Walker(), "\142\x65\x66\157\162\145" => '', "\x6d\145\x6e\x75\x5f\151\144" => '', "\154\151\x5f\143\x6c\x61\x73\x73" => '', "\143\x6f\x6e\164\141\151\156\145\162" => '', "\151\164\145\x6d\163\137\167\x72\141\x70" => '', "\x6d\x65\156\x75\x5f\143\154\141\163\x73" => '', "\x6c\151\x6e\153\137\x61\x66\164\145\x72" => '', "\x6c\151\156\x6b\137\x62\145\146\x6f\162\x65" => '', "\x66\141\x6c\x6c\x62\x61\x63\x6b\137\143\x62" => false, "\151\164\x65\x6d\137\163\x70\141\x63\x69\156\147" => "\x64\x69\163\x63\x61\162\144", "\x63\x6f\x6e\x74\141\151\156\145\x72\x5f\x69\x64" => '', "\x74\x68\145\155\145\x5f\154\157\143\141\164\x69\157\156" => $igscmsiuisqaqwkk, "\x63\157\156\x74\x61\x69\x6e\145\162\x5f\x63\x6c\141\163\163" => '', "\x63\x6f\156\164\141\x69\x6e\x65\x72\137\x61\x72\x69\141\x5f\154\x61\x62\145\154" => '', ]; goto qiekksmyigmwmiws; qmqsgkwueccwgsqa: wasacacaowicmiyw: goto iiceuymgyemuaciy; oksouuguouqowuyq: $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\164\x68\x65\155\x65\x5f\154\x6f\143\141\164\151\157\x6e"); goto okygssymuimommeg; iiceuymgyemuaciy: qqyegacwyoqqqqwy: goto qsgagomkgqcmscyu; qsgagomkgqcmscyu: return ManipulateFormat::omaawkkwwyesqwcc($ugugagoguiycqeys, $ycmguuqqaiisymgg); goto eaisogogsygugsqi; qiekksmyigmwmiws: switch ($igscmsiuisqaqwkk) { case "\x61\155\x70": $ugugagoguiycqeys = ["\x61\146\x74\145\x72" => "\74\57\x64\x69\166\76", "\142\x65\x66\157\x72\145" => "\74\x64\151\166\40\x63\x6c\141\163\x73\75\x22\x74\145\170\164\55\143\145\156\x74\145\x72\x22\76", "\x6c\151\137\143\154\141\x73\x73" => "\x70\x79\x2d\63", "\143\x6f\156\164\x61\x69\x6e\x65\162" => "\156\x61\166", "\151\164\x65\155\163\137\167\162\141\x70" => ManipulateHTML::uuccukgasskgimsq("\x75\x6c", ["\143\x6c\141\x73\163" => "\x6c\x69\163\x74\55\x67\162\x6f\165\160\x20\154\151\x73\164\55\x67\x72\x6f\165\x70\55\146\x6c\165\x73\150\x20\160\142\55\x34"], "\45\x33\44\x73"), "\143\x6f\x6e\164\141\151\x6e\x65\162\x5f\143\154\x61\163\x73" => "\x6e\x61\x76\151\147\141\164\x69\x6f\x6e"]; goto qqyegacwyoqqqqwy; case "\x73\145\x63\157\156\x64\x61\x72\x79": $ugugagoguiycqeys = ["\x69\x74\x65\x6d\163\x5f\167\x72\141\x70" => ManipulateHTML::uuccukgasskgimsq("\x75\x6c", ["\143\154\141\163\x73" => "\156\141\x76\x62\141\x72\55\x6e\141\166\40\x6d\154\x2d\141\165\x74\157\x20\x64\x2d\146\154\x65\x78\40\x66\154\x65\170\x2d\x72\157\x77\x20\152\x75\163\x74\x69\146\x79\55\x63\x6f\x6e\x74\x65\156\x74\x2d\x61\162\x6f\x75\x6e\x64\x20\152\x75\163\164\x69\x66\x79\x2d\x63\x6f\x6e\x74\145\x6e\x74\55\x6d\144\x2d\x73\x74\x61\162\164"], "\x25\x33\44\x73")]; goto qqyegacwyoqqqqwy; default: $ugugagoguiycqeys = ["\151\164\145\155\x73\137\167\x72\x61\160" => ManipulateHTML::uuccukgasskgimsq("\165\154", ["\x63\x6c\x61\x73\x73" => "\156\x61\x76\x62\x61\162\x2d\156\x61\x76\40\155\162\x2d\141\165\x74\157\40\x70\x74\x2d\x33\40\x70\164\55\163\x6d\55\x30\40\x70\154\55\62\40\160\154\x2d\163\x6d\55\x30"], "\45\63\x24\163")]; } goto qmqsgkwueccwgsqa; eaisogogsygugsqi: } public function yqiqymsoiwucckwi() { goto usiqksiiiqgokuaq; omaswaiucwamaywi: register_nav_menu("\160\x72\x69\x6d\x61\x72\171", __("\x50\x72\151\x6d\x61\162\171\x20\x4d\145\156\x75", PR__THM__PMPR)); goto ieewmicwgqaigeqi; ieewmicwgqaigeqi: register_nav_menu("\x73\145\143\x6f\156\x64\141\x72\171", __("\x53\145\143\x6f\156\x64\141\x72\171\x20\x4d\x65\156\165", PR__THM__PMPR)); goto ouokmaemueykkiqq; usiqksiiiqgokuaq: register_nav_menu("\141\x6d\160", __("\101\x6d\x70\x20\x4d\145\156\x75", PR__THM__PMPR)); goto omaswaiucwamaywi; ouokmaemueykkiqq: } public function get($igscmsiuisqaqwkk, $qiouiwasaauyaaue, $soaeqaammeewyuyi) { goto iioauiogmamumiym; swqkyoemiswegyci: $ywmkwiwkosakssii = array_merge($ycmguuqqaiisymgg, $qiouiwasaauyaaue); goto yuqiqaquoygggoqc; gscckcagyggagway: goto iwkyewqeogaamiou; goto ysicqksgomomkoek; cgkaoiyoqwmkaqck: if ($soaeqaammeewyuyi) { goto mgiykamgwsemmiio; } goto suokacgwamyumagy; ysicqksgomomkoek: mgiykamgwsemmiio: goto ocgsiomyyckcausy; uwswkegomekswkus: $ewuukoycimkekouc = wp_nav_menu($ywmkwiwkosakssii); goto pmaiksascsegweci; okeecmwsuoikguuo: uaaiuqickwysiqiy: goto iwycgkausoseqmwu; suokacgwamyumagy: $ycmguuqqaiisymgg = [ "\155\x65\156\165" => '', "\155\x65\x6e\x75\137\x63\154\141\x73\163" => '', "\x6d\x65\156\165\x5f\151\144" => '', "\143\157\x6e\x74\141\151\156\x65\162" => '', "\x63\x6f\x6e\164\x61\x69\x6e\145\162\137\x63\x6c\x61\x73\x73" => '', "\143\157\156\x74\x61\x69\x6e\x65\x72\137\151\x64" => '', "\x66\141\154\154\x62\x61\143\x6b\x5f\143\x62" => '', "\x62\145\146\x6f\x72\x65" => '', "\141\146\164\x65\162" => '', "\154\151\x6e\153\137\x62\145\x66\x6f\x72\x65" => '', "\x6c\151\x6e\153\137\141\x66\x74\x65\162" => '', "\145\143\150\157" => true, "\144\145\x70\x74\x68" => 0, "\x77\x61\154\153\x65\162" => new Walker(), "\x74\150\145\155\145\x5f\x6c\157\x63\x61\x74\x69\157\x6e" => $igscmsiuisqaqwkk, "\151\164\145\155\163\137\167\x72\x61\x70" => "\x3c\165\154\40\143\x6c\x61\163\163\x3d\x22\156\141\x76\142\x61\162\x2d\156\x61\166\40\155\x72\55\141\165\x74\157\x22\x3e\x25\x33\44\x73\74\57\165\154\76", "\x69\164\145\x6d\x5f\x73\x70\x61\x63\151\x6e\x67" => "\144\x69\163\143\141\162\x64", "\154\151\137\143\x6c\141\163\163" => '', ]; goto gscckcagyggagway; ocgsiomyyckcausy: $ycmguuqqaiisymgg = [ "\155\145\156\165" => '', "\x6d\x65\156\x75\x5f\x63\x6c\x61\163\163" => '', "\x6d\x65\156\x75\x5f\x69\144" => '', "\143\157\x6e\x74\141\x69\156\x65\x72" => "\x6e\x61\166", "\x63\157\x6e\x74\x61\151\x6e\x65\x72\x5f\x63\x6c\141\163\x73" => "\156\x61\166\x69\x67\x61\164\151\157\156", "\143\157\156\164\x61\151\x6e\x65\x72\137\151\x64" => '', "\146\141\x6c\154\142\141\143\x6b\x5f\143\142" => '', "\x62\145\x66\157\x72\x65" => "\74\x64\x69\x76\x20\143\154\x61\163\x73\75\42\x74\145\170\164\55\143\x65\x6e\164\145\x72\42\x3e", "\x61\146\164\x65\162" => "\x3c\57\144\x69\166\76", "\x6c\151\156\153\x5f\x62\145\146\x6f\x72\x65" => '', "\154\151\x6e\153\137\141\146\164\145\162" => '', "\x65\143\150\x6f" => true, "\x64\145\x70\164\150" => 0, "\167\x61\154\153\145\162" => new Walker(), "\164\150\145\x6d\145\137\x6c\x6f\x63\x61\x74\151\157\x6e" => $igscmsiuisqaqwkk, "\x69\164\145\x6d\x73\x5f\x77\162\141\x70" => "\74\x75\x6c\x20\143\x6c\141\163\163\75\42\154\x69\x73\x74\55\x67\162\x6f\165\x70\x20\154\151\163\x74\55\147\162\x6f\165\160\55\146\x6c\165\x73\150\40\x70\142\55\64\42\x3e\x25\63\44\x73\74\x2f\x75\154\76", "\151\164\145\x6d\x5f\x73\x70\141\143\x69\x6e\x67" => "\x64\x69\x73\x63\x61\162\144", "\154\x69\x5f\143\154\141\x73\163" => "\160\x79\x2d\63", ]; goto ccegsywqocccgegu; yuqiqaquoygggoqc: if (!has_nav_menu($igscmsiuisqaqwkk)) { goto yqqwweuisgoskcwa; } goto uwswkegomekswkus; pmaiksascsegweci: yqqwweuisgoskcwa: goto okeecmwsuoikguuo; iwycgkausoseqmwu: return $ewuukoycimkekouc; goto aeoiiewygoiwuiii; ccegsywqocccgegu: iwkyewqeogaamiou: goto swqkyoemiswegyci; gmwcqkgsaesmsuea: if (!has_nav_menu($igscmsiuisqaqwkk)) { goto uaaiuqickwysiqiy; } goto cgkaoiyoqwmkaqck; iioauiogmamumiym: $ewuukoycimkekouc = ''; goto gmwcqkgsaesmsuea; aeoiiewygoiwuiii: } public function render($igscmsiuisqaqwkk, $qiouiwasaauyaaue = [], $soaeqaammeewyuyi = false) { $igscmsiuisqaqwkk = !empty($igscmsiuisqaqwkk) ? $igscmsiuisqaqwkk : self::LOCATION_MAIN; echo $this->get($igscmsiuisqaqwkk, $qiouiwasaauyaaue, $soaeqaammeewyuyi); } }
