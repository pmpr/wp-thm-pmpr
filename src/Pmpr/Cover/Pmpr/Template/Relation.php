<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c28ddb4947             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x6e\x64\145\162\137\x72\x65\x6c\x61\164\145\144", [$this, "\x79\x6f\x79\x65\x77\x67\157\x75\x65\145\153\157\157\171\x77\x63"], 1, 3)->qcsmikeggeemccuu("\x72\x65\156\x64\145\x72\137\x72\145\143\157\155\155\x65\156\144\x65\x64", [$this, "\143\x61\161\x6f\165\161\x61\x67\x63\163\147\x6d\151\143\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); oeocukauoyosicso: } oimkeqocuguqqsqk: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto suqceasgacskcmkc; } $qookweymeqawmcwo["\x69\x74\145\155\x73"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\x69\x7a\145" => "\x73\155\141\x6c\x6c", "\x6c\141\171\157\x75\x74" => "\x63\157\154\154\141\x70\163\151\142\154\x65\137\154\151\x73\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\x61\171\157\165\x74"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\154\141\x74\x69\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); suqceasgacskcmkc: if (!$koaqeegoeiaiccse) { goto yykqaowwsqgqysmq; } echo $aqykuigiuwmmcieu; yykqaowwsqgqysmq: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
