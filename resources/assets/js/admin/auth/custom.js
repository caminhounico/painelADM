$(function () {


    $('.ui.form')
        .form({
            fields: {

                email: ['empty', 'email'],
                password: ['minLength[6]', 'empty'],
                password_confirmation: ['minLength[6]', 'empty', 'match[password]'],
                terms: 'checked'
            }
        });

    $('.ui .message').transition('flash')

});


