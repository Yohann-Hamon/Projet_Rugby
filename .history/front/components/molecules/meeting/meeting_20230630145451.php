<div class="o-meeting primary900">
    <?php
        // $date = new DateTime($a_meeting['datetime']);

        // setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        // Formatage de l'heure selon le format souhaité
        // $week_days = strftime('%A', $date->getTimestamp());
        // $day = $date->format('j');
        // $month = $strftime('%B', $date->getTimestamp());
        // $hour = $date->format('H');
        // $minute = $date->format('i');

        // echo '<p>'.$week_days.' '.$day.' '.$month.', '.$hour.'h'.$minute.'</p>';
        // $a_meeting['datetime'] = $datetime;   
        // $reversedDateTime = data("H:i d:m:Y", strtotime($datetime));  
    ?>
    <p>
        <?php
            // echo $reversedDateTime;
        ?>
    <p>
    <div class="o-meeting__competitors">
        <?php
            // echo '<p>'.$week_days.' '.$day.' '.$month.', '.$hour.'h'.$minute.'</p>';       
        ?>
        <p><?=$a_meeting['team_1']?><p>
        <img src="" class="country"
        <p><?=$a_meeting['score']?><p>
        <p><?=$a_meeting['team_2']?><p>
    </div>
    <p><?=$a_meeting['place']?><p>
</div>


 