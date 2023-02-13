<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<!-- THI CÔNG  -->
<?php if (count($pronb)) { ?>
<div class="wrap-product wrap-content">
        <ul class="grid effect-7" id="grid">
            <?php foreach($albumProjetc as $k => $v) { ?>
                <li>
                    <div >
                        <p class="pic-product">
                            <a class="album-image scale-img mb-0" rel="album-<?=$v['id']?>" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$v['name'.$lang]?>">
                                <img class=" w-100" onerror="this.src='<?=THUMBS?>/480x360x1/assets/images/noimage.png';" src="<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                            </a>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
</div>
<?php } ?>