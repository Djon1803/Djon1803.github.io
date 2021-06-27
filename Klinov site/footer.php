<footer>
        <div class="footer-hat">
            <div class="container">
                <div class="con-footer">
                    <a class="footer-logo" href="./">
                        <div class="footer-left">
                            <img class="logo-footer" src="<?php $image = get_image(); echo $image[0]['text_1']; ?>">
                        </div>
                        <div class="footer-right">
                            <?php
                            $namesite = get_nameSite();
                            echo '<p class="footer-first-name">' . $namesite[0]['text_1'] . '</p>';
                            echo '<p class="footer-second-name">' . $namesite[0]['text_2'] . '</p>';
                            ?>
                        </div>
                    </a>

                    <div class="f-right">
                        <div class="f-hat-right">
                            <div class="f-hat-right-b1">
                                <div class="f-hat-right-b1-t1">Подпишись</div>
                                <div class="f-hat-right-b1-t2"></div>На наши новасти
                            </div>
                        </div>

                        <div class="f-hat-right-b2">
                            <form class="form-subscrib">

                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="Klinov_Site">
                                <input type="hidden" name="admin_email" value="<?php $email = get_email();echo $email[0]['text_1']; ?>">
                                <input type="hidden" name="footer_subject" value="Contacts">
                                <!-- END Hidden Required Fields -->

                                <input class="subscribtion_input" name="email" id="s_email" type="email" placeholder="Ваш email" required="">
                                <input type="submit" class="form-subscrib-btn" value="Подписаться">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container">
            <div class="footer-sec2">
                <div class="f-sec2-kotalag">

                    <?php
                    $catalogs = get_catalogs();
                    foreach ($catalogs as $catalog) {
                        echo '<div class="f-kotalag-item">';
                        echo '<a class="link" href="' . $catalog['link_catalog'] . '?id=' . $catalog['id_catalog'] . '">' . $catalog['name_catalog'] . '</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="f-sec2-info">
                    <div class="footer-phone">
                        <?php
                        $phoneNumber = get_phoneNumber();
                        echo '<a class="text-phone" href="tel:' . $phoneNumber[0]['text_2'] . '">' . $phoneNumber[0]['text_1'] . '</a>';

                        $timejob = get_timeJob();
                        echo '<div class="text-rasp">' . $timejob[0]['text_1'] . '</div>';
                        ?>
                        <!-- <a class="text-phone" href="tel:+74951234567">+7 (922) 646-46-56</a>
                        <div class="text-rasp">Ежедневно 9:00-19:00</div> -->
                    </div>
                    <div class="sotseti">
                        <a><img></a>
                        <a><img></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>


<script src="./script/subscribe.js"></script>
