$().ready(function () {
    $("#form").validate({
        rules: {
            mdp1: {
                required: true
            },
            pseudo: {
                required: true
            },
            mail: {
                required: true,
                mail: true
            },
            mdp2: {
                required: true,
                equalTo: "#form input[name=’mdp1]’"
            }
        },
        messages: {
            mdp1: "<br><ob>Veuillez fournir un mot de passe</ob>",
            pseudo: "<br><ob>Veuillez fournir un pseudo</ob>",
            mail: "<br><ob>L'email est incorrect</ob>",
            mdp2: "<br><ob>Les mots de passe doivent être identique</ob>",
        }
    });
    
})