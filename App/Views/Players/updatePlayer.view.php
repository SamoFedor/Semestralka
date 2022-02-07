<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Players&a=updateePlayer">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Name</label>
                    <input class="form-control" name="name" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Surname</label>
                    <input class="form-control" name="surname" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button type = "submit">Odoslat</button>
                </div>
            </div>
        </form>
    </div>
</div>