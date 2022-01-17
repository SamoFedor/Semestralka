<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=prihlasenie&a=zmenaHeslaa">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Your password</label>
                    <input class="form-control" name="heslo" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">New password</label>
                    <input class="form-control" name="new" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Repeat new password</label>
                    <input class="form-control" name="repeat" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>
