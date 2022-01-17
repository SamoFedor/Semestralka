
<?php /** @var Array $data */ ?>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
<div id="id02" class="modal">

    <form class="modal-content animate"  method="post" action = "?c=Prihlasenie&a=registration">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="https://cdn.nba.com/logos/nba/nba-logoman-75-word_white.svg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name='username' required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name='password' required>

            <button type="submit">Register</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<script>
    var model = document.getElementById('id02');
    window.onclick = function(event) {
        if (event.target == model) {
            model.style.display = "none";
        }
    }
</script>




