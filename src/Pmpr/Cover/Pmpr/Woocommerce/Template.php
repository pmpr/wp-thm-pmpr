<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6616500702db5             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Interfaces\CommonInterface; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\x61\x73\150\142\157\x61\162\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\144\145\162\x73" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\x6e\x6c\x6f\x61\x64\163" => IconInterface::msyqysqykouywsua, "\145\144\151\164\x2d\x61\144\x64\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\141\171\x6d\x65\x6e\164\x2d\155\145\164\x68\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\164\x2d\141\x63\x63\157\x75\x6e\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\163\x74\157\155\145\162\x2d\x6c\157\x67\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\167\157\157\x63\157\x6d\x6d\145\x72\x63\x65\137\x6c\157\x6f\160\x5f\x70\x72\x6f\144\x75\143\164\137\154\151\x6e\x6b", ManipulatePost::ycqquoiyyuesegsy(), $product); self::meqqwuauskckweee(["\143\154\x61\x73\163" => "\x74\x65\x78\164\x2d\144\145\x63\157\x72\x61\x74\151\x6f\x6e\55\156\x6f\x6e\145\x20\x74\x65\170\x74\55\155\165\164\x65"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\160\162\151\143\145\163" => [], "\x70\162\157\x64\x75\143\164" => '', "\164\144\x5f\143\154\141\x73\x73" => '', "\164\162\137\143\154\x61\163\x73" => '', "\164\x68\x5f\x63\154\141\x73\163" => "\x74\x65\170\x74\55\147\x72\x61\x79\x2d\70\60\60\x20\x70\x79\x2d\x32", "\x68\141\163\137\x74\151\x74\x6c\145" => true, "\x74\141\142\x6c\x65\x5f\143\154\141\x73\x73" => "\155\142\x2d\x35"]); $product = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\157\144\165\143\164", false); $uiiuuaeiyecmiouc = ManipulateArray::get($ywmkwiwkosakssii, "\x70\162\151\143\145\x73", false); if (!$product) { goto aiccyaswigkaycqk; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto sqyokemumceysegy; aiccyaswigkaycqk: global $product; sqyokemumceysegy: if (!$product instanceof WC_Product) { goto ucuoeymyqeokgsya; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto egmayaiikwsskgmy; } $aumscagymwyyicag = DOMCrawler::igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\167\157\157\x63\x6f\x6d\x6d\145\x72\143\145\x2d\x50\162\151\x63\145\55\x63\x75\x72\x72\x65\156\x63\x79\123\x79\155\x62\157\154" => ["\x63\x6c\x61\163\163" => "\146\x6f\x6e\164\55\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto oqousikwiiqagoyw; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); oqousikwiiqagoyw: $eukiyocmgugiioei = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\x64\x65\x6c"); $ywoyoawciekocqao = DOMCrawler::qqimkcgcmeewwwei($aumscagymwyyicag, "\151\156\163"); if ($eukiyocmgugiioei) { goto aueaceeyommgkicu; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto mysueeoswqgccmui; aueaceeyommgkicu: $uiiuuaeiyecmiouc["\x72\145\147\x75\x6c\141\x72\x5f\160\162\x69\x63\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto zayqqeqgcwkekwws; } $uiiuuaeiyecmiouc["\144\151\x73\x63\157\165\x6e\164"] = $this->yqauycsoymimeise($product); zayqqeqgcwkekwws: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\x64\x69\163\x63\157\x75\156\164\137\145\170\160\x69\162\x65"] = $this->sscegwueamckwmcy("\167\x6f\157\143\x6f\x6d\x6d\145\x72\x63\x65\x5f\160\162\157\x64\165\x63\x74\137\x64\151\163\x63\157\x75\156\x74\137\145\x78\160\151\x72\145\137\x68\164\155\x6c", '', ["\x70\x72\157\x64\165\143\164" => $product]); mysueeoswqgccmui: $uiiuuaeiyecmiouc["\x73\x61\154\x65\137\x70\x72\151\143\x65"] = $eeeyyekmaesysegc; egmayaiikwsskgmy: ucuoeymyqeokgsya: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto qkcsykuocwuyaice; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\162\x65\147\x75\x6c\x61\x72\x5f\160\x72\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\122\145\x67\x75\x6c\x61\162\x20\x50\162\x69\x63\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto agkmiayuawacakau; case "\163\141\x6c\145\x5f\x70\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\154\x65\40\120\162\x69\143\145", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto agkmiayuawacakau; case "\x64\x69\x73\143\157\165\x6e\164\x5f\x65\170\160\151\162\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\163\143\157\165\156\x74\40\105\170\160\x69\162\141\x74\x69\x6f\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto agkmiayuawacakau; case "\x64\151\x73\143\157\x75\x6e\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\x44\x69\163\143\157\165\x6e\x74", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto agkmiayuawacakau; } syuaummumssgwwee: agkmiayuawacakau: if (!$aumscagymwyyicag) { goto oocuemosmeeekgas; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; oocuemosmeeekgas: sguskaeaaqcagqgc: } yuuyikiacmmueosu: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\160\x72\x69\143\145")]); $this->ewcsyqaaigkicgse("\x6d\145\x74\141\144\x61\164\x61\137\162\145\156\x64\145\x72", $ywmkwiwkosakssii); qkcsykuocwuyaice: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto uoeasoimegouymka; } woocommerce_template_loop_add_to_cart(); goto egsycocugqyyswsi; uoeasoimegouymka: woocommerce_template_single_add_to_cart(); egsycocugqyyswsi: } public function wigckqooeccseiyu() : bool { return !(DecoratorWoocommerce::wmqwkwyuqwksiiqk() || DecoratorWoocommerce::gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto osuscoaaomwcqkew; } $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa(ManipulateWoocommerce::omwkqcuwceweymcc($product), "\160\x72\x6f\x64\165\x63\x74\137\143\x61\164"); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto aoquoewagkseayug; } $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $iwewcwusemqaiggk->taxonomy), "\x63\154\141\163\x73" => "\x70\x72\157\x64\x75\x63\164\x2d\x63\141\x74\x65\x67\x6f\x72\171\x20\150\157\166\145\x72\55\x70\x72\x69\155\x61\x72\x79\x20\x66\x6f\x6e\x74\55\x31\x36"], $iwewcwusemqaiggk->name); $nsmgceoqaqogqmuw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\111\156\40\103\x61\x74\x65\x67\157\x72\171\72\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\143\154\141\x73\x73" => "\x74\145\x78\x74\x2d\147\162\141\171\x2d\x36\60\60"]); $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\154\141\x73\163" => "\x69\x63\x6f\156\55\x73\155\x20\155\162\55\x32\x20\155\171\55\x61\165\164\157"]); $nsmgceoqaqogqmuw = ManipulateHTML::iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\154\x61\x73\x73" => "\144\x2d\146\154\x65\170"]); if (!$koaqeegoeiaiccse) { goto qiaimmucomukkeka; } echo $nsmgceoqaqogqmuw; qiaimmucomukkeka: aoquoewagkseayug: osuscoaaomwcqkew: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto ciucewqgyoiouesq; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto cgmgqucewwssmicq; ciucewqgyoiouesq: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei($xgwukwqqaseqagay . "\45", ["\143\154\141\163\163" => "\x70\x72\x69\x63\145\x2d\144\x69\163\143\x6f\165\156\164\55\141\x6d\x6f\165\x6e\164\40\164\x65\170\x74\55\x64\x61\x6e\147\145\x72"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\151\x63\145\x5f\x64\151\x73\x63\157\x75\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); cgmgqucewwssmicq: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product instanceof WC_Product) { goto oyiuemaaykgkqqam; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto mkomygccqkmkumsi; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; mkomygccqkmkumsi: if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto ussceseaimqywuiy; } $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\151\x63\x65\137\144\151\163\143\x6f\x75\x6e\x74"), $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); ussceseaimqywuiy: oyiuemaaykgkqqam: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\161\x75\x69\162\145\x64"]) && $aiowsaccomcoikus["\162\x65\x71\165\x69\x72\x65\x64"])) { goto uycesqqkoeamocgm; } $aiowsaccomcoikus["\x63\154\141\x73\x73"] = ["\151\x73\x2d\151\156\x76\x61\154\x69\144"]; uycesqqkoeamocgm: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; sqmoqymckwsogsqg: } gqmewagyagamokok: unset($ikgwqyuyckaewsow["\142\151\154\154\x69\156\147\137\x63\x6f\165\156\164\x72\x79"]); unset($ikgwqyuyckaewsow["\x62\151\x6c\x6c\151\x6e\x67\x5f\x61\x64\x64\x72\x65\x73\x73\x5f\x32"]); $ikgwqyuyckaewsow["\x62\151\x6c\154\x69\156\147\137\163\164\141\x74\x65"]["\160\162\x69\157\x72\x69\164\x79"] = 60; $ikgwqyuyckaewsow["\x62\x69\x6c\x6c\x69\156\147\137\x63\151\164\x79"]["\x70\162\151\x6f\162\151\164\171"] = 70; $ikgwqyuyckaewsow["\x62\151\x6c\x6c\151\x6e\147\137\141\x64\144\162\145\163\x73\x5f\61"]["\x70\162\151\157\x72\151\x74\171"] = 80; $ikgwqyuyckaewsow["\142\151\x6c\154\151\x6e\x67\137\145\155\x61\151\154"]["\160\x72\x69\x6f\x72\x69\164\x79"] = 98; $ikgwqyuyckaewsow["\x62\151\154\x6c\x69\x6e\x67\x5f\x70\x6f\x73\x74\143\157\144\145"]["\154\141\142\x65\154"] = __("\x50\157\163\x74\143\x6f\144\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\x69\154\154\x69\156\x67\137\145\155\x61\x69\154"]["\154\141\x62\145\x6c"] = __("\x45\x6d\141\x69\154", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\40\142\164\156\55\x62\x6c\157\x63\153\40\x62\x74\x6e\55\x70\x72\x69\x6d\x61\162\x79\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\56\167\157\157\x63\x6f\155\x6d\145\x72\143\145\55\163\x68\x69\160\160\151\156\x67\x2d\x6d\145\x74\150\157\144\163" => ["\x63\x6c\x61\163\163" => "\x6c\x69\163\164\55\x67\162\x6f\x75\x70\x20\154\x69\x73\164\55\147\162\157\165\x70\55\x66\154\x75\x73\150\x20\142\147\55\x74\x72\x61\x6e\163\160\x61\162\145\156\x74"], "\x75\154\56\167\x6f\x6f\x63\x6f\155\155\145\x72\x63\x65\x2d\163\150\x69\x70\x70\151\x6e\147\55\x6d\x65\x74\150\x6f\144\x73\x20\x6c\141\142\145\x6c" => ["\x63\x6c\141\x73\163" => "\x6d\x2d\x30"], "\x75\x6c\56\x77\x6f\157\x63\157\155\155\145\x72\x63\x65\55\163\x68\x69\160\160\x69\x6e\x67\x2d\155\x65\164\150\x6f\144\x73\x20\x6c\x69" => ["\x63\x6c\141\163\x73" => "\154\151\163\164\55\x67\x72\157\165\x70\x2d\x69\164\145\155\x20\x70\x79\x2d\x31\40\160\x78\x2d\60"]]; } public function umooigokeuauqqsw() : array { return ["\x64\x6c\56\x76\141\162\x69\x61\164\151\x6f\156" => ["\x63\154\x61\163\x73" => "\144\55\146\154\145\x78\x20\x6d\55\141\165\x74\157"], "\x64\154\x2e\166\x61\x72\151\141\164\x69\x6f\156\40\x70" => ["\x63\x6c\x61\x73\x73" => "\155\142\x2d\60"], "\x64\x6c\56\x76\141\162\151\x61\x74\x69\x6f\x6e\40\x64\144" => ["\143\x6c\x61\x73\163" => "\x6d\x62\x2d\x30"], "\144\x6c\x2e\166\141\162\x69\x61\x74\151\x6f\156\x20\144\164" => ["\x63\154\141\163\163" => "\167\x2d\154\147\x2d\x32\x30"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $aqykuigiuwmmcieu = DOMCrawler::ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\56\146\x6f\x72\x6d\x2d\162\x6f\167" => ["\x63\154\x61\x73\x73" => "\x66\x6f\x72\155\55\162\x6f\x77"]]); $aqykuigiuwmmcieu = DOMCrawler::mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\167\x6f\x6f\x63\x6f\155\x6d\x65\162\x63\x65\x2d{$eaoumsseceiowgsk}\x2d\146\151\x65\154\x64\163\137\x5f\x66\151\x65\154\x64\x2d\x77\x72\141\160\160\145\x72\x20\x3e\x20\160", ["\143\x6c\141\x73\163" => "\x72\157\167"]); $aqykuigiuwmmcieu = DOMCrawler::suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\x62\142\162"]); $ggauoeuaesiymgee = ["\x2e\151\x73\55\151\156\x76\141\x6c\151\x64\40\x69\x6e\x70\x75\x74" => ["\143\x6c\x61\163\163" => "\x72\x65\161\165\x69\162\145\144\x2d\151\156\160\x75\x74"], "\56\151\x73\x2d\x69\x6e\x76\141\x6c\151\x64\x20\163\x65\x6c\145\143\x74" => ["\143\x6c\x61\163\163" => "\162\x65\x71\165\x69\x72\145\144\x2d\151\x6e\x70\x75\x74"], "\163\x65\154\145\143\x74\54\x20\151\x6e\160\165\164" => ["\143\154\x61\163\163" => "\146\157\162\x6d\x2d\143\x6f\x6e\x74\162\x6f\x6c"], "\x23\142\x69\x6c\x6c\x69\x6e\x67\x5f\146\151\162\163\164\x5f\156\x61\x6d\145\x5f\146\151\145\x6c\144" => ["\143\154\141\x73\x73" => "\x63\157\x6c\x2d\x6d\x64\x2d\66"], "\x23\142\x69\x6c\154\x69\x6e\x67\137\x6c\x61\x73\164\x5f\x6e\141\x6d\145\137\146\x69\145\x6c\x64" => ["\x63\154\141\163\163" => "\143\157\x6c\x2d\155\144\55\x36"], "\x23\x62\151\x6c\x6c\x69\x6e\x67\x5f\x70\150\157\x6e\x65\137\146\x69\x65\154\144" => ["\143\154\x61\x73\163" => "\143\x6f\154\x2d\x6d\x64\55\x36"], "\43\142\151\154\154\x69\x6e\147\137\x6d\157\x62\x69\154\145\137\146\151\145\x6c\144" => ["\143\x6c\141\x73\163" => "\143\157\x6c\55\155\144\55\66"], "\x23\x62\x69\154\x6c\x69\156\147\x5f\143\x6f\155\160\141\156\171\x5f\146\x69\x65\154\144" => ["\143\x6c\141\163\163" => "\x63\x6f\154\x2d\x6d\x64\55\66"], "\x23\x62\151\x6c\x6c\151\156\147\x5f\143\151\164\171\137\146\x69\145\x6c\x64" => ["\x63\x6c\x61\x73\163" => "\x63\157\154\x2d\x6d\x64\x2d\x36"], "\x23\x62\x69\154\x6c\151\x6e\x67\x5f\x73\x74\x61\x74\x65\x5f\146\x69\x65\154\144" => ["\x63\x6c\141\x73\163" => "\x63\157\x6c\55\155\144\x2d\66"], "\43\x62\151\154\x6c\x69\156\147\137\145\155\141\x69\x6c\x5f\146\151\x65\154\144" => ["\143\x6c\x61\x73\163" => "\143\x6f\154\x2d\155\x64\55\x36"], "\x23\142\151\x6c\154\151\156\147\x5f\160\x6f\x73\164\143\157\x64\145\137\146\x69\145\154\144" => ["\143\x6c\x61\x73\163" => "\x63\157\154\55\155\144\55\x36"], "\43\x62\x69\154\154\151\x6e\147\x5f\160\x6f\x73\164\143\157\x64\145\x5f\x66\151\x65\x6c\x64\x20\151\156\160\165\x74" => ["\x63\154\141\x73\x73" => "\144\x69\x72\145\x63\x74\x69\x6f\x6e\x2d\x6c\164\x72"], "\x23\143\x75\163\164\x6f\x6d\x65\x72\137\144\145\x74\141\151\x6c\x73\40\151\156\160\x75\x74" => ["\143\154\141\x73\x73" => "\x66\157\162\155\x2d\x63\157\x6e\x74\x72\x6f\154"], "\56\x77\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\x2d{$eaoumsseceiowgsk}\55\x66\x69\x65\x6c\x64\x73\137\137\146\x69\145\x6c\144\x2d\167\162\x61\x70\160\x65\162\x20\160" => ["\x63\154\x61\163\163" => "\146\x6f\162\155\55\147\x72\x6f\x75\x70\40\143\x6f\x6c\x2d\x31\62"], "\160" => ["\x63\154\x61\163\163" => "\155\142\x2d\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
