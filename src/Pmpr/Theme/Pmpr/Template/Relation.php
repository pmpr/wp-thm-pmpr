<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a805c3d9a             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\156\144\145\x72\137\x72\x65\154\141\164\145\x64", [$this, "\x79\x6f\171\x65\167\x67\x6f\x75\x65\145\x6b\157\x6f\x79\167\x63"], 1, 3)->qcsmikeggeemccuu("\162\x65\156\144\x65\x72\137\162\x65\x63\x6f\155\155\145\156\x64\145\x64", [$this, "\x63\141\161\157\x75\161\x61\147\x63\163\147\155\151\x63\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { goto egesuwkqkmaigaoe; mcqucouuiuoagqwc: foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); ugogoekeckgcmuaw: } goto eweaaismksecwagy; syusgosewwkoagoq: $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); goto mcqucouuiuoagqwc; eweaaismksecwagy: ykqsuiyyosyeyscc: goto icumkkykaoqycqqu; icumkkykaoqycqqu: return $icwicymcioeyeyek; goto oeamoqweiueaueay; egesuwkqkmaigaoe: $icwicymcioeyeyek = []; goto syusgosewwkoagoq; oeamoqweiueaueay: } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { goto awgmegueeqeyqamu; qkyciyiwkmgkmquk: $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\141\171\x6f\165\x74"); goto sksgcusuyqcwqswe; aoaqwygkaagiuuws: if (!$post) { goto owgsameoayaogsma; } goto esagiiawomyacuiw; ayceeyuocgowqwsa: owgsameoayaogsma: goto iuwkiyimqmgguose; awgmegueeqeyqamu: $aqykuigiuwmmcieu = null; goto gqimwsyemoewagcy; aeiemwacaiygemmg: kyiwsiakwgiwouyi: goto yyqygaokeccgugos; sksgcusuyqcwqswe: $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\x65\154\141\164\151\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); goto ayceeyuocgowqwsa; yggseoaommssscwo: echo $aqykuigiuwmmcieu; goto aeiemwacaiygemmg; maaisuqwkymeguys: $qookweymeqawmcwo = array_replace(["\x73\x69\x7a\x65" => "\163\155\x61\154\x6c", "\x6c\141\x79\x6f\165\x74" => "\x63\157\154\x6c\x61\x70\x73\x69\x62\154\x65\137\x6c\x69\x73\164"], $qookweymeqawmcwo); goto qkyciyiwkmgkmquk; gqimwsyemoewagcy: $post = get_post(); goto aoaqwygkaagiuuws; iuwkiyimqmgguose: if (!$koaqeegoeiaiccse) { goto kyiwsiakwgiwouyi; } goto yggseoaommssscwo; esagiiawomyacuiw: $qookweymeqawmcwo["\151\164\145\x6d\x73"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); goto maaisuqwkymeguys; yyqygaokeccgugos: return $aqykuigiuwmmcieu; goto oeusomaaeekakake; oeusomaaeekakake: } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RELATED, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RECOMMEND, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
