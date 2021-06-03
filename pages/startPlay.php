<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../assets/head.php'; ?>
    <title>Genuine Role Play | Start Play</title>
</head>
<body>
    <button id="TopUp" class="topupanim" style="display: block;"><i class="fa fa-chevron-circle-up"></i></button>
    <section class="startPlay-section">
        <?php include '../assets/header.php'; ?>

        <div class="startPlay-content">
            <div class="container">
                <!-- <div class="startPlay-top">
                    <span>თამაშს დაწყება</span>
                </div> -->
                <div style="padding-top: 40px;" class="section-title hidden">
                    <span>თამაშის</span>
                    <span><i class="fas fa-gamepad"></i> დაწყება</span>
                </div>
                <div class="startPlay-main">
                    <img src="../img/persons/Kiss.png" alt="gta-person">
                    <div class="startPlay-items">
                        <div class="startPlay-item">
                            <span>1 ნაბიჯი</span>
                            <p>გადმოწერეთ და დააინსტალირეთ:</p> 
                            <p>GTA: San Andreas</p>
                            <a><i class="fas fa-arrow-down"></i></a>
                        </div>
                        <div class="startPlay-item">
                            <span>2 ნაბიჯი</span>
                            <p>გადმოწერეთ და დააინსტალირეთ:</p>
                            <p>SA:MP კლიენტი თქვენს GTA ფოლდერში.</p>
                            <a><i class="fas fa-arrow-down"></i></a>
                        </div>
                        <div class="startPlay-item">
                            <span>3 ნაბიჯი</span>
                            <p>ჩართეთ SA-MP და NAME ველში ჩაწერეთ თქვენი პერსონაჟის სახელი და გვარი ფორმატით: <small style="color: #a954e6; font-weight: 600;">Carl_Johnson</small>, დააჭირეთ <i style="color: #a954e6;" class="far fa-check-square"></i> და ჩაწერეთ ჩვენი სერვერის მისამართი.</p>
                            <button id="cbutton"><i class="far fa-copy"></i></button>
                            <span id="serverIP" style="display: none;">00.00.000:0000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../assets/voice.php'; ?>

    <?php include '../assets/launcher.php'; ?>

    <?php include '../assets/footer.php'; ?>

    <script src="../js/startPlay.js"></script>
</body>
</html>