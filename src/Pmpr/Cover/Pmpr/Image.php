<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654256ea780f9             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; use Pmpr\Common\Foundation\Data\Size; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x64\145\x6c\145\x74\x65\x5f\141\x74\164\141\x63\150\155\x65\x6e\x74", [$this, "\x71\x79\143\x6d\151\141\151\x71\171\x73\143\x79\x79\x6d\x73\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\163\166\x67\137\x65\x6c\145\x6d\x65\x6e\164\x5f\x63\x6c\141\x73\x73\x5f\x72\141\164\x69\x6f\156\137\x63\x6f\156\x76\x65\162\x74\145\x72", [$this, "\x6d\163\x73\x6d\x75\x67\x65\153\155\x67\171\x6b\x79\x6d\167\147"])->cecaguuoecmccuse("\x63\x6d\163\137\160\157\163\x74\x5f\151\x6d\x61\147\x65\137\x66\145\141\x74\x75\162\x65\x5f\151\x6d\x61\147\145\137\x76\141\x6c\151\x64\141\164\x69\x6f\156\x5f\x73\x69\172\x65\x73", [$this, "\x61\147\153\147\x71\165\155\153\167\x65\x6b\x61\165\167\x67\x65"], 10, 2); $this->aqaqisyssqeomwom("\147\x65\x74\x5f\143\x6f\x76\145\162\137\151\x6d\141\x67\145\x5f\x73\151\x7a\x65\163", [$this, "\155\x6b\x63\161\147\147\151\x73\165\x77\165\165\x75\145\x71\x6d"]); } public function mssmugekmgykymwg($wyicceigkekkkwgs) : array { return ["\151\143\157\x6e\55\170\163" => 1, "\x69\x63\x6f\156\x2d\x73\x6d" => 1.25, "\151\x63\x6f\x6e\55\155\144" => 1.5, "\151\x63\157\156\x2d\154\147" => 1.75, "\151\143\157\156\x2d\x78\x6c" => 2, "\151\143\157\156\55\170\x6c\x6c" => 2.25, "\x69\x63\157\156\x2d\x33\170" => 3, "\x69\x63\x6f\x6e\x2d\x34\x78" => 3, "\151\x63\x6f\156\55\x35\170" => 5]; } public function cguiksgqgaakesuq($wyicceigkekkkwgs) { ManipulateArray::unset($wyicceigkekkkwgs, "\155\145\144\x69\165\x6d\x5f\x6c\x61\162\x67\x65"); return $wyicceigkekkkwgs; } public function qycmiaiqyscyymsk($yekqqesogweecqyc) { $ugugimquukqwogge = wp_get_attachment_metadata($yekqqesogweecqyc); $qogsmwakwacwqogk = ManipulateAttachment::ckoygqywcuqasqea($yekqqesogweecqyc); $usuwmommwquwiiia = DecoratorFile::oemywwmmmiywiqai(); if (!(isset($ugugimquukqwogge["\x73\151\x7a\145\x73"]) && is_array($ugugimquukqwogge["\163\151\172\145\x73"]))) { goto csammceowmqwaamq; } $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia["\142\x61\x73\x65\144\x69\162"], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge["\x73\x69\172\145\x73"] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (in_array($oiegiwogmwmawkeo, ["\x31\66\170\x39", "\64\x78\63", "\61\170\x31"])) { goto gcckqucukawcasgk; } goto cuumeogeomowqisc; gcckqucukawcasgk: $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (empty($egomqeoaekcymeai)) { goto qmkaeeomgkwggoyo; } wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); qmkaeeomgkwggoyo: cuumeogeomowqisc: } uiosisocuwokwkie: csammceowmqwaamq: } public function agkgqumkwekauwge($oiegiwogmwmawkeo, $useksmwkuswkwcqg) { switch (strtolower($useksmwkuswkwcqg)) { default: if (!$oiegiwogmwmawkeo instanceof Size) { goto cogywoqcqummsyus; } $oiegiwogmwmawkeo->esyyaomkkeccysos(840)->seiwcgsykwcukmsc(450); cogywoqcqummsyus: } eekcoeikaeaaeyii: ocaguquugeamqckq: return $oiegiwogmwmawkeo; } public function oaqwammkuqeckgak($oiegiwogmwmawkeo, $gkiuoymeukweiaaw = "\x77\151\x64\x74\150") : int { $qcgkuqesqqymcuui = 0; if ($oiegiwogmwmawkeo instanceof Size) { goto ugqwuugsweqgmywk; } if (!(is_array($oiegiwogmwmawkeo) && $oiegiwogmwmawkeo)) { goto gmwykkouysyaqwqm; } $qcgkuqesqqymcuui = ManipulateArray::get($oiegiwogmwmawkeo, $gkiuoymeukweiaaw); gmwykkouysyaqwqm: goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $qcgkuqesqqymcuui = $oiegiwogmwmawkeo->get($gkiuoymeukweiaaw); uaukmuiwskcemcsw: return (int) $qcgkuqesqqymcuui; } }
