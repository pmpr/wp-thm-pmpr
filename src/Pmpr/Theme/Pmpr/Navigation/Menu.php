<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b65dd41acb             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Navigation; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Menu extends Common { const LOCATION_AFFILIATE = "\x61\x66\146\151\154\x69\141\164\145"; const LOCATION_ACCOUNT = "\141\x63\x63\157\165\156\164"; const LOCATION_MAIN = "\x6d\x61\x69\x6e"; const LOCATION_USER = "\x75\163\145\162"; const ICON_FILED = "\145\x64\151\x74\x2d\155\x65\156\x75\55\151\x74\x65\155\55\151\x63\157\156"; const ICON_FILED_META = "\x5f\x6d\145\156\x75\137\x69\164\x65\155\137\151\143\157\x6e"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x79\161\151\x71\171\155\x73\x6f\151\167\x75\143\x63\153\x77\x69"])->qcsmikeggeemccuu("\167\x70\137\x6e\x61\166\x5f\155\145\156\x75\137\x61\162\147\x73", [$this, "\167\151\153\x6d\155\143\x67\171\153\x73\x6b\x79\x65\x65\171\171"])->qcsmikeggeemccuu("\x73\141\x76\x65\x5f\160\x6f\x73\164", [$this, "\147\x71\143\147\x61\145\163\153\161\x6f\151\x77\145\153\165\161"], 10, 2)->qcsmikeggeemccuu("\167\160\137\x6e\141\x76\x5f\x6d\x65\x6e\165\x5f\x69\164\145\x6d\137\x63\x75\163\164\x6f\155\137\146\x69\x65\154\x64\163", [$this, "\x65\171\x77\153\155\x73\151\143\145\157\x61\147\x61\x61\x6b\x6b"], 10, 5); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { MenuItem::symcgieuakksimmu(); } public function eywkmsiceoagaakk($item_id, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aokagokqyuysuksm) { $wkaqekwwgqsqwcoi = ManipulatePost::igawqaomowicuayw(self::ICON_FILED_META, $item_id, true); MetaBox::scgissgkcwaumgky(self::ICON_FILED . "\133{$item_id}\x5d")->qcgocuceocquqcuw("\x69\x64", self::ICON_FILED . "\x2d{$item_id}")->iygyugseyaqwywyg($wkaqekwwgqsqwcoi)->yoimakcqmoqokkcu()->render(true); } public function gqcgaeskqoiwekuq($aokagokqyuysuksm, $post) { goto iwsuawwqomaowuii; qgeugwymkkiacwoc: qoqskyuuwueqkquk: goto emmsycooskoqmgeg; wcugqegqsuuuwqao: $wkaqekwwgqsqwcoi = ManipulateArray::get(ManipulateServer::ayueggmoqeeukqmq(self::ICON_FILED), $aokagokqyuysuksm, ''); goto asiqwuoswmigcaki; ciykoyeioqgyaeqo: ManipulatePost::ksmqawcowkmegigw(self::ICON_FILED_META, stripslashes($wkaqekwwgqsqwcoi), $aokagokqyuysuksm); goto mqicocmqegwukkwg; iwsuawwqomaowuii: if (!(ManipulatePost::gueasuouwqysmomu($post) === "\156\x61\x76\x5f\155\145\156\165\137\151\x74\x65\x6d")) { goto qoqskyuuwueqkquk; } goto wcugqegqsuuuwqao; asiqwuoswmigcaki: if (!$wkaqekwwgqsqwcoi) { goto wagqgeqymeqoeuyi; } goto ciykoyeioqgyaeqo; mqicocmqegwukkwg: wagqgeqymeqoeuyi: goto qgeugwymkkiacwoc; emmsycooskoqmgeg: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { goto acsqgiuageaasiyy; guykyqecgswcsmws: ouamogymawucwswu: goto kkumywowcoycymeo; samwkqgwouggsguc: switch ($igscmsiuisqaqwkk) { case "\141\155\160": $ugugagoguiycqeys = ["\x61\x66\x74\145\162" => "\74\57\144\x69\166\x3e", "\x62\x65\x66\x6f\162\145" => "\74\144\x69\166\x20\x63\x6c\141\x73\163\x3d\42\164\x65\170\x74\x2d\x63\x65\x6e\164\145\x72\x22\76", "\154\151\137\x63\x6c\141\163\163" => "\x70\x79\x2d\63", "\x63\157\x6e\164\141\151\156\x65\x72" => "\156\x61\x76", "\x69\x74\145\155\x73\x5f\x77\x72\141\160" => ManipulateHTML::uuccukgasskgimsq("\x75\154", ["\x63\154\141\x73\163" => "\154\151\163\x74\55\147\162\157\165\160\40\x6c\x69\x73\164\55\147\x72\157\x75\160\55\x66\154\x75\163\150\x20\160\x62\55\x34"], "\x25\63\x24\163"), "\143\157\156\164\x61\151\156\145\x72\137\x63\x6c\x61\163\163" => "\x6e\141\166\151\x67\x61\164\x69\157\x6e"]; goto ouamogymawucwswu; case "\163\x65\x63\x6f\156\144\x61\x72\171": $ugugagoguiycqeys = ["\151\164\x65\155\163\137\x77\162\141\160" => ManipulateHTML::uuccukgasskgimsq("\165\154", ["\x63\154\x61\163\163" => "\x6e\x61\166\x62\x61\162\x2d\156\141\x76\x20\x6d\154\55\141\x75\x74\157\40\144\x2d\146\154\x65\170\40\146\x6c\145\170\55\162\157\167\40\152\165\163\x74\x69\x66\x79\x2d\x63\157\x6e\164\145\x6e\164\x2d\x61\162\x6f\x75\156\144\x20\152\165\163\164\x69\x66\171\x2d\143\x6f\156\164\145\x6e\x74\55\x6d\144\55\163\x74\x61\162\x74"], "\45\x33\x24\x73")]; goto ouamogymawucwswu; default: $ugugagoguiycqeys = ["\x69\164\145\155\163\x5f\x77\x72\x61\160" => ManipulateHTML::uuccukgasskgimsq("\165\x6c", ["\143\x6c\141\x73\163" => "\156\141\166\142\141\x72\55\x6e\141\166\x20\155\162\x2d\141\x75\164\157"], "\45\x33\44\x73")]; } goto wyuemgggaqogsmsq; oomguqikqokqwgku: $ycmguuqqaiisymgg = [ "\x65\x63\150\157" => true, "\x6d\x65\156\x75" => '', "\x64\145\160\x74\x68" => 0, "\141\x66\164\x65\x72" => '', "\167\141\154\x6b\x65\x72" => new Walker(), "\142\145\x66\x6f\x72\x65" => '', "\x6d\x65\x6e\x75\137\151\144" => '', "\154\x69\137\143\x6c\x61\x73\x73" => '', "\x63\x6f\156\164\x61\151\x6e\145\x72" => '', "\151\x74\145\x6d\163\x5f\x77\x72\x61\160" => '', "\155\x65\x6e\x75\x5f\x63\154\141\163\163" => '', "\x6c\151\156\x6b\137\x61\x66\x74\x65\162" => '', "\x6c\151\156\153\137\x62\x65\146\157\x72\145" => '', "\x66\x61\x6c\154\x62\x61\x63\x6b\137\143\x62" => false, "\x69\164\145\x6d\137\163\160\141\x63\x69\x6e\147" => "\x64\x69\163\x63\141\x72\x64", "\x63\157\x6e\x74\141\151\x6e\x65\x72\x5f\151\x64" => '', "\164\150\145\x6d\145\137\x6c\157\143\x61\x74\151\157\156" => $igscmsiuisqaqwkk, "\143\x6f\x6e\164\x61\151\156\x65\162\x5f\x63\x6c\x61\163\x73" => '', "\x63\x6f\x6e\164\x61\151\x6e\145\x72\137\141\162\151\x61\137\x6c\141\x62\x65\154" => '', ]; goto samwkqgwouggsguc; acsqgiuageaasiyy: $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\x74\x68\145\155\145\x5f\154\x6f\143\141\164\151\157\156"); goto oomguqikqokqwgku; kkumywowcoycymeo: return ManipulateFormat::omaawkkwwyesqwcc($ugugagoguiycqeys, $ycmguuqqaiisymgg); goto miweggwqeiaeweia; wyuemgggaqogsmsq: mugqyyeayeyggqqk: goto guykyqecgswcsmws; miweggwqeiaeweia: } public function yqiqymsoiwucckwi() { goto kqqiegkuqagcqsya; ousiuuwgwkiyikyq: register_nav_menu("\x70\x72\151\x6d\x61\x72\171", __("\120\x72\x69\x6d\141\162\171\40\115\x65\156\165", PR__THM__PMPR)); goto ogsaaqsaogcqiouy; kqqiegkuqagcqsya: register_nav_menu("\141\x6d\160", __("\101\155\160\40\115\x65\x6e\x75", PR__THM__PMPR)); goto ousiuuwgwkiyikyq; ogsaaqsaogcqiouy: register_nav_menu("\163\145\x63\x6f\x6e\144\141\x72\171", __("\123\x65\143\157\156\x64\x61\162\171\40\115\x65\x6e\165", PR__THM__PMPR)); goto iwekmyyccgiyuecc; iwekmyyccgiyuecc: } public function get($igscmsiuisqaqwkk, $qiouiwasaauyaaue, $soaeqaammeewyuyi) { goto ogqmesokykywseys; kosaqwikueyksqmw: $ycmguuqqaiisymgg = [ "\155\x65\156\x75" => '', "\155\x65\156\165\x5f\x63\x6c\x61\x73\x73" => '', "\155\x65\x6e\x75\137\x69\x64" => '', "\143\157\156\164\141\151\x6e\145\162" => '', "\x63\157\x6e\x74\x61\x69\156\145\x72\x5f\x63\x6c\141\163\163" => '', "\143\x6f\x6e\164\141\x69\156\x65\162\x5f\151\144" => '', "\x66\141\x6c\154\142\141\143\153\x5f\143\x62" => '', "\142\145\x66\157\x72\x65" => '', "\x61\x66\164\145\x72" => '', "\x6c\x69\x6e\153\x5f\x62\145\146\x6f\x72\145" => '', "\154\x69\x6e\153\x5f\x61\x66\x74\x65\x72" => '', "\x65\143\x68\x6f" => true, "\x64\145\x70\164\150" => 0, "\x77\141\x6c\x6b\x65\162" => new Walker(), "\164\150\x65\x6d\x65\137\x6c\x6f\143\x61\x74\151\157\156" => $igscmsiuisqaqwkk, "\151\164\x65\155\163\137\x77\x72\x61\x70" => "\x3c\x75\x6c\40\x63\x6c\141\x73\163\x3d\x22\156\x61\166\142\x61\x72\x2d\156\141\166\x20\155\162\x2d\141\x75\x74\157\x22\76\x25\x33\44\163\x3c\x2f\x75\154\x3e", "\x69\164\145\x6d\137\x73\160\x61\x63\x69\156\147" => "\144\x69\163\x63\x61\162\x64", "\154\x69\x5f\143\154\141\x73\x73" => '', ]; goto gicyayswqyuoekcq; iikiiioqiyegyaak: ikqqskkqqwmwssoo: goto uiosisocuwokwkie; cogywoqcqummsyus: return $ewuukoycimkekouc; goto gmwykkouysyaqwqm; ogqmesokykywseys: $ewuukoycimkekouc = ''; goto ykomgumacooyomsk; ocaguquugeamqckq: cwwmimggaaecmucw: goto eekcoeikaeaaeyii; uiosisocuwokwkie: $ycmguuqqaiisymgg = [ "\155\x65\156\165" => '', "\x6d\145\156\x75\137\x63\154\141\163\163" => '', "\155\145\156\x75\137\x69\144" => '', "\x63\157\156\x74\x61\151\x6e\145\x72" => "\x6e\x61\166", "\x63\157\156\x74\x61\151\x6e\x65\x72\x5f\143\x6c\x61\x73\163" => "\156\141\166\151\147\141\x74\x69\157\x6e", "\x63\157\x6e\x74\x61\151\x6e\145\x72\x5f\151\x64" => '', "\x66\141\154\154\142\141\x63\x6b\137\x63\x62" => '', "\x62\x65\146\x6f\x72\145" => "\x3c\144\x69\166\40\x63\x6c\141\163\x73\75\42\x74\145\x78\164\55\x63\x65\x6e\164\145\162\x22\x3e", "\x61\x66\164\145\162" => "\74\57\144\x69\166\76", "\x6c\151\156\x6b\x5f\x62\x65\146\x6f\x72\x65" => '', "\154\151\x6e\x6b\137\141\146\164\x65\162" => '', "\x65\x63\x68\157" => true, "\144\x65\x70\x74\x68" => 0, "\167\141\x6c\153\145\162" => new Walker(), "\164\x68\x65\x6d\x65\x5f\154\157\143\x61\164\x69\157\156" => $igscmsiuisqaqwkk, "\x69\164\x65\x6d\x73\x5f\x77\x72\x61\x70" => "\74\165\x6c\x20\x63\x6c\x61\x73\x73\x3d\42\x6c\x69\163\x74\55\147\x72\157\165\160\x20\154\x69\x73\164\x2d\147\162\157\165\x70\x2d\x66\x6c\165\163\x68\x20\x70\x62\x2d\x34\42\x3e\45\63\44\x73\74\x2f\165\x6c\x3e", "\151\164\145\x6d\137\x73\160\141\143\151\156\147" => "\144\x69\x73\143\141\162\144", "\x6c\x69\x5f\143\154\141\x73\x73" => "\160\171\x2d\63", ]; goto cuumeogeomowqisc; eekcoeikaeaaeyii: awoaooyoeoyeeqee: goto cogywoqcqummsyus; cuumeogeomowqisc: aomysykcgikegiau: goto gcckqucukawcasgk; qmkaeeomgkwggoyo: if (!has_nav_menu($igscmsiuisqaqwkk)) { goto cwwmimggaaecmucw; } goto csammceowmqwaamq; mqkmcysgoiaouiwm: if ($soaeqaammeewyuyi) { goto ikqqskkqqwmwssoo; } goto kosaqwikueyksqmw; ykomgumacooyomsk: if (!has_nav_menu($igscmsiuisqaqwkk)) { goto awoaooyoeoyeeqee; } goto mqkmcysgoiaouiwm; gicyayswqyuoekcq: goto aomysykcgikegiau; goto iikiiioqiyegyaak; gcckqucukawcasgk: $ywmkwiwkosakssii = array_merge($ycmguuqqaiisymgg, $qiouiwasaauyaaue); goto qmkaeeomgkwggoyo; csammceowmqwaamq: $ewuukoycimkekouc = wp_nav_menu($ywmkwiwkosakssii); goto ocaguquugeamqckq; gmwykkouysyaqwqm: } public function render($igscmsiuisqaqwkk, $qiouiwasaauyaaue = [], $soaeqaammeewyuyi = false) { $igscmsiuisqaqwkk = !empty($igscmsiuisqaqwkk) ? $igscmsiuisqaqwkk : self::LOCATION_MAIN; echo $this->get($igscmsiuisqaqwkk, $qiouiwasaauyaaue, $soaeqaammeewyuyi); } }
