<?php /** @var Array $data */ ?>
<div class ="container">
<div class ='container Teams'>
   <p><strong>NBA Teams</strong></p>
</div>
<div class ='container'>
    <div class ='row'>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Pacific</strong>
                <?php foreach ($data['Pacific'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
                </div>
            </div>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Southwest</strong>
                <?php foreach ($data['Southwest'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
            </div>
        </div>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Southeast</strong>
                <?php foreach ($data['Southeast'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
            </div>
        </div>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Atlantic</strong>
                <?php foreach ($data['Atlantic'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
            </div>
        </div>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Northwest</strong>
                <?php foreach ($data['Northwest'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
            </div>
        </div>
        <div class = 'col-md-6'>
            <div class = 'card'>
                <strong class = 'title'>Central</strong>
                <?php foreach ($data['Central'] as $pacific) { ?>
                    <a class ="tea" href="?c=team&a=team&Team=<?= $pacific->Team ?>"><p><img alt= 'logo' class="allImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$pacific->Logo ?>"> <strong>  <?= $pacific->Team ?> </strong></p></a>
                <?php }?>
            </div>
        </div>
    </div>
</div>
</div>
<div class = "container-fluid footer">
    <div class = "row">
        <div class = "col-12">
            <hr>
        </div>
        <div class = "col-5">
        </div>
        <div class = "col-3">
            <p>©2022 Samuel Fedor UNIZA</p>
        </div>
    </div>
</div>