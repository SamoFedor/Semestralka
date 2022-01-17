<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($data['zapas'] as $zapas){ ?>
                <h1>
                    <p>
                        <?=
                        $zapas->Index;
                        ?>
                        .
                        <?=
                        $zapas->Domaci;
                        ?>
                        vs
                        <?=
                        $zapas->Hostia;
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

