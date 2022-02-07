<div class = "row">
    <div class = "col">
        <form method ="post" enctype="multipart/form-data" action ="?c=Players&a=deletation">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Celé meno</label>
                    <input class="form-control" name="celeMeno" required minlength="10" maxlength="50">
                </div>
                <div class = "mb-3">
                    <button type = "submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>