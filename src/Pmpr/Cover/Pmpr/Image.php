<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626e65a8aa825             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x64\x65\154\145\164\x65\x5f\141\164\164\x61\143\150\155\145\x6e\164", [$this, "\161\x79\143\155\151\x61\x69\x71\171\x73\143\171\171\155\163\x6b"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\163\x76\147\137\x65\x6c\145\155\145\x6e\x74\x5f\143\154\x61\x73\163\137\162\x61\x74\x69\x6f\x6e\137\143\157\156\166\145\x72\164\x65\162", [$this, "\155\163\163\x6d\x75\x67\145\x6b\155\147\171\153\171\155\x77\x67"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\164\x5f\x63\x6f\166\x65\162\x5f\151\155\x61\x67\145\x5f\x73\x69\172\145\163"), [$this, "\x6d\x6b\x63\161\x67\147\151\163\x75\167\x75\165\x75\145\x71\x6d"])->cecaguuoecmccuse("\143\155\163\x5f\160\157\163\164\x5f\151\155\x61\x67\x65\x5f\x66\145\141\164\165\x72\145\x5f\151\x6d\x61\x67\145\x5f\x76\x61\154\151\144\x61\164\151\x6f\x6e\137\x73\151\172\145\x73", [$this, "\141\147\153\147\161\x75\x6d\x6b\x77\x65\x6b\x61\x75\167\147\145"], 10, 2); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\151\143\x6f\156\x2d\170\163" => 1, "\x69\x63\x6f\156\x2d\163\155" => 1.25, "\x69\143\x6f\x6e\x2d\155\144" => 1.5, "\x69\x63\157\156\55\x6c\x67" => 1.75, "\151\143\x6f\x6e\x2d\170\154" => 2, "\151\143\157\156\x2d\170\154\x6c" => 2.25, "\x69\143\x6f\x6e\55\x33\x78" => 3, "\x69\x63\157\156\x2d\x34\x78" => 3, "\x69\x63\157\x6e\x2d\65\x78" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\x6d\x65\144\x69\x75\x6d\137\x6c\x61\162\147\x65"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\163\151\x7a\145\163"]) && is_array($ugugimquukqwogge["\163\x69\x7a\x65\163"]))) { goto qicwaskssogcokgm; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\141\163\145\x64\151\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\x73\x69\172\145\x73"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\x31\x36\170\71", "\64\170\63", "\61\x78\x31"])) { goto kymkucucyeoeikim; } goto hoeeyiowekaeemko; kymkucucyeoeikim: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto usquiuuyiyqaeyiu; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); usquiuuyiyqaeyiu: hoeeyiowekaeemko: } iekumemscwieugqw: qicwaskssogcokgm: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto esuiysskoweawsue; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); esuiysskoweawsue: } uqqaiagaeqgqgaiy: uguigkcmukuouway: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\167\151\144\164\x68") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto aegysmeecgcgayyw; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto gaomwagkcciesyqy; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); gaomwagkcciesyqy: goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); suqkuqygkkgwyaie: return (int) $qcgkuqesqqymcuui; } }
