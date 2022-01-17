<?php /** @var Array $data */ ?>
<div class = "container">
    <div class="search-container ">
        <form method="post" action="?c=players&a=team">
        <input type="text" placeholder="Search.." name="Team" required>
        <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
$team = $data['Team'] ;
$coach =$data['coach'];
$domaci =$data['zapasDomaci'];
$hostia =$data['zapasHostia'];
if(sizeof($team) > 0) {
?>
<div class="card hhrac container">
    <div class ='row'>
    <div class="col-sm-3 bg-image hover-overlay  ripple" data-mdb-ripple-color="light" >
        <img class ='logicko' src="<?= \App\Config\Configuration::UPLOAD_DIR.$team[0]->Logo ?>" alt = "Fotka"  width="100%" height="200px" />
    </div>
        <div class ='col-sm-4 Nazov'>
            <h1 class="card-title haha"><strong><?=$team[0]->Team?></strong></h1>
        </div>
    </div>
</div>
    <div class ='card container' >
    <div class="card-body">
            <div class="card-text haha">
               <strong>Conference:</strong>
                <?='     '.$team[0]->Konferencia?>
            </div>
            <div class=" card-text haha">
                <strong>Division:</strong>
                <?='     '.$team[0]->Divizia?>
            </div>
            <div class=" card-text haha">
                <strong>Score:</strong>
                <?='     '.$team[0]->Vitazstva?> : <?=$team[0]->Prehry?>
        </div>
            <div class=" card-text haha">
                <strong>Coach:</strong>
                <?='     '.$coach[0]->Meno .' '.$coach[0]->Priezvisko?>
            </div>
</div>
</div>
    <h2>Games played</h2>
<?php if(sizeof($domaci) > 0) {
    ?>
    <div class ="container">

        <div class ="container">
            <div class="row">
                <div class="col-sm-1 home">
                    <p class ='stred'><strong>Home</strong></p>
                </div>
                <div class="col-sm-1 stred">
                    <p>vs</p>
                </div>
                <div class="col-sm-2 stred">
                    <?php foreach ($data['zapasDomaci'] as $domaci){ ?>
                         <?=$domaci->Hostia?>
                    <?php } ?>
                </div>
                <div class="col-sm-1 stred">
                    <?php foreach ($data['zapasDomaci'] as $domaci){ ?>
                        <?=$domaci->ScoreDomaci?>:<?=$domaci->ScoreHostia?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } else {
        ?>
        <?php }
        ?>
        <?php if(sizeof($hostia) > 0) {
        ?>
        <div class ="container">
            <div class="row">
                <div class="col-sm-1 home">
                    <p class ='stred'><strong>Away</strong></p>
                </div>
                <div class="col-sm-1 stred">
                    <p>vs</p>
                </div>
                <div class="col-sm-2 stred">
                    <?php foreach ($data['zapasHostia'] as $hostia){ ?>
                        <?=$hostia->Domaci?>
                    <?php } ?>
                </div>
                <div class="col-sm-1 stred">
                    <?php foreach ($data['zapasHostia'] as $hostia){ ?>
                        <?=$hostia->ScoreHostia?>:<?=$hostia->ScoreDomaci?>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }
    ?>

    </div>
    <?php
}
?>
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

