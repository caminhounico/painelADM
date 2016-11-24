$(function () {
    $('.ui.form')
        .form({
            fields: {
                email: ['empty', 'email'],
                password: ['minLength[6]', 'empty'],
                terms: 'checked'
            }
        });
});
