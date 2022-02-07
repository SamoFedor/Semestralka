<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Players&a=updateePlayer">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Cele meno</label>
                    <input class="form-control" name="celeMeno" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>