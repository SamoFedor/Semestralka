<div class = "row">
    <div class = "col">
            <div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Your password</label>
                    <input type="password" class="form-control" id="povodne" name="heslo" required minlength="2" maxlength="30">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">New password</label>
                    <input type="password" class="form-control" id="nove" name="new" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <label for = "formFile" class = "form-label">Repeat new password</label>
                    <input type="password" class="form-control" id="nove_repeat" name="repeat" required minlength="1" maxlength="20">
                </div>
                <div class = "mb-3">
                    <button onclick="zmenaUdajov()">Odoslat</button>
                </div>
            </div>
    </div>
</div>
<div id="iok">

</div>