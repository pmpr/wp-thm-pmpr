<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668707cdd97fe             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x6e\144\x65\162\x5f\162\x65\154\141\164\145\144", [$this, "\171\157\x79\x65\x77\147\157\x75\x65\145\x6b\157\157\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\145\x6e\x64\145\x72\x5f\x72\x65\x63\x6f\155\x6d\x65\x6e\x64\145\x64", [$this, "\x63\141\161\x6f\165\x71\141\x67\143\163\147\x6d\151\x63\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); suswcqoyyqkkquuo: } acaqummmoyiemqss: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto eeqesooyqagwawae; } $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([self::waguuiqqgsysuukq => self::meugkwqwuyoyeeqs, self::sqomuccqsqwsckyw => "\x63\x6f\x6c\x6c\x61\160\x73\x69\x62\x6c\x65\x5f\154\151\163\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, self::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\x6c\x61\x74\x69\x6f\x6e\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); eeqesooyqagwawae: if (!$koaqeegoeiaiccse) { goto oqugqwcyomiaaoqu; } echo $aqykuigiuwmmcieu; oqugqwcyomiaaoqu: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
