document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['(6 x 1 000) + (7 x 100) + (8 x 10) + (2 x 1)', '(7 x 1 000) + (8 x 100) + (9 x 10)', '(6 x 1 000) + (8 x 10) + (2 x 1)', '(5 x 1 000) + (7 x 100) + (2 x 1)'];

    document.querySelector('.btn_valider').addEventListener('click', function () {
        var reponses = document.querySelectorAll('.btn_start');
        var reponseCoSelectionnee = false;
        var reponsesSelectionnees = [];

        reponses.forEach(function (reponse) {
            if (reponse.classList.contains('selected')) {
                reponsesSelectionnees.push(reponse.textContent);

                if (reponse.textContent === '(6 x 1 000) + (7 x 100) + (8 x 10) + (2 x 1)') {
                    reponseCoSelectionnee = true;
                }
            }
        });

        var resultat = document.createElement('p');

        if (reponseCoSelectionnee) {
            resultat.textContent = 'Bonne réponse !';

            window.location.href = 'end.html';
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