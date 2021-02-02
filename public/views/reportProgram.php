<!DOCTYPE html>
<head>
    <link rel= "stylesheet" type="text/css" href="public/css/style.css">
    <link rel= "stylesheet" type="text/css" href="public/css/style-report.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Zgłaszanie programów</title>
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

        </div>
        <div class ="container_and_logo">
            <div class="messages">
                <form action="makeReport" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                    <input name="title" type="text" placeholder="title">
                    <textarea name="message" rows=5 placeholder="message"></textarea>

                    <input type="file" name="screenshot"/><br/>
                    <button type="submit">send</button>
                </form>
            </div>
            <div class="logo">
                <img src="public/images/logodifferent.png" height="600 px" width="400px">

            </div>
        </div>
    </div>
</body>