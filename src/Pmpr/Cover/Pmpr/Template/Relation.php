<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240cc1a7f110             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x6e\144\x65\x72\x5f\x72\145\x6c\x61\164\145\x64", [$this, "\171\x6f\171\x65\x77\147\157\x75\x65\x65\x6b\157\x6f\171\167\143"], 1, 3)->qcsmikeggeemccuu("\x72\x65\156\x64\x65\162\137\162\145\x63\157\155\155\x65\156\144\x65\144", [$this, "\x63\141\161\x6f\x75\x71\x61\x67\x63\x73\x67\155\x69\143\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: } iesekaeqeomeuaui: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto mogkoocsoeuyoqqa; } $qookweymeqawmcwo["\x69\x74\x65\155\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\x73\151\172\x65" => "\163\x6d\141\x6c\154", "\x6c\141\171\157\x75\164" => "\143\x6f\154\154\x61\160\163\151\x62\154\x65\137\x6c\151\x73\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\141\171\157\165\x74"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\x6c\141\x74\151\157\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); mogkoocsoeuyoqqa: if (!$koaqeegoeiaiccse) { goto wkwamkgkwykeqkec; } echo $aqykuigiuwmmcieu; wkwamkgkwykeqkec: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }