<?php
    include './bdd/meetings/Meetings.php';
?>

<section class="o-meetings">
    <h2 class="o-meetings__title title neutral100">SCORE DES RENCONTRES</h2>

    <div class="o-meetings__table">
        <?php

            $meeting = new Meetings();
            $meetings = $meeting->findAll();

            foreach($meetings as $a_meeting){
                ?>
                    <p><?=$a_meeting['datetime']?><p>
                    <p><?=$a_meeting['team_1']?><p>
                    <p><?=$a_meeting[ 'team_2']?><p>
                    <br>
                    <p><?=$a_meeting['place']?><p>
                    <br>
                    <p><?=$a_meeting['score']?><p>
                <?php
            }
        ?>
    </div>

</section>

<?php