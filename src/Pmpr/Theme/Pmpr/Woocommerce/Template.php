<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621ccb85d98a0             |
    |_______________________________________|
*/
 namespace Pmpr\Theme\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Theme\Woocommerce\Template as BaseClass; use Pmpr\Theme\Pmpr\Interfaces\CommonInterface; use Pmpr\Theme\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\x73\150\x62\x6f\x61\x72\144" => IconFontawesomeInterface::ecwsqqmyqyiyaqmg, "\157\x72\144\x65\x72\x73" => IconFontawesomeInterface::aaimaiciamyiswsy, "\x64\157\x77\156\x6c\x6f\141\144\x73" => IconFontawesomeInterface::qwssukegewagecki, "\145\144\x69\x74\x2d\141\x64\144\162\x65\163\x73" => IconFontawesomeInterface::cismwmmymsgoswuo, "\x70\141\171\155\145\156\x74\x2d\155\x65\x74\x68\x6f\144\163" => IconFontawesomeInterface::yeqamuyomoqsqoak, "\x65\x64\151\x74\x2d\x61\143\143\157\165\156\x74" => IconFontawesomeInterface::aqykgqywgikckyee, "\x63\x75\163\x74\157\x6d\x65\x72\x2d\x6c\157\147\x6f\x75\164" => IconFontawesomeInterface::suecqgqeiockiwmw]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconFontawesomeInterface::aqaocgsqseeqmoii); } protected bool $isGridView = false; public function __construct() { $this->isGridView = View::qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\x6f\143\x6f\x6d\x6d\145\x72\143\145\x5f\x6c\157\x6f\160\137\x70\x72\x6f\x64\165\143\x74\137\x6c\151\x6e\153", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\x61\163\163" => "\x74\x65\170\x74\55\144\x65\143\x6f\x72\141\164\x69\x6f\156\55\156\x6f\x6e\145\x20\164\x65\170\164\55\155\165\164\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x72\151\x63\x65\x73" => [], "\160\162\x6f\144\165\143\x74" => '', "\x74\x64\x5f\143\154\x61\163\x73" => '', "\x74\162\137\x63\x6c\x61\x73\163" => '', "\x74\x68\x5f\143\x6c\x61\163\x73" => "\164\145\170\x74\55\x67\162\141\171\x2d\70\60\x30\40\x70\171\55\x32", "\x68\x61\x73\137\164\x69\x74\x6c\x65" => true, "\164\141\x62\154\x65\137\143\154\x61\163\163" => "\155\142\x2d\65"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\157\x64\165\x63\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\x69\143\145\x73", false); if (!$product) { goto yqykqysmiquwoasu; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto ayyweymyuuiauamo; yqykqysmiquwoasu: global $product; ayyweymyuuiauamo: if (!$product instanceof WC_Product) { goto qqewoyookaskiuek; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto iggyqogweyosuikc; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\56\167\157\157\x63\157\155\155\x65\x72\x63\145\x2d\x50\162\151\x63\x65\x2d\x63\x75\x72\x72\x65\x6e\143\x79\123\171\x6d\142\157\x6c" => ["\143\x6c\141\x73\163" => "\x66\x6f\x6e\164\55\x31\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto mosqsmqimqgqoase; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); mosqsmqimqgqoase: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\145\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\x73"); if ($eukiyocmgugiioei) { goto ygcsmkuycoagwyou; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $uiiuuaeiyecmiouc["\162\145\x67\x75\154\x61\x72\x5f\160\x72\151\143\145"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto omugkkesagcyagmk; } $uiiuuaeiyecmiouc["\x64\x69\163\x63\x6f\x75\x6e\x74"] = $this->yqauycsoymimeise($product); omugkkesagcyagmk: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\x73\143\x6f\x75\x6e\164\x5f\145\x78\x70\x69\162\145"] = $this->sscegwueamckwmcy("\167\157\x6f\x63\x6f\x6d\x6d\x65\162\x63\145\x5f\160\x72\157\x64\x75\x63\x74\137\144\151\163\143\x6f\165\x6e\x74\137\145\170\160\151\x72\x65\137\x68\x74\x6d\x6c", '', ["\x70\x72\157\x64\165\x63\x74" => $product]); kqksuugcgsyeoayy: $uiiuuaeiyecmiouc["\163\141\x6c\145\137\x70\x72\151\143\x65"] = $eeeyyekmaesysegc; iggyqogweyosuikc: qqewoyookaskiuek: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\145\x67\x75\154\141\x72\137\160\162\x69\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\x67\165\x6c\141\x72\x20\x50\162\151\143\145", PR__THM__PMPR))->jyumyyugiwwiqomk(10); goto miyqyeiwquwsacsm; case "\x73\141\x6c\x65\137\160\162\151\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\x6c\145\x20\120\162\x69\143\145", PR__THM__PMPR))->jyumyyugiwwiqomk(25); goto miyqyeiwquwsacsm; case "\x64\x69\163\143\157\x75\156\x74\x5f\x65\170\x70\x69\162\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\x73\x63\x6f\x75\x6e\x74\x20\105\170\x70\151\x72\141\164\x69\x6f\x6e", PR__THM__PMPR))->jyumyyugiwwiqomk(20); goto miyqyeiwquwsacsm; case "\144\x69\x73\143\x6f\165\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\151\163\143\157\165\156\x74", PR__THM__PMPR))->jyumyyugiwwiqomk(15); goto miyqyeiwquwsacsm; } eegqyykygiccaoeo: miyqyeiwquwsacsm: if (!$aumscagymwyyicag) { goto ywqgcegomwaiuquc; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; ywqgcegomwaiuquc: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\144\x61\164\141\x5f\162\x65\x6e\x64\x65\162"), ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\151\164\145\x6d\x73" => $oammesyieqmwuwyi, "\164\145\155\x70\x6c\141\x74\145" => $this->eskggqsasgsiommy("\x70\162\151\143\x65")])); wmmggowmigekyoso: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto soqqemyioggmoakg; } woocommerce_template_loop_add_to_cart(); goto acaqummmoyiemqss; soqqemyioggmoakg: woocommerce_template_single_add_to_cart(); acaqummmoyiemqss: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto oqugqwcyomiaaoqu; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\x6f\144\165\143\x74\137\143\x61\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eeqesooyqagwawae; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\x61\163\x73" => "\x70\162\x6f\x64\x75\x63\164\x2d\x63\141\164\x65\147\157\162\x79\40\150\157\166\x65\162\55\160\162\x69\155\x61\162\x79\40\x66\x6f\x6e\164\x2d\61\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\103\141\164\x65\x67\x6f\x72\x79\72\40\45\x73", PR__THM__PMPR), $nsmgceoqaqogqmuw), ["\143\x6c\x61\x73\163" => "\x74\145\x78\x74\55\147\x72\141\x79\55\66\x30\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconFontawesomeInterface::usaocmsseuquaqsu, ["\143\154\x61\x73\x73" => "\151\x63\x6f\x6e\x2d\x73\155\x20\155\x72\55\x32"]); $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\x63\x6c\x61\163\x73" => "\144\55\x66\154\145\x78"], $wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw); if (!$koaqeegoeiaiccse) { goto suswcqoyyqkkquuo; } echo $nsmgceoqaqogqmuw; suswcqoyyqkkquuo: eeqesooyqagwawae: oqugqwcyomiaaoqu: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = "\x76\151\x65\167") { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === "\166\x69\145\x77") { goto foeeqckqsyockkak; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iekumemscwieugqw; foeeqckqsyockkak: $wewsywccwwomowkw = ManipulateHTML::uuccukgasskgimsq("\163\x70\141\x6e", ["\143\154\141\x73\163" => "\x70\162\x69\x63\145\55\x64\x69\163\x63\x6f\x75\156\164\55\141\155\157\x75\156\x74\40\x74\x65\170\164\x2d\144\141\x6e\x67\145\162"], $xgwukwqqaseqagay . "\45"); $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\x63\x5f\160\162\151\143\145\x5f\x64\x69\x73\143\157\x75\156\x74", $wewsywccwwomowkw, $xgwukwqqaseqagay); iekumemscwieugqw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = "\x76\x69\x65\167") { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto usquiuuyiyqaeyiu; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto hoeeyiowekaeemko; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; hoeeyiowekaeemko: if (!($mgkceomocowocqyo === "\166\x69\145\x77")) { goto kymkucucyeoeikim; } $wewsywccwwomowkw = $this->sscegwueamckwmcy("\x77\x63\x5f\160\x72\x69\x63\145\x5f\x64\x69\163\x63\157\165\156\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); kymkucucyeoeikim: usquiuuyiyqaeyiu: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\161\x75\x69\x72\x65\144"]) && $aiowsaccomcoikus["\x72\145\x71\165\151\162\x65\144"])) { goto uqqaiagaeqgqgaiy; } $aiowsaccomcoikus["\143\x6c\141\163\163"] = ["\151\x73\x2d\x69\x6e\x76\141\x6c\x69\x64"]; uqqaiagaeqgqgaiy: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; uguigkcmukuouway: } qicwaskssogcokgm: unset($ikgwqyuyckaewsow["\142\151\x6c\x6c\x69\x6e\x67\x5f\x63\x6f\165\x6e\x74\x72\x79"]); unset($ikgwqyuyckaewsow["\142\151\154\154\151\x6e\x67\137\x61\144\144\x72\x65\163\163\137\x32"]); $ikgwqyuyckaewsow["\142\151\154\x6c\x69\x6e\147\137\163\164\x61\x74\x65"]["\160\x72\151\157\x72\151\x74\x79"] = 60; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\156\x67\x5f\143\151\x74\x79"]["\x70\x72\x69\x6f\x72\151\x74\x79"] = 70; $ikgwqyuyckaewsow["\x62\x69\154\x6c\151\156\x67\137\141\x64\144\x72\x65\163\163\x5f\x31"]["\x70\162\x69\157\162\x69\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\151\x6e\x67\x5f\145\155\x61\x69\154"]["\160\x72\151\x6f\x72\151\164\171"] = 98; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\156\x67\x5f\x70\157\163\x74\x63\x6f\144\145"]["\x6c\x61\142\x65\x6c"] = __("\x50\x6f\x73\x74\x63\157\x64\145", PR__THM__PMPR); $ikgwqyuyckaewsow["\142\151\154\x6c\x69\156\147\x5f\145\x6d\x61\151\154"]["\x6c\141\x62\145\154"] = __("\105\155\141\x69\154", PR__THM__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\156\x20\142\x74\156\55\x62\154\x6f\x63\153\40\x62\164\x6e\55\x70\x72\x69\155\141\x72\x79\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\x75\154\x2e\167\157\x6f\143\157\x6d\x6d\145\x72\x63\x65\x2d\163\x68\x69\x70\x70\151\156\147\x2d\155\145\x74\x68\x6f\144\163" => ["\143\x6c\x61\x73\163" => "\x6c\x69\163\x74\x2d\x67\162\x6f\x75\x70\x20\154\x69\x73\x74\x2d\x67\x72\157\x75\160\x2d\x66\x6c\165\x73\x68\40\142\147\55\x74\x72\141\x6e\x73\160\x61\162\x65\x6e\x74"], "\165\154\x2e\167\157\x6f\143\157\155\x6d\145\x72\143\x65\x2d\x73\150\x69\160\x70\x69\x6e\147\55\x6d\145\x74\x68\x6f\x64\163\x20\154\141\x62\x65\154" => ["\143\154\x61\163\x73" => "\155\x2d\x30"], "\165\154\56\x77\157\157\143\157\155\155\145\x72\143\x65\55\x73\150\x69\x70\x70\151\156\x67\55\x6d\145\164\150\x6f\x64\x73\x20\154\x69" => ["\x63\x6c\141\x73\x73" => "\154\x69\163\164\x2d\147\x72\157\165\160\x2d\151\x74\145\155\x20\x70\x79\x2d\61\x20\x70\x78\55\60"]]; } public function umooigokeuauqqsw() : array { return ["\144\x6c\x2e\166\141\162\151\x61\164\x69\x6f\156" => ["\143\154\x61\x73\163" => "\x64\55\146\154\x65\170\40\155\x2d\141\165\164\x6f"], "\144\154\56\x76\x61\162\x69\141\x74\x69\x6f\x6e\40\x70" => ["\x63\x6c\141\x73\x73" => "\x6d\x62\x2d\60"], "\144\x6c\56\x76\x61\162\x69\141\164\151\x6f\156\x20\144\x64" => ["\x63\x6c\x61\163\x73" => "\x6d\142\55\x30"], "\144\154\x2e\166\x61\162\x69\141\164\x69\157\x6e\x20\x64\x74" => ["\x63\154\141\163\163" => "\167\x2d\x6c\147\55\x32\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\157\162\155\55\x72\x6f\x77" => ["\x63\154\x61\x73\x73" => "\x66\x6f\x72\155\x2d\x72\157\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\x6f\x6f\143\157\x6d\x6d\x65\x72\x63\145\x2d{$eaoumsseceiowgsk}\x2d\146\x69\145\x6c\144\163\137\x5f\x66\151\145\154\x64\x2d\167\x72\x61\x70\x70\x65\162\x20\76\x20\x70", ["\x63\x6c\x61\163\163" => "\x72\x6f\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\x62\x62\x72"]); $ggauoeuaesiymgee = ["\x2e\151\163\x2d\151\156\166\141\x6c\x69\144\40\x69\156\160\165\164" => ["\143\154\141\163\163" => "\x72\x65\161\165\x69\162\x65\144\x2d\x69\x6e\160\x75\164"], "\x2e\151\163\55\151\156\x76\141\154\x69\x64\x20\163\x65\x6c\x65\x63\164" => ["\143\154\x61\163\163" => "\x72\x65\161\165\x69\x72\x65\x64\55\x69\156\160\x75\164"], "\x73\x65\x6c\x65\x63\x74\54\40\x69\x6e\x70\165\x74" => ["\x63\x6c\141\163\x73" => "\146\x6f\162\155\55\x63\x6f\156\x74\x72\157\154"], "\x23\142\151\154\154\151\156\x67\137\146\x69\162\163\x74\137\x6e\141\155\145\137\146\x69\145\154\x64" => ["\143\154\141\x73\163" => "\143\157\154\55\x6d\144\55\66"], "\43\x62\151\x6c\x6c\151\x6e\147\137\154\x61\163\x74\x5f\x6e\141\155\x65\137\x66\x69\x65\x6c\144" => ["\x63\154\x61\x73\x73" => "\143\157\154\x2d\x6d\144\x2d\x36"], "\43\142\x69\154\154\x69\156\x67\x5f\160\150\157\156\x65\x5f\146\151\x65\154\x64" => ["\143\x6c\141\x73\163" => "\x63\157\154\x2d\155\144\x2d\x36"], "\43\x62\151\154\x6c\151\x6e\x67\137\x6d\157\142\x69\x6c\145\x5f\146\x69\x65\154\144" => ["\x63\154\141\x73\163" => "\143\x6f\x6c\x2d\155\144\55\x36"], "\x23\142\151\x6c\154\151\156\147\137\143\x6f\155\x70\141\156\171\x5f\146\x69\145\x6c\x64" => ["\143\154\x61\x73\163" => "\143\x6f\154\55\155\x64\x2d\66"], "\x23\x62\151\x6c\154\151\x6e\x67\x5f\x63\151\x74\171\137\x66\151\x65\154\x64" => ["\143\x6c\x61\x73\163" => "\x63\x6f\x6c\55\x6d\144\55\66"], "\43\x62\151\x6c\154\151\x6e\147\x5f\163\x74\x61\164\x65\x5f\146\x69\x65\154\144" => ["\143\x6c\141\x73\x73" => "\x63\157\x6c\x2d\155\x64\x2d\66"], "\x23\x62\151\154\x6c\x69\x6e\x67\137\145\x6d\141\151\154\x5f\x66\151\145\154\144" => ["\x63\x6c\x61\x73\163" => "\x63\x6f\154\x2d\155\144\55\x36"], "\43\142\151\x6c\x6c\151\156\147\137\x70\x6f\163\164\143\157\x64\145\137\x66\151\145\154\x64" => ["\x63\x6c\141\163\x73" => "\x63\157\154\55\155\144\55\x36"], "\43\x62\x69\154\154\x69\x6e\147\x5f\160\157\x73\164\143\157\x64\x65\x5f\146\151\x65\x6c\144\40\151\156\160\x75\x74" => ["\143\x6c\141\x73\x73" => "\144\x69\162\x65\143\164\x69\x6f\x6e\x2d\154\x74\162"], "\43\x63\x75\163\164\157\x6d\145\162\x5f\144\145\x74\x61\x69\x6c\163\40\x69\x6e\160\x75\x74" => ["\143\x6c\141\x73\163" => "\x66\157\162\x6d\55\x63\157\x6e\x74\x72\x6f\154"], "\x2e\167\x6f\x6f\143\157\155\155\x65\162\143\145\x2d{$eaoumsseceiowgsk}\55\146\x69\145\x6c\144\163\137\137\146\x69\x65\154\144\x2d\167\x72\x61\x70\x70\x65\x72\x20\x70" => ["\x63\154\141\x73\163" => "\146\x6f\162\155\x2d\x67\x72\x6f\x75\x70\40\x63\157\x6c\x2d\61\x32"], "\160" => ["\x63\x6c\x61\163\163" => "\155\x62\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
