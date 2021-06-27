<!DOCTYPE html>
<html>

<head>
    <title>Контакты</title>
    <link rel="stylesheet" type="text/css" href="./css/contacts/style.css">
</head>
<?php
        require './header.php';
        ?>
<body>

    <div class="container">
        <div class="contacts">
            <div class="output-contacts">
                <h1 class="text-contact">Контакты</h1>

                <div class="contacts-text">Адрес:
                    <?php
                    $address = get_address();
                    echo '<p class="cont-text" >' . $address[0]['text_1'] . '</p>';
                    ?>
                </div>

                <div class="contacts-text">Телефон:
                    <?php
                    $phoneNumber = get_phoneNumber();
                    echo '<a  class="cont-text" href="tel:' . $phoneNumber[0]['text_2'] . '">' . $phoneNumber[0]['text_1'] . '</a>';
                    ?>
                </div>

                <div class="contacts-text">E-mail:
                    <?php
                    $email = get_email();
                    echo '<a class="cont-text" href="mailto:' . $email[0]['text_1'] . '">' . $email[0]['text_1'] . '</a>';
                    ?>
                </div>
            </div>
            <div class="input-contacts">
                <div class="contacts-text">Напишите нам</div>
                <form class="form-input-cont">

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Klinov_Site">
                    <input type="hidden" name="admin_email" value="<?php $email = get_email();echo $email[0]['text_1']; ?>">
                    <input type="hidden" name="form_subject" value="Contacts">
                    <!-- END Hidden Required Fields -->


                    <input name="user_name" class="input-info" type="text" placeholder="Ваше имя" required="">
                    <input name="user_phone" class="input-info" type="text" placeholder="Ваш телефон" required="">
                    <input class="input-info" name="email" id="s_email" type="email" placeholder="Ваш email" required="">
                    <textarea name="user_sms" class="input-info sms" type="text" placeholder="Сообщение" required=""></textarea>
                    <input type="submit" class="input-sms" value="Отправить">
                </form>

            </div>
        </div>
    </div>

    <footer>
        <?php
        require './footer.php';
        ?>
    </footer>
</body>

<!-- <script src="./script/mail.js"></script> -->

</html>