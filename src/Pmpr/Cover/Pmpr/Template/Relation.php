<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada6f97df7             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\156\144\x65\x72\137\x72\x65\154\141\164\145\144", [$this, "\x79\157\x79\x65\167\x67\157\x75\x65\x65\153\157\157\171\x77\x63"], 1, 3)->qcsmikeggeemccuu("\x72\x65\x6e\x64\x65\162\137\162\145\143\x6f\x6d\x6d\145\156\x64\x65\x64", [$this, "\143\x61\x71\157\165\161\141\147\x63\x73\147\x6d\151\x63\151\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); eckcqesiokgwkkiw: } yoagcooekomeokwg: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto ecouwqosmoyyqmkw; } $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([self::waguuiqqgsysuukq => self::meugkwqwuyoyeeqs, self::sqomuccqsqwsckyw => "\x63\x6f\x6c\x6c\x61\160\163\151\142\154\x65\137\x6c\151\163\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, self::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\145\x6c\141\x74\x69\x6f\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); ecouwqosmoyyqmkw: if (!$koaqeegoeiaiccse) { goto mqiiqkuaoekeuswo; } echo $aqykuigiuwmmcieu; mqiiqkuaoekeuswo: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
