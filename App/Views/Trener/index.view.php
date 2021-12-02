<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($data['trener'] as $trener){ ?>
                <h1>
                    <p>
                        <?=
                        $trener->Meno;
                        ?>
                        <?=
                        $trener->Priezvisko;
                        ?>
                        |

                        <?=
                        $trener->Team;
                        ?>
                    </p>
                </h1>
                <hr>
                <?php
            }
            ?>
        </div>
    </div>
</div>
