<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6675758             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x64\145\154\145\164\145\137\141\x74\164\x61\x63\150\x6d\x65\x6e\x74", [$this, "\x71\171\x63\x6d\151\x61\x69\161\171\x73\143\x79\171\155\163\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\163\166\147\137\145\x6c\145\x6d\145\x6e\164\x5f\x63\x6c\141\163\x73\x5f\162\141\164\151\157\x6e\x5f\143\x6f\x6e\166\145\162\164\145\162", [$this, "\155\163\x73\155\165\x67\x65\x6b\155\147\x79\153\x79\x6d\167\147"])->cecaguuoecmccuse("\x63\x6d\163\137\x70\157\x73\164\x5f\x69\x6d\x61\147\145\137\x66\145\x61\164\x75\x72\x65\137\x69\155\141\147\145\137\166\x61\x6c\x69\144\141\164\151\x6f\x6e\137\x73\151\x7a\145\163", [$this, "\x61\x67\153\147\161\x75\155\x6b\167\145\x6b\141\165\167\x67\x65"], 10, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f\143\x6f\x76\145\x72\x5f\x69\x6d\x61\x67\x65\137\163\151\x7a\x65\x73", [$this, "\155\x6b\x63\x71\147\147\151\163\165\167\x75\x75\165\x65\161\155"]); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\x69\x63\157\156\x2d\170\x73" => 1, "\x69\x63\x6f\x6e\55\x73\155" => 1.25, "\x69\143\157\156\55\x6d\144" => 1.5, "\x69\143\x6f\156\x2d\154\147" => 1.75, "\151\x63\x6f\x6e\55\170\154" => 2, "\151\143\157\x6e\55\170\x6c\x6c" => 2.25, "\151\x63\x6f\156\55\63\x78" => 3, "\x69\x63\157\156\55\x34\x78" => 3, "\151\143\157\156\55\x35\x78" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\155\145\x64\x69\165\x6d\x5f\154\141\162\147\145"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\x73\x69\x7a\x65\163"]) && is_array($ugugimquukqwogge["\163\x69\x7a\x65\x73"]))) { goto skkamseieeusycye; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\x61\163\x65\x64\151\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\163\151\172\x65\163"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\x31\66\170\x39", "\64\170\63", "\x31\x78\61"])) { goto soaccwqimeksgwiw; } goto suqkuqygkkgwyaie; soaccwqimeksgwiw: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto wiysogeqqwgioyka; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); wiysogeqqwgioyka: suqkuqygkkgwyaie: } aegysmeecgcgayyw: skkamseieeusycye: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto giaacoqqqsekcayy; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); giaacoqqqsekcayy: } syiqkaasoueowwui: cgiscsqwwgqqaeqi: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\x69\144\x74\x68") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto cmegwsegsosyqcai; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto ewymsmkkiksgwysk; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); ewymsmkkiksgwysk: goto wmywuusgukmmaams; cmegwsegsosyqcai: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); wmywuusgukmmaams: return (int) $qcgkuqesqqymcuui; } }
