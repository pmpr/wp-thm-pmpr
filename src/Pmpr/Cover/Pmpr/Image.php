<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65552ced720de             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x64\145\x6c\145\x74\145\137\141\x74\164\141\143\150\x6d\x65\x6e\x74", [$this, "\161\171\143\x6d\151\x61\151\x71\171\x73\143\171\171\155\x73\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x73\x76\147\137\x65\154\x65\x6d\x65\x6e\x74\137\143\154\141\163\x73\137\162\141\x74\x69\x6f\156\137\x63\x6f\x6e\x76\145\162\164\145\x72", [$this, "\155\x73\x73\155\165\x67\x65\x6b\x6d\x67\171\153\171\155\167\147"])->cecaguuoecmccuse("\143\155\x73\x5f\160\x6f\163\x74\137\x69\155\x61\147\x65\x5f\146\145\x61\164\165\162\x65\x5f\151\155\141\x67\x65\137\166\141\x6c\x69\144\x61\x74\151\157\156\x5f\x73\x69\172\x65\x73", [$this, "\x61\147\x6b\x67\x71\x75\155\x6b\167\x65\153\x61\165\167\x67\x65"], 10, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f\x63\x6f\x76\145\x72\x5f\151\155\141\x67\x65\x5f\x73\x69\172\x65\163", [$this, "\155\x6b\143\x71\147\147\x69\x73\165\x77\165\x75\165\145\161\155"]); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\x69\143\157\x6e\x2d\170\163" => 1, "\x69\x63\157\156\55\163\155" => 1.25, "\151\x63\x6f\156\x2d\x6d\x64" => 1.5, "\x69\x63\x6f\156\55\154\147" => 1.75, "\x69\x63\157\156\x2d\170\x6c" => 2, "\151\143\x6f\x6e\55\170\x6c\154" => 2.25, "\151\x63\157\x6e\55\63\170" => 3, "\x69\143\157\156\x2d\64\x78" => 3, "\x69\143\x6f\x6e\x2d\65\x78" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\155\x65\144\151\x75\x6d\x5f\x6c\141\162\147\x65"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\x73\x69\x7a\x65\x73"]) && is_array($ugugimquukqwogge["\x73\x69\x7a\x65\163"]))) { goto syiqkaasoueowwui; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\x62\x61\163\x65\x64\151\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\163\x69\172\145\x73"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\61\66\170\x39", "\64\170\x33", "\61\170\x31"])) { goto skkamseieeusycye; } goto wiysogeqqwgioyka; skkamseieeusycye: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto cgiscsqwwgqqaeqi; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); cgiscsqwwgqqaeqi: wiysogeqqwgioyka: } soaccwqimeksgwiw: syiqkaasoueowwui: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto cmegwsegsosyqcai; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); cmegwsegsosyqcai: } ewymsmkkiksgwysk: giaacoqqqsekcayy: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\x69\x64\164\150") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto gkyawqqcmigqgaiq; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto wmywuusgukmmaams; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); ooeausyowguqicuo: return (int) $qcgkuqesqqymcuui; } }
