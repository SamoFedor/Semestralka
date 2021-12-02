<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=home&a=upload">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Fotka</label>
                    <input name="files" class = "form-control" id="formFile" type="file">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Meno</label>
                    <input class="form-control" name="meno" required>
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Priezvisko</label>
                    <input class="form-control" name="priezvisko" required>
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
                </div>
        </form>
    </div>
</div>
