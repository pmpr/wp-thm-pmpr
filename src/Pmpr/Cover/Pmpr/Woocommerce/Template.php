<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a42a72b7b43             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\163\x68\142\x6f\x61\x72\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\x64\145\x72\x73" => IconInterface::goqumcwkcuygcaui, "\x64\157\167\x6e\154\x6f\x61\144\163" => IconInterface::msyqysqykouywsua, "\x65\x64\151\164\x2d\x61\x64\x64\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\x6d\x65\x6e\x74\55\x6d\145\164\150\x6f\144\163" => IconInterface::acciucugwcskkwmi, "\x65\x64\151\164\55\141\x63\143\x6f\165\x6e\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\164\157\155\145\x72\x2d\154\x6f\147\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\x6f\x63\x6f\155\x6d\x65\162\143\145\137\x6c\157\157\x70\x5f\x70\x72\157\144\x75\x63\164\x5f\154\151\x6e\153", $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(["\143\154\141\163\x73" => "\164\145\x78\x74\55\144\x65\x63\x6f\x72\x61\x74\x69\x6f\x6e\x2d\x6e\x6f\156\x65\40\164\x65\170\x74\x2d\155\x75\164\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::oguseymmyyoyaako => '', "\x70\x72\151\143\145\163" => [], "\x74\x64\137\x63\154\141\x73\x73" => '', "\x74\x72\137\x63\x6c\x61\163\163" => '', "\x74\150\137\143\x6c\141\163\x73" => "\164\145\x78\x74\x2d\x67\x72\x61\171\55\x38\60\60\40\160\171\x2d\62", "\x68\141\x73\137\164\x69\164\x6c\x65" => true, "\164\x61\142\x6c\x65\137\143\154\141\163\163" => "\155\x62\55\x35"]); $product = $ywmkwiwkosakssii[self::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\160\x72\x69\143\x65\x73"]; if (!$product) { goto wusciwkkckmqigms; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto iiiccouaaqsyikae; wusciwkkckmqigms: global $product; iiiccouaaqsyikae: if (!$product instanceof WC_Product) { goto gommacygsykyussk; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto uougwgeyiokewkkm; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\56\x77\157\x6f\143\x6f\x6d\x6d\x65\x72\143\145\x2d\120\162\151\143\x65\55\x63\165\x72\x72\145\156\x63\x79\123\x79\x6d\142\157\x6c" => ["\143\x6c\x61\x73\x73" => "\146\x6f\156\x74\55\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto ukkcmocamwgiqayu; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); ukkcmocamwgiqayu: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\144\145\154"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\163"); if ($eukiyocmgugiioei) { goto amgsueumgaguceaa; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto gygwewcqsmwqismo; amgsueumgaguceaa: $uiiuuaeiyecmiouc["\x72\x65\x67\165\x6c\x61\162\137\x70\x72\151\x63\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto mwysseaekcsiesmm; } $uiiuuaeiyecmiouc["\x64\x69\163\143\x6f\165\x6e\x74"] = $this->yqauycsoymimeise($product); mwysseaekcsiesmm: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\x6f\165\156\x74\x5f\145\170\x70\151\162\x65"] = $this->sscegwueamckwmcy("\167\157\x6f\143\157\x6d\155\145\x72\x63\145\137\160\x72\x6f\x64\x75\143\x74\137\144\151\x73\143\x6f\165\156\x74\x5f\145\x78\x70\x69\x72\x65\137\x68\x74\x6d\x6c", '', ["\x70\162\x6f\x64\165\x63\164" => $product]); gygwewcqsmwqismo: $uiiuuaeiyecmiouc["\x73\x61\154\145\137\x70\x72\x69\x63\x65"] = $eeeyyekmaesysegc; uougwgeyiokewkkm: gommacygsykyussk: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto kocqqoyymosmuksu; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\145\x67\165\x6c\141\162\137\x70\162\x69\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\145\x67\x75\154\x61\x72\40\x50\162\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto uykousayyomcaeaa; case "\163\x61\154\x65\137\x70\x72\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\154\x65\40\x50\x72\x69\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto uykousayyomcaeaa; case "\x64\x69\x73\x63\x6f\165\x6e\164\137\145\x78\x70\x69\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\x73\x63\157\165\x6e\164\40\x45\170\160\151\x72\141\x74\151\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto uykousayyomcaeaa; case "\144\x69\163\x63\157\x75\156\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\163\x63\157\x75\156\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto uykousayyomcaeaa; } uimeeckqksqeekqq: uykousayyomcaeaa: if (!$aumscagymwyyicag) { goto iuuuususuuuaieem; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; iuuuususuuuaieem: ucqmumuygcywwqma: } ukqocwewouckikso: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\x69\143\x65")]); $this->ewcsyqaaigkicgse("\x6d\x65\164\141\x64\141\164\x61\137\x72\x65\x6e\144\x65\x72", $ywmkwiwkosakssii); kocqqoyymosmuksu: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto uqokiksoqcwwqgio; } woocommerce_template_loop_add_to_cart(); goto qukocuwgakemmyga; uqokiksoqcwwqgio: woocommerce_template_single_add_to_cart(); qukocuwgakemmyga: } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto ieqesiiageaauiuw; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), self::cmckeoksigiaqykc); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto yiowgigkkwsoqcci; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\143\154\x61\x73\x73" => "\x70\162\157\x64\165\143\x74\x2d\143\x61\x74\x65\x67\157\162\171\40\150\x6f\x76\x65\x72\x2d\160\x72\151\x6d\141\162\x79\x20\x66\x6f\x6e\164\55\61\x36"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__("\x49\156\x20\103\141\x74\x65\147\157\162\171\x3a\40\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\141\163\x73" => "\x74\x65\170\164\55\147\162\141\171\x2d\x36\x30\x30"]); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\x6c\x61\x73\x73" => "\x69\143\x6f\156\55\163\155\40\155\162\x2d\x32\40\155\x79\x2d\x61\165\164\x6f"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\154\x61\x73\163" => "\x64\55\146\x6c\x65\170"]); if (!$koaqeegoeiaiccse) { goto sioekkmekwygemyc; } echo $nsmgceoqaqogqmuw; sioekkmekwygemyc: yiowgigkkwsoqcci: ieqesiiageaauiuw: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto gamqcwuwkikwqoay; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\x63\154\141\163\x73" => "\x70\x72\151\143\x65\x2d\144\x69\x73\x63\157\165\x6e\x74\x2d\141\155\x6f\x75\156\x74\40\164\145\170\x74\x2d\x64\x61\156\147\x65\162"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\x70\x72\x69\143\x65\137\144\151\163\x63\x6f\x75\x6e\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); mscyggqcesgqqksu: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if (!$product instanceof WC_Product) { goto wsesqmcqoiyyqkqi; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto oyeyomcgkmgymogq; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; oyeyomcgkmgymogq: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto iesekaeqeomeuaui; } $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\162\151\143\x65\137\x64\151\163\x63\157\x75\x6e\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); iesekaeqeomeuaui: wsesqmcqoiyyqkqi: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\145\161\165\x69\162\x65\144"]) && $aiowsaccomcoikus["\162\145\161\x75\151\x72\145\144"])) { goto oimkeqocuguqqsqk; } $aiowsaccomcoikus["\x63\x6c\141\163\x73"] = ["\151\163\x2d\x69\x6e\x76\141\154\x69\x64"]; oimkeqocuguqqsqk: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; wkwamkgkwykeqkec: } mogkoocsoeuyoqqa: unset($ikgwqyuyckaewsow["\x62\x69\154\154\151\156\147\137\x63\x6f\165\156\x74\162\x79"]); unset($ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\x67\137\x61\x64\144\x72\145\163\x73\x5f\x32"]); $ikgwqyuyckaewsow["\x62\x69\x6c\154\151\x6e\x67\137\163\164\x61\164\145"]["\x70\162\151\157\x72\x69\164\171"] = 60; $ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\147\x5f\143\x69\164\171"]["\160\x72\x69\x6f\162\151\164\x79"] = 70; $ikgwqyuyckaewsow["\x62\x69\x6c\154\x69\156\147\x5f\141\x64\x64\x72\x65\x73\x73\x5f\x31"]["\160\162\x69\x6f\162\151\x74\171"] = 80; $ikgwqyuyckaewsow["\142\x69\x6c\x6c\151\156\147\x5f\145\155\x61\151\x6c"]["\x70\x72\151\157\x72\x69\x74\x79"] = 98; $ikgwqyuyckaewsow["\142\151\x6c\x6c\x69\x6e\147\x5f\160\x6f\x73\x74\x63\157\x64\x65"]["\154\x61\x62\x65\x6c"] = __("\x50\157\x73\164\143\x6f\144\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\x6c\x6c\151\156\147\137\x65\155\x61\x69\x6c"]["\x6c\141\142\145\154"] = __("\105\x6d\x61\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\x6e\40\142\x74\x6e\55\142\x6c\x6f\x63\153\40\142\x74\x6e\x2d\x70\162\x69\x6d\141\162\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\x6c\56\x77\157\157\143\x6f\155\x6d\145\x72\x63\145\55\x73\x68\x69\x70\x70\151\x6e\x67\x2d\155\145\164\x68\x6f\144\163" => ["\x63\x6c\141\x73\x73" => "\154\x69\x73\x74\x2d\x67\162\x6f\x75\160\40\154\x69\x73\164\55\147\162\x6f\165\160\x2d\x66\x6c\x75\x73\150\x20\142\147\x2d\164\162\x61\x6e\x73\160\141\x72\145\156\x74"], "\x75\x6c\x2e\x77\x6f\157\143\x6f\x6d\x6d\145\162\x63\145\x2d\x73\150\151\160\x70\151\x6e\x67\x2d\x6d\145\x74\x68\157\x64\x73\x20\x6c\141\142\x65\x6c" => ["\143\x6c\x61\163\x73" => "\155\x2d\60"], "\165\154\56\x77\157\x6f\x63\x6f\x6d\x6d\145\162\x63\145\55\x73\150\x69\160\160\x69\156\147\x2d\x6d\x65\164\150\x6f\x64\x73\40\154\151" => ["\x63\154\141\163\163" => "\x6c\x69\x73\x74\55\x67\162\x6f\x75\x70\x2d\151\164\x65\x6d\x20\160\171\x2d\x31\40\160\170\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\154\x2e\166\x61\162\151\x61\x74\151\157\156" => ["\x63\x6c\141\x73\x73" => "\144\55\146\154\x65\170\x20\x6d\55\141\x75\164\x6f"], "\x64\x6c\x2e\x76\x61\162\x69\141\x74\151\x6f\156\x20\160" => ["\x63\x6c\141\x73\163" => "\155\142\55\60"], "\x64\154\x2e\166\141\162\151\x61\x74\151\x6f\x6e\40\x64\144" => ["\143\154\141\x73\163" => "\155\x62\x2d\x30"], "\x64\154\56\166\141\x72\x69\x61\164\151\157\156\x20\144\x74" => ["\x63\x6c\x61\163\163" => "\x77\55\x6c\x67\55\x32\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\x66\157\x72\155\55\162\x6f\x77" => ["\x63\154\141\x73\x73" => "\x66\x6f\162\x6d\x2d\162\x6f\x77"]]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\157\157\143\157\155\x6d\x65\x72\x63\145\x2d{$eaoumsseceiowgsk}\55\x66\151\145\154\x64\x73\x5f\x5f\x66\x69\145\x6c\x64\55\167\x72\141\x70\x70\x65\162\x20\x3e\x20\x70", ["\143\154\x61\163\x73" => "\162\x6f\x77"]); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\x62\x72"]); $ggauoeuaesiymgee = ["\x2e\151\163\x2d\151\156\x76\x61\154\151\x64\x20\x69\156\x70\165\164" => ["\143\x6c\141\163\163" => "\162\x65\161\165\x69\x72\x65\144\55\151\x6e\x70\165\x74"], "\x2e\151\163\55\x69\156\x76\x61\154\151\144\x20\163\x65\x6c\145\x63\x74" => ["\143\154\x61\x73\x73" => "\x72\145\161\165\151\162\x65\144\x2d\151\156\x70\x75\x74"], "\163\145\x6c\145\143\x74\x2c\40\151\x6e\160\x75\164" => ["\x63\154\141\163\163" => "\146\157\x72\155\55\x63\x6f\x6e\x74\162\x6f\x6c"], "\x23\142\151\x6c\x6c\x69\x6e\147\x5f\146\x69\x72\163\164\137\156\141\155\x65\137\x66\x69\145\154\x64" => ["\x63\154\x61\163\x73" => "\143\157\154\x2d\x6d\x64\x2d\x36"], "\43\x62\151\x6c\154\x69\156\147\137\x6c\x61\163\x74\137\x6e\141\155\x65\x5f\146\x69\x65\154\x64" => ["\x63\x6c\141\x73\x73" => "\x63\157\x6c\x2d\155\x64\55\66"], "\x23\142\151\154\x6c\x69\x6e\x67\x5f\160\x68\157\x6e\145\x5f\x66\151\x65\x6c\x64" => ["\143\154\141\x73\163" => "\x63\x6f\x6c\55\x6d\144\x2d\66"], "\x23\x62\x69\x6c\x6c\151\x6e\147\x5f\155\157\142\x69\154\145\x5f\x66\151\x65\x6c\144" => ["\143\154\141\x73\163" => "\143\x6f\154\x2d\x6d\144\x2d\x36"], "\x23\142\151\154\x6c\x69\x6e\147\x5f\x63\157\155\x70\x61\156\x79\x5f\x66\x69\x65\154\144" => ["\x63\154\141\x73\x73" => "\143\157\154\x2d\155\x64\x2d\66"], "\43\142\x69\154\x6c\151\156\147\x5f\x63\x69\164\x79\137\146\151\145\x6c\144" => ["\x63\154\x61\x73\163" => "\143\x6f\x6c\x2d\x6d\144\55\66"], "\x23\142\151\x6c\154\151\156\147\137\x73\164\141\x74\145\x5f\x66\x69\145\154\x64" => ["\143\154\141\163\x73" => "\143\157\x6c\x2d\155\144\x2d\66"], "\x23\142\x69\x6c\154\x69\156\147\x5f\145\x6d\141\x69\154\x5f\146\151\145\x6c\144" => ["\x63\x6c\x61\x73\163" => "\x63\x6f\x6c\x2d\x6d\x64\55\x36"], "\43\142\151\x6c\154\151\x6e\x67\x5f\160\x6f\x73\x74\x63\x6f\x64\145\x5f\146\x69\x65\154\x64" => ["\x63\x6c\x61\163\163" => "\143\x6f\x6c\x2d\x6d\144\x2d\x36"], "\x23\142\151\154\154\151\x6e\x67\x5f\160\157\163\164\x63\x6f\144\145\x5f\x66\151\x65\x6c\x64\40\x69\x6e\160\165\x74" => ["\143\x6c\x61\163\163" => "\144\151\x72\x65\x63\x74\x69\x6f\156\55\154\164\x72"], "\x23\x63\165\x73\164\x6f\155\x65\x72\137\144\x65\x74\x61\x69\154\x73\x20\151\x6e\160\x75\x74" => ["\143\x6c\x61\x73\163" => "\x66\x6f\x72\x6d\x2d\x63\157\156\164\x72\157\x6c"], "\x2e\167\157\x6f\x63\157\155\x6d\145\162\143\145\x2d{$eaoumsseceiowgsk}\55\146\x69\x65\x6c\x64\163\x5f\137\x66\x69\145\154\144\55\167\162\141\x70\x70\145\x72\40\x70" => ["\x63\x6c\x61\x73\x73" => "\x66\157\162\x6d\x2d\147\162\x6f\x75\160\x20\143\157\x6c\55\61\x32"], "\160" => ["\143\x6c\x61\163\x73" => "\155\x62\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
