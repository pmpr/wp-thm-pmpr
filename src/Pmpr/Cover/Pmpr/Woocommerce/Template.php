<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebe653ec9             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\x73\150\x62\x6f\141\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\144\145\162\163" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\156\154\157\x61\144\163" => IconInterface::msyqysqykouywsua, "\x65\144\x69\164\x2d\141\144\144\x72\x65\x73\x73" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\155\145\x6e\164\55\155\x65\x74\x68\x6f\x64\x73" => IconInterface::acciucugwcskkwmi, "\x65\144\151\164\x2d\141\143\x63\157\x75\156\164" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\x73\x74\x6f\x6d\x65\162\x2d\154\157\x67\x6f\x75\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\x6f\157\x63\x6f\155\155\145\x72\143\x65\137\154\x6f\157\160\x5f\160\x72\157\x64\165\x63\164\x5f\x6c\151\x6e\x6b", $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(["\143\154\x61\x73\x73" => "\x74\x65\170\x74\x2d\144\145\x63\x6f\162\x61\x74\151\x6f\156\x2d\x6e\157\x6e\x65\x20\164\x65\x78\x74\55\x6d\165\x74\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::oguseymmyyoyaako => '', "\x70\x72\x69\143\145\163" => [], "\x74\144\137\143\154\x61\163\163" => '', "\x74\x72\x5f\x63\154\141\x73\x73" => '', "\x74\x68\x5f\x63\x6c\141\163\163" => "\164\145\170\164\x2d\147\162\x61\171\55\70\x30\60\40\x70\x79\x2d\62", "\150\x61\163\x5f\164\151\164\154\145" => true, "\x74\141\x62\154\145\x5f\x63\154\141\x73\163" => "\155\142\x2d\x35"]); $product = $ywmkwiwkosakssii[Constants::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\160\x72\x69\x63\145\163"]; if (!$product) { goto gswcoeiisamakwii; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto yuimwyoywaiiqacs; gswcoeiisamakwii: global $product; yuimwyoywaiiqacs: if (!$product instanceof WC_Product) { goto qiiigwkqeoewsuwm; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto okkmcocqokkskasy; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\167\157\157\143\157\x6d\x6d\x65\162\x63\145\55\120\x72\151\143\145\55\x63\165\162\x72\145\x6e\x63\171\x53\x79\x6d\142\x6f\x6c" => ["\x63\x6c\x61\163\x73" => "\146\157\x6e\x74\x2d\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto ocywegekakimmwcq; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); ocywegekakimmwcq: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\x65\154"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\163"); if ($eukiyocmgugiioei) { goto iwsmmkqaoksmocok; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto esikeyqyuikmaiek; iwsmmkqaoksmocok: $uiiuuaeiyecmiouc["\162\x65\x67\165\x6c\x61\162\x5f\x70\x72\151\x63\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto emqswoaawgeyosmi; } $uiiuuaeiyecmiouc["\144\151\163\x63\x6f\165\x6e\164"] = $this->yqauycsoymimeise($product); emqswoaawgeyosmi: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\x73\x63\157\165\x6e\164\137\x65\x78\160\151\162\x65"] = $this->sscegwueamckwmcy("\167\157\157\143\x6f\x6d\155\145\162\x63\x65\137\x70\x72\x6f\x64\165\143\164\x5f\x64\x69\163\143\x6f\165\156\164\137\x65\x78\x70\151\162\x65\137\x68\x74\x6d\154", '', ["\160\x72\157\x64\x75\143\x74" => $product]); esikeyqyuikmaiek: $uiiuuaeiyecmiouc["\163\x61\154\x65\x5f\160\162\151\x63\145"] = $eeeyyekmaesysegc; okkmcocqokkskasy: qiiigwkqeoewsuwm: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto gsygwgsiawgmqiyi; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\147\165\154\141\162\x5f\x70\162\x69\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\145\x67\165\x6c\141\x72\x20\120\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto mscgewkcqcoowweg; case "\x73\141\x6c\145\x5f\160\x72\x69\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\154\x65\40\x50\162\151\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto mscgewkcqcoowweg; case "\144\x69\x73\143\157\x75\x6e\164\137\145\x78\160\151\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\x73\143\x6f\165\x6e\164\40\x45\170\160\x69\162\x61\164\151\x6f\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto mscgewkcqcoowweg; case "\x64\x69\163\x63\157\165\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\143\157\x75\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto mscgewkcqcoowweg; } suqcsgaosywaauuu: mscgewkcqcoowweg: if (!$aumscagymwyyicag) { goto wwukgaquuyoissgy; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; wwukgaquuyoissgy: ikqeeaysmqgcgawq: } esaqcqqwuussiiwo: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\x69\x63\145")]); $this->ewcsyqaaigkicgse("\155\145\164\x61\144\141\164\x61\137\162\145\156\144\145\x72", $ywmkwiwkosakssii); gsygwgsiawgmqiyi: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto qsgqwyqaqiowkmco; } woocommerce_template_loop_add_to_cart(); goto yqagomygmeoecwey; qsgqwyqaqiowkmco: woocommerce_template_single_add_to_cart(); yqagomygmeoecwey: } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto usymasgsyqgsuocg; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), Constants::cmckeoksigiaqykc); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eucqomyqykgoiuge; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\x6c\x61\x73\x73" => "\x70\162\157\144\165\143\164\x2d\143\x61\x74\145\x67\157\162\x79\x20\x68\157\166\145\162\x2d\160\162\151\155\x61\x72\x79\x20\146\157\x6e\164\x2d\x31\x36"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__("\111\156\40\103\141\x74\x65\x67\157\x72\x79\x3a\x20\45\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\141\x73\163" => "\164\x65\x78\164\x2d\x67\162\x61\x79\55\66\60\x30"]); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\x6c\141\x73\x73" => "\x69\143\x6f\156\x2d\163\155\x20\155\x72\x2d\62\40\x6d\171\x2d\x61\165\164\x6f"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\x6c\x61\163\x73" => "\144\55\146\x6c\145\170"]); if (!$koaqeegoeiaiccse) { goto qikaewekoecykeou; } echo $nsmgceoqaqogqmuw; qikaewekoecykeou: eucqomyqykgoiuge: usymasgsyqgsuocg: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { goto aiccyaswigkaycqk; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto sqyokemumceysegy; aiccyaswigkaycqk: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\x63\154\141\163\163" => "\x70\x72\151\x63\145\x2d\144\151\163\143\157\x75\156\x74\x2d\141\x6d\157\x75\156\164\40\164\145\170\x74\55\144\x61\x6e\x67\145\x72"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\x70\162\x69\x63\145\137\144\151\163\143\x6f\x75\x6e\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); sqyokemumceysegy: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if (!$product instanceof WC_Product) { goto aueaceeyommgkicu; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto oqousikwiiqagoyw; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; oqousikwiiqagoyw: if (!($mgkceomocowocqyo === Constants::uwycywkimsycqwcy)) { goto zayqqeqgcwkekwws; } $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\162\x69\143\145\x5f\x64\x69\x73\143\x6f\165\x6e\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); zayqqeqgcwkekwws: aueaceeyommgkicu: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\145\161\x75\151\x72\x65\x64"]) && $aiowsaccomcoikus["\162\x65\x71\165\151\x72\145\144"])) { goto ucuoeymyqeokgsya; } $aiowsaccomcoikus["\143\154\141\163\163"] = ["\151\x73\55\x69\x6e\x76\141\x6c\x69\144"]; ucuoeymyqeokgsya: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; egmayaiikwsskgmy: } mysueeoswqgccmui: unset($ikgwqyuyckaewsow["\x62\151\154\x6c\x69\x6e\x67\137\x63\157\165\156\x74\162\171"]); unset($ikgwqyuyckaewsow["\x62\x69\154\154\x69\x6e\147\137\141\144\x64\162\x65\163\163\137\x32"]); $ikgwqyuyckaewsow["\142\x69\154\x6c\151\156\147\137\163\164\141\x74\x65"]["\160\x72\x69\x6f\x72\x69\164\171"] = 60; $ikgwqyuyckaewsow["\142\151\154\x6c\151\x6e\147\x5f\x63\151\164\x79"]["\160\x72\151\157\x72\x69\x74\171"] = 70; $ikgwqyuyckaewsow["\x62\151\x6c\154\151\156\147\137\141\x64\144\x72\x65\163\x73\x5f\x31"]["\160\162\x69\157\162\x69\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\x69\154\x6c\151\156\x67\x5f\x65\x6d\x61\151\x6c"]["\x70\x72\151\157\x72\151\x74\x79"] = 98; $ikgwqyuyckaewsow["\142\x69\x6c\x6c\x69\x6e\x67\137\160\x6f\163\164\x63\x6f\144\x65"]["\x6c\x61\142\x65\x6c"] = __("\120\157\x73\x74\x63\157\x64\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\154\154\151\x6e\147\137\x65\x6d\141\151\154"]["\x6c\x61\x62\x65\x6c"] = __("\105\155\x61\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\40\x62\x74\x6e\55\x62\154\157\x63\153\x20\142\164\156\55\x70\162\x69\155\141\162\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\x6c\56\x77\x6f\157\x63\157\155\x6d\145\x72\143\145\x2d\x73\x68\151\x70\x70\x69\156\147\55\x6d\145\x74\x68\x6f\x64\x73" => ["\x63\x6c\141\163\163" => "\x6c\x69\x73\x74\x2d\147\x72\x6f\x75\x70\40\x6c\x69\163\164\55\x67\162\x6f\x75\160\55\146\154\165\x73\150\40\x62\147\55\x74\x72\141\156\163\x70\141\162\x65\156\164"], "\165\154\x2e\x77\157\157\x63\157\155\155\x65\x72\143\145\55\163\x68\x69\x70\x70\151\156\x67\x2d\155\145\164\x68\x6f\x64\163\x20\x6c\x61\x62\x65\x6c" => ["\143\154\x61\163\x73" => "\x6d\x2d\60"], "\x75\154\x2e\167\157\x6f\143\157\x6d\x6d\145\162\143\145\55\x73\x68\151\x70\160\x69\x6e\x67\55\x6d\x65\164\150\x6f\x64\x73\x20\x6c\151" => ["\143\x6c\x61\x73\163" => "\x6c\x69\x73\x74\x2d\147\162\x6f\165\x70\x2d\x69\164\x65\155\x20\160\x79\55\61\40\160\x78\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\x2e\166\x61\x72\x69\x61\x74\x69\157\x6e" => ["\143\154\x61\163\163" => "\144\55\x66\x6c\145\x78\x20\x6d\x2d\141\165\x74\x6f"], "\144\154\56\166\x61\162\x69\x61\x74\151\x6f\x6e\x20\x70" => ["\x63\154\141\x73\163" => "\x6d\142\55\60"], "\x64\x6c\56\166\141\162\x69\x61\164\x69\157\156\40\x64\x64" => ["\x63\154\141\163\163" => "\x6d\x62\x2d\x30"], "\144\x6c\x2e\x76\x61\x72\x69\x61\x74\151\157\x6e\40\144\164" => ["\143\x6c\141\x73\x73" => "\167\x2d\x6c\147\x2d\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\x6f\x72\155\x2d\162\x6f\167" => ["\x63\154\141\x73\x73" => "\146\157\162\x6d\x2d\162\157\x77"]]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\x77\x6f\x6f\143\x6f\155\x6d\x65\x72\143\x65\x2d{$eaoumsseceiowgsk}\55\146\151\x65\x6c\144\x73\137\137\x66\x69\145\154\x64\55\x77\162\x61\160\x70\x65\162\40\76\40\160", ["\x63\x6c\x61\x73\163" => "\162\x6f\167"]); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\142\x72"]); $ggauoeuaesiymgee = ["\56\x69\163\x2d\x69\x6e\166\141\154\x69\x64\x20\x69\x6e\160\x75\164" => ["\143\154\141\163\163" => "\x72\145\x71\x75\151\162\145\x64\55\151\x6e\x70\165\164"], "\x2e\151\163\55\x69\156\x76\x61\x6c\151\144\40\163\x65\154\145\143\164" => ["\143\154\x61\163\163" => "\x72\145\161\165\x69\x72\145\x64\x2d\x69\156\x70\x75\x74"], "\163\x65\x6c\145\143\164\x2c\40\151\x6e\x70\165\x74" => ["\143\x6c\x61\163\x73" => "\x66\157\162\155\x2d\143\157\x6e\164\162\157\x6c"], "\x23\142\151\154\x6c\x69\x6e\147\x5f\x66\151\x72\163\164\x5f\x6e\x61\155\145\x5f\146\x69\145\x6c\x64" => ["\x63\154\x61\x73\x73" => "\x63\157\x6c\55\155\x64\x2d\x36"], "\43\x62\x69\154\154\x69\x6e\x67\x5f\x6c\x61\163\164\x5f\x6e\x61\x6d\145\x5f\x66\151\x65\154\x64" => ["\143\154\141\163\163" => "\x63\157\x6c\55\155\144\x2d\x36"], "\43\142\151\x6c\154\151\x6e\x67\137\160\x68\x6f\156\x65\137\x66\x69\145\154\x64" => ["\x63\x6c\x61\163\163" => "\143\x6f\x6c\x2d\x6d\144\x2d\66"], "\x23\x62\151\x6c\x6c\x69\156\147\x5f\155\x6f\142\151\x6c\145\x5f\x66\x69\x65\154\x64" => ["\x63\154\141\163\163" => "\x63\x6f\154\55\x6d\x64\x2d\66"], "\43\142\151\154\154\151\x6e\x67\137\x63\x6f\155\160\141\156\171\x5f\x66\x69\145\154\x64" => ["\143\x6c\x61\x73\x73" => "\x63\x6f\154\55\x6d\144\x2d\66"], "\43\142\x69\x6c\x6c\x69\156\x67\137\x63\x69\164\171\x5f\x66\x69\145\x6c\x64" => ["\x63\154\x61\x73\x73" => "\143\x6f\x6c\x2d\155\144\x2d\66"], "\43\142\151\154\154\151\x6e\147\137\x73\164\141\x74\x65\x5f\x66\x69\145\154\x64" => ["\x63\x6c\x61\163\163" => "\x63\x6f\x6c\x2d\x6d\x64\x2d\x36"], "\43\142\151\154\154\151\x6e\x67\137\145\x6d\141\151\154\x5f\146\151\145\x6c\x64" => ["\x63\x6c\141\x73\x73" => "\143\157\x6c\55\x6d\144\x2d\x36"], "\43\142\x69\x6c\154\x69\156\147\x5f\x70\157\163\164\x63\x6f\x64\145\137\146\151\145\154\x64" => ["\x63\x6c\141\x73\x73" => "\143\x6f\154\x2d\155\144\55\x36"], "\43\x62\151\154\154\151\x6e\147\x5f\x70\x6f\163\x74\143\157\x64\145\137\x66\151\145\x6c\144\40\x69\x6e\x70\165\164" => ["\x63\154\x61\163\x73" => "\x64\x69\x72\145\x63\x74\x69\x6f\156\55\154\164\x72"], "\x23\143\x75\163\x74\x6f\155\x65\162\x5f\x64\145\x74\x61\x69\154\163\40\151\156\160\165\x74" => ["\143\x6c\141\x73\x73" => "\x66\157\162\155\55\143\157\x6e\x74\x72\157\x6c"], "\x2e\x77\x6f\157\x63\157\155\x6d\145\162\143\x65\55{$eaoumsseceiowgsk}\55\146\151\145\x6c\144\163\x5f\137\146\x69\145\x6c\x64\55\x77\x72\x61\160\x70\x65\x72\x20\160" => ["\143\154\x61\163\163" => "\x66\x6f\162\155\55\x67\x72\x6f\165\x70\x20\143\x6f\x6c\x2d\61\x32"], "\160" => ["\x63\154\x61\x73\x73" => "\155\x62\x2d\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
