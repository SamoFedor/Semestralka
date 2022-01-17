<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=home&a=upload">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Fotka</label>
                    <input name="files" class = "form-control" id="formFile" type="file" required>
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Celé meno</label>
                    <input class="form-control" name="celeMeno" required minlength="10" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Meno</label>
                    <input class="form-control" name="meno" required minlength="2" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Priezvisko</label>
                    <input class="form-control" name="priezvisko" required minlength="2" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">MVP Votes</label>
                    <input class="form-control" placeholder="0" name="MVPVote" required minlength="1" maxlength="4">
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
