<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e4de2d54d6             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\x73\x68\x62\x6f\x61\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\145\162\x73" => IconInterface::goqumcwkcuygcaui, "\x64\157\167\x6e\x6c\157\141\x64\x73" => IconInterface::msyqysqykouywsua, "\145\144\x69\164\55\x61\x64\144\x72\145\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\141\x79\x6d\x65\156\164\55\x6d\145\x74\150\x6f\144\x73" => IconInterface::acciucugwcskkwmi, "\145\144\x69\164\55\141\143\x63\x6f\x75\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\x63\165\163\164\157\155\145\x72\55\x6c\x6f\x67\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\155\x6d\x65\162\x63\145\137\154\x6f\x6f\x70\x5f\160\162\x6f\144\165\143\164\x5f\154\x69\x6e\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\x63\154\x61\x73\x73" => "\164\145\170\x74\x2d\x64\x65\x63\157\x72\x61\164\151\x6f\156\55\x6e\157\156\x65\40\164\x65\170\164\x2d\155\165\x74\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\160\x72\151\x63\x65\x73" => [], "\x70\x72\x6f\x64\165\x63\164" => '', "\x74\x64\x5f\143\154\141\x73\x73" => '', "\164\x72\137\143\154\141\163\x73" => '', "\x74\150\137\143\x6c\141\163\163" => "\x74\145\x78\164\x2d\147\x72\x61\x79\x2d\x38\60\x30\40\160\171\55\x32", "\x68\x61\163\x5f\x74\x69\x74\x6c\145" => true, "\164\141\142\x6c\145\137\x63\154\x61\163\x73" => "\155\x62\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\x6f\x64\x75\x63\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\x69\x63\x65\163", false); if (!$product) { goto aiccyaswigkaycqk; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto sqyokemumceysegy; aiccyaswigkaycqk: global $product; sqyokemumceysegy: if (!$product instanceof WC_Product) { goto ucuoeymyqeokgsya; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto egmayaiikwsskgmy; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\x6f\157\143\157\155\155\145\x72\143\145\55\x50\162\151\x63\x65\55\143\165\x72\162\145\156\143\171\123\x79\x6d\142\x6f\154" => ["\143\154\x61\163\163" => "\x66\157\156\164\x2d\x31\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto oqousikwiiqagoyw; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); oqousikwiiqagoyw: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\144\145\154"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\156\x73"); if ($eukiyocmgugiioei) { goto aueaceeyommgkicu; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto mysueeoswqgccmui; aueaceeyommgkicu: $uiiuuaeiyecmiouc["\162\x65\147\165\154\x61\x72\137\160\162\x69\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto zayqqeqgcwkekwws; } $uiiuuaeiyecmiouc["\x64\151\163\x63\157\x75\x6e\164"] = $this->yqauycsoymimeise($product); zayqqeqgcwkekwws: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\x73\x63\157\165\156\x74\137\x65\170\160\x69\162\145"] = $this->sscegwueamckwmcy("\x77\157\157\143\x6f\155\x6d\145\x72\143\145\137\160\162\x6f\144\x75\x63\x74\137\x64\151\163\143\157\165\x6e\x74\x5f\x65\x78\160\x69\162\x65\137\x68\164\155\x6c", '', ["\x70\x72\157\144\165\143\164" => $product]); mysueeoswqgccmui: $uiiuuaeiyecmiouc["\163\141\x6c\145\x5f\x70\x72\151\143\x65"] = $eeeyyekmaesysegc; egmayaiikwsskgmy: ucuoeymyqeokgsya: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto qkcsykuocwuyaice; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\147\x75\x6c\x61\162\x5f\160\162\x69\143\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\x65\x67\165\154\x61\162\x20\x50\162\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto agkmiayuawacakau; case "\163\141\x6c\x65\x5f\160\x72\x69\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x53\141\x6c\x65\40\120\x72\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto agkmiayuawacakau; case "\x64\151\x73\x63\157\x75\156\164\x5f\145\170\160\x69\x72\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\x6f\165\x6e\164\40\105\170\160\x69\162\141\x74\x69\157\x6e", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto agkmiayuawacakau; case "\x64\x69\x73\143\x6f\x75\156\x74": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\163\143\157\165\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto agkmiayuawacakau; } syuaummumssgwwee: agkmiayuawacakau: if (!$aumscagymwyyicag) { goto oocuemosmeeekgas; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; oocuemosmeeekgas: sguskaeaaqcagqgc: } yuuyikiacmmueosu: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\x72\x69\x63\145")]); $this->ewcsyqaaigkicgse("\155\x65\164\x61\x64\x61\x74\141\x5f\x72\145\x6e\144\145\162", $ywmkwiwkosakssii); qkcsykuocwuyaice: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto uoeasoimegouymka; } woocommerce_template_loop_add_to_cart(); goto egsycocugqyyswsi; uoeasoimegouymka: woocommerce_template_single_add_to_cart(); egsycocugqyyswsi: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto osuscoaaomwcqkew; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\x70\162\x6f\x64\x75\143\164\x5f\143\141\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto aoquoewagkseayug; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\146" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\143\x6c\141\163\x73" => "\x70\x72\157\144\165\x63\164\55\x63\x61\x74\145\x67\x6f\162\171\x20\150\x6f\x76\x65\x72\55\160\162\x69\155\x61\x72\171\40\146\x6f\x6e\164\x2d\x31\66"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\156\x20\103\x61\164\x65\x67\157\162\171\x3a\40\x25\163", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\141\163\163" => "\x74\145\x78\x74\x2d\147\162\x61\x79\x2d\x36\x30\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\143\x6c\141\163\163" => "\x69\143\x6f\x6e\x2d\163\x6d\x20\155\x72\x2d\62\x20\x6d\x79\55\141\165\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\143\x6c\141\x73\x73" => "\144\55\x66\x6c\x65\170"]); if (!$koaqeegoeiaiccse) { goto qiaimmucomukkeka; } echo $nsmgceoqaqogqmuw; qiaimmucomukkeka: aoquoewagkseayug: osuscoaaomwcqkew: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto ciucewqgyoiouesq; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto cgmgqucewwssmicq; ciucewqgyoiouesq: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\143\154\x61\x73\x73" => "\160\162\151\x63\145\55\144\151\163\x63\x6f\x75\156\164\55\141\x6d\x6f\165\x6e\x74\x20\x74\x65\x78\x74\x2d\144\x61\x6e\x67\145\162"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\143\145\137\x64\151\x73\x63\x6f\165\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); cgmgqucewwssmicq: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto oyiuemaaykgkqqam; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto mkomygccqkmkumsi; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; mkomygccqkmkumsi: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ussceseaimqywuiy; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\145\x5f\144\151\163\143\157\165\x6e\x74"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ussceseaimqywuiy: oyiuemaaykgkqqam: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\x71\165\x69\x72\145\144"]) && $aiowsaccomcoikus["\162\x65\161\x75\x69\x72\x65\144"])) { goto uycesqqkoeamocgm; } $aiowsaccomcoikus["\x63\154\x61\x73\163"] = ["\151\x73\x2d\x69\156\166\x61\154\151\x64"]; uycesqqkoeamocgm: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; sqmoqymckwsogsqg: } gqmewagyagamokok: unset($ikgwqyuyckaewsow["\x62\151\154\x6c\151\156\x67\137\x63\x6f\165\156\x74\x72\171"]); unset($ikgwqyuyckaewsow["\x62\x69\x6c\154\151\x6e\x67\x5f\x61\144\144\x72\145\x73\x73\x5f\62"]); $ikgwqyuyckaewsow["\142\x69\154\154\x69\x6e\147\137\163\164\141\164\145"]["\x70\162\151\157\x72\x69\x74\x79"] = 60; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\151\x6e\147\137\143\x69\x74\x79"]["\160\162\x69\x6f\x72\151\164\x79"] = 70; $ikgwqyuyckaewsow["\x62\151\154\154\x69\x6e\147\x5f\141\144\x64\162\145\x73\163\137\x31"]["\x70\x72\151\x6f\x72\151\x74\x79"] = 80; $ikgwqyuyckaewsow["\x62\x69\x6c\154\x69\156\147\x5f\x65\x6d\x61\151\x6c"]["\x70\x72\151\x6f\x72\x69\x74\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\x6c\154\x69\x6e\x67\x5f\x70\157\x73\164\143\157\x64\145"]["\x6c\141\x62\145\x6c"] = __("\120\157\x73\x74\x63\157\x64\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\x62\151\154\154\151\156\147\x5f\x65\155\141\x69\154"]["\x6c\141\x62\x65\x6c"] = __("\x45\x6d\141\151\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\40\142\164\x6e\x2d\x62\x6c\157\x63\153\40\142\164\x6e\x2d\160\x72\x69\x6d\141\x72\x79\40{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\56\167\157\x6f\x63\157\155\155\x65\x72\x63\x65\x2d\163\x68\x69\160\x70\x69\x6e\x67\x2d\155\145\164\150\157\x64\163" => ["\x63\x6c\x61\x73\x73" => "\x6c\151\163\x74\x2d\147\x72\x6f\165\x70\x20\x6c\151\x73\164\x2d\x67\162\x6f\x75\160\55\x66\154\165\163\150\40\x62\x67\55\x74\x72\141\156\x73\x70\x61\162\145\156\x74"], "\165\x6c\x2e\167\x6f\157\143\x6f\x6d\155\x65\x72\x63\x65\55\x73\x68\151\x70\160\151\x6e\x67\55\155\145\164\x68\157\x64\163\x20\154\x61\142\145\x6c" => ["\143\154\141\x73\x73" => "\x6d\x2d\x30"], "\165\154\x2e\167\157\157\143\157\x6d\155\145\x72\143\145\55\163\x68\151\x70\x70\x69\x6e\x67\55\155\x65\x74\150\157\144\163\x20\154\151" => ["\x63\x6c\x61\x73\x73" => "\x6c\151\163\164\55\147\162\x6f\x75\160\55\x69\x74\x65\x6d\40\160\x79\x2d\x31\x20\160\x78\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\x76\x61\x72\151\x61\164\x69\157\156" => ["\143\154\x61\163\163" => "\x64\x2d\x66\154\x65\170\40\155\x2d\141\165\164\x6f"], "\144\x6c\56\166\141\x72\x69\x61\x74\x69\x6f\x6e\40\160" => ["\x63\154\x61\x73\x73" => "\155\x62\55\x30"], "\144\154\56\x76\x61\x72\x69\x61\x74\151\x6f\156\40\144\144" => ["\143\154\x61\x73\x73" => "\155\142\55\x30"], "\144\x6c\x2e\166\141\x72\151\x61\x74\x69\157\x6e\x20\x64\x74" => ["\x63\x6c\141\163\163" => "\167\x2d\x6c\x67\x2d\x32\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\157\162\155\55\162\157\167" => ["\x63\154\141\163\x73" => "\146\x6f\x72\x6d\55\162\157\167"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\x6f\157\143\x6f\x6d\x6d\145\x72\x63\145\x2d{$eaoumsseceiowgsk}\x2d\x66\151\x65\x6c\144\163\137\137\x66\x69\x65\x6c\x64\x2d\x77\162\x61\160\160\145\162\40\76\x20\x70", ["\143\x6c\141\x73\x73" => "\x72\157\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\141\142\142\162"]); $ggauoeuaesiymgee = ["\56\x69\163\x2d\151\x6e\x76\141\x6c\x69\144\40\151\x6e\x70\x75\x74" => ["\143\x6c\x61\x73\x73" => "\162\145\x71\x75\x69\162\145\144\55\x69\156\x70\x75\x74"], "\x2e\x69\x73\55\151\x6e\166\141\154\151\x64\40\x73\x65\154\145\143\x74" => ["\143\154\141\x73\163" => "\162\x65\x71\x75\x69\162\x65\144\55\151\x6e\160\x75\x74"], "\x73\145\x6c\145\143\164\54\40\x69\156\160\165\x74" => ["\143\154\141\x73\163" => "\146\x6f\x72\155\x2d\x63\157\x6e\x74\x72\x6f\154"], "\43\x62\151\x6c\154\x69\x6e\x67\137\146\151\162\163\164\x5f\x6e\141\155\x65\x5f\x66\x69\x65\154\x64" => ["\143\x6c\x61\163\x73" => "\143\157\x6c\55\155\144\x2d\x36"], "\x23\142\x69\x6c\154\151\x6e\147\x5f\154\x61\x73\x74\x5f\x6e\141\155\x65\x5f\x66\x69\145\154\144" => ["\x63\x6c\x61\x73\163" => "\143\x6f\x6c\55\x6d\x64\x2d\x36"], "\x23\x62\x69\154\x6c\x69\x6e\147\x5f\160\x68\x6f\x6e\x65\137\146\x69\x65\x6c\x64" => ["\143\x6c\x61\163\x73" => "\143\x6f\x6c\x2d\155\144\55\x36"], "\x23\142\151\x6c\x6c\151\156\x67\137\155\157\142\x69\154\145\137\146\x69\145\x6c\144" => ["\x63\x6c\x61\x73\x73" => "\143\x6f\x6c\x2d\155\x64\x2d\x36"], "\x23\x62\151\154\x6c\151\156\x67\137\143\x6f\155\x70\x61\x6e\171\137\x66\x69\x65\x6c\144" => ["\143\154\141\163\x73" => "\143\157\x6c\x2d\155\144\x2d\66"], "\x23\142\151\154\x6c\x69\x6e\x67\137\x63\151\x74\171\x5f\146\151\x65\154\144" => ["\143\x6c\141\163\163" => "\143\x6f\x6c\x2d\155\x64\x2d\x36"], "\43\142\151\154\154\x69\156\x67\x5f\x73\x74\141\x74\145\137\146\151\x65\x6c\144" => ["\x63\154\141\x73\x73" => "\x63\157\154\55\x6d\144\55\66"], "\x23\142\151\x6c\154\x69\156\147\137\x65\x6d\x61\x69\154\137\x66\151\145\154\144" => ["\143\154\141\x73\x73" => "\x63\157\x6c\55\x6d\144\55\x36"], "\43\x62\x69\x6c\154\x69\156\147\x5f\160\157\163\x74\143\x6f\144\x65\137\146\151\145\x6c\144" => ["\x63\x6c\x61\163\163" => "\x63\157\x6c\55\x6d\144\x2d\66"], "\x23\142\151\154\x6c\151\x6e\x67\x5f\x70\157\x73\164\143\157\x64\x65\137\146\151\x65\154\x64\40\x69\156\x70\165\164" => ["\143\x6c\x61\x73\163" => "\x64\x69\162\x65\143\x74\151\x6f\156\55\x6c\x74\x72"], "\43\x63\165\x73\x74\157\155\145\x72\x5f\x64\145\x74\x61\x69\154\163\x20\x69\156\x70\165\x74" => ["\x63\x6c\141\x73\163" => "\146\157\162\x6d\55\143\x6f\x6e\164\162\x6f\x6c"], "\56\167\x6f\x6f\143\157\x6d\155\x65\162\143\x65\x2d{$eaoumsseceiowgsk}\x2d\146\151\145\154\144\163\137\137\x66\x69\145\x6c\x64\x2d\167\162\x61\160\160\145\162\40\x70" => ["\143\154\141\163\163" => "\146\x6f\162\155\x2d\147\x72\157\165\x70\40\x63\157\x6c\55\61\x32"], "\160" => ["\x63\x6c\141\163\x73" => "\x6d\142\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
