<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624218e50ab26             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\x73\x68\142\x6f\141\162\x64" => IconFontawesomeInterface::ecwsqqmyqyiyaqmg, "\157\x72\144\x65\162\x73" => IconFontawesomeInterface::aaimaiciamyiswsy, "\144\x6f\x77\x6e\x6c\x6f\x61\144\x73" => IconFontawesomeInterface::qwssukegewagecki, "\x65\144\151\164\55\141\x64\x64\x72\x65\163\x73" => IconFontawesomeInterface::cismwmmymsgoswuo, "\160\x61\171\155\x65\156\164\x2d\x6d\x65\164\150\157\144\x73" => IconFontawesomeInterface::yeqamuyomoqsqoak, "\x65\x64\151\x74\55\141\x63\x63\x6f\165\x6e\164" => IconFontawesomeInterface::aqykgqywgikckyee, "\x63\x75\163\164\x6f\155\x65\162\55\154\157\x67\x6f\x75\164" => IconFontawesomeInterface::suecqgqeiockiwmw]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconFontawesomeInterface::aqaocgsqseeqmoii); } protected bool $isGridView = false; public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\x6f\157\143\x6f\x6d\155\145\162\x63\x65\137\x6c\x6f\157\x70\137\x70\162\x6f\x64\x75\x63\164\x5f\x6c\x69\156\153", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\x6c\141\163\x73" => "\164\145\170\x74\55\144\x65\143\x6f\x72\141\164\x69\157\156\x2d\156\x6f\156\x65\40\x74\145\x78\x74\x2d\x6d\165\164\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x72\x69\143\145\x73" => [], "\160\x72\x6f\144\165\x63\x74" => '', "\x74\144\137\143\x6c\141\x73\x73" => '', "\x74\x72\137\143\154\x61\x73\163" => '', "\x74\x68\x5f\x63\x6c\x61\163\163" => "\164\145\170\x74\x2d\147\x72\141\x79\55\70\x30\60\x20\x70\171\x2d\x32", "\x68\x61\x73\137\x74\x69\x74\x6c\x65" => true, "\164\x61\x62\x6c\145\137\x63\x6c\x61\163\163" => "\155\142\x2d\65"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\x72\157\x64\165\x63\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x69\143\x65\163", false); if (!$product) { goto yqykqysmiquwoasu; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto ayyweymyuuiauamo; yqykqysmiquwoasu: global $product; ayyweymyuuiauamo: if (!$product instanceof WC_Product) { goto qqewoyookaskiuek; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto iggyqogweyosuikc; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\x6f\x6f\143\x6f\x6d\x6d\145\x72\143\x65\x2d\x50\x72\151\143\145\55\143\165\x72\162\x65\x6e\143\171\x53\171\155\142\157\154" => ["\143\x6c\x61\163\x73" => "\x66\x6f\x6e\x74\55\61\x33"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto mosqsmqimqgqoase; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); mosqsmqimqgqoase: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\x6e\x73"); if ($eukiyocmgugiioei) { goto ygcsmkuycoagwyou; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $uiiuuaeiyecmiouc["\x72\x65\x67\165\154\141\x72\137\160\x72\x69\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto omugkkesagcyagmk; } $uiiuuaeiyecmiouc["\144\x69\x73\143\157\165\x6e\164"] = $this->yqauycsoymimeise($product); omugkkesagcyagmk: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\151\163\x63\157\165\156\164\x5f\145\x78\160\151\162\x65"] = $this->sscegwueamckwmcy("\167\157\157\143\x6f\155\155\145\162\143\x65\137\x70\x72\157\144\x75\143\x74\137\x64\x69\x73\143\x6f\165\156\x74\137\x65\170\160\151\x72\x65\137\150\x74\155\x6c", '', ["\x70\162\x6f\x64\165\143\164" => $product]); kqksuugcgsyeoayy: $uiiuuaeiyecmiouc["\163\141\154\145\x5f\x70\162\x69\143\145"] = $eeeyyekmaesysegc; iggyqogweyosuikc: qqewoyookaskiuek: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\x65\147\165\154\141\162\x5f\160\162\x69\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\x65\x67\165\x6c\x61\162\40\x50\x72\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto miyqyeiwquwsacsm; case "\163\141\154\x65\x5f\160\x72\151\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\x61\x6c\145\40\120\x72\x69\x63\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto miyqyeiwquwsacsm; case "\144\151\x73\x63\157\x75\x6e\x74\x5f\x65\170\x70\151\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\x63\157\x75\x6e\x74\x20\x45\170\x70\151\162\x61\x74\151\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto miyqyeiwquwsacsm; case "\x64\151\x73\x63\157\165\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\163\x63\x6f\165\156\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto miyqyeiwquwsacsm; } eegqyykygiccaoeo: miyqyeiwquwsacsm: if (!$aumscagymwyyicag) { goto ywqgcegomwaiuquc; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; ywqgcegomwaiuquc: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\155\x65\x74\141\144\141\164\141\x5f\x72\145\x6e\144\x65\x72"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x69\x74\x65\155\x73" => $oammesyieqmwuwyi, "\164\145\x6d\160\x6c\x61\164\145" => $this->eskggqsasgsiommy("\160\x72\151\143\x65")])); wmmggowmigekyoso: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto soqqemyioggmoakg; } woocommerce_template_loop_add_to_cart(); goto acaqummmoyiemqss; soqqemyioggmoakg: woocommerce_template_single_add_to_cart(); acaqummmoyiemqss: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto oqugqwcyomiaaoqu; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\x6f\144\x75\x63\164\x5f\x63\x61\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eeqesooyqagwawae; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\x65\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\x61\x73\163" => "\x70\162\x6f\144\x75\x63\x74\55\x63\141\164\145\x67\x6f\162\x79\40\x68\x6f\x76\145\162\55\x70\162\151\155\141\162\x79\x20\146\157\x6e\164\55\61\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x49\156\x20\x43\x61\x74\x65\147\157\162\171\x3a\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\x61\x73\163" => "\x74\x65\170\164\x2d\147\x72\141\x79\x2d\x36\60\x30"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconFontawesomeInterface::usaocmsseuquaqsu, ["\143\x6c\141\x73\163" => "\x69\x63\x6f\x6e\x2d\163\155\x20\155\162\55\62"]); $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\x6c\x61\163\163" => "\x64\x2d\x66\x6c\x65\x78"], $wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw); if (!$koaqeegoeiaiccse) { goto suswcqoyyqkkquuo; } echo $nsmgceoqaqogqmuw; suswcqoyyqkkquuo: eeqesooyqagwawae: oqugqwcyomiaaoqu: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = "\x76\x69\x65\167") { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === "\166\x69\x65\x77") { goto foeeqckqsyockkak; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iekumemscwieugqw; foeeqckqsyockkak: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\x63\154\141\x73\163" => "\x70\x72\x69\143\x65\55\144\x69\x73\143\x6f\x75\156\164\x2d\141\155\x6f\x75\x6e\x74\40\164\145\170\164\x2d\x64\x61\x6e\147\x65\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\143\x5f\x70\x72\x69\x63\x65\137\x64\x69\163\x63\x6f\165\156\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); iekumemscwieugqw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = "\x76\x69\145\167") { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto usquiuuyiyqaeyiu; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto hoeeyiowekaeemko; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; hoeeyiowekaeemko: if (!($mgkceomocowocqyo === "\x76\151\x65\167")) { goto kymkucucyeoeikim; } $wewsywccwwomowkw = $this->sscegwueamckwmcy("\167\x63\x5f\x70\x72\x69\x63\x65\137\x64\151\x73\x63\157\x75\x6e\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); kymkucucyeoeikim: usquiuuyiyqaeyiu: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\145\161\x75\x69\x72\x65\144"]) && $aiowsaccomcoikus["\x72\x65\161\165\151\162\x65\x64"])) { goto uqqaiagaeqgqgaiy; } $aiowsaccomcoikus["\143\x6c\141\x73\163"] = ["\x69\x73\55\x69\x6e\166\141\154\151\x64"]; uqqaiagaeqgqgaiy: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; uguigkcmukuouway: } qicwaskssogcokgm: unset($ikgwqyuyckaewsow["\142\151\x6c\x6c\151\156\x67\137\143\157\x75\156\164\162\171"]); unset($ikgwqyuyckaewsow["\142\151\154\154\151\x6e\147\137\141\x64\144\x72\x65\163\x73\137\62"]); $ikgwqyuyckaewsow["\x62\151\x6c\154\151\x6e\x67\x5f\x73\x74\x61\164\145"]["\x70\x72\151\x6f\162\151\164\171"] = 60; $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\x69\156\147\x5f\143\x69\x74\171"]["\160\x72\x69\157\162\x69\x74\171"] = 70; $ikgwqyuyckaewsow["\142\151\154\154\151\156\147\x5f\141\144\144\x72\145\163\163\137\61"]["\160\162\x69\157\x72\151\x74\171"] = 80; $ikgwqyuyckaewsow["\142\x69\x6c\x6c\x69\x6e\147\x5f\145\155\x61\x69\154"]["\160\162\151\x6f\x72\x69\x74\171"] = 98; $ikgwqyuyckaewsow["\x62\x69\x6c\154\151\156\147\137\160\x6f\x73\164\x63\157\144\x65"]["\154\141\x62\x65\x6c"] = __("\x50\x6f\163\x74\x63\x6f\x64\x65", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\151\x6c\x6c\x69\x6e\x67\x5f\x65\x6d\x61\151\x6c"]["\x6c\141\142\145\154"] = __("\105\155\141\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\156\40\142\x74\156\55\x62\x6c\157\x63\153\x20\142\164\x6e\x2d\x70\x72\151\x6d\x61\x72\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\x6c\56\x77\157\x6f\x63\x6f\155\155\145\x72\143\x65\x2d\x73\150\x69\x70\160\x69\x6e\147\x2d\155\145\x74\x68\x6f\x64\163" => ["\143\154\x61\x73\x73" => "\154\151\163\x74\55\x67\162\x6f\165\x70\40\x6c\151\x73\x74\55\x67\162\x6f\x75\160\55\146\154\165\x73\150\x20\142\x67\x2d\164\162\141\x6e\163\160\141\x72\145\156\x74"], "\x75\154\56\x77\157\x6f\x63\157\x6d\x6d\x65\162\143\x65\x2d\x73\150\151\x70\x70\x69\x6e\x67\55\155\x65\164\150\157\x64\163\x20\x6c\141\142\x65\154" => ["\x63\154\141\x73\x73" => "\155\x2d\60"], "\x75\154\x2e\x77\157\157\143\x6f\x6d\x6d\145\162\143\x65\55\x73\x68\x69\160\x70\x69\156\x67\55\155\145\x74\150\x6f\x64\163\x20\x6c\x69" => ["\x63\154\x61\x73\163" => "\154\x69\x73\164\x2d\147\162\157\165\160\55\x69\164\145\155\40\x70\x79\55\x31\x20\x70\x78\55\60"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\166\x61\162\x69\x61\x74\151\157\156" => ["\x63\x6c\x61\163\163" => "\144\x2d\x66\154\x65\170\x20\x6d\55\141\165\x74\x6f"], "\x64\x6c\56\166\141\162\x69\141\x74\x69\157\156\40\160" => ["\143\x6c\141\163\163" => "\x6d\x62\x2d\60"], "\144\x6c\x2e\x76\x61\162\151\x61\164\x69\x6f\x6e\x20\x64\x64" => ["\x63\x6c\x61\x73\x73" => "\155\x62\55\x30"], "\x64\x6c\x2e\x76\141\x72\x69\141\x74\151\x6f\x6e\x20\144\164" => ["\x63\154\141\163\x73" => "\x77\55\154\147\x2d\62\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\x66\x6f\x72\x6d\x2d\162\x6f\167" => ["\x63\x6c\x61\163\x73" => "\146\x6f\x72\x6d\55\x72\157\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\x77\x6f\x6f\143\157\155\155\x65\162\x63\145\x2d{$eaoumsseceiowgsk}\x2d\x66\151\x65\154\x64\163\137\x5f\146\151\x65\x6c\144\55\x77\x72\x61\160\160\x65\x72\40\76\x20\x70", ["\x63\x6c\x61\163\163" => "\x72\157\x77"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\x62\142\x72"]); $ggauoeuaesiymgee = ["\x2e\151\163\55\151\x6e\166\x61\154\x69\x64\40\x69\156\160\x75\164" => ["\x63\x6c\x61\x73\163" => "\162\145\x71\165\151\162\145\x64\x2d\x69\x6e\160\x75\164"], "\x2e\151\x73\55\151\156\166\x61\x6c\151\144\x20\163\145\x6c\x65\143\164" => ["\143\x6c\x61\163\x73" => "\x72\x65\x71\165\151\162\145\144\x2d\151\156\160\x75\x74"], "\x73\145\x6c\145\143\x74\x2c\x20\x69\x6e\x70\165\x74" => ["\143\x6c\141\x73\163" => "\146\x6f\162\155\x2d\143\x6f\156\164\x72\x6f\154"], "\x23\142\x69\154\154\x69\x6e\147\x5f\146\x69\x72\163\164\x5f\x6e\141\155\145\x5f\146\x69\x65\154\144" => ["\x63\x6c\141\x73\x73" => "\x63\x6f\x6c\x2d\155\144\x2d\x36"], "\43\142\151\x6c\154\x69\x6e\x67\x5f\154\141\163\x74\x5f\156\x61\x6d\145\137\146\x69\x65\x6c\144" => ["\143\154\141\x73\x73" => "\143\157\x6c\55\x6d\144\55\x36"], "\x23\142\x69\x6c\x6c\151\156\x67\x5f\x70\x68\157\156\145\137\146\151\x65\154\144" => ["\x63\x6c\141\163\x73" => "\143\157\154\x2d\155\x64\55\x36"], "\x23\x62\x69\154\154\x69\x6e\x67\137\155\157\x62\151\154\145\x5f\146\x69\x65\x6c\x64" => ["\143\x6c\141\x73\x73" => "\143\157\154\x2d\155\144\55\66"], "\x23\142\151\x6c\154\x69\156\147\x5f\x63\x6f\x6d\160\x61\156\x79\137\146\x69\x65\154\144" => ["\x63\154\141\163\x73" => "\143\x6f\x6c\x2d\155\144\x2d\x36"], "\43\x62\151\154\x6c\x69\x6e\147\137\x63\151\x74\x79\137\x66\151\x65\x6c\144" => ["\x63\x6c\x61\163\163" => "\x63\x6f\x6c\55\x6d\x64\x2d\x36"], "\x23\142\x69\x6c\154\151\156\147\x5f\x73\x74\x61\164\145\137\146\x69\145\154\x64" => ["\x63\154\x61\x73\163" => "\143\x6f\154\55\155\x64\55\x36"], "\43\142\x69\x6c\x6c\x69\x6e\147\x5f\145\x6d\141\151\x6c\137\x66\151\145\x6c\x64" => ["\x63\154\141\x73\163" => "\143\x6f\154\55\155\x64\55\66"], "\x23\x62\x69\x6c\x6c\x69\156\x67\x5f\x70\157\163\x74\143\157\144\x65\x5f\x66\151\x65\x6c\x64" => ["\x63\154\141\163\x73" => "\x63\x6f\x6c\x2d\155\144\55\x36"], "\x23\x62\x69\x6c\154\x69\x6e\x67\137\x70\x6f\163\164\x63\157\144\x65\x5f\146\151\x65\154\144\40\x69\156\x70\x75\164" => ["\x63\x6c\x61\163\x73" => "\144\x69\x72\x65\143\x74\x69\x6f\x6e\55\x6c\164\x72"], "\x23\143\x75\x73\x74\x6f\155\x65\162\x5f\x64\x65\x74\141\x69\x6c\x73\x20\x69\x6e\160\165\164" => ["\143\x6c\x61\x73\163" => "\x66\157\162\x6d\x2d\x63\157\156\164\x72\157\x6c"], "\56\167\157\x6f\x63\157\x6d\x6d\x65\x72\143\x65\x2d{$eaoumsseceiowgsk}\55\146\151\x65\x6c\144\x73\x5f\x5f\x66\x69\x65\x6c\144\x2d\167\x72\141\x70\x70\x65\x72\x20\160" => ["\x63\154\x61\x73\x73" => "\x66\157\x72\155\55\147\x72\x6f\x75\x70\x20\143\x6f\154\x2d\61\x32"], "\x70" => ["\143\154\141\163\x73" => "\155\x62\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
