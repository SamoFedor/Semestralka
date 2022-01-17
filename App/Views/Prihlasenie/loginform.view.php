
<?php /** @var Array $data */ ?>

<button onclick="document.getElementById('id1').style.display='block'" style="width:auto;">Login</button>
<div id="id1" class="modal">
    <form class="modal-content animate"  method="post" action = "?c=Prihlasenie&a=login">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close modal">&times;</span>
            <img src="https://cdn.nba.com/logos/nba/nba-logoman-75-word_white.svg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name='login' required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name='password' required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
<script>
    var modal = document.getElementById('id1');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



