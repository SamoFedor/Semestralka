
class Leaderboard {

    getAllTeams() {

        fetch('?c=team&a=getAllTeams')
            .then(response => response.json())
            .then(data =>{
                let html ="";
                for(let team of data) {
                    html += "<div class = 'row'>" +
                        "<div class = col-sm-3>"+"<div class='card ajax ' >" + "" + team.Team  +"</div>"+"</div>" +
                        "<div class = col-sm-2>"+ "<div class='card ajax ' >" + team.Wins + " : "+ team.Loses + "</div>"+"</div>"+
                        "</div>";
                }
                document.getElementById('team').innerHTML = html;
            });
    }
    getAllTeamsDivision() {

        let division = document.getElementById('drop-div');
        fetch('?c=team&a=getAllTeamsDivision',{
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'Division=' + division.value
        }).then(response => response.json())
            .then(data=> {
                let html ="";
                for(let team of data) {
                    html += "<div class = 'row'>" +
                        "<div class = col-sm-3>"+"<div class='card ajax ' >" + "" + team.Team  +"</div>"+"</div>" +
                        "<div class = col-sm-2>"+ "<div class='card ajax ' >" + team.Wins + " : "+ team.Loses + "</div>"+"</div>"+
                        "</div>";
                }
                document.getElementById('team').innerHTML = html;
            });
    }
    getAllTeamsConference() {

        let division = document.getElementById('drop-divc');
        fetch('?c=team&a=getAllTeamsConference',{
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'Conference=' + division.value
        }).then(response => response.json())
            .then(data =>{
                let html ="";
                for(let team of data) {
                    html += "<div class = 'row'>" +
                        "<div class = col-sm-3>"+"<div class='card ajax ' >" + "" + team.Team  +"</div>"+"</div>" +
                        "<div class = col-sm-2>"+ "<div class='card ajax ' >" + team.Wins + " : "+ team.Loses + "</div>"+"</div>"+
                        "</div>";
                }
                document.getElementById('team').innerHTML = html;
            });
    }

}
window.onload = function() {
    var leaderboard = new Leaderboard();

    document.getElementById("btn-all").onclick = () => {
        leaderboard.getAllTeams();

    }
    document.getElementById("division").onclick = () => {
        leaderboard.getAllTeamsDivision();

    }
    document.getElementById("conference").onclick = () => {
        leaderboard.getAllTeamsConference();

    }
}