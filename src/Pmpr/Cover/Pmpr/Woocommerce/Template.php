<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684009825136             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\x73\150\x62\157\x61\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\145\162\163" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\x6e\154\x6f\x61\x64\163" => IconInterface::msyqysqykouywsua, "\145\x64\151\x74\55\141\x64\144\x72\145\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\155\145\156\164\x2d\x6d\x65\x74\150\157\x64\163" => IconInterface::acciucugwcskkwmi, "\145\144\x69\164\x2d\x61\143\143\x6f\x75\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\x73\164\x6f\155\x65\x72\55\154\x6f\x67\x6f\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\157\x63\157\155\155\x65\162\143\x65\137\x6c\157\157\160\x5f\160\162\x6f\144\x75\x63\164\137\154\151\156\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\x6c\x61\x73\163" => "\x74\145\x78\164\x2d\x64\145\x63\157\162\x61\x74\151\x6f\156\x2d\x6e\157\x6e\x65\40\164\x65\x78\x74\x2d\x6d\x75\164\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::oguseymmyyoyaako => '', "\160\x72\151\143\145\163" => [], "\x74\x64\137\x63\154\x61\163\x73" => '', "\164\162\x5f\143\154\x61\x73\163" => '', "\x74\150\137\x63\x6c\x61\163\163" => "\x74\145\170\x74\55\x67\x72\x61\171\x2d\70\60\x30\x20\x70\x79\55\x32", "\x68\x61\x73\x5f\164\151\x74\x6c\x65" => true, "\x74\x61\x62\154\145\x5f\x63\x6c\141\163\163" => "\155\142\x2d\x35"]); $product = $ywmkwiwkosakssii[self::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\160\x72\151\x63\145\x73"]; if (!$product) { goto siecswkggyikqkga; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto qkuiwoqksgayqqmg; siecswkggyikqkga: global $product; qkuiwoqksgayqqmg: if (!$product instanceof WC_Product) { goto yamyagayiooyeekg; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto iksewmsaugayqaqq; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\157\x6f\143\x6f\155\155\145\x72\143\x65\55\120\x72\x69\143\145\55\143\165\162\x72\x65\x6e\143\x79\123\171\x6d\142\157\x6c" => ["\143\154\141\x73\163" => "\x66\157\156\164\55\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto easqmyamcmeesgya; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); easqmyamcmeesgya: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\154"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\x73"); if ($eukiyocmgugiioei) { goto quaqmuusokiyqgqe; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $uiiuuaeiyecmiouc["\x72\145\147\165\154\x61\x72\x5f\160\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto yuqgwwmqwqiuwmaw; } $uiiuuaeiyecmiouc["\x64\151\163\x63\x6f\x75\x6e\x74"] = $this->yqauycsoymimeise($product); yuqgwwmqwqiuwmaw: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\x73\143\157\165\x6e\164\x5f\145\x78\x70\151\x72\145"] = $this->sscegwueamckwmcy("\x77\x6f\157\x63\157\155\155\x65\x72\x63\145\x5f\160\162\x6f\x64\165\x63\x74\x5f\x64\x69\x73\143\x6f\x75\156\x74\137\x65\x78\x70\151\x72\145\x5f\150\164\155\x6c", '', ["\x70\162\157\144\165\143\x74" => $product]); smiemmcqqukyguuu: $uiiuuaeiyecmiouc["\163\x61\x6c\x65\x5f\160\162\x69\x63\x65"] = $eeeyyekmaesysegc; iksewmsaugayqaqq: yamyagayiooyeekg: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto sgiwoiscywusgmmm; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\147\165\154\141\x72\137\x70\x72\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\145\147\165\154\141\x72\x20\120\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto ecouwqosmoyyqmkw; case "\163\141\x6c\x65\137\160\x72\x69\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\x6c\145\40\x50\x72\151\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto ecouwqosmoyyqmkw; case "\x64\x69\163\x63\x6f\165\156\x74\137\x65\170\x70\x69\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\143\x6f\165\x6e\164\40\x45\x78\x70\x69\x72\141\x74\x69\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto ecouwqosmoyyqmkw; case "\144\151\163\143\x6f\x75\x6e\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\x63\157\165\x6e\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto ecouwqosmoyyqmkw; } mqiiqkuaoekeuswo: ecouwqosmoyyqmkw: if (!$aumscagymwyyicag) { goto qmoocweoekqueuyy; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; qmoocweoekqueuyy: eckcqesiokgwkkiw: } yoagcooekomeokwg: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\x72\151\x63\145")]); $this->ewcsyqaaigkicgse("\x6d\x65\x74\141\x64\x61\x74\141\x5f\162\x65\156\x64\145\162", $ywmkwiwkosakssii); sgiwoiscywusgmmm: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto skuqigsokaguscas; } woocommerce_template_loop_add_to_cart(); goto quyogmwugsyoaaiu; skuqigsokaguscas: woocommerce_template_single_add_to_cart(); quyogmwugsyoaaiu: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto smcguieygyqcaqgs; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\x72\157\144\165\143\164\x5f\143\141\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto wmumywgyyeagqoeq; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\x6c\141\x73\x73" => "\160\x72\x6f\144\x75\143\x74\55\x63\x61\x74\145\x67\157\162\x79\40\x68\x6f\166\x65\x72\x2d\x70\162\x69\x6d\x61\162\x79\40\146\x6f\156\164\x2d\61\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x49\156\x20\x43\x61\164\x65\147\157\x72\x79\x3a\40\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\x61\x73\163" => "\x74\145\x78\x74\55\147\x72\x61\171\55\x36\60\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\154\x61\x73\163" => "\x69\143\157\156\55\x73\155\40\x6d\162\55\62\x20\155\x79\x2d\x61\x75\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\x6c\141\163\x73" => "\144\55\146\154\145\x78"]); if (!$koaqeegoeiaiccse) { goto mmgmqogugasaqkgg; } echo $nsmgceoqaqogqmuw; mmgmqogugasaqkgg: wmumywgyyeagqoeq: smcguieygyqcaqgs: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto mgcuiguaomoqwwwm; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto eoyiumycaigawmmc; mgcuiguaomoqwwwm: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\x63\x6c\141\x73\163" => "\160\x72\x69\143\x65\55\x64\x69\163\x63\157\165\156\164\55\141\x6d\157\165\x6e\x74\x20\164\x65\x78\x74\55\x64\141\156\x67\145\x72"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\x70\x72\151\x63\x65\x5f\x64\151\163\x63\157\x75\x6e\164", $wewsywccwwomowkw, $xgwukwqqaseqagay); eoyiumycaigawmmc: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto sckioayasmkcoeoo; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto yuoeumyiuqkuouey; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; yuoeumyiuqkuouey: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto eyiwqgqcsqakwqss; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x72\151\x63\145\x5f\144\151\x73\x63\x6f\x75\x6e\x74"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); eyiwqgqcsqakwqss: sckioayasmkcoeoo: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\x71\x75\151\162\x65\144"]) && $aiowsaccomcoikus["\x72\x65\x71\165\x69\x72\x65\x64"])) { goto osmmoyqkqoucsgow; } $aiowsaccomcoikus["\x63\x6c\x61\163\163"] = ["\x69\x73\x2d\x69\156\x76\x61\154\151\144"]; osmmoyqkqoucsgow: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; ooqksueucyagyuoe: } yssqmyoaokkksukc: unset($ikgwqyuyckaewsow["\x62\151\154\x6c\151\156\x67\x5f\143\157\x75\x6e\164\x72\x79"]); unset($ikgwqyuyckaewsow["\142\x69\x6c\154\x69\156\147\x5f\141\144\x64\x72\145\x73\x73\x5f\x32"]); $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\156\147\x5f\163\x74\141\x74\x65"]["\160\x72\151\x6f\162\151\164\x79"] = 60; $ikgwqyuyckaewsow["\142\151\x6c\154\151\x6e\x67\137\143\x69\x74\x79"]["\x70\x72\x69\157\x72\151\164\171"] = 70; $ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\x67\x5f\x61\144\x64\x72\145\163\163\x5f\x31"]["\160\x72\x69\x6f\x72\x69\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\151\154\x6c\151\156\147\137\145\x6d\x61\151\154"]["\160\162\x69\x6f\x72\x69\164\x79"] = 98; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\156\147\137\x70\157\163\x74\x63\157\x64\x65"]["\154\x61\142\145\154"] = __("\120\157\x73\x74\143\x6f\144\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\x6c\x6c\x69\x6e\147\137\x65\x6d\141\x69\x6c"]["\154\141\142\x65\x6c"] = __("\x45\x6d\x61\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\156\x20\142\164\x6e\x2d\142\154\x6f\x63\x6b\40\142\164\156\x2d\160\162\151\x6d\x61\162\171\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\154\56\167\x6f\157\143\x6f\155\x6d\x65\162\143\x65\x2d\163\150\151\160\x70\151\x6e\x67\x2d\155\x65\164\x68\x6f\144\163" => ["\143\x6c\141\x73\x73" => "\x6c\x69\163\x74\55\x67\162\157\x75\160\40\x6c\x69\x73\164\x2d\147\x72\157\165\160\x2d\x66\154\165\163\x68\40\142\x67\x2d\x74\162\x61\x6e\x73\160\141\x72\145\x6e\x74"], "\165\154\x2e\167\x6f\x6f\x63\x6f\x6d\155\145\x72\x63\145\x2d\x73\150\x69\x70\x70\x69\156\x67\55\x6d\145\164\x68\157\x64\163\40\154\x61\x62\145\154" => ["\x63\x6c\141\163\163" => "\155\55\x30"], "\x75\154\56\x77\x6f\157\143\x6f\155\x6d\x65\x72\x63\x65\55\163\150\151\160\160\x69\x6e\147\x2d\x6d\x65\164\150\x6f\x64\163\40\154\151" => ["\x63\154\x61\x73\163" => "\154\151\163\164\x2d\147\x72\x6f\165\x70\x2d\151\x74\145\155\x20\x70\171\x2d\x31\40\x70\x78\x2d\60"]]; } public function umooigokeuauqqsw() : array { return ["\x64\154\x2e\166\141\x72\151\141\x74\x69\x6f\156" => ["\x63\x6c\x61\x73\163" => "\x64\x2d\x66\x6c\x65\170\40\155\x2d\x61\x75\164\157"], "\x64\154\x2e\166\141\x72\151\x61\x74\151\157\x6e\40\160" => ["\x63\154\141\163\163" => "\x6d\x62\x2d\60"], "\x64\154\x2e\x76\x61\162\151\141\x74\x69\157\156\x20\144\x64" => ["\x63\x6c\x61\163\163" => "\x6d\x62\x2d\60"], "\144\x6c\x2e\x76\x61\x72\151\x61\x74\x69\x6f\x6e\40\x64\164" => ["\143\x6c\141\163\163" => "\167\55\154\x67\x2d\62\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\157\x72\x6d\55\162\157\167" => ["\143\154\141\163\163" => "\146\157\162\x6d\x2d\x72\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\x77\x6f\157\143\157\x6d\x6d\x65\162\143\x65\55{$eaoumsseceiowgsk}\55\x66\x69\145\154\x64\163\137\x5f\x66\x69\x65\x6c\144\55\167\162\x61\160\x70\x65\162\40\76\40\x70", ["\x63\x6c\141\x73\163" => "\x72\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\x62\x62\162"]); $ggauoeuaesiymgee = ["\x2e\x69\163\x2d\x69\156\x76\x61\154\151\144\40\151\x6e\160\x75\164" => ["\143\x6c\x61\x73\x73" => "\x72\x65\161\165\x69\162\145\144\55\151\156\x70\x75\x74"], "\56\151\163\55\x69\156\166\x61\154\x69\144\40\163\x65\x6c\x65\x63\x74" => ["\x63\x6c\x61\x73\163" => "\162\145\161\165\151\x72\x65\144\55\x69\156\160\x75\164"], "\163\x65\154\x65\143\164\x2c\40\151\x6e\x70\x75\x74" => ["\143\x6c\141\163\163" => "\x66\157\x72\155\x2d\143\x6f\156\164\x72\x6f\154"], "\x23\142\151\154\x6c\151\156\x67\137\x66\x69\x72\x73\164\x5f\156\x61\155\145\137\x66\x69\145\x6c\144" => ["\x63\154\141\163\163" => "\x63\157\154\x2d\x6d\144\x2d\66"], "\43\142\x69\x6c\x6c\x69\x6e\147\137\154\x61\163\164\x5f\156\141\x6d\x65\137\x66\x69\x65\x6c\144" => ["\x63\x6c\x61\163\163" => "\x63\x6f\x6c\55\x6d\144\x2d\66"], "\43\x62\x69\154\x6c\x69\x6e\x67\x5f\x70\150\x6f\156\145\137\146\151\145\154\144" => ["\143\x6c\x61\163\163" => "\143\x6f\x6c\x2d\x6d\x64\x2d\x36"], "\x23\142\x69\154\x6c\151\x6e\x67\x5f\155\157\142\x69\154\145\x5f\146\151\x65\154\144" => ["\x63\154\141\x73\163" => "\x63\157\x6c\x2d\155\x64\x2d\x36"], "\43\x62\151\154\154\151\156\x67\x5f\x63\157\155\x70\141\x6e\171\137\146\x69\x65\x6c\144" => ["\x63\x6c\x61\163\x73" => "\x63\157\154\55\x6d\144\x2d\66"], "\43\142\151\x6c\154\151\156\x67\x5f\x63\151\164\x79\x5f\x66\x69\145\154\x64" => ["\143\x6c\x61\163\x73" => "\x63\157\x6c\x2d\x6d\x64\x2d\x36"], "\x23\x62\151\154\x6c\151\156\x67\137\163\164\x61\x74\145\x5f\x66\151\145\x6c\144" => ["\x63\154\141\x73\x73" => "\143\157\154\x2d\155\x64\55\66"], "\x23\142\151\154\154\x69\156\147\x5f\145\155\x61\x69\x6c\x5f\146\151\145\154\144" => ["\143\154\141\163\x73" => "\x63\x6f\154\x2d\x6d\144\55\x36"], "\43\142\151\154\x6c\x69\156\x67\x5f\160\x6f\163\164\143\157\144\145\x5f\x66\151\x65\154\144" => ["\143\154\x61\x73\x73" => "\x63\157\154\x2d\155\x64\x2d\x36"], "\x23\x62\x69\x6c\154\x69\156\147\137\160\x6f\x73\x74\143\157\144\x65\x5f\x66\151\x65\x6c\144\x20\151\156\x70\x75\x74" => ["\x63\154\x61\163\163" => "\144\x69\x72\x65\x63\164\x69\157\156\55\x6c\x74\x72"], "\43\x63\165\x73\x74\157\x6d\x65\x72\137\x64\x65\x74\141\151\154\x73\40\151\x6e\160\x75\164" => ["\x63\x6c\141\x73\x73" => "\x66\x6f\162\155\55\x63\x6f\x6e\x74\162\x6f\154"], "\x2e\167\157\x6f\143\157\x6d\155\x65\162\143\x65\55{$eaoumsseceiowgsk}\55\x66\151\145\154\144\163\137\137\x66\x69\x65\154\144\55\167\162\x61\x70\160\x65\162\x20\x70" => ["\x63\154\141\163\163" => "\x66\x6f\162\x6d\x2d\147\162\157\x75\x70\x20\143\x6f\154\55\x31\x32"], "\x70" => ["\x63\154\x61\163\x73" => "\155\142\55\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
