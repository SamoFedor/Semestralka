<div class ="container Options">
    <div class ="row">
        <div class = "col-sm-2">
        <form method="post" action="?c=Players&a=leaderboard">
        <select name ="divizia">
            <option >Pacific</option>
            <option >Central</option>
            <option >Atlantic</option>
            <option >Northwest</option>
            <option >Southwest</option>
            <option >Southeast</option>
        </select>
            <button type="submit" onclick="fun()" >Submit</button>
        </form>
        </div>
        <div class = "col-sm-2 ">
            <form method="post" action="?c=Players&a=leaderboard">
            <select name ="conference">
                <option >East</option>
                <option >West</option>
            </select>
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php /** @var Array $data */ ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php foreach ($data['Divizia'] as $team){ ?>
                    <img class="myImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$team->Logo
                    ?>" width="170px" height="150px">
                    <strong class ="Velkost"><?= $team->Team?></strong> <strong class ="Velkostt"><?=$team->Vitazstva?>:</strong><strong class ="Velkosttt"><?=$team->Prehry?></strong>
                    <hr>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col Divizia">
            <?php foreach ($data['Conference'] as $team){ ?>
                <img class="myImage" src="<?=\App\Config\Configuration::UPLOAD_DIR.$team->Logo
                ?>" width="15%" height="5%">
                <strong class ="Velkost"><?= $team->Team?></strong> <strong class ="Velkostt"><?=$team->Vitazstva?>:</strong><strong class ="Velkosttt"><?=$team->Prehry?></strong>
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
