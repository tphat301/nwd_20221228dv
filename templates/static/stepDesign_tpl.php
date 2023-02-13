<?php if(count($stepDesigns)) { ?>
    <h3 class="page-title-step-design"><?=$titleMain?></h3>
    <div class="pg-detail-step-design">
        <?php 
            $count = 0;
            foreach($stepDesigns as $k => $v) {
            $count++;
        ?>
        <div class="item-step-desings-detail">
            <span class="name-step-item-detail"><?=buoc?> <?=$count?>: <?=$v['name'.$lang]?></span> 
            <div class="content-step-item-detail">
                <?=htmlspecialchars_decode($v['content'.$lang])?>
            </div>
        </div>
        <?php } ?>
    </div>

<?php } else { ?>
    <div class="alert alert-warning w-100" role="alert">
        <strong><?=dangcapnhatdulieu?></strong>
    </div>
<?php } ?>