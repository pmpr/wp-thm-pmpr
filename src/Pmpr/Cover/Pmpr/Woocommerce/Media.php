<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04c1733d98             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ["\x73\151\x6e\x67\154\x65" => "\x6c\141\162\x67\145", "\164\x68\x75\155\142\156\141\151\x6c" => "\164\x68\165\x6d\142\x6e\141\151\x6c", "\147\x61\154\154\x65\x72\x79\x5f\164\150\165\x6d\142\156\x61\x69\x6c" => "\x74\150\x75\x6d\142\x6e\x61\151\154"]; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\x6f\x6d\155\145\162\x63\145\137\160\154\x61\x63\145\x68\157\x6c\x64\x65\162\x5f\151\155\x67", [$this, "\x73\147\x65\171\x67\x69\x63\163\x6b\153\141\153\x79\x71\155\x63"], 99)->cecaguuoecmccuse("\x69\156\x74\145\x72\155\x65\144\x69\141\x74\145\x5f\x69\155\x61\147\145\x5f\x73\151\x7a\x65\163\x5f\141\x64\166\141\156\143\145\x64", [$this, "\145\141\x63\141\153\x61\153\x6d\x71\147\x63\x63\163\171\171\167"], 99)->cecaguuoecmccuse("\x73\151\x6e\147\154\x65\137\x70\x72\x6f\x64\x75\143\x74\137\141\162\x63\x68\x69\x76\x65\x5f\164\150\x75\x6d\x62\156\141\x69\x6c\x5f\163\151\x7a\145", [$this, "\155\x65\x6b\167\161\163\x79\165\x71\161\x67\165\x6f\x75\141\163"], 999)->cecaguuoecmccuse("\x77\160\x5f\x67\x65\x74\137\x61\164\164\141\143\x68\155\145\x6e\164\x5f\x69\155\141\147\x65\137\x61\x74\x74\162\151\x62\x75\x74\x65\163", [$this, "\157\163\151\143\x77\155\161\x71\155\171\x79\161\x6f\x63\x71\155"], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); ManipulateArray::unset($wyicceigkekkkwgs, $oiegiwogmwmawkeo); eeauyscekuckoues: } mwsmsguqqkcwiiuk: return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto eogwckcymuugikuy; } $ymqmyyeuycgmigyo = str_replace("\x77\x6f\157\143\157\x6d\155\145\162\143\145\137\147\145\x74\137\x69\x6d\x61\147\x65\x5f\x73\x69\172\145\137", '', current_filter()); eogwckcymuugikuy: $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = ManipulateArray::get($wyicceigkekkkwgs, ManipulateArray::get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if (!$gkiuoymeukweiaaw) { goto msemumccgceyugmg; } $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; msemumccgceyugmg: return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return self::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return DOMCrawler::igmaewykumgwoaoy($sqecysgouskukcis, ["\151\155\147" => ["\143\x6c\x61\x73\x73" => "\x69\x6d\x67\55\x66\154\x75\151\144"]]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if (!($omwmuycmeqcqokom = ManipulateAttachment::ygqycmmkoiuocoia($aiooqyausygaasqm))) { goto qoqskyuuwueqkquk; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($omwmuycmeqcqokom); if (!($product && (ManipulateWoocommerce::uiskcesaqyyewwsa() || ManipulateWoocommerce::oseiymowmquqkaca()))) { goto wagqgeqymeqoeuyi; } $egkyssmuqcwaciya = "\151\155\x67\55\x66\154\165\151\144\40\x6d\x62\x2d\x33\x20\x6d\x78\x2d\141\165\x74\157\x20\x72\x6f\165\x6e\144\x65\x64" . ($this->yeoeauseikmskscu() ? '' : "\40\x6d\x62\55\155\x64\x2d\x61\x75\x74\157\x20\155\x77\x2d\62\x30\x30\x70\170"); $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\163", $egkyssmuqcwaciya); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $wwgucssaecqekuek; } }
