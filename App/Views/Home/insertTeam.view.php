<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=home&a=insertTeamm">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Logo</label>
                    <input name="files" class = "form-control" id="formFile" type="file" required>
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="10" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Konferencia</label>
                    <input class="form-control" name="konferencia" required minlength="4" maxlength="4">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Divizia</label>
                    <input class="form-control" name="divizia" required minlength="2" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Vitazstva</label>
                    <input class="form-control" name="win" required minlength="1" maxlength="4">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Prehry</label>
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
