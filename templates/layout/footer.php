<div class="footer">
    <div class="footer-article padding-top-bottom">
        <div class="logo-f logo">
            <a class="logo-footer" href="">
                <img class="lazy" onerror="this.src='<?=THUMBS?>/149x62x2/assets/images/noimage.png';" data-src="<?=THUMBS?>/149x62x2/<?=UPLOAD_PHOTO_L.$logoFooter['photo']?>" alt="logo" title="logo"/>
            </a>
        </div>
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news">
                <p class="name-company-footer"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                <?php if (count($social)) { ?>
                <div class="social social-footer d-flex align-items-center justify-content-center">
                    <?php foreach ($social as $k => $v) { ?>
                    <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-4">
                        <img class="lazy" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">2023 Copyright © <?= $copyright['name' . $lang] ?>. Web Design by Nina.vn</div>
            <div class="statistic">
                <span><?= dangonline ?>: <?= $online ?></span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>
<a class="btn-chiduong btn-frame text-decoration-none" href="<?=$optsetting['link_googlemaps']?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/chiduong.png" alt="Hotline" class="lazy"></i>
</a>