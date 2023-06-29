<section class="o-meetings">
<div class="meeting-background"></div>
    <h1 class="o-meetings title primary100">Les rencontres</h1>

    <div class="o-meetings__table">
        <?php

            include './bdd/Meetings.php';

            $meeting = new Meetings();
            $meetings = $meeting->findAll();

            foreach($meetings as $a_meeting){

                include './front/components/molecules/meeting/meeting.php';
            }
        ?>
    </div>

</section>

<?php 