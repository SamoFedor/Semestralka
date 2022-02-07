<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Team&a=updatee">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Wins</label>
                    <input class="form-control" name="wins" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Loses</label>
                    <input class="form-control" name="loses" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>