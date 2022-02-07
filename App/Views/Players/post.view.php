<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Players&a=upload">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Photo</label>
                    <input name="files" class = "form-control" id="formFile" type="file" required>
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Name</label>
                    <input class="form-control" name="meno" required minlength="2" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Surname</label>
                    <input class="form-control" name="priezvisko" required minlength="2" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" placeholder="team" name="team" required minlength="10" maxlength="30">
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
