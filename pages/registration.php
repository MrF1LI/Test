<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../assets/head.php'; ?>
    <title>Genuine Role Play | Registration</title>
</head>
<body>
    <button id="TopUp" class="topupanim" style="display: block;"><i class="fa fa-chevron-circle-up"></i></button>
    <div class="registration-section">
        <?php include '../assets/header.php'; ?>

        <div class="registration-content">
            <div class="container">
                <div style="padding-top: 40px;" class="section-title hidden">
                    <span style="font-size: 33px;"><i class="fas fa-user-plus"></i> რეგისტრაცია</span>
                </div>
                <div class="registration-main">
                    <div class="registration">
                        <form action="">
                            <label class="label" for="name">მომხმარებლის სახელი:</label>
                            <input class="input" type="text" id="name">
                            <label class="label" for="mail">ელ. ფოსტა:</label>
                            <input class="input" type="mail" id="mail">
                            <label class="label" for="pass">პაროლი:</label>
                            <input class="input" type="password" id="pass">
                            <label class="label" for="confirmPass">პაროლის დადასტურება:</label>
                            <input class="input" type="password" id="confirmPass">
                            <button class="regBtn">აქაუნთის შექმნა</button>
                        </form>
                        <span>უკვე რეგისტრირებული? <a href="cabinet.php">ავტორიზაცია</a></span>
                    </div>
                    <img src="../img/persons/RegBoss.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <?php include '../assets/footer.php'; ?>
</body>
</html>