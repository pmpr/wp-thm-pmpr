<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684009825136             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\163\151\x6e\147\x6c\x65" => "\154\x61\162\x67\145", "\x74\x68\165\155\142\x6e\141\x69\x6c" => "\164\x68\x75\155\x62\x6e\141\151\154", "\x67\x61\x6c\x6c\x65\162\171\137\x74\150\165\x6d\x62\x6e\141\x69\154" => "\164\150\165\155\x62\x6e\141\x69\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\157\155\155\145\162\x63\145\x5f\160\x6c\141\143\x65\x68\x6f\x6c\144\145\x72\x5f\151\x6d\147", [$this, "\x73\147\145\x79\x67\151\x63\x73\x6b\153\x61\x6b\x79\x71\155\x63"], 99)->cecaguuoecmccuse("\x69\x6e\164\x65\x72\155\x65\x64\151\x61\164\x65\x5f\x69\155\x61\x67\145\137\163\x69\172\x65\163\137\x61\144\166\x61\x6e\x63\145\144", [$this, "\x65\x61\143\141\153\x61\x6b\155\161\x67\143\143\x73\x79\x79\x77"], 99)->cecaguuoecmccuse("\163\x69\x6e\147\x6c\x65\x5f\x70\162\157\144\165\x63\164\137\x61\162\143\150\151\166\145\137\164\150\x75\155\142\156\141\151\154\137\x73\x69\172\145", [$this, "\x6d\x65\x6b\167\161\x73\x79\x75\161\x71\x67\165\157\x75\141\x73"], 999)->cecaguuoecmccuse("\167\160\x5f\x67\x65\164\137\x61\164\164\141\x63\x68\155\x65\x6e\x74\137\x69\x6d\x61\x67\x65\137\x61\x74\164\162\x69\142\x75\x74\x65\163", [$this, "\157\x73\151\143\167\x6d\161\161\155\x79\171\161\157\x63\161\x6d"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); kicwiowcogmauwiy: } kaiesowkgwogqseg: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto cwswueuqoamqasya; } $ymqmyyeuycgmigyo = str_replace("\167\x6f\157\x63\x6f\x6d\x6d\x65\x72\143\145\x5f\x67\145\164\x5f\x69\155\141\147\x65\x5f\163\151\172\145\x5f", '', current_filter()); cwswueuqoamqasya: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto kgmeiwiakwicgkkk; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; kgmeiwiakwicgkkk: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\x6d\x67" => ["\143\154\141\163\x73" => "\x69\x6d\147\x2d\146\154\x75\151\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto omykokikgocoikec; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto suuskagowwgsouqw; } $egkyssmuqcwaciya = "\x69\x6d\x67\x2d\146\x6c\x75\x69\144\x20\155\142\x2d\x33\40\155\170\55\141\x75\x74\157\x20\162\x6f\165\x6e\x64\x65\144" . ($this->yeoeauseikmskscu() ? '' : "\x20\155\142\55\155\144\55\141\x75\x74\x6f\40\155\x77\x2d\62\60\60\160\x78"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\x73", $egkyssmuqcwaciya); suuskagowwgsouqw: omykokikgocoikec: return $wwgucssaecqekuek; } }
