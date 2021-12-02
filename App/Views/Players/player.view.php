<div class = "container">
    <div class="search-container ">
        <form method="post" action="?c=Players&a=player">
        <input type="text" placeholder="Search.." name="priezvisko">
        <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
$hrac = $data['hrac'] ; //AK NEZADAM HRACA, TAK SA NIC NEZOBRAZI
if(sizeof($hrac) > 0) {


?>
<div class="card hhrac container">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img
            src="<?= \App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Obrazok
            ?>" alt = "Fotka"  width="30%" height="350px"
            class="img-fluid" />
        <script>
            function setImageVisible(id, visible) {
                var img = document.getElementById(id);
                img.style.visibility = (visible ? 'visible' : 'hidden');
            }
        </script>
        <img id="myImageId" src="<?=\App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Logo
        ?>" width="30%" height="70%">
        <div class = "row">
            <div class ="col-md-1">
                <a href="javascript:setImageVisible('myImageId', true)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                        <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                    </svg></a>
                <a href="javascript:setImageVisible('myImageId', false)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                        <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
                    </svg></a>
            </div>
        </div>

    </div>

    <div class="card-body">
        <h5 class="card-title haha"><?=$hrac[0]->Meno. " ". $hrac[0]->Priezvisko ?></h5>
        <div class = "row">
            <div class=" col-sm-1 card-text haha">
                PPG <?=$hrac[0]->Body?>
            </div>
            <div class="col-sm-1 card-text haha">
                RPG <?=$hrac[0]->Doskoky?>
            </div>
            <div class="col-sm-1 card-text haha">
                AST <?=$hrac[0]->Asistencie?>
            </div>
            <div class=" col-sm-1 card-text haha">
                Stl <?=$hrac[0]->Zisky?>
            </div>
            <div class=" col-sm-1 card-text haha">
                Blk <?=$hrac[0]->Bloky?>
            </div>
            <div class=" col-sm-1 card-text haha">
                TO <?=$hrac[0]->Straty?>
            </div>
            <div class="col-sm-1 card-text haha">
                Height <?=$hrac[0]->Height?> foot
            </div>
            <div class="col-sm-1 card-text haha">
                Weight <?=$hrac[0]->Weight?> lbs
            </div>
            <div class="col-sm-1 card-text haha">
                <?=$hrac[0]->Weight/2.2046?> KG
            </div>
        </div>
        <hr>

    </div>
</div>
    <?php
}

?>