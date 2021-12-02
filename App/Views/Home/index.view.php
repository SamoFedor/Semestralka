<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($data['team'] as $team){ ?>
                <h1>
                    <p>
                    <?=
                    $team->Team;
                    ?>
                    <?=
                    $team->Vitazstva;
                    ?>
                    :
                    <?=
                    $team->Prehry;
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
