<div class = "card">
<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Players&a=deletation">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Name</label>
                    <input class="form-control" name="name" required minlength="2" maxlength="50">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Surname</label>
                    <input class="form-control" name="surname" required minlength="2" maxlength="50">
                </div>
                <div class = "mb-3">
                    <button type = "submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>