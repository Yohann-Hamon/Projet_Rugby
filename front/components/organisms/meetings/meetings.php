<section class="o-meetings">
    <div class="meeting-background"></div>
    <h1 class="o-meetings title primary100">Les rencontres</h1>

    <div class="o-meetings__table">
        <?php

            include './bdd/Meetings.php';

            $meeting = new Meetings();
            $meetings = $meeting->findAll();

            foreach($meetings as $a_meeting){

                // $date = new DateTime($a_meeting['datetime']);

                // setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

                // // Formatage de l'heure selon le format souhaité
                // $jour_semaine = strftime('%A', $date->getTimestamp());
                // $day = $date->format('j');
                // $month = $strftime('%B', $date->getTimestamp());
                // $hour = $date->format('H');
                // $minute = $date->format('i');
                
                include './front/components/molecules/meeting/meeting.php';
            }
        ?>
    </div>

</section>

<?php 