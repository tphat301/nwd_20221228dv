<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <div class="d-flex align-items-center justify-content-around">
                <div class="logo">
                    <a class="logo-header" href="">
                        <img class="lazy" onerror="this.src='<?=THUMBS?>/83x34x2/assets/images/noimage.png';" data-src="<?=THUMBS?>/83x34x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo" title="logo"/>
                    </a>
                </div>
                <ul class="d-flex align-items-center justify-content-end">
                    <li class="sub-mn">
                        <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham"
                            title="<?=thicong?>"><?=thicong?></a>
                        <?php if (count($splist)) { ?>
                        <ul>
                            <?php foreach ($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); 
                            ?>
                            <li>
                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"
                                    href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                <?php if (!empty($spcat)) { ?>
                                <ul>
                                    <?php foreach ($spcat as $kcat => $vcat) {
                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); 
                                    ?>
                                    <li>
                                        <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                            href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                        <?php if (!empty($spitem)) { ?>
                                        <ul>
                                            <?php foreach ($spitem as $kitem => $vitem) {
                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                            <li>
                                                <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>"
                                                    href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                <?php if (!empty($spsub)) { ?>
                                                <ul>
                                                    <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                    <li>
                                                        <a class="transition" title="<?= $vsub['name' . $lang] ?>"
                                                            href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <?php } ?>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <li class="sub-mn"><a class="<?php if ($com == 'bang-gia') echo 'active'; ?> transition" href="bang-gia"
                            title="<?=banggiamau?>"><?=banggiamau?></a>
                    </li>
                    <li class="sub-mn"><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he"
                            title="<?= lienhe ?>"><?= lienhe ?></a>
                    </li>
                    <!-- <li>
                        <div class="lang-header d-flex align-items-center">
                            <a href="ngon-ngu/vi/"><img src="<?=THUMBS?>/35x25x1/assets/images/vi.jpg" alt="Vietnam" title="Vietnam" ></a>
                            <a href="ngon-ngu/en/"><img src="<?=THUMBS?>/35x25x1/assets/images/en.jpg" alt="English" title="English" ></a>
                        </div>
                    </li> -->
                    <div class="lang">
                <div class="execphpwidget">
                    <div id="flags">            
                        <a href="" onclick="doGoogleLanguageTranslator('vi|vi'); return false;" title="VN" class="flag vi text-decoration-none ">VN</a>
                        <a href="" onclick="doGoogleLanguageTranslator('vi|en'); return false;" title="English" class="flag en text-decoration-none">EN</a>
                    </div>
                     <div id="google_language_translator"></div>
                </div>
            </div>
                    <li class="text-white ico-search position-relative">
                        <span class="close text-white">X</span>
                        <i class="bi bi-search" id="s"></i>
                    </li>
                </ul>
            </div>
            <div class="search box-s d-flex align-items-center justify-content-between">
                <input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?php if (!empty($_GET['keyword'])) {
                                                                                                                                            echo $_GET['keyword'];
                                                                                                                                        } ?>" />
                <p onclick="onSearch('keyword');" class="d-flex align-items-center justify-content-center"><i class="bi bi-search"></i></p>
            </div>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>