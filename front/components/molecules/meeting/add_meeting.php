<br>
<br>
<div class="add-meeting"> AJOUTER a meeting
<br>
<br>
<form action="meeting_processing.php" method="POST">
    <br>
    <label for="datetime">date : </label>
    <input type="text" name="datetime" id="datetime">
    <br>
    <br>
    <label for="team_1">team 1 : </label>
    <input type="number" name="team_1" id="team_1">
    <br>
    <br>
    <label for="team_2">team 2 : </label>
    <input type="number" name="team_2" id="team_2">
    <br>
    <br>
    <label for="place">place : </label>
    <input type="text" name="place" id="place">
    <br>
    <br>
    <label for="score">score : </label>
    <input type="text" name="score" id="score">
    <br>
    <br>
    <input type="checkbox" name="cgu" id="cgu" value="cgu">
    <label for="cgu">Politique de confidentialitée</label>
    <br>
    <br>
    <input type="submit" name="add" value="add">
</form> 
</div>