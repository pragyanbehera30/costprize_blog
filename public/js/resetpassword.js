/**
 * Created by swapna on 25/9/14.
 */
var resetpassword = (function()
{
    var oldpwd = $('#inputPassword2');
    var pwd = $('#inputPassword3');
    var cpwd = $('#inputPassword4');
    var msgblock = $('#msgBlock');
    var msgblock1 = $('#msgblock1');
    var msgblock2 = $('#msgblock2');
    var msgblock3 = $('#msgblock3');
    var form = $('#resetpassword');

    var init = function() {
        form.submit(function(e)
        {
            checkPassword(e);
        });
    }

    var checkPassword = function (event) {
        if(oldpwd.val() == "" && pwd.val() == "" && cpwd.val() == "")
        {
//        alert("Enter your old password");
            event.preventDefault();
       $(msgblock1).html((form).data("all"));}
        else if(oldpwd.val() == "" )
        {
            event.preventDefault();
            $(msgblock1).html((form).data("oldpwd"));
        }
        else if (pwd.val() == cpwd.val()) {
            return true;
        }
        else {
            event.preventDefault();
            msg = $(msgblock).html((form).data("pwdfailmsg"));
        }
    }
    return{
        init: init
    };
})();
resetpassword.init();