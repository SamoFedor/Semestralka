
class Leaderboard {

    getAllTeams() {
        fetch('?c=team&a=getAllTeams')
            .then(response => response.json())
            .then(data =>{
                let html ="";
                for(let team of data) {
                    html += "<div class='card ajax ' >" + team.Team  +" "+ team.Wins + " : "+ team.Loses +"</div>";
                }
                document.getElementById('team').innerHTML = html;
            });
    }

}
window.onload = function() {
    var leaderboard = new Leaderboard();

    document.getElementById("btn-all").onclick = () => {
        leaderboard.getAllTeams();
        document.getElementById("didi").style.display ='none';
        document.getElementById("conf").style.display ='none';
    }

}