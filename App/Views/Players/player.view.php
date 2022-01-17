<?php /** @var Array $data */ ?>
<div class = "container">
    <div class="search-container ">
        <form method="post" action="?c=Players&a=player">
        <input type="text" placeholder="Search.." name="priezvisko" required>
        <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
$hrac = $data['hrac'] ;
if(sizeof($hrac) > 0) {
?>
    <script>
        alert('<?=$hrac[0]->Meno. " ". $hrac[0]->Priezvisko ?>');
    </script>
    <div class ="container hlavicka">
        <div class = "row">
            <div class ="col-sm-3">
                <img onmouseover="zvacsi(this)" src="<?=\App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Obrazok?>" alt = "Fotka" class = "card-foto"/>
            </div>
            <div class = "col-sm-4 card-meno">
                <h5><strong><?=$hrac[0]->Meno. " ". $hrac[0]->Priezvisko ?></strong></h5>
                <h5><?=$hrac[0]->Team ?></h5>
            </div>
            <div class ="col-sm-3">
                <img src="<?=\App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Logo?>" alt = "Fotka" class = "card-logo"/>
            </div>
            <div class = "col-sm-2 MVP">
                <form method="post" action="?c=Players&a=addMVPVote">
                    <input type="text" placeholder="Number <?= $hrac[0]->id ?>" name="id" required>
                    <button type="submit" onclick="alert('Pridali ste MVP vote')">MVP Votes <?=$hrac[0]->MVPVote?></button>
                </form>
            </div>
        </div>
    </div>
    <div class = "container hlavicka">
        <div class ="row">
        <div class="container col-sm-6">
                    <div class=" col-sm-2 card-text vek ">
                        <strong>Age</strong>
                        <p id ='vekHraca'></p>
                    </div>
                    <div class=" col-sm-2 card-text">
                        <strong>Height</strong>
                        <p id ='vyska'></p>
                    </div>
                    <div class=" col-sm-2 card-text">
                        <strong>Weight</strong>
                        <p id = 'vaha'></p>
                    </div>
            <div class=" col-sm-2 card-text">
                <strong>Weight in Kg</strong>
                <p id = 'vahaKG'></p>
            </div>
                    <div class = "col-md-2 card-text">
                        <strong>Position</strong>
                        <p><?=$hrac[0]->Pozicia?></p>
                        </div>
            </div>
            <div class = "container col-sm-6">
                <div class="card-body">
                    <div class ="row">
                        <div class=" col-sm-6 card-text haha">
                            <strong>Points</strong>
                            <p><?=$hrac[0]->Body?></p>
                        </div>
                        <div class="col-sm-6 card-text haha">
                            <strong>Rebounds</strong>
                            <p><?=$hrac[0]->Doskoky?></p>
                        </div>
                        <div class="col-sm-6 card-text haha">
                            <strong>Assists</strong>
                            <p><?=$hrac[0]->Asistencie?></p>
                        </div>
                        <div class=" col-sm-6 card-text haha">
                            <strong>Steals</strong>
                            <p><?=$hrac[0]->Zisky?></p>
                        </div>
                        <div class=" col-sm-6 card-text haha">
                            <strong>Blocks</strong>
                            <p><?=$hrac[0]->Bloky?></p>
                        </div>
                        <div class=" col-sm-6 card-text haha">
                            <strong>Turnovers</strong>
                            <p><?=$hrac[0]->Straty?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>
<div class = "container-fluid footer">
    <div class = "row">
        <div class = "col-12">
            <hr>
        </div>
        <div class = "col-4">
        </div>
        <div class = "col-3">
            <p>©2022 Samuel Fedor UNIZA</p>
        </div>
    </div>
</div>
<script>
    let x = 2.20462262;
    let vaha =<?=$hrac[0]->Weight?>;
    let kg = vaha/x;
    function zvacsi(x) {
        x.style.height = "80%";
        x.style.width = "100%";
    }
    document.getElementById("vaha").innerHTML =<?=$hrac[0]->Weight?>;
    document.getElementById("vahaKG").innerHTML =Math.round(kg);
    document.getElementById("vyska").innerHTML =<?=$hrac[0]->Height?>;
    document.getElementById("vekHraca").innerHTML = <?=2022-$hrac[0]->Narodenie?>;
</script>
