<div class ="container Options">

    <button id="btn-all">All teams</button>

            <form method="post" action="?c=Team&a=leaderboard">
                <select name ="division"  >
                    <option >Pacific</option>
                    <option >Central</option>
                    <option >Atlantic</option>
                    <option >Northwest</option>
                    <option >Southwest</option>
                    <option >Southeast</option>
                    <option selected hidden>Division</option>
                </select>
                <button type="submit" >Division</button>
            </form>


            <form method="post" action="?c=Team&a=leaderboard">
                <select name ="conference">
                    <option >East</option>
                    <option >West</option>
                    <option selected hidden>Conference</option>
                </select>
                <button type="submit">Conference</button>
            </form>

</div>
<?php /** @var Array $data */ ?>
<?php $hrac = $data['Division'];
if(sizeof($hrac) > 0) {
?>
<div class="container card " id="didi">
    <div class="row">
        <div class="col">
            <?php foreach ($data['Division'] as $team){ ?>
                <img alt= 'logo' class="myImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$team->Logo
                ?>">
                <strong class ="Velkost"><?= $team->Team?></strong> <strong class ="Velkostt"><?=$team->Wins?>:</strong><strong class ="Velkosttt"><?=$team->Loses?></strong>
                <hr>
                <?php
            }
            ?>
        </div>
    </div>
</div>
    <?php } ?>
<?php $hrac = $data['Conference'];
if(sizeof($hrac) > 0) {
    ?>
<div class="container card" id="conf">
    <div class="row">
        <div class="col ">
            <?php foreach ($data['Conference'] as $team){ ?>
                <img class="myImage" alt ='logo' src="<?=\App\Config\Configuration::UPLOAD_DIR.$team->Logo
                ?>">
                <strong class ="Velkost"><?= $team->Team?></strong> <strong class ="Velkostt"><?=$team->Wins?>:</strong><strong class ="Velkosttt"><?=$team->Loses?></strong>
                <p id = score></p>
                <hr>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php } ?>
<div id="team">
</div>
<div class = "container-fluid footer">
    <div class = "row">
        <div class = "col-5">
        </div>
        <div class = "col-3">
            <p>©2022 Samuel Fedor UNIZA</p>
        </div>
    </div>
</div>

