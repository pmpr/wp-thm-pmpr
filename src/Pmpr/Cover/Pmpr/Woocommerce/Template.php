<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aed09d95dd8             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\163\x68\x62\x6f\141\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\144\x65\x72\163" => IconInterface::goqumcwkcuygcaui, "\144\157\167\x6e\x6c\x6f\141\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\x2d\141\x64\144\162\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\160\141\x79\x6d\145\x6e\164\55\155\145\x74\x68\157\x64\163" => IconInterface::acciucugwcskkwmi, "\x65\x64\x69\164\x2d\141\x63\x63\157\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\165\x73\164\x6f\x6d\x65\162\55\x6c\x6f\147\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\x6d\145\162\x63\145\137\154\157\157\x70\137\x70\162\x6f\x64\x75\143\x74\x5f\x6c\151\x6e\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\x6c\141\163\x73" => "\x74\145\170\x74\x2d\144\145\x63\157\x72\x61\164\x69\157\156\x2d\156\x6f\156\x65\x20\164\145\x78\x74\55\x6d\x75\x74\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\162\151\x63\x65\163" => [], "\x70\x72\x6f\x64\165\x63\x74" => '', "\x74\144\x5f\x63\154\141\x73\163" => '', "\164\162\x5f\x63\154\x61\x73\x73" => '', "\x74\x68\137\143\x6c\141\163\x73" => "\164\145\170\164\55\x67\162\141\x79\x2d\x38\60\60\x20\160\171\55\62", "\150\x61\x73\137\x74\151\x74\154\145" => true, "\x74\x61\x62\x6c\145\137\x63\154\x61\163\x73" => "\x6d\x62\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\x72\x6f\x64\x75\x63\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\x69\x63\x65\163", false); if (!$product) { goto acaqummmoyiemqss; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto suswcqoyyqkkquuo; acaqummmoyiemqss: global $product; suswcqoyyqkkquuo: if (!$product instanceof WC_Product) { goto kymkucucyeoeikim; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto hoeeyiowekaeemko; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\56\167\157\157\143\x6f\155\155\x65\162\143\x65\x2d\120\162\151\143\x65\55\143\165\162\x72\145\x6e\143\171\x53\171\155\142\157\154" => ["\143\154\x61\163\x73" => "\x66\x6f\x6e\x74\55\x31\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto eeqesooyqagwawae; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); eeqesooyqagwawae: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\x6e\163"); if ($eukiyocmgugiioei) { goto foeeqckqsyockkak; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto iekumemscwieugqw; foeeqckqsyockkak: $uiiuuaeiyecmiouc["\162\x65\147\165\x6c\141\x72\137\160\x72\151\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto oqugqwcyomiaaoqu; } $uiiuuaeiyecmiouc["\x64\151\163\143\157\x75\x6e\164"] = $this->yqauycsoymimeise($product); oqugqwcyomiaaoqu: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\163\143\x6f\165\x6e\x74\137\x65\x78\160\151\162\145"] = $this->sscegwueamckwmcy("\x77\157\157\x63\157\x6d\155\x65\x72\143\x65\x5f\x70\x72\157\144\x75\143\164\137\144\x69\x73\143\x6f\x75\156\164\137\145\x78\160\151\162\145\137\x68\164\155\154", '', ["\x70\x72\x6f\144\x75\x63\164" => $product]); iekumemscwieugqw: $uiiuuaeiyecmiouc["\163\x61\x6c\x65\137\x70\162\151\x63\x65"] = $eeeyyekmaesysegc; hoeeyiowekaeemko: kymkucucyeoeikim: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto gaomwagkcciesyqy; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\147\165\154\x61\162\137\160\162\151\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\145\147\x75\x6c\x61\x72\x20\x50\162\x69\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto uguigkcmukuouway; case "\x73\141\154\x65\x5f\160\162\x69\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\154\x65\x20\120\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto uguigkcmukuouway; case "\144\x69\x73\x63\x6f\x75\x6e\164\137\x65\x78\x70\151\x72\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\x73\143\157\165\x6e\x74\40\x45\x78\160\x69\162\x61\x74\151\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto uguigkcmukuouway; case "\x64\151\163\143\157\165\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\157\165\156\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto uguigkcmukuouway; } uqqaiagaeqgqgaiy: uguigkcmukuouway: if (!$aumscagymwyyicag) { goto esuiysskoweawsue; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; esuiysskoweawsue: qicwaskssogcokgm: } usquiuuyiyqaeyiu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\144\141\164\141\137\x72\x65\156\144\x65\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\162\x69\143\145")])); gaomwagkcciesyqy: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto aegysmeecgcgayyw; } woocommerce_template_loop_add_to_cart(); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: woocommerce_template_single_add_to_cart(); suqkuqygkkgwyaie: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto skkamseieeusycye; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\x72\x6f\144\x75\143\164\137\x63\x61\x74"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto wiysogeqqwgioyka; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\141\x73\163" => "\160\x72\x6f\x64\x75\143\164\x2d\x63\x61\164\145\x67\157\x72\171\40\x68\x6f\x76\x65\x72\55\160\162\151\x6d\x61\162\x79\x20\x66\x6f\156\164\55\61\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\103\141\164\145\x67\157\162\171\72\x20\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\141\x73\x73" => "\164\x65\170\x74\55\x67\162\141\x79\x2d\66\x30\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\154\x61\x73\x73" => "\151\x63\157\156\x2d\x73\155\40\x6d\162\x2d\x32\40\155\171\x2d\141\165\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\x6c\141\x73\163" => "\144\55\x66\x6c\x65\x78"]); if (!$koaqeegoeiaiccse) { goto soaccwqimeksgwiw; } echo $nsmgceoqaqogqmuw; soaccwqimeksgwiw: wiysogeqqwgioyka: skkamseieeusycye: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto cgiscsqwwgqqaeqi; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\143\154\x61\163\x73" => "\x70\x72\x69\143\x65\55\144\151\x73\143\x6f\x75\x6e\164\55\x61\x6d\x6f\x75\156\164\x20\x74\145\170\164\x2d\144\x61\156\x67\145\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\151\x63\x65\x5f\x64\151\x73\x63\x6f\165\x6e\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); syiqkaasoueowwui: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto cmegwsegsosyqcai; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto giaacoqqqsekcayy; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; giaacoqqqsekcayy: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ewymsmkkiksgwysk; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x72\151\143\145\x5f\144\x69\x73\x63\157\x75\x6e\x74"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ewymsmkkiksgwysk: cmegwsegsosyqcai: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\x65\161\165\x69\x72\145\x64"]) && $aiowsaccomcoikus["\x72\145\x71\165\151\x72\145\144"])) { goto ooeausyowguqicuo; } $aiowsaccomcoikus["\143\154\x61\163\x73"] = ["\151\x73\55\x69\156\x76\141\x6c\151\144"]; ooeausyowguqicuo: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; gkyawqqcmigqgaiq: } wmywuusgukmmaams: unset($ikgwqyuyckaewsow["\142\151\x6c\154\151\x6e\147\137\x63\157\165\x6e\164\x72\171"]); unset($ikgwqyuyckaewsow["\142\x69\x6c\154\151\156\x67\137\141\144\x64\x72\x65\163\x73\137\62"]); $ikgwqyuyckaewsow["\x62\151\154\154\151\156\147\137\163\x74\141\164\145"]["\x70\x72\x69\157\162\x69\x74\171"] = 60; $ikgwqyuyckaewsow["\142\151\x6c\x6c\151\x6e\x67\137\x63\151\164\171"]["\160\x72\151\x6f\162\x69\164\171"] = 70; $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\156\x67\137\141\x64\144\x72\145\163\x73\x5f\x31"]["\160\x72\x69\x6f\x72\x69\164\x79"] = 80; $ikgwqyuyckaewsow["\142\151\154\154\x69\156\147\137\x65\155\x61\151\154"]["\x70\162\x69\157\x72\151\x74\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\154\154\x69\x6e\147\137\x70\x6f\x73\x74\x63\x6f\144\145"]["\154\141\x62\145\x6c"] = __("\120\157\163\x74\143\x6f\x64\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\154\154\151\x6e\x67\137\145\155\x61\x69\154"]["\154\141\x62\x65\x6c"] = __("\x45\x6d\x61\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\x20\142\164\156\x2d\x62\x6c\x6f\143\153\40\142\164\x6e\x2d\x70\162\x69\x6d\x61\x72\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\x6c\x2e\167\157\x6f\x63\x6f\155\x6d\x65\162\x63\x65\x2d\163\150\x69\x70\160\151\156\147\x2d\155\145\164\x68\x6f\144\x73" => ["\143\x6c\x61\x73\x73" => "\x6c\151\x73\164\55\x67\162\157\165\160\40\154\151\x73\164\x2d\x67\x72\157\165\160\x2d\146\154\165\x73\x68\40\142\x67\55\164\x72\141\x6e\163\160\x61\x72\145\x6e\164"], "\x75\x6c\56\x77\157\157\143\157\x6d\x6d\x65\x72\x63\145\x2d\x73\150\151\160\160\151\156\x67\x2d\155\145\164\x68\157\144\x73\40\154\x61\x62\x65\x6c" => ["\143\154\x61\163\163" => "\x6d\55\x30"], "\165\x6c\x2e\x77\x6f\x6f\143\157\155\155\x65\162\143\145\x2d\x73\150\x69\160\160\x69\x6e\147\55\x6d\x65\164\150\157\144\163\40\x6c\151" => ["\143\154\x61\x73\x73" => "\154\151\163\x74\55\147\x72\157\165\160\x2d\151\164\145\155\40\x70\x79\55\61\x20\x70\x78\55\60"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\x2e\x76\141\162\151\x61\164\151\x6f\156" => ["\143\154\x61\x73\163" => "\x64\x2d\146\x6c\x65\x78\40\155\55\x61\x75\x74\157"], "\144\x6c\x2e\166\x61\162\151\x61\x74\x69\x6f\156\40\x70" => ["\143\154\141\x73\x73" => "\x6d\142\x2d\x30"], "\144\x6c\56\166\x61\162\x69\x61\x74\151\x6f\x6e\x20\144\144" => ["\x63\154\x61\x73\163" => "\x6d\142\x2d\x30"], "\144\154\56\166\x61\162\151\x61\x74\151\157\x6e\x20\144\164" => ["\x63\x6c\141\163\x73" => "\x77\55\154\x67\55\x32\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\x66\157\162\155\x2d\x72\157\167" => ["\143\154\141\163\x73" => "\146\157\162\x6d\55\162\157\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\x77\157\x6f\x63\157\x6d\155\145\x72\143\x65\x2d{$eaoumsseceiowgsk}\55\146\151\x65\x6c\x64\x73\137\137\x66\x69\x65\154\x64\55\167\x72\x61\160\x70\145\x72\40\x3e\40\160", ["\x63\154\x61\163\163" => "\162\157\x77"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\142\x72"]); $ggauoeuaesiymgee = ["\56\151\x73\x2d\x69\156\166\x61\154\x69\x64\40\151\x6e\160\x75\164" => ["\143\154\141\163\x73" => "\162\145\161\x75\x69\162\x65\x64\55\x69\156\x70\165\x74"], "\x2e\x69\163\x2d\x69\x6e\166\x61\x6c\x69\144\40\x73\145\x6c\x65\x63\x74" => ["\x63\x6c\x61\x73\163" => "\x72\145\x71\x75\151\x72\145\x64\x2d\151\x6e\x70\165\164"], "\163\x65\154\145\143\x74\x2c\40\x69\x6e\160\x75\x74" => ["\143\154\141\x73\163" => "\x66\x6f\162\x6d\x2d\143\x6f\x6e\x74\162\157\x6c"], "\43\x62\151\154\154\151\x6e\147\137\146\151\x72\x73\x74\x5f\156\141\155\145\x5f\x66\151\145\x6c\144" => ["\143\x6c\141\x73\163" => "\143\157\x6c\55\x6d\x64\x2d\x36"], "\x23\x62\151\x6c\154\x69\156\147\137\154\x61\163\164\x5f\x6e\141\155\145\137\146\151\x65\154\x64" => ["\x63\x6c\141\x73\x73" => "\143\x6f\x6c\55\155\x64\x2d\x36"], "\43\142\151\x6c\x6c\x69\x6e\x67\x5f\x70\150\x6f\x6e\x65\137\x66\x69\x65\154\144" => ["\x63\154\x61\163\163" => "\143\157\x6c\x2d\155\144\x2d\x36"], "\43\142\151\x6c\x6c\x69\156\147\x5f\x6d\157\x62\151\x6c\x65\137\x66\x69\x65\154\144" => ["\x63\154\141\163\163" => "\x63\157\x6c\x2d\155\x64\55\x36"], "\x23\x62\151\154\154\x69\x6e\x67\137\x63\157\x6d\x70\141\x6e\171\x5f\x66\151\x65\154\x64" => ["\x63\x6c\141\x73\163" => "\x63\x6f\154\55\x6d\x64\x2d\x36"], "\x23\142\151\x6c\154\x69\x6e\147\137\143\x69\x74\x79\x5f\x66\151\x65\x6c\144" => ["\x63\x6c\x61\x73\x73" => "\143\x6f\154\x2d\155\x64\55\66"], "\43\142\151\x6c\154\151\156\147\x5f\163\164\x61\164\x65\x5f\146\x69\145\x6c\x64" => ["\x63\x6c\141\163\x73" => "\143\157\154\55\155\x64\55\x36"], "\43\x62\151\x6c\x6c\x69\x6e\x67\137\x65\155\141\151\154\x5f\146\151\x65\x6c\144" => ["\143\154\141\163\x73" => "\x63\157\x6c\x2d\155\144\x2d\x36"], "\x23\x62\151\154\154\151\x6e\147\x5f\x70\x6f\163\x74\x63\157\x64\145\x5f\x66\151\145\154\x64" => ["\x63\x6c\x61\163\163" => "\143\157\154\x2d\155\x64\55\x36"], "\x23\x62\x69\154\x6c\x69\156\147\137\160\x6f\163\x74\143\x6f\x64\145\x5f\146\151\x65\154\x64\40\151\x6e\160\165\x74" => ["\x63\154\141\163\x73" => "\144\x69\162\x65\143\x74\151\x6f\156\x2d\154\164\x72"], "\43\x63\165\x73\164\x6f\155\x65\162\137\x64\145\164\x61\151\x6c\163\x20\151\x6e\160\165\x74" => ["\x63\154\141\x73\163" => "\146\x6f\162\x6d\x2d\143\157\x6e\x74\162\x6f\154"], "\56\167\x6f\x6f\143\x6f\155\x6d\x65\x72\143\145\x2d{$eaoumsseceiowgsk}\55\x66\151\145\154\x64\163\137\137\x66\x69\145\154\144\55\x77\162\x61\x70\x70\x65\162\x20\x70" => ["\x63\x6c\x61\x73\x73" => "\146\157\x72\155\55\x67\162\x6f\x75\160\x20\x63\157\154\x2d\61\62"], "\160" => ["\143\154\x61\163\163" => "\155\142\55\x32"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
