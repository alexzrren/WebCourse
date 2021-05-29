// define
const passwordError = function () {
    const password = $('#inputPassword').val()
    const repeatPassword = $('#inputRepeatPassword').val()
    if (password !== repeatPassword) {
        $('.password-error').show()
    }else{
        $('.password-error').hide()
    }
}


// use
$('.password-error').hide()
$('#inputRepeatPassword').keyup(function () {
    passwordError()
})
