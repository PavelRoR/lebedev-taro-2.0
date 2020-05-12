//@prepros-prepend jquery-2.1.1.min.js
//@prepros-prepend jquery.fancybox.min.js

$(document).ready(function () {
    $(function () {
        var check = $('.check', this),
            email = $('.input-mail', this),
            message = $('.alert-message', this),
            button = $('.button-form', this),
            switch_title = $('.switch-title'),
            switch_text = $('.switch-text'),
            currDate = new Date(),
            startDate = new Array(
                new Date("April 21 2020 18:30 UTC+3"),
                new Date("April 22 2020 18:30 UTC+3"),
                new Date("April 23 2020 18:30 UTC+3")),
            endDate = new Array(
                new Date("April 21 2020 21:00 UTC+3"),
                new Date("April 22 2020 21:00 UTC+3"),
                new Date("April 23 2020 21:00 UTC+3")),
            rooms = new Array(
                'https://pruffme.com/landing/u8937/tmp1580927819',
                'https://pruffme.com/landing/u8937/tmp1580927819',
                'https://pruffme.com/landing/u8937/tmp1580927819');

        function roomSwitch() {
            $('.form-main').addClass('form-main-switch');
            switch_title.html('А Вы записались на БЕСПЛАТНЫЙ ВЕБИНАР?<br>ЖДЕМ ТОЛЬКО ВАС!').css('lineHeight', '1.2');
            switch_text.removeClass('hide').html('<span class="hurryup">Скорее ЗАХОДИТЕ прямо СЕЙЧАС на вебинар!</span><br>Присоединяйтесь к интенсиву и окунитесь в мир практической философии! Познайте этот мир и себя в нём!');
            button.text('Зайти!');
        }
        if ((currDate > startDate[0] && currDate < endDate[0]) || (currDate > startDate[1] && currDate < endDate[1]) || (currDate > startDate[2] && currDate < endDate[2])) {
            roomSwitch();
        }
        $(".form").on("submit", function () {
            var check = $('.check', this),
                message = $('.alert-message', this),
                reNone = /.+/,
                email = $('.input-mail', this),
                button = $('.button-form', this);
            if (!email.val().match(reNone)) {
                message.text('Введите email').slideDown(500);
                return false;
            }
            if (!check.prop("checked")) {
                message.text('Подтвердите соглашение').slideDown(500);
                return false;
            }
            if (email.val() && check) {
                if (currDate > startDate[0] && currDate < endDate[0]) {
                    window.open(rooms[0]);
                }
                if (currDate > startDate[1] && currDate < endDate[1]) {
                    window.open(rooms[1]);
                }
                if (currDate > startDate[2] && currDate < endDate[2]) {
                    window.open(rooms[2]);
                }
                button.text('Отправляем...');
                setTimeout(function () {
                    button.text('Отправлено!');
                }, 500);
                return true
            }
        });
        email.click(function () {
            message.slideUp(500);
        });
        check.click(function () {
            message.slideUp(500);

        });
    });
    $('.button-up, .link-up').fancybox();

    /*Конец документа*/
});