<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\156\144\145\162\x5f\x72\145\x6c\x61\164\145\x64", [$this, "\x79\157\171\x65\167\147\157\x75\145\x65\x6b\x6f\x6f\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\145\156\x64\145\162\137\x72\145\143\157\x6d\x6d\145\x6e\144\145\x64", [$this, "\143\141\161\157\165\161\141\x67\x63\163\x67\x6d\x69\x63\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); qukocuwgakemmyga: } uqokiksoqcwwqgio: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto sioekkmekwygemyc; } $qookweymeqawmcwo["\151\164\x65\155\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace(["\163\151\x7a\x65" => "\x73\155\x61\x6c\x6c", "\x6c\x61\171\x6f\165\x74" => "\143\x6f\154\x6c\141\160\x73\x69\142\x6c\145\x5f\154\151\x73\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\141\171\x6f\x75\x74"); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\154\141\x74\x69\157\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); sioekkmekwygemyc: if (!$koaqeegoeiaiccse) { goto yiowgigkkwsoqcci; } echo $aqykuigiuwmmcieu; yiowgigkkwsoqcci: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
