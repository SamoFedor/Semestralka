<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Team&a=insertTeamm">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="10" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Town</label>
                    <input class="form-control" name="Town" required minlength="1" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Postfix</label>
                    <input class="form-control" name="Postfix" required minlength="1" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Wins</label>
                    <input class="form-control" name="win" required minlength="1" maxlength="4">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Loses</label>
                    <input class="form-control" name="lose" required minlength="1" maxlength="4">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class = "container-fluid footer">
    <div class = "row">
        <div class = "col-12">
            <hr>
        </div>
        <div class = "col-5">
        </div>
        <div class = "col-2">
            <p>©2022 Samuel Fedor</p>
        </div>
    </div>
</div>
<?php
