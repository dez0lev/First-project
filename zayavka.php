<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Информационная безопасность</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zayavka.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="wrapper" id="b1">
        
        <?php require_once "blocks/header.php" ?>

        <div class="hero container">
            <div class="hero--info">
                <h1>Оставьте заявку</h1>
                <form class="obratnuj-zvonok" action='./application.php' method='post'>
                    <div class = "form-zvonok"> 
                        <div>
                            <label>Имя<span>*</span></label>
                            <input type = 'text' name = 'username' required ></div>
                        <div>
                            <label>Email<span>*</span></label>
                            <input type='email' name='email' required></div>
                        <div>
                            <label>Сообщение</label>
                            <input type='text' name='message'>
                        </div>
                        <input type = 'submit' value = 'Отправить заявку'>
                    </div>
                </form>
            </div>
        </div>
    </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>