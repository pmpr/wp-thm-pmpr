<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637506095a97             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\x69\x6e\147\154\145" => "\x6c\141\x72\147\145", "\164\150\x75\x6d\x62\156\x61\151\x6c" => "\x74\150\x75\x6d\x62\x6e\x61\x69\x6c", "\x67\141\154\154\145\x72\x79\137\164\150\165\155\x62\x6e\x61\151\154" => "\x74\150\165\x6d\x62\x6e\x61\151\x6c"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\x63\x6f\x6d\155\x65\x72\x63\x65\137\160\x6c\141\x63\x65\x68\157\154\144\145\162\x5f\151\x6d\x67", [$this, "\x73\147\145\171\x67\x69\143\163\x6b\153\141\x6b\x79\x71\x6d\x63"], 99)->cecaguuoecmccuse("\x69\x6e\x74\145\x72\155\145\144\151\x61\164\145\x5f\151\x6d\x61\147\145\x5f\x73\151\x7a\x65\x73\137\141\x64\166\x61\x6e\143\x65\x64", [$this, "\145\x61\x63\x61\x6b\x61\153\x6d\161\x67\x63\143\x73\x79\x79\167"], 99)->cecaguuoecmccuse("\x73\151\x6e\147\154\x65\137\x70\162\157\x64\165\x63\x74\137\141\162\x63\150\151\x76\x65\x5f\x74\x68\165\155\142\156\141\x69\x6c\x5f\163\x69\x7a\x65", [$this, "\155\x65\153\x77\161\x73\x79\165\161\161\x67\x75\x6f\165\141\163"], 999)->cecaguuoecmccuse("\167\x70\137\147\145\164\x5f\x61\x74\x74\141\x63\150\155\x65\156\164\137\151\x6d\x61\147\x65\x5f\x61\164\x74\x72\x69\142\x75\x74\x65\163", [$this, "\157\163\x69\x63\167\155\161\161\x6d\171\x79\x71\x6f\143\x71\155"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); gcckqucukawcasgk: } cuumeogeomowqisc: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto qmkaeeomgkwggoyo; } $ymqmyyeuycgmigyo = str_replace("\167\157\x6f\x63\157\x6d\155\145\x72\x63\x65\x5f\x67\145\x74\x5f\151\x6d\141\147\145\x5f\163\x69\x7a\145\137", '', current_filter()); qmkaeeomgkwggoyo: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto csammceowmqwaamq; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; csammceowmqwaamq: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\155\x67" => ["\x63\154\141\x73\x73" => "\151\155\x67\55\x66\154\x75\151\x64"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto eekcoeikaeaaeyii; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto ocaguquugeamqckq; } $egkyssmuqcwaciya = "\151\155\x67\55\146\154\x75\x69\144\x20\155\142\x2d\63\40\x6d\x78\x2d\141\x75\164\x6f\40\162\157\165\156\144\145\144" . ($this->yeoeauseikmskscu() ? '' : "\x20\155\x62\55\x6d\144\x2d\141\x75\x74\x6f\40\x6d\167\55\x32\60\60\x70\x78"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\x73", $egkyssmuqcwaciya); ocaguquugeamqckq: eekcoeikaeaaeyii: return $wwgucssaecqekuek; } }
