<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74ec944d2d             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x6e\144\145\162\137\162\145\154\x61\164\145\144", [$this, "\171\x6f\171\145\167\147\x6f\165\145\145\x6b\157\157\x79\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\x65\156\144\145\162\137\x72\x65\x63\157\155\x6d\x65\156\144\x65\144", [$this, "\x63\141\x71\x6f\x75\161\x61\147\143\163\x67\x6d\151\143\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { goto usmuqsuwuueogimc; umcyeiusoakewyaa: foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); ysoqeuugiuswykyu: } goto ksawwekgswywwuwm; ksawwekgswywwuwm: owaimkmgemoqewmm: goto yuqisiwgqacgmsym; koiiaewwicsckseu: $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); goto umcyeiusoakewyaa; yuqisiwgqacgmsym: return $icwicymcioeyeyek; goto wickgagwgqqsomum; usmuqsuwuueogimc: $icwicymcioeyeyek = []; goto koiiaewwicsckseu; wickgagwgqqsomum: } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { goto qmoisuweiskkekca; icouowaoycuuisqe: $qookweymeqawmcwo["\151\164\145\x6d\163"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); goto ocmwuquguuqigose; iqwsqykoueqyyomy: if (!$koaqeegoeiaiccse) { goto uqugcugeomqakcqo; } goto ggaucuaykyuiikem; swckikycciugciqq: $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\x65\154\x61\x74\151\157\156\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); goto coogyackikgmecic; wywwieycqskuqcwc: $post = get_post(); goto gwyseusuceuwwccu; coogyackikgmecic: wmwgeoequuwwwywa: goto iqwsqykoueqyyomy; ocmwuquguuqigose: $qookweymeqawmcwo = array_replace(["\163\x69\172\x65" => "\x73\x6d\141\x6c\154", "\154\x61\171\157\165\164" => "\143\157\154\x6c\x61\160\163\x69\x62\154\x65\x5f\x6c\x69\x73\164"], $qookweymeqawmcwo); goto kmqusaiaiogecyiy; kmqusaiaiogecyiy: $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\x6c\141\171\x6f\165\164"); goto swckikycciugciqq; qmoisuweiskkekca: $aqykuigiuwmmcieu = null; goto wywwieycqskuqcwc; egikqoaqqegawugu: uqugcugeomqakcqo: goto caaygouikgagsssc; caaygouikgagsssc: return $aqykuigiuwmmcieu; goto yoaewquyogiimyic; ggaucuaykyuiikem: echo $aqykuigiuwmmcieu; goto egikqoaqqegawugu; gwyseusuceuwwccu: if (!$post) { goto wmwgeoequuwwwywa; } goto icouowaoycuuisqe; yoaewquyogiimyic: } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RELATED, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RECOMMEND, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
