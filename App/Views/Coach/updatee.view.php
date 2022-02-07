<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=coach&a=update">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Name</label>
                    <input class="form-control" name="team" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Surname</label>
                    <input class="form-control" name="surname" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Current Team</label>
                    <input class="form-control" name="team" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">New Team</label>
                    <input class="form-control" name="newteam" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>