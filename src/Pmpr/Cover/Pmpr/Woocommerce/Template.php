<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56afe7646             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\x61\x73\x68\142\x6f\x61\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\x65\162\163" => IconInterface::goqumcwkcuygcaui, "\144\157\167\x6e\x6c\x6f\141\144\163" => IconInterface::msyqysqykouywsua, "\145\144\151\x74\55\141\144\x64\162\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\x70\x61\171\155\145\x6e\x74\x2d\155\x65\164\150\157\144\x73" => IconInterface::acciucugwcskkwmi, "\x65\x64\x69\x74\x2d\141\143\143\157\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\163\164\x6f\x6d\145\162\x2d\x6c\157\x67\x6f\x75\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\157\143\157\155\155\145\162\143\x65\x5f\x6c\x6f\157\x70\137\160\162\x6f\x64\165\x63\x74\x5f\154\151\x6e\153", $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(["\143\154\141\x73\163" => "\x74\145\170\x74\55\144\x65\143\157\162\x61\164\151\x6f\x6e\55\156\x6f\x6e\x65\40\x74\x65\x78\x74\55\x6d\x75\x74\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::oguseymmyyoyaako => '', "\x70\x72\x69\x63\x65\163" => [], "\164\144\x5f\143\154\141\163\163" => '', "\x74\162\x5f\x63\154\x61\163\x73" => '', "\x74\150\x5f\143\x6c\141\163\163" => "\x74\145\170\x74\x2d\x67\162\141\x79\x2d\x38\60\60\x20\160\171\x2d\x32", "\x68\141\163\x5f\164\x69\x74\x6c\x65" => true, "\164\x61\x62\x6c\145\137\143\154\x61\163\x73" => "\x6d\x62\x2d\65"]); $product = $ywmkwiwkosakssii[self::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\160\x72\x69\143\x65\163"]; if (!$product) { goto ygcsmkuycoagwyou; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: global $product; kqksuugcgsyeoayy: if (!$product instanceof WC_Product) { goto eegqyykygiccaoeo; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto miyqyeiwquwsacsm; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\56\167\157\x6f\143\x6f\x6d\155\145\x72\x63\x65\x2d\120\162\x69\x63\x65\x2d\143\x75\162\162\x65\156\x63\171\x53\x79\155\x62\x6f\154" => ["\x63\154\141\163\163" => "\x66\x6f\x6e\x74\x2d\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto iggyqogweyosuikc; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); iggyqogweyosuikc: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\144\145\x6c"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\163"); if ($eukiyocmgugiioei) { goto ssoucoucsgccekwe; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $uiiuuaeiyecmiouc["\x72\145\x67\x75\x6c\x61\x72\137\160\162\151\x63\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto qqewoyookaskiuek; } $uiiuuaeiyecmiouc["\x64\x69\163\x63\x6f\x75\156\164"] = $this->yqauycsoymimeise($product); qqewoyookaskiuek: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\157\x75\156\164\137\x65\170\x70\151\x72\145"] = $this->sscegwueamckwmcy("\167\x6f\157\143\x6f\155\155\145\x72\143\x65\137\160\162\x6f\144\165\143\164\x5f\144\151\163\143\157\165\x6e\164\x5f\x65\170\x70\x69\x72\145\x5f\150\x74\155\x6c", '', ["\160\x72\x6f\x64\165\x63\164" => $product]); qkcyqocqqwmqgqww: $uiiuuaeiyecmiouc["\163\141\154\145\137\x70\x72\151\x63\x65"] = $eeeyyekmaesysegc; miyqyeiwquwsacsm: eegqyykygiccaoeo: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto eeqesooyqagwawae; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\x67\x75\154\141\x72\x5f\x70\162\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\x65\147\x75\154\141\x72\x20\x50\x72\x69\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto soqqemyioggmoakg; case "\x73\x61\154\145\137\x70\x72\151\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\x61\154\145\x20\120\x72\151\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto soqqemyioggmoakg; case "\144\x69\163\143\x6f\x75\156\x74\137\x65\x78\x70\151\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\x63\157\x75\x6e\164\40\x45\x78\160\151\162\x61\164\x69\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto soqqemyioggmoakg; case "\144\x69\x73\143\157\x75\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\x63\157\x75\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto soqqemyioggmoakg; } acaqummmoyiemqss: soqqemyioggmoakg: if (!$aumscagymwyyicag) { goto suswcqoyyqkkquuo; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; suswcqoyyqkkquuo: wmmggowmigekyoso: } ywqgcegomwaiuquc: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\162\151\143\x65")]); $this->ewcsyqaaigkicgse("\x6d\x65\x74\x61\144\141\x74\x61\137\x72\x65\x6e\x64\x65\162", $ywmkwiwkosakssii); eeqesooyqagwawae: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto oqugqwcyomiaaoqu; } woocommerce_template_loop_add_to_cart(); goto foeeqckqsyockkak; oqugqwcyomiaaoqu: woocommerce_template_single_add_to_cart(); foeeqckqsyockkak: } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto kymkucucyeoeikim; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), self::cmckeoksigiaqykc); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto hoeeyiowekaeemko; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\154\141\x73\163" => "\x70\x72\x6f\x64\165\x63\x74\55\143\x61\164\145\x67\x6f\162\171\x20\x68\x6f\166\x65\162\55\x70\162\x69\x6d\141\162\171\x20\x66\157\156\x74\x2d\61\x36"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__("\x49\156\x20\x43\x61\164\145\147\157\x72\x79\x3a\40\x25\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\x61\x73\163" => "\164\x65\170\164\x2d\147\x72\x61\171\55\66\x30\x30"]); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\154\141\x73\x73" => "\x69\x63\157\156\55\163\x6d\x20\x6d\162\55\62\40\x6d\171\x2d\x61\165\164\157"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\x6c\141\163\x73" => "\x64\x2d\146\154\x65\170"]); if (!$koaqeegoeiaiccse) { goto iekumemscwieugqw; } echo $nsmgceoqaqogqmuw; iekumemscwieugqw: hoeeyiowekaeemko: kymkucucyeoeikim: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto usquiuuyiyqaeyiu; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\154\141\x73\x73" => "\x70\162\x69\143\145\x2d\x64\x69\163\143\157\165\x6e\164\55\141\155\x6f\x75\x6e\x74\40\164\x65\x78\164\x2d\x64\141\x6e\x67\145\162"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\x70\162\x69\143\x65\137\x64\x69\163\143\157\165\x6e\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); qicwaskssogcokgm: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if (!$product instanceof WC_Product) { goto esuiysskoweawsue; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto uguigkcmukuouway; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; uguigkcmukuouway: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto uqqaiagaeqgqgaiy; } $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\162\151\143\x65\x5f\x64\151\x73\x63\x6f\x75\156\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); uqqaiagaeqgqgaiy: esuiysskoweawsue: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\x65\161\165\151\x72\x65\x64"]) && $aiowsaccomcoikus["\x72\145\x71\165\151\x72\145\144"])) { goto suqkuqygkkgwyaie; } $aiowsaccomcoikus["\143\154\141\x73\x73"] = ["\151\163\55\x69\x6e\166\x61\x6c\151\144"]; suqkuqygkkgwyaie: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; aegysmeecgcgayyw: } gaomwagkcciesyqy: unset($ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\156\x67\x5f\x63\x6f\165\x6e\x74\162\x79"]); unset($ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\x67\x5f\x61\144\144\x72\145\x73\x73\x5f\x32"]); $ikgwqyuyckaewsow["\142\x69\x6c\154\151\x6e\x67\137\x73\164\141\x74\145"]["\160\x72\x69\x6f\162\x69\164\x79"] = 60; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\151\156\147\137\x63\x69\x74\171"]["\160\x72\x69\157\x72\x69\x74\x79"] = 70; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\x69\156\x67\x5f\x61\144\x64\162\145\163\x73\137\61"]["\160\x72\151\157\162\x69\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\151\x6c\154\x69\x6e\x67\137\145\x6d\x61\x69\154"]["\160\x72\x69\157\x72\151\x74\x79"] = 98; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\x6e\x67\137\160\157\x73\x74\143\x6f\144\x65"]["\x6c\x61\142\145\x6c"] = __("\x50\157\x73\164\143\x6f\x64\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\154\x6c\151\x6e\147\x5f\x65\x6d\x61\151\154"]["\x6c\x61\142\x65\154"] = __("\105\x6d\141\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\x6e\40\142\x74\x6e\55\x62\x6c\157\143\x6b\40\x62\164\x6e\x2d\160\x72\151\x6d\x61\162\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\x6c\x2e\x77\x6f\157\143\x6f\x6d\155\145\162\x63\145\x2d\x73\150\151\160\160\151\x6e\147\x2d\x6d\x65\x74\150\157\144\x73" => ["\x63\x6c\x61\x73\163" => "\154\x69\x73\164\55\147\x72\x6f\x75\160\40\x6c\x69\x73\164\55\x67\162\157\165\160\55\x66\154\165\x73\x68\x20\142\147\x2d\x74\x72\x61\156\163\160\141\162\145\x6e\164"], "\x75\154\56\167\x6f\157\x63\157\x6d\x6d\145\x72\143\145\x2d\163\150\x69\x70\x70\151\x6e\x67\x2d\155\145\x74\x68\x6f\144\x73\40\x6c\141\142\145\154" => ["\143\x6c\x61\163\x73" => "\155\55\x30"], "\165\x6c\56\167\x6f\x6f\x63\x6f\x6d\155\x65\162\x63\x65\55\x73\x68\151\x70\x70\x69\156\x67\x2d\x6d\x65\x74\150\157\144\163\x20\x6c\151" => ["\x63\x6c\141\x73\x73" => "\154\151\163\164\x2d\147\162\157\165\x70\55\x69\x74\145\x6d\x20\x70\x79\x2d\61\x20\x70\170\55\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\x76\141\x72\151\141\164\151\157\x6e" => ["\x63\x6c\x61\x73\x73" => "\x64\55\x66\x6c\x65\x78\40\155\x2d\x61\x75\x74\x6f"], "\144\x6c\56\166\141\162\x69\141\164\151\x6f\156\40\x70" => ["\143\154\x61\163\x73" => "\x6d\142\x2d\60"], "\144\x6c\x2e\166\x61\162\x69\x61\x74\x69\157\x6e\40\x64\144" => ["\143\154\141\163\163" => "\155\x62\55\60"], "\144\x6c\x2e\x76\141\162\x69\141\164\151\157\156\40\x64\x74" => ["\143\154\141\163\x73" => "\167\55\x6c\147\55\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\x6f\x72\x6d\x2d\x72\157\167" => ["\x63\154\x61\163\x73" => "\x66\157\162\x6d\55\162\157\x77"]]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\x6f\157\143\157\155\x6d\x65\162\x63\145\55{$eaoumsseceiowgsk}\x2d\146\x69\x65\x6c\144\x73\137\x5f\146\151\145\154\x64\x2d\167\x72\x61\160\160\x65\x72\x20\76\40\160", ["\143\154\141\163\x73" => "\162\x6f\x77"]); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\x62\162"]); $ggauoeuaesiymgee = ["\56\151\163\x2d\151\x6e\166\141\x6c\x69\x64\40\x69\156\x70\x75\164" => ["\x63\x6c\141\163\163" => "\x72\145\x71\x75\151\162\145\144\x2d\151\x6e\160\x75\x74"], "\56\151\163\55\x69\156\x76\141\x6c\x69\144\x20\x73\145\x6c\x65\x63\x74" => ["\143\154\x61\x73\163" => "\162\145\161\165\x69\x72\145\x64\55\151\x6e\x70\x75\164"], "\x73\x65\x6c\x65\x63\x74\54\40\151\x6e\160\x75\164" => ["\143\x6c\141\163\163" => "\146\157\x72\155\55\x63\x6f\x6e\164\162\x6f\x6c"], "\43\x62\x69\x6c\154\x69\156\147\137\146\151\162\163\164\x5f\156\141\155\x65\x5f\x66\151\x65\x6c\144" => ["\143\x6c\x61\163\x73" => "\143\157\x6c\55\x6d\x64\x2d\66"], "\x23\142\x69\x6c\154\151\x6e\147\x5f\x6c\141\x73\164\x5f\x6e\141\x6d\x65\137\x66\x69\145\154\144" => ["\143\x6c\x61\163\x73" => "\143\x6f\x6c\55\155\144\55\x36"], "\x23\142\151\x6c\x6c\x69\x6e\x67\x5f\160\150\x6f\156\145\137\x66\151\x65\154\144" => ["\143\154\141\163\163" => "\143\x6f\x6c\x2d\155\144\x2d\66"], "\x23\142\151\x6c\154\151\x6e\x67\x5f\155\157\x62\151\x6c\145\137\x66\x69\145\154\144" => ["\x63\154\x61\163\x73" => "\143\157\154\55\155\144\x2d\66"], "\x23\142\151\x6c\154\151\x6e\147\x5f\143\x6f\155\160\141\x6e\171\x5f\x66\x69\145\154\x64" => ["\x63\154\x61\x73\x73" => "\143\x6f\154\x2d\155\144\x2d\x36"], "\x23\x62\151\x6c\154\151\x6e\147\137\143\151\164\171\x5f\146\x69\145\154\x64" => ["\143\154\141\x73\x73" => "\x63\x6f\x6c\55\x6d\x64\x2d\66"], "\43\x62\151\154\x6c\151\156\147\137\x73\x74\x61\x74\145\x5f\146\151\x65\154\x64" => ["\143\x6c\141\x73\x73" => "\x63\157\x6c\x2d\x6d\144\55\x36"], "\43\x62\x69\154\x6c\x69\x6e\147\x5f\x65\155\141\151\x6c\137\x66\151\145\x6c\x64" => ["\143\154\141\163\x73" => "\x63\157\154\55\x6d\x64\x2d\66"], "\43\x62\151\x6c\154\151\x6e\147\137\x70\157\163\164\143\x6f\144\x65\x5f\x66\x69\145\154\x64" => ["\143\154\141\x73\x73" => "\x63\157\154\x2d\x6d\x64\x2d\66"], "\43\142\151\x6c\154\151\156\x67\137\x70\157\x73\x74\143\x6f\144\x65\x5f\146\151\145\154\144\40\151\156\x70\x75\x74" => ["\x63\154\141\x73\x73" => "\x64\151\162\x65\x63\x74\151\x6f\x6e\55\154\164\x72"], "\43\x63\x75\x73\164\157\x6d\x65\x72\137\x64\145\164\x61\151\154\x73\x20\151\156\160\x75\164" => ["\x63\154\141\x73\163" => "\146\157\x72\x6d\55\143\x6f\x6e\x74\x72\x6f\x6c"], "\x2e\x77\x6f\x6f\x63\157\x6d\155\145\162\x63\145\55{$eaoumsseceiowgsk}\x2d\x66\151\x65\x6c\x64\x73\x5f\x5f\x66\151\x65\154\x64\55\167\x72\x61\x70\x70\x65\x72\x20\160" => ["\x63\x6c\141\x73\163" => "\146\x6f\x72\155\x2d\147\x72\x6f\x75\160\40\x63\157\154\x2d\61\x32"], "\160" => ["\x63\154\141\x73\x73" => "\155\142\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
