<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637344f0b8b9             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\x73\150\x62\157\x61\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\144\x65\x72\163" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\x6e\x6c\x6f\141\x64\163" => IconInterface::msyqysqykouywsua, "\145\144\151\164\x2d\x61\144\x64\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\155\x65\156\164\x2d\155\x65\164\150\x6f\x64\163" => IconInterface::acciucugwcskkwmi, "\x65\144\151\x74\x2d\x61\x63\143\157\165\156\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\163\164\x6f\155\x65\162\x2d\x6c\x6f\x67\157\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\157\143\x6f\x6d\x6d\145\x72\143\x65\x5f\x6c\x6f\157\160\137\x70\162\157\x64\x75\x63\164\x5f\x6c\151\156\153", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\143\154\141\163\x73" => "\x74\145\170\x74\55\x64\145\143\157\x72\x61\164\x69\x6f\156\55\156\157\x6e\x65\x20\x74\145\170\164\x2d\155\165\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\162\151\x63\145\163" => [], "\x70\162\x6f\x64\165\x63\164" => '', "\x74\x64\x5f\x63\154\x61\163\x73" => '', "\x74\162\x5f\x63\154\x61\163\x73" => '', "\x74\150\x5f\143\x6c\141\163\163" => "\x74\145\x78\x74\55\x67\162\141\171\x2d\x38\60\x30\x20\160\171\x2d\x32", "\150\x61\x73\x5f\x74\151\x74\x6c\x65" => true, "\x74\x61\142\154\x65\x5f\x63\x6c\141\163\163" => "\x6d\x62\55\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\160\162\x6f\144\x75\143\x74", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x72\x69\143\x65\163", false); if (!$product) { goto iuuuususuuuaieem; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto kocqqoyymosmuksu; iuuuususuuuaieem: global $product; kocqqoyymosmuksu: if (!$product instanceof WC_Product) { goto gamqcwuwkikwqoay; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto ieqesiiageaauiuw; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\x6f\x6f\x63\157\x6d\155\145\162\143\x65\x2d\120\x72\x69\x63\x65\55\x63\x75\x72\x72\145\x6e\x63\x79\123\x79\x6d\142\x6f\x6c" => ["\x63\x6c\141\x73\163" => "\x66\157\x6e\164\55\x31\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto uqokiksoqcwwqgio; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); uqokiksoqcwwqgio: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\x6e\163"); if ($eukiyocmgugiioei) { goto sioekkmekwygemyc; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto yiowgigkkwsoqcci; sioekkmekwygemyc: $uiiuuaeiyecmiouc["\162\x65\147\165\x6c\x61\x72\x5f\160\162\151\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto qukocuwgakemmyga; } $uiiuuaeiyecmiouc["\x64\151\163\x63\157\x75\156\164"] = $this->yqauycsoymimeise($product); qukocuwgakemmyga: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\x69\x73\143\157\165\156\164\x5f\x65\170\160\151\x72\145"] = $this->sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\x6d\155\x65\x72\x63\145\x5f\x70\162\x6f\x64\x75\x63\x74\137\x64\151\163\x63\x6f\x75\156\x74\x5f\145\x78\x70\x69\162\x65\137\150\x74\x6d\x6c", '', ["\x70\162\157\x64\x75\143\x74" => $product]); yiowgigkkwsoqcci: $uiiuuaeiyecmiouc["\x73\141\154\145\137\x70\162\151\x63\x65"] = $eeeyyekmaesysegc; ieqesiiageaauiuw: gamqcwuwkikwqoay: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto wkwamkgkwykeqkec; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\x67\x75\x6c\141\162\x5f\160\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\145\x67\x75\x6c\x61\162\40\120\x72\151\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto iesekaeqeomeuaui; case "\163\x61\154\145\137\160\162\151\143\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\x6c\145\x20\120\162\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto iesekaeqeomeuaui; case "\x64\x69\163\143\157\x75\156\x74\137\145\170\160\151\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\x6f\x75\x6e\164\x20\x45\170\160\151\x72\x61\164\151\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto iesekaeqeomeuaui; case "\x64\151\x73\143\x6f\x75\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\x6f\x75\156\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto iesekaeqeomeuaui; } wsesqmcqoiyyqkqi: iesekaeqeomeuaui: if (!$aumscagymwyyicag) { goto mogkoocsoeuyoqqa; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; mogkoocsoeuyoqqa: oyeyomcgkmgymogq: } mscyggqcesgqqksu: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\151\143\145")]); $this->ewcsyqaaigkicgse("\x6d\145\x74\x61\144\141\x74\141\137\x72\x65\x6e\144\145\162", $ywmkwiwkosakssii); wkwamkgkwykeqkec: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto oimkeqocuguqqsqk; } woocommerce_template_loop_add_to_cart(); goto oeocukauoyosicso; oimkeqocuguqqsqk: woocommerce_template_single_add_to_cart(); oeocukauoyosicso: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto kwiggogcgciwuwqk; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\x6f\x64\165\x63\164\x5f\143\x61\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto yykqaowwsqgqysmq; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\x6c\x61\163\x73" => "\160\162\157\144\165\x63\x74\55\143\x61\164\x65\x67\x6f\x72\x79\x20\150\157\166\x65\x72\55\x70\x72\151\x6d\141\x72\171\x20\146\157\x6e\x74\55\x31\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\156\40\103\x61\164\145\147\x6f\x72\171\x3a\x20\45\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\141\163\x73" => "\x74\145\170\x74\55\x67\162\x61\171\55\x36\x30\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\154\x61\163\163" => "\x69\143\157\156\55\x73\x6d\x20\155\162\55\62\x20\155\x79\x2d\x61\165\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\154\x61\163\163" => "\x64\55\x66\154\145\x78"]); if (!$koaqeegoeiaiccse) { goto suqceasgacskcmkc; } echo $nsmgceoqaqogqmuw; suqceasgacskcmkc: yykqaowwsqgqysmq: kwiggogcgciwuwqk: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto uckewycoogsogwiy; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto ikuuiauwouuqawuw; uckewycoogsogwiy: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\x63\x6c\x61\163\x73" => "\160\x72\x69\143\x65\x2d\144\151\x73\x63\157\165\156\x74\x2d\x61\x6d\157\165\x6e\164\x20\164\x65\170\164\x2d\x64\x61\x6e\x67\145\x72"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\x69\x63\145\137\144\x69\x73\x63\x6f\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); ikuuiauwouuqawuw: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto yuimwyoywaiiqacs; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto yoqakewookqoqacm; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; yoqakewookqoqacm: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto gswcoeiisamakwii; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\151\143\145\x5f\x64\x69\x73\x63\157\x75\156\164"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); gswcoeiisamakwii: yuimwyoywaiiqacs: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\162\x65\x71\165\x69\162\x65\x64"]) && $aiowsaccomcoikus["\x72\145\161\165\151\x72\145\x64"])) { goto iwsmmkqaoksmocok; } $aiowsaccomcoikus["\x63\154\141\163\x73"] = ["\x69\x73\x2d\x69\156\166\141\x6c\x69\x64"]; iwsmmkqaoksmocok: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; emqswoaawgeyosmi: } ocywegekakimmwcq: unset($ikgwqyuyckaewsow["\142\x69\154\x6c\x69\x6e\147\x5f\143\157\165\156\164\x72\x79"]); unset($ikgwqyuyckaewsow["\142\x69\154\154\151\x6e\x67\x5f\141\x64\144\x72\x65\163\163\137\62"]); $ikgwqyuyckaewsow["\142\x69\154\x6c\151\156\147\137\x73\164\141\x74\145"]["\x70\162\151\157\162\x69\x74\171"] = 60; $ikgwqyuyckaewsow["\142\151\154\154\151\156\147\137\143\151\164\171"]["\x70\x72\151\x6f\x72\x69\164\171"] = 70; $ikgwqyuyckaewsow["\142\151\x6c\x6c\151\x6e\147\x5f\x61\144\144\162\145\163\163\137\61"]["\x70\x72\x69\157\162\151\x74\171"] = 80; $ikgwqyuyckaewsow["\142\151\154\154\151\x6e\147\137\145\x6d\x61\x69\154"]["\x70\162\x69\x6f\162\151\x74\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\x69\x6e\x67\137\160\157\x73\164\143\x6f\144\145"]["\x6c\x61\x62\145\154"] = __("\x50\x6f\x73\164\143\x6f\144\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\154\x6c\x69\x6e\147\x5f\145\155\141\x69\154"]["\154\141\x62\145\x6c"] = __("\105\x6d\141\x69\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\156\40\142\x74\156\x2d\142\x6c\157\143\153\x20\142\x74\156\55\160\x72\151\x6d\141\162\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\x2e\167\x6f\157\x63\x6f\x6d\155\x65\162\143\x65\55\163\x68\151\160\160\151\156\x67\x2d\155\x65\x74\x68\x6f\144\163" => ["\x63\154\x61\163\163" => "\154\x69\163\164\x2d\x67\162\x6f\165\160\40\x6c\151\163\164\55\147\162\157\165\160\x2d\x66\x6c\x75\x73\150\x20\142\147\x2d\164\162\141\x6e\x73\x70\141\x72\145\156\164"], "\x75\x6c\x2e\x77\x6f\157\143\157\x6d\155\x65\x72\143\145\55\x73\x68\x69\x70\x70\151\156\147\x2d\x6d\145\164\x68\x6f\144\x73\x20\x6c\x61\x62\x65\154" => ["\x63\x6c\x61\x73\163" => "\155\55\x30"], "\x75\154\56\167\157\157\143\157\155\x6d\145\162\143\x65\x2d\163\x68\x69\160\160\x69\x6e\x67\x2d\x6d\145\164\x68\157\x64\x73\x20\154\x69" => ["\x63\154\x61\x73\163" => "\x6c\151\x73\x74\55\x67\162\x6f\165\x70\x2d\x69\x74\145\x6d\40\x70\x79\55\x31\40\160\170\55\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\166\x61\x72\x69\x61\164\151\157\156" => ["\x63\154\x61\x73\x73" => "\144\x2d\x66\154\x65\170\x20\x6d\55\141\165\164\x6f"], "\144\154\x2e\166\x61\x72\151\141\164\x69\x6f\156\40\160" => ["\x63\x6c\141\x73\163" => "\155\x62\55\x30"], "\144\154\56\x76\x61\162\151\141\164\151\x6f\156\x20\x64\144" => ["\x63\x6c\141\x73\x73" => "\155\142\x2d\60"], "\x64\x6c\56\x76\x61\x72\151\x61\164\151\x6f\156\x20\x64\164" => ["\x63\x6c\141\163\x73" => "\167\55\154\x67\55\x32\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\x66\x6f\x72\155\x2d\x72\157\x77" => ["\143\154\x61\163\x73" => "\146\157\162\155\x2d\162\x6f\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\56\167\157\157\143\x6f\155\x6d\145\162\x63\x65\55{$eaoumsseceiowgsk}\55\146\151\x65\x6c\x64\x73\x5f\x5f\x66\x69\145\154\x64\55\x77\162\141\x70\160\x65\162\x20\x3e\x20\160", ["\143\x6c\x61\163\x73" => "\x72\157\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\x62\x72"]); $ggauoeuaesiymgee = ["\x2e\x69\x73\55\151\x6e\x76\141\x6c\151\144\40\151\156\160\x75\164" => ["\x63\154\x61\163\x73" => "\x72\145\x71\x75\x69\x72\145\144\55\151\x6e\160\x75\164"], "\x2e\151\163\55\151\x6e\166\141\154\151\x64\40\163\145\x6c\x65\143\164" => ["\143\154\x61\163\x73" => "\162\x65\x71\x75\x69\x72\145\x64\x2d\151\156\x70\x75\164"], "\x73\145\x6c\145\x63\x74\x2c\40\151\x6e\x70\165\x74" => ["\x63\154\x61\x73\163" => "\146\157\162\x6d\x2d\x63\x6f\x6e\164\x72\x6f\x6c"], "\43\142\151\x6c\154\x69\156\147\x5f\x66\151\162\x73\x74\137\x6e\x61\x6d\145\137\x66\x69\x65\154\144" => ["\x63\154\141\x73\163" => "\x63\157\x6c\55\x6d\144\55\66"], "\x23\142\151\x6c\x6c\151\x6e\147\x5f\154\x61\163\x74\x5f\x6e\x61\x6d\145\137\x66\151\145\154\144" => ["\143\x6c\x61\x73\x73" => "\x63\x6f\x6c\x2d\155\144\55\x36"], "\43\142\151\154\x6c\151\156\147\x5f\x70\x68\157\x6e\x65\137\146\151\x65\x6c\x64" => ["\143\x6c\141\x73\163" => "\x63\x6f\154\x2d\155\144\55\66"], "\43\x62\x69\x6c\154\x69\156\x67\137\155\157\142\151\x6c\145\x5f\x66\151\145\154\144" => ["\x63\x6c\x61\163\x73" => "\143\157\154\55\155\144\55\66"], "\43\x62\x69\x6c\x6c\x69\x6e\x67\x5f\143\x6f\155\160\141\156\171\137\x66\x69\145\x6c\144" => ["\143\x6c\141\163\x73" => "\x63\x6f\x6c\55\x6d\x64\55\66"], "\43\x62\151\x6c\x6c\x69\156\147\x5f\143\x69\x74\x79\x5f\x66\x69\145\154\x64" => ["\143\154\x61\163\163" => "\143\x6f\154\55\155\144\x2d\x36"], "\x23\142\x69\x6c\154\x69\x6e\x67\137\x73\x74\141\164\145\137\146\151\145\154\144" => ["\x63\x6c\141\163\x73" => "\143\157\x6c\55\155\x64\x2d\66"], "\43\x62\151\154\x6c\151\156\147\x5f\x65\x6d\x61\x69\154\137\x66\151\x65\x6c\144" => ["\143\x6c\141\163\x73" => "\143\x6f\154\55\x6d\144\x2d\66"], "\43\142\151\x6c\154\x69\x6e\147\137\x70\x6f\163\x74\x63\157\x64\x65\137\x66\x69\145\154\144" => ["\143\154\141\163\163" => "\x63\157\x6c\x2d\x6d\144\55\x36"], "\x23\x62\151\x6c\x6c\x69\156\147\137\x70\x6f\x73\x74\143\x6f\x64\145\x5f\x66\151\145\154\x64\40\x69\x6e\160\165\164" => ["\143\154\141\x73\x73" => "\x64\151\x72\x65\x63\164\x69\x6f\156\x2d\154\164\x72"], "\x23\143\x75\163\x74\157\x6d\x65\162\x5f\x64\145\x74\x61\x69\154\x73\x20\x69\156\x70\165\164" => ["\x63\154\x61\x73\163" => "\x66\x6f\162\x6d\55\x63\157\156\x74\x72\x6f\154"], "\x2e\167\157\x6f\143\157\x6d\x6d\145\x72\x63\x65\55{$eaoumsseceiowgsk}\55\x66\x69\x65\x6c\x64\163\137\x5f\146\151\145\x6c\144\55\x77\x72\x61\x70\x70\145\162\x20\160" => ["\143\154\141\x73\x73" => "\146\x6f\162\x6d\x2d\147\162\157\165\160\x20\143\x6f\154\x2d\61\x32"], "\x70" => ["\143\154\141\163\163" => "\x6d\x62\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
