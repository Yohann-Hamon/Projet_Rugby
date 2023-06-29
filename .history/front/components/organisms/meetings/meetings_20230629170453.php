<section class="o-meetings">
<div class="meeting-background"></div>
    <h2 class="o-meetings title primary500">Les rencontres</h2>

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