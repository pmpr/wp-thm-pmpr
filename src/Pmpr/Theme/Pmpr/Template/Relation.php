<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe08f7e307             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Template; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\156\144\145\162\137\162\x65\154\x61\164\x65\144", [$this, "\171\x6f\x79\145\167\x67\157\165\145\145\x6b\157\x6f\171\x77\143"], 1, 3)->qcsmikeggeemccuu("\162\x65\156\x64\145\x72\x5f\162\x65\143\157\155\x6d\x65\x6e\x64\145\144", [$this, "\143\141\x71\x6f\165\x71\141\147\x63\163\x67\155\151\143\151\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { goto cuamsmyiamaicwou; essokuoguqegyeua: $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); goto aqoyesawuayoeuag; ssoooeigmwugyycm: return $icwicymcioeyeyek; goto uyisqeuweamsqwgg; agoikageaeouqaqi: yisooseceggsgyqw: goto ssoooeigmwugyycm; cuamsmyiamaicwou: $icwicymcioeyeyek = []; goto essokuoguqegyeua; aqoyesawuayoeuag: foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); awwwoikmmaisyisy: } goto agoikageaeouqaqi; uyisqeuweamsqwgg: } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { goto mawsaauyquacosus; symwoekuwqcmowwo: $qookweymeqawmcwo["\151\164\x65\x6d\x73"] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); goto emsuycioaeoeeeqo; cwkwkgkqasguwscg: $post = get_post(); goto makqqsaegsesgquq; wqcquwuiqkqaoamo: if (!$koaqeegoeiaiccse) { goto aeywmsqkisycgqce; } goto csueasskicaaoaii; koaeayomowaiywam: $iqyiekoceqqsqoow = ManipulateArray::unset($qookweymeqawmcwo, "\154\x61\171\x6f\165\164"); goto ikwamukqumiokwkk; makqqsaegsesgquq: if (!$post) { goto icasgckmuawkaksg; } goto symwoekuwqcmowwo; emsuycioaeoeeeqo: $qookweymeqawmcwo = array_replace(["\163\x69\172\145" => "\x73\155\x61\x6c\154", "\154\x61\x79\157\165\x74" => "\x63\157\154\x6c\141\160\163\x69\142\x6c\x65\137\x6c\x69\163\164"], $qookweymeqawmcwo); goto koaeayomowaiywam; syggoyqwycmmcuck: return $aqykuigiuwmmcieu; goto owwwikwqsyakweeq; csueasskicaaoaii: echo $aqykuigiuwmmcieu; goto yyousguikogqkecs; mawsaauyquacosus: $aqykuigiuwmmcieu = null; goto cwkwkgkqasguwscg; yyousguikogqkecs: aeywmsqkisycgqce: goto syggoyqwycmmcuck; ikwamukqumiokwkk: $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\x6c\x61\164\151\157\x6e\137{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); goto uueyawewomkuiiwc; uueyawewomkuiiwc: icasgckmuawkaksg: goto wqcquwuiqkqaoamo; owwwikwqsyakweeq: } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RELATED, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::RELATION_RECOMMEND, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
