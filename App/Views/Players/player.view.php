<?php /** @var Array $data */ ?>
<div class = "container">
    <div class="search-container ">
        <form method="post" action="?c=Players&a=player">
        <input type="text" placeholder="Type surname.." name="surname" required>
        <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
$hrac = $data['player'] ;
if(sizeof($hrac) > 0) {
?>
    <script>
        alert('<?=$hrac[0]->Name. " ". $hrac[0]->Surname ?>');
    </script>
    <div class ="container hlavicka">
        <div class = "row">
            <div class ="col-sm-3">
                <img onmouseover="zvacsi(this)"  src="<?=\App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Picture?>" alt = "Fotka" class = "card-foto"/>
            </div>
            <div class = "col-sm-4 card-meno">
                <h5><strong><?=$hrac[0]->Name. " ". $hrac[0]->Surname ?></strong></h5>
                <a class ="tea" href="?c=team&a=team&Team=<?=$hrac[0]->Team ?>"><h5><?=$hrac[0]->Team ?></h5></a>
            </div>
           <div class ="col-sm-3">
                <img src="<?=\App\Config\Configuration::UPLOAD_DIR.$hrac[0]->Logo?>" alt = "Fotka" class = "card-logo"/>
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
                    <div class = "col-sm-3 card-text">
                        <strong>Position</strong>
                        <p><?=$hrac[0]->Position?></p>
                        </div>
            </div>
            <div class = "container col-sm-6">
                <div class="card-body">
                    <div class ="row">
                        <div class=" col-sm-6 card-text ">
                            <strong>Points</strong>
                            <p><?=$hrac[0]->Points?></p>
                        </div>
                        <div class="col-sm-6 card-text ">
                            <strong>Rebounds</strong>
                            <p><?=$hrac[0]->Rebounds?></p>
                        </div>
                        <div class="col-sm-6 card-text ">
                            <strong>Assists</strong>
                            <p><?=$hrac[0]->Assists?></p>
                        </div>
                        <div class="col-sm-6 card-text ">
                            <strong>Steals</strong>
                            <p><?=$hrac[0]->Steals?></p>
                        </div>
                        <div class="col-sm-6 card-text ">
                            <strong>Blocks</strong>
                            <p><?=$hrac[0]->Blocks?></p>
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

    let y =2022;
    let hrac = <?=$hrac[0]->Age?>;
    let vek = y-hrac;


    document.getElementById("vaha").innerHTML =<?=$hrac[0]->Weight?>;
    document.getElementById("vahaKG").innerHTML =Math.round(kg);
    document.getElementById("vyska").innerHTML =<?=$hrac[0]->Height?>;
    document.getElementById("vekHraca").innerHTML = vek;


</script>
