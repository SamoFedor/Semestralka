<div class ="container Options">
    <div class ="row">
        <div class = "col-sm-2">
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
            <button type="submit" name = "division" >Submit</button>
        </form>
        </div>
        <div class = "col-sm-2 ">
            <form method="post" action="?c=Team&a=leaderboard">
            <select name ="conference">
                <option >East</option>
                <option >West</option>
                <option selected hidden>Conference</option>
            </select>
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php /** @var Array $data */ ?>
    <div class="container card">
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
<div class="container card">
    <div class="row">
        <div class="col Divizia">
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
<div class = "container-fluid footer">
    <div class = "row">
        <div class = "col-5">
        </div>
        <div class = "col-3">
            <p>©2022 Samuel Fedor UNIZA</p>
        </div>
    </div>
</div>
