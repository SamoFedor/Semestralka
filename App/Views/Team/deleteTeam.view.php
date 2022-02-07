<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Team&a=deleteTeamm">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Team</label>
                    <input class="form-control" name="team" required minlength="10" maxlength="50">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>