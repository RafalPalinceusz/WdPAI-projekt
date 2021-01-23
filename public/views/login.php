<!DOCTYPE html>
<head>
    <link rel= "stylesheet" type="text/css" href="public/css/style.css">
    <title>Login screen</title>
</head>

<body>


    <div class="container">
        <div class="intro">
            System reportowania błędów programowych
        </div>
        <div class="container_and_logo">
            <div class="login-container">
                <form class = "login"  action="login" method="POST">
                    <div class = "messages">
                        <?php
                            if(isset($messages))
                            {
                                foreach($messages as $message)
                                {
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input name="name" type="text" placeholder="login">
                    <input name="password" type="password" placeholder="hasło">
                    <input name="code" type="text" placeholder="kod logowania">
                    <button type="submit">Zaloguj sie</button>
                    <input name="remember" type = "checkbox" id = "remlog" size="50px">
                    <label for="remlog">Zapamiętaj login</label>
                </form>
            </div>
            <div class="logo">
                <img src="public/images/logodifferent.png" height="600 px" width="400px">
    
            </div>
        </div>
    </div>
</body>