<?php /** @var Array $data */ ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Zoznam hráčov databázy</h1>
            <?php foreach ($data['hrac'] as $hrac){ ?>
                <h3>
                    <p>
                        |
                        <?=

                        $hrac->Meno;
                        ?>

                        <?=
                        $hrac->Priezvisko;
                        ?>

                        :
                        <?=
                        $hrac->Pozicia;
                        ?>
                        |
                        <?=
                        $hrac->Body;
                        ?>
                        |
                        <?=
                        $hrac->Doskoky;
                        ?>
                        |
                        <?=
                        $hrac->Asistencie;
                        ?>
                        |
                        <?=

                        $hrac->Team;
                        ?>

                    </p>
                </h3>
                <hr>
                <?php
            }
            ?>

        </div>
    </div>
</div>
