<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../assets/head.php'; ?>
    <title>Genuine Role Play | Authorization</title>
</head>
<body>
    <button id="TopUp" class="topupanim" style="display: block;"><i class="fa fa-chevron-circle-up"></i></button>
    <div class="cabinet-section">
        <?php include '../assets/header.php'; ?>

        <div class="cabinet-content">
            <div class="container">
                <div style="padding-top: 40px;" class="section-title hidden">
                    <span style="font-size: 33px;"><i class="fas fa-user-check"></i> ავტორიზაცია</span>
                </div>
                <div class="cabinet-main">
                    <div class="autorisation">
                        <form action="">
                            <label class="label" for="name">მომხმარებლის სახელი:</label>
                            <input class="input" type="text" id="name">
                            <label class="label" for="pass" style="margin-top: 50px;">პაროლი:</label>
                            <input class="input" type="password" id="pass">
                            <div class="rememberPass">
                                <input clsss="check" id="check" type="checkbox">
                                <label class="savePass" for="check">პაროლის დამახსოვრება</label>
                            </div>
                            <button class="logInBtn">შესვლა</button>
                        </form>
                        <span>არგაქვთ აქაუნთი? <a href="registration.php">რეგისტრაცია</a></span>
                    </div>
                    <img src="../img/persons/LogBoss.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php include '../assets/footer.php'; ?>
</body>
</html>