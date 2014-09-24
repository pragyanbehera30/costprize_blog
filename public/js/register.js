/**
 * Created by dileepdv on 24/9/14.
 */

var register = (function () {
    var pwd = $('#inputPassword2');
    var cpwd = $('#inputPassword3');
    var msgblock = $('#msgBlock');
    var form = $('#register');

    var init = function() {
        form.submit(function(e){
//            alert('adf');
//            $var = $('#register').attr('data-pwdFailMsg').val();
//            $var = $('#register').data("pwdfailmsg");
//            alert($var);
            checkPassword(e);
        });
    }

    var checkPassword = function (event) {
        if (pwd.val() == cpwd.val()) {
            return true;
        }
        else {
            event.preventDefault();

//            alert(msg);

          msg = $(msgblock).html((form).data("pwdfailmsg"));
//            $('#msgBlock').html($('#register').data("pwdfailmsg"));
//            alert(msg);
//              msgblock.innerHTML = msg;
//            document.getElementById(msgblock).innerHTML = msg;
//            msgblock.show();
        }

    }

    return{
        init: init
    };
})();

register.init();