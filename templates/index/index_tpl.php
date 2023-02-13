<!-- DỰ ÁN MỚI -->
<?php if (count($pronb)) { ?>
<div class="wrap-product wrap-content">
    <div class="sub-title-main"><span><?=$sloganProject['name'.$lang]?></span></div>
    <div class="title-main">
        <span class="number-project">0<?=01?>.</span>
        <span class="title-main-projetc"><?=duanmoi?></span>
    </div>
    <div class="flex-cus row">
		<?php foreach($pronb as $k => $v) { ?>
            <?php if($k >= 0 && $k < 9) { ?>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-cus mb-3">
                    <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img hover_xam" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/440x336x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/440x336x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </div>
                        <div class='info-project'>
                            <span class="sub-title-project">Apartment</span>
                            <h3 class="mb-0"><a class="text-decoration-none text-split name-product text-uppercase" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                            <span class="address-project">
                                <?=$v['address'.$lang]?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <?php if(count($pronb) >= 9) { ?>
            <div class="box-more-project d-block text-center mt-3 mb-3 ml-auto mr-auto">
                <a href="san-pham" class="link-more-project text-decoration-none hover_xemthem"><?=xemthemnhieuduankhac?></a>
            </div>
        <?php } ?>
	</div>
</div>
<?php } ?>

<!-- SERVICE -->
<?php if(count($service)) { ?>
    <div class="service">
        <div class="wrap-content">
            <div>
                <div class="sub-title-main"><span><?=$sloganService['name'.$lang]?></span></div>
                <span class="number-project">0<?=02?>.</span>
                <span class="title-main-projetc title-main-projetc-m">
                    <?=dichvu?>
                </span>
            </div>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="3:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"> 
                <?php foreach($service as $k => $v) {?>
                    <div class="item-service">
                        <img class="lazy image-s" onerror="this.src='<?= THUMBS ?>/60x60x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/60x60x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        <span class="title-service"><?=$v['name'.$lang]?></span>
                        <p class='content-service'>
                            <?=htmlspecialchars_decode($v['content'.$lang])?>
                        </p>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php } ?>

<!-- STEP DESGINS -->
<div class="step-designs">
    <div class="d-flex flex-wrap align-items-center justify-content-between box-step-desings">
        <?php if(count($stepDesigns)) {?>
            <div class="step-designs-left">
                <span class="sub-title-step-service">
                    <?=quytrinhthietketieuchuangom6buoc?>
                </span>
                <span class="number-step-designs">
                    0<?=03?>.
                </span>
                <span class="title-step-designs">
                    <?=quytrinhthietke?>
                </span>
                <div class="main-step-designs-left">
                    <?php 
                        $count = 0;
                        foreach($stepDesigns as $k => $v) {
                        $count++;
                    ?>
                        <div class="item-step-desings-left">
                            <span class="name-step-item"><?=buoc?> <?=$count?>: <?=$v['name'.$lang]?> <i class="bi bi-plus-lg"></i></span> 
                            <div class="content-step-item">
                                <?=htmlspecialchars_decode($v['content'.$lang])?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="box-btn-detail-step-design">
                            <a href="quy-trinh-thiet-ke" class="link-btn-detail-step-design text-decoration-none"><i class="bi bi-arrow-right mr-3"></i><?=xemchitiet?></a>
                        </div>
                </div>
            </div>
        <?php } ?>
        <div class="step-designs-right">
            <img class="lazy" onerror="this.src='<?= THUMBS ?>/574x1047x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/574x1047x1/<?= UPLOAD_PHOTO_L . $bannerStepDesign['photo'] ?>"/>
        </div>
    </div>
</div>

<!-- BLOG -->
<?php if(count($newsnb)) { ?>
    <div class="blog">
        <div class="wrap-content">
            <div>
                <div class="sub-title-main">
                    <span>
                        <?=$sloganBlog['name'.$lang]?>
                    </span>
                </div>
                <span class="number-project">0<?=03?>.</span>
                <span class="title-main-projetc title-main-projetc-m">
                    Blogs
                </span>
            </div>
            <div class="row-news">
                <div class="news row w-clear pb-4" data-aos="fade-up" data-aos-duration="1000">
                    <?php foreach($newsnb as $k=>$v) { ?>
                        <?php if($k>=0 && $k < 4) { ?>
                            <div class="news w-clear col-md-6 col-sm-12 pb-4" data-aos="fade-up" data-aos-duration="1000">
                                <a class="pic-news scale-img text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                    <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/576x432x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/576x432x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                                </a>
                                <div class="info-news">
                                    <h3>
                                        <a class="name-news text-decoration-none text-split" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                                    </h3>
                                    <div class="desc-news text-split"><?=$v['desc'.$lang]?></div>
                                    <p class="time-news"><i class="bi bi-calendar-check-fill"></i> <?=date("d/m/Y h:i A",$v['date_created'])?></p>
                                </div>
                            </div>
                        <?php } ?>
        
                        <?php if($k >= 4) { ?>
                            <div class="box-more-ed box-more-project d-block text-center ml-auto mr-auto">
                                <a href="tin-tuc" class="link-more-project text-decoration-none hover_xemthem"><?=xemthemtintuckhac?></a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- BOX VOTES -->
<div class="box-votes">
    <div class="wrap-content">
        <div class="row">
            <div class="col-md-6">
                <!-- PARTNER -->
                <?php if (count($partner)) { ?>
                    <div class="wrap-partner">
                        <div class="wrap-content">
                            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
                                data-lg-items="1:0" data-xlg-items="3:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
                                data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
                                data-nav="1"
                                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>"
                                data-navcontainer=".control-partner">
                                <?php foreach ($partner as $key => $v) { ?>
                                <div>
                                    <?php if($key % 2 == 0) echo '<div class="items-tc">'; ?>
                                    <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/620x316x1/assets/images/noimage.png';"
                                            data-src="<?= THUMBS ?>/620x316x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                    <?php if(($key % 2 != 0) || count($partner) - 1 == $key ) echo '</div>'; ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="control-partner control-owl transition"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <!-- VOTES CUSTOMER -->
                <?php if (count($partner)) { ?>
                    <div class="votes">
                        <div>
                            <div class="sub-title-main"><span><?=$sloganVotes['name'.$lang]?></span></div>
                            <span class="number-project">0<?=04?>.</span>
                            <span class="title-main-projetc title-main-projetc-m">
                                <?=khachhang?>
                            </span>
                        </div>
                        <div class="list-votes">
                            <div class="cats-owl list-hot">
                                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="1">
                                    <?php foreach ($votes as $k => $v) { ?>
                                        <div class="item-votes">
                                            <div class="d-block text-center">
                                                <img onerror="this.src='<?= THUMBS ?>/90x90x1/assets/images/noimage.png';" src="<?= THUMBS ?>/90x90x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" />
                                            </div>
                                            <div class="box-content-votes">
                                                <span class="text-vote"><?= htmlspecialchars_decode($v['desc' . $lang]) ?></span>
                                                <span class="name-author"><?= $v['name' . $lang] ?></span>
                                                <span class="address-company"><?=$v['content'.$lang]?></span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="control-yKienKhachHang control-owl transition"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>