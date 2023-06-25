<section class="o-meetings">
    <h2 class="o-meetings__title title neutral100">SCORE DES RENCONTRES</h2>

    <div class="o-meetings__table">
        <?php
            include './bdd/meetings/Meetings.php';

            $meeting = new Meetings();
            $meetings = $meeting->findAll();

            foreach($meetings as $a_meeting){

                include './front/components/molecules/meeting/meeting.php';
            }
        ?>
    </div>

</section>

<?php