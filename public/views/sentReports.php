<!DOCTYPE html>
<head>
    <link rel= "stylesheet" type="text/css" href="public/css/style.css">
    <link rel= "stylesheet" type="text/css" href="public/css/style-report.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Wysłane zgłoszenia</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <ul>
                <i class="fas fa-user-alt"></i>
                <a href="#" class="button">zalogowany użytkownik</a>
            </ul>
            <ul>
                <i class="fas fa-address-book"></i>
                <a href="#" class="button">kontakty</a>
            </ul>   
            <ul>
                <i class="fas fa-envelope"></i>
                <a href="#" class="button">Wysłane zgłoszenia</a>
            </ul>
            <ul>
                <i class="fas fa-door-open"></i>
                <a href="/login" class="button">Wyloguj</a>
            </ul>
        </div>
        <div class="intro">
            Wysłane zgłoszenia
        </div>
        <div class ="container_and_logo">
            <div class ="login-container">
                <section class="reports">
                    <?php foreach($reports as $report): ?>
                    <div class ="report_box">


                        <h3><?= $report->getTitle(); ?></h3>
                        <? $report->getMessage() ?>
                        <input type="image" onclick="location.href='/public/uploads/<?= $report->getScreenshot() ?>'" src="public/uploads/<?= $report->getScreenshot() ?>">

                    </div>

                    <?php endforeach; ?>
                </section>
            </div>

        <div class="logo">
            <img src="public/images/logodifferent.png" height="600 px" width="400px">

        </div> 
    </div> 
    </div>
</body>