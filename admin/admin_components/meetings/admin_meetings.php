<section class="o-meetings">
    <h2 class="o-meetings__title title neutral100">LISTES DES RENCONTRES</h2>

    <div class="o-meetings__table">
        <?php

            require_once '../bdd/Meetings.php';

            $meeting = new Meetings();
            $meetings = $meeting->findAll();

            foreach($meetings as $a_meeting){

                include '../front/components/molecules/meeting/meeting.php';
            }
        ?>
    </div>
    <div>
        <?php
            include '../front/components/molecules/meeting/add_meeting.php';
            
            include '../front/components/molecules/meeting/edit_meeting.php';

            include '../front/components/molecules/meeting/delete_meeting.php';
        ?>
    </div>

</section>

<?php