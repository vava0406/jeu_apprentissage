document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['832', '409', '862', '662'];

    document.querySelector('.btn_valider').addEventListener('click', function () {
        var reponses = document.querySelectorAll('.btn_start');
        var reponseCoSelectionnee = false;
        var reponsesSelectionnees = [];

        reponses.forEach(function (reponse) {
            if (reponse.classList.contains('selected')) {
                reponsesSelectionnees.push(reponse.textContent);

                if (reponse.textContent === '862') {
                    reponseCoSelectionnee = true;
                }
            }
        });

        var resultat = document.createElement('p');

        if (reponseCoSelectionnee) {
            resultat.textContent = 'Bonne réponse !';

            window.location.href = 'Calcul_7.html';
        } else {
            resultat.textContent = 'Mauvaise réponse. Réessayez.';
            resultat.style.color = 'red'; 
            document.querySelector('.container').appendChild(resultat);
        }

        document.querySelector('.start-screen').appendChild(resultat);
    });

    document.querySelectorAll('.btn_start').forEach(function (reponse) {
        reponse.addEventListener('click', function () {
            document.querySelectorAll('.btn_start').forEach(function (btn) {
                btn.classList.remove('selected');
            });

            // Ajoute la classe 'selected' au bouton cliqué
            reponse.classList.add('selected');
        });
    });
});