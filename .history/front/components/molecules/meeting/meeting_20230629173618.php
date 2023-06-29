<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../meeting/meeting.css">
    <title>Les rencontres</title>
</head>
<body>
<div class="o-meeting primary900">
    <p class="time"><?=$a_meeting['datetime']?><p>
    <div class="o-meeting__competitors">
        <p class="nowrap"><?=$a_meeting['team_1']?><p>
        <p class="nowrap"><?=$a_meeting['score']?><p>
        <p class="nowrap"><?=$a_meeting['team_2']?><p>
    </div>
    <p class="nowrap"><?=$a_meeting['place']?><p>
</div>
</body>
</html>

 