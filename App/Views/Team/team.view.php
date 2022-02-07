<?php /** @var Array $data */ ?>
<div class = "container">

    <div class="search-container ">
        <form method="post" action="?c=Team&a=team">
        <input type="text" placeholder="Full name of team.." name="Team" required>
        <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php
$team = $data['Team'] ;
$coach =$data['coach'];
$domaci =$data['HomeTeam'];
$hostia =$data['AwayTeam'];
if(sizeof($team) > 0) {
?>
<div class="card hhrac container">
    <div class ='row'>
    <div class="col-sm-3 bg-image hover-overlay  ripple" data-mdb-ripple-color="light" >
        <img class ='logicko' src="<?= \App\Config\Configuration::UPLOAD_DIR.$team[0]->Logo ?>" alt = "Fotka"  />
    </div>
        <div class ='col-sm-4 Nazov'>
            <h1 class="card-title haha"><strong><?=$team[0]->Team?></strong></h1>
        </div>
    </div>
</div>
    <div class ='card container' >
    <div class="card-body">
            <div>
               <strong>Conference:</strong>
                <?='     '.$team[0]->Conference?>
            </div>
            <div>
                <strong>Division:</strong>
                <?='     '.$team[0]->Division?>
            </div>
            <div >
                <strong>Score:</strong>
                <?='     '.$team[0]->Wins?> : <?=$team[0]->Loses?>
            </div>
            <div>
                <strong>Winning percentage: </strong><p id =result></p>
            </div>
        <?php if(sizeof($coach) > 0) { ?>
            <div>
                <strong>Coach:</strong>
                <?='     '.$coach[0]->Name .' '.$coach[0]->Surname?>
            </div>
        <?php } ?>
</div>
</div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" onclick="funRoster()">Roster</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" onclick="funMatches()">Matches</a>
            </li>
        </ul>
    </div>
</nav>
    <div id ='Hraci'>
        <?php foreach ($data['Players'] as $hraci){ ?>
        <table>
            <tr>
                <td>
                <img class ='fotka' src="<?= \App\Config\Configuration::UPLOAD_DIR.$hraci->Picture ?>" alt = "Fotka"  />
                </td>
            </tr>
            <tr>
                <td><a class ="tea" href="?c=players&a=player&surname=<?= $hraci->Surname ?>"><?= $hraci->Name .' '. $hraci->Surname ?></a></td>
            </tr>
            <tr>
                <td><?=$hraci->Salary.' '?>Millions</td>
            </tr>
            <tr>
                <td><?=$hraci->Position?></td>
            </tr>
        </table>
        <?php } ?>
    </div>


<?php if(sizeof($domaci) > 0) {
    ?>
    <div id= 'games' class ="container card">
        <h2>Games played</h2>
        <div class ="container">
            <div class="row">
                <div class="col-sm-1 home">
                    <p class ='stred'><strong>Home</strong></p>
                </div>
                <div class="col-sm-1 stred">
                    <p>vs</p>
                </div>
                <div class="col-sm-2 stred">
                    <?php foreach ($data['HomeTeam'] as $domaci){ ?>
                         <?=$domaci->AwayTeam?>
                    <?php } ?>
                </div>
                <div class="col-sm-1 stred">
                    <?php foreach ($data['HomeTeam'] as $domaci){ ?>
                        <?=$domaci->ScoreHome?>:<?=$domaci->ScoreAway?>
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
        <div class ="container ">
            <div class="row">
                <div class="col-sm-1 home">
                    <p class ='stred'><strong>Away</strong></p>
                </div>
                <div class="col-sm-1 stred">
                    <p>vs</p>
                </div>
                <div class="col-sm-2 stred">
                    <?php foreach ($data['AwayTeam'] as $hostia){ ?>
                        <?=$hostia->HomeTeam?>
                    <?php } ?>
                </div>
                <div class="col-sm-1 stred">
                    <?php foreach ($data['AwayTeam'] as $hostia){ ?>
                        <?=$hostia->ScoreAway?>:<?=$hostia->ScoreHome?>
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

<script>
    window.onload = document.getElementById('Hraci').style.display ='none';
    window.onload = document.getElementById('games').style.display ='none';
    let win = <?=$team[0]->Wins?>;
    let total = <?=$team[0]->Wins + $team[0]->Loses?>;
    let result = Math.round((win/total)*100)/100;

    let y =2022;
    let hrac = <?=$hraci->Age?>;
    let vek = y-hrac;
    document.getElementById("vekHraca").innerHTML = vek;

    document.getElementById("result").innerHTML =result;


</script>