<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a7fee7542a             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x64\x65\154\145\x74\x65\x5f\141\164\164\141\143\x68\155\145\x6e\x74", [$this, "\x71\171\x63\155\x69\x61\151\161\x79\x73\143\171\171\155\163\x6b"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x73\x76\x67\137\145\x6c\x65\x6d\x65\x6e\x74\x5f\x63\x6c\141\163\163\x5f\162\x61\x74\151\x6f\x6e\x5f\143\157\156\166\145\162\164\x65\x72", [$this, "\155\163\x73\155\x75\x67\145\x6b\x6d\x67\171\x6b\x79\155\x77\x67"])->cecaguuoecmccuse("\x63\x6d\x73\137\160\157\163\x74\x5f\x69\155\141\147\x65\x5f\x66\x65\141\x74\x75\162\145\137\x69\155\x61\x67\x65\137\x76\x61\x6c\x69\144\141\x74\151\157\x6e\137\163\151\x7a\145\x73", [$this, "\141\147\x6b\x67\x71\165\x6d\x6b\167\x65\153\x61\x75\167\x67\145"], 10, 2); $this->aqaqisyssqeomwom("\x67\145\164\137\x63\x6f\x76\145\162\137\151\x6d\141\147\x65\x5f\x73\x69\172\x65\163", [$this, "\155\x6b\x63\161\x67\x67\151\x73\x75\167\165\x75\x75\x65\x71\155"]); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\151\143\x6f\x6e\x2d\x78\163" => 1, "\151\143\157\156\55\163\155" => 1.25, "\151\x63\157\x6e\x2d\x6d\144" => 1.5, "\x69\x63\x6f\156\x2d\x6c\147" => 1.75, "\151\x63\157\x6e\55\170\x6c" => 2, "\x69\x63\157\x6e\x2d\170\154\154" => 2.25, "\x69\143\x6f\156\55\x33\170" => 3, "\x69\x63\157\x6e\55\x34\170" => 3, "\x69\x63\x6f\x6e\x2d\65\x78" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\x6d\x65\144\151\x75\155\x5f\x6c\141\162\147\145"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\163\151\172\x65\163"]) && is_array($ugugimquukqwogge["\163\151\172\x65\x73"]))) { goto syiqkaasoueowwui; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\141\163\145\144\x69\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\x73\x69\172\x65\163"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\61\66\x78\71", "\64\x78\x33", "\x31\x78\x31"])) { goto skkamseieeusycye; } goto wiysogeqqwgioyka; skkamseieeusycye: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto cgiscsqwwgqqaeqi; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); cgiscsqwwgqqaeqi: wiysogeqqwgioyka: } soaccwqimeksgwiw: syiqkaasoueowwui: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto cmegwsegsosyqcai; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); cmegwsegsosyqcai: } ewymsmkkiksgwysk: giaacoqqqsekcayy: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\151\144\164\150") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto gkyawqqcmigqgaiq; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto wmywuusgukmmaams; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); ooeausyowguqicuo: return (int) $qcgkuqesqqymcuui; } }
