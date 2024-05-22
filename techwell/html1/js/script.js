(function() {
    new HSHeader('#header').init();
    // INITIALIZATION OF MEGA MENU
    // =======================================================
    new HSMegaMenu('.js-mega-menu', {
        desktop: {
            position: 'left'
        }
    });

    HSBsValidation.init('.js-validate', {
        onSubmit: data => {
            data.event.preventDefault()
            location.href = "./top.html";
        }
    });

    // INITIALIZATION OF TOGGLE PASSWORD
    // =======================================================
    new HSTogglePassword('.js-toggle-password');

    // INITIALIZATION OF ADD FIELD
    // =======================================================
    new HSAddField('.js-add-field')

    // INITIALIZATION OF GO TO
    // =======================================================
    new HSGoTo('.js-go-to')
})()