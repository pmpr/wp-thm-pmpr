<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64aaa0ee77b98             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\144\x61\163\x68\142\157\x61\162\144" => IconInterface::ygcmqmkcsymeucoq, "\157\162\x64\x65\162\163" => IconInterface::goqumcwkcuygcaui, "\x64\157\167\156\x6c\x6f\x61\144\163" => IconInterface::msyqysqykouywsua, "\145\x64\151\164\55\x61\x64\x64\162\x65\163\163" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\155\145\x6e\x74\55\x6d\145\x74\150\x6f\x64\x73" => IconInterface::acciucugwcskkwmi, "\x65\x64\x69\164\x2d\x61\143\143\157\x75\156\164" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\x73\164\157\x6d\x65\x72\55\x6c\157\147\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\155\x65\162\143\x65\x5f\154\157\x6f\160\x5f\160\x72\x6f\x64\x75\143\x74\x5f\x6c\x69\156\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\141\163\163" => "\x74\x65\170\164\x2d\x64\145\143\157\x72\x61\x74\x69\x6f\x6e\x2d\156\157\x6e\x65\x20\164\145\170\164\55\x6d\x75\x74\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\162\x69\x63\145\163" => [], "\x70\x72\157\144\x75\x63\164" => '', "\x74\144\x5f\143\x6c\141\x73\163" => '', "\x74\x72\x5f\143\154\x61\x73\x73" => '', "\x74\x68\x5f\143\x6c\141\x73\x73" => "\x74\x65\x78\164\55\147\x72\x61\171\x2d\x38\x30\60\40\x70\x79\x2d\62", "\150\141\163\137\x74\151\164\154\x65" => true, "\x74\141\142\154\145\137\143\x6c\141\x73\163" => "\155\x62\55\65"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\157\x64\165\x63\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\x69\143\x65\163", false); if (!$product) { goto gygwewcqsmwqismo; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto uougwgeyiokewkkm; gygwewcqsmwqismo: global $product; uougwgeyiokewkkm: if (!$product instanceof WC_Product) { goto iuuuususuuuaieem; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto uimeeckqksqeekqq; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\x6f\x6f\143\157\x6d\155\145\x72\x63\x65\x2d\x50\x72\x69\143\x65\55\x63\165\162\x72\x65\x6e\x63\171\123\x79\155\142\x6f\154" => ["\143\x6c\141\163\163" => "\146\x6f\x6e\164\55\61\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto gommacygsykyussk; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); gommacygsykyussk: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\145\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\156\163"); if ($eukiyocmgugiioei) { goto ucqmumuygcywwqma; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto uykousayyomcaeaa; ucqmumuygcywwqma: $uiiuuaeiyecmiouc["\162\145\x67\165\154\141\x72\x5f\160\162\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto ukqocwewouckikso; } $uiiuuaeiyecmiouc["\144\x69\163\x63\157\x75\156\x74"] = $this->yqauycsoymimeise($product); ukqocwewouckikso: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\163\x63\x6f\165\156\164\x5f\145\170\160\151\162\x65"] = $this->sscegwueamckwmcy("\x77\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\137\160\x72\x6f\x64\x75\143\x74\x5f\x64\151\163\143\x6f\x75\x6e\164\x5f\145\170\160\x69\x72\x65\x5f\x68\164\x6d\x6c", '', ["\160\162\157\144\165\143\164" => $product]); uykousayyomcaeaa: $uiiuuaeiyecmiouc["\x73\141\x6c\x65\x5f\160\x72\151\x63\145"] = $eeeyyekmaesysegc; uimeeckqksqeekqq: iuuuususuuuaieem: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto ieqesiiageaauiuw; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\145\x67\x75\154\141\x72\137\x70\x72\151\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\145\x67\x75\154\x61\x72\40\120\162\151\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto qukocuwgakemmyga; case "\x73\x61\154\145\x5f\160\162\151\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\x6c\x65\x20\120\x72\151\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto qukocuwgakemmyga; case "\144\x69\x73\x63\x6f\x75\x6e\164\x5f\145\170\x70\x69\162\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\x73\x63\157\165\156\x74\40\105\x78\160\151\x72\141\164\x69\x6f\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto qukocuwgakemmyga; case "\144\x69\x73\143\x6f\x75\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\x63\157\165\156\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto qukocuwgakemmyga; } sioekkmekwygemyc: qukocuwgakemmyga: if (!$aumscagymwyyicag) { goto yiowgigkkwsoqcci; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; yiowgigkkwsoqcci: uqokiksoqcwwqgio: } kocqqoyymosmuksu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\145\164\141\x64\141\x74\x61\137\162\x65\156\x64\x65\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\162\x69\x63\x65")])); ieqesiiageaauiuw: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto gamqcwuwkikwqoay; } woocommerce_template_loop_add_to_cart(); goto mscyggqcesgqqksu; gamqcwuwkikwqoay: woocommerce_template_single_add_to_cart(); mscyggqcesgqqksu: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto wsesqmcqoiyyqkqi; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\x72\157\x64\165\143\164\x5f\143\141\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto iesekaeqeomeuaui; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\154\x61\x73\x73" => "\x70\162\157\144\165\x63\x74\55\x63\x61\x74\x65\x67\x6f\162\171\x20\150\157\166\145\162\55\x70\x72\151\x6d\x61\x72\171\40\x66\157\x6e\x74\x2d\61\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x49\156\x20\x43\141\164\145\147\x6f\x72\171\72\40\45\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\x61\x73\x73" => "\164\145\170\x74\x2d\x67\162\x61\171\x2d\x36\60\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\154\x61\x73\x73" => "\x69\x63\x6f\156\x2d\163\x6d\40\x6d\162\x2d\x32\x20\x6d\x79\55\141\165\164\x6f"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\x6c\x61\x73\163" => "\144\55\x66\154\x65\170"]); if (!$koaqeegoeiaiccse) { goto oyeyomcgkmgymogq; } echo $nsmgceoqaqogqmuw; oyeyomcgkmgymogq: iesekaeqeomeuaui: wsesqmcqoiyyqkqi: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto mogkoocsoeuyoqqa; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\x63\x6c\x61\x73\163" => "\x70\162\151\x63\145\55\x64\151\x73\x63\157\165\156\x74\55\141\x6d\157\x75\x6e\x74\40\x74\x65\170\164\55\x64\x61\156\147\145\x72"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\143\x65\137\144\x69\x73\x63\157\165\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); wkwamkgkwykeqkec: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto suqceasgacskcmkc; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto oimkeqocuguqqsqk; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; oimkeqocuguqqsqk: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto oeocukauoyosicso; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\x69\x63\x65\137\144\151\x73\143\x6f\x75\x6e\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); oeocukauoyosicso: suqceasgacskcmkc: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\145\161\x75\151\162\x65\144"]) && $aiowsaccomcoikus["\162\145\161\165\151\x72\145\144"])) { goto uckewycoogsogwiy; } $aiowsaccomcoikus["\143\154\x61\x73\x73"] = ["\151\x73\x2d\x69\156\166\141\154\x69\x64"]; uckewycoogsogwiy: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; kwiggogcgciwuwqk: } yykqaowwsqgqysmq: unset($ikgwqyuyckaewsow["\142\151\154\x6c\151\x6e\x67\x5f\143\157\165\156\x74\162\171"]); unset($ikgwqyuyckaewsow["\142\151\154\x6c\151\x6e\147\x5f\141\144\144\x72\145\x73\163\137\62"]); $ikgwqyuyckaewsow["\142\151\154\x6c\151\x6e\147\x5f\163\164\141\x74\x65"]["\160\x72\x69\157\162\151\x74\171"] = 60; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\156\x67\137\143\x69\x74\171"]["\160\162\151\157\162\x69\x74\x79"] = 70; $ikgwqyuyckaewsow["\x62\x69\154\154\151\156\147\137\x61\x64\x64\162\145\163\x73\x5f\x31"]["\x70\162\x69\157\x72\x69\164\171"] = 80; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\x6e\147\x5f\x65\155\x61\x69\x6c"]["\x70\162\x69\x6f\162\x69\164\171"] = 98; $ikgwqyuyckaewsow["\142\151\x6c\154\x69\156\x67\137\x70\x6f\x73\x74\x63\x6f\144\145"]["\154\x61\x62\145\154"] = __("\120\157\163\164\x63\x6f\x64\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\x6c\154\x69\x6e\147\x5f\x65\x6d\x61\x69\x6c"]["\x6c\141\142\145\x6c"] = __("\x45\x6d\141\x69\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\x6e\x20\142\x74\x6e\x2d\x62\x6c\x6f\x63\x6b\40\x62\164\x6e\x2d\x70\x72\151\155\141\162\x79\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\x6c\56\x77\157\x6f\143\157\155\155\x65\x72\143\x65\x2d\x73\150\x69\160\160\x69\156\147\55\155\x65\164\x68\x6f\x64\x73" => ["\143\154\141\163\x73" => "\154\151\163\x74\x2d\x67\x72\x6f\165\x70\40\x6c\151\x73\164\x2d\x67\162\157\165\x70\55\146\154\x75\163\150\x20\x62\x67\55\164\x72\x61\156\163\x70\x61\162\x65\x6e\164"], "\165\154\56\x77\x6f\157\x63\x6f\x6d\x6d\x65\x72\143\x65\55\x73\150\x69\x70\160\x69\x6e\147\x2d\x6d\x65\164\x68\157\x64\x73\x20\154\141\x62\x65\154" => ["\x63\154\x61\163\163" => "\155\x2d\x30"], "\165\x6c\56\x77\157\x6f\x63\157\155\155\145\x72\x63\x65\55\163\150\151\x70\160\151\x6e\x67\x2d\155\145\x74\x68\157\144\163\40\x6c\x69" => ["\x63\154\x61\163\163" => "\154\x69\x73\164\x2d\147\x72\157\x75\160\55\x69\x74\x65\155\40\x70\x79\x2d\x31\40\x70\170\x2d\60"]]; } public function umooigokeuauqqsw() : array { return ["\144\154\x2e\166\141\162\151\141\x74\x69\157\x6e" => ["\x63\154\x61\x73\163" => "\144\55\x66\x6c\x65\x78\x20\x6d\55\141\165\x74\x6f"], "\144\x6c\56\166\x61\162\x69\141\x74\151\x6f\x6e\x20\160" => ["\x63\x6c\x61\163\x73" => "\155\142\x2d\x30"], "\144\x6c\x2e\166\x61\x72\x69\x61\164\x69\157\x6e\x20\x64\144" => ["\x63\x6c\x61\163\x73" => "\155\142\x2d\x30"], "\144\x6c\56\x76\x61\x72\x69\x61\164\151\157\x6e\40\x64\164" => ["\143\154\141\x73\x73" => "\167\55\x6c\x67\55\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\x66\157\162\155\x2d\x72\x6f\x77" => ["\x63\x6c\x61\163\163" => "\x66\x6f\162\x6d\x2d\x72\157\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\157\157\x63\157\155\x6d\x65\x72\143\145\55{$eaoumsseceiowgsk}\x2d\x66\x69\145\x6c\144\x73\x5f\x5f\146\x69\x65\x6c\144\55\167\x72\141\x70\160\145\162\40\x3e\x20\x70", ["\143\154\x61\x73\163" => "\162\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\x62\x72"]); $ggauoeuaesiymgee = ["\x2e\x69\x73\55\x69\x6e\166\141\x6c\151\144\x20\151\156\x70\x75\164" => ["\143\154\141\x73\x73" => "\162\145\161\x75\x69\x72\x65\144\x2d\151\156\160\x75\164"], "\56\x69\163\x2d\151\x6e\x76\x61\154\x69\144\x20\163\x65\x6c\145\x63\164" => ["\x63\x6c\141\x73\x73" => "\162\x65\161\165\x69\162\x65\144\x2d\x69\156\160\x75\164"], "\x73\x65\x6c\145\143\x74\54\x20\151\x6e\160\x75\x74" => ["\x63\154\x61\163\163" => "\x66\157\162\155\55\143\157\156\164\162\157\154"], "\x23\x62\x69\154\154\151\156\147\x5f\x66\151\162\x73\164\x5f\156\x61\x6d\145\137\146\151\145\154\144" => ["\143\154\x61\x73\x73" => "\143\x6f\x6c\55\x6d\144\x2d\x36"], "\x23\142\151\x6c\154\151\x6e\x67\137\x6c\141\163\164\x5f\x6e\141\155\145\x5f\146\151\x65\x6c\x64" => ["\143\x6c\141\x73\163" => "\x63\157\154\x2d\155\144\55\66"], "\43\142\x69\154\154\x69\x6e\x67\137\160\150\x6f\156\145\137\146\151\145\154\144" => ["\143\x6c\141\x73\x73" => "\143\157\x6c\x2d\x6d\144\55\66"], "\43\142\151\154\154\151\x6e\x67\x5f\155\x6f\x62\151\154\x65\x5f\x66\151\x65\x6c\x64" => ["\x63\154\141\x73\163" => "\143\x6f\x6c\55\155\x64\55\x36"], "\43\x62\x69\154\x6c\x69\x6e\x67\x5f\143\x6f\155\160\x61\x6e\x79\137\146\151\145\154\144" => ["\x63\x6c\141\x73\x73" => "\143\157\154\55\x6d\144\55\66"], "\x23\142\151\x6c\154\x69\156\147\137\x63\151\x74\x79\x5f\x66\x69\145\154\x64" => ["\143\x6c\x61\x73\x73" => "\143\157\x6c\55\x6d\144\x2d\66"], "\x23\x62\x69\154\x6c\x69\x6e\147\137\163\x74\x61\164\x65\x5f\146\x69\x65\x6c\x64" => ["\x63\154\141\163\x73" => "\143\157\154\55\x6d\144\x2d\66"], "\43\142\151\154\x6c\x69\156\x67\137\x65\x6d\141\151\154\137\146\x69\145\154\x64" => ["\143\x6c\141\163\163" => "\143\157\154\55\x6d\144\55\66"], "\x23\142\151\x6c\154\151\156\147\137\x70\x6f\163\164\143\157\x64\x65\x5f\146\151\x65\x6c\144" => ["\143\154\x61\x73\x73" => "\143\157\x6c\55\155\144\x2d\x36"], "\43\x62\151\x6c\154\151\156\147\137\160\157\x73\x74\x63\157\x64\145\x5f\x66\x69\145\x6c\x64\40\x69\156\160\165\x74" => ["\x63\154\141\x73\x73" => "\144\151\162\145\x63\x74\x69\157\x6e\55\154\x74\x72"], "\x23\x63\x75\163\x74\157\x6d\x65\x72\x5f\144\145\x74\141\151\154\x73\40\x69\x6e\160\165\x74" => ["\x63\154\x61\163\x73" => "\146\x6f\x72\x6d\x2d\143\157\x6e\x74\x72\x6f\154"], "\x2e\x77\x6f\157\143\157\x6d\155\145\162\143\x65\55{$eaoumsseceiowgsk}\x2d\146\151\145\x6c\x64\163\x5f\137\x66\x69\x65\154\x64\55\x77\x72\x61\x70\x70\x65\x72\x20\x70" => ["\x63\154\141\163\x73" => "\146\157\162\155\55\x67\x72\157\x75\160\40\143\x6f\x6c\x2d\61\62"], "\x70" => ["\x63\154\141\x73\163" => "\155\142\x2d\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
