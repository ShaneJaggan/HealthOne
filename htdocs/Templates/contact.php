<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    global $openingTime
    ?>
    <body class="bg-gray">
        <div class="container">
            <?php
            include_once ('defaults/menu.php');
            ?>
            <hr>
            <div class="row">
                <div class=col-lg-4 col-md-4 col-sm-12>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Dag:</td>
                            <td>Openingstijd:</td>
                            <td>Sluitingstijd:</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($openingTime as $openingTime): ?>
                            <tr>
                                <td><?= $openingTime->day?></td>
                                <td><?= $openingTime->opening?></td>
                                <td><?= $openingTime->closing?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class=col-lg-8 col-md-8 col-sm-12>
                    <iframe class="circlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.6391890218893!2d4.330076815787973!3d51.
                                    9952296797182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0xf69943896f1def32!2sZuidhoornseweg
                                    %206A%2C%202625dj%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1sen!2snl!4v1634412179669!5m2!1sen!2snl" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>