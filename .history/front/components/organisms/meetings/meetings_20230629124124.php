<section class="o-meetings">
    <h2 class="o-meetings title primarry900">Les rencontres</h2>

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