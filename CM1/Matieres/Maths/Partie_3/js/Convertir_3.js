document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['3,2 m', '0,32 km', '0,32 cm', '3,2 dm'];

    document.querySelector('.btn_valider').addEventListener('click', function () {
        var reponses = document.querySelectorAll('.btn_start');
        var reponseCoSelectionnee = false;
        var reponsesSelectionnees = [];

        reponses.forEach(function (reponse) {
            if (reponse.classList.contains('selected')) {
                reponsesSelectionnees.push(reponse.textContent);

                if (reponse.textContent === '3,2 dm') {
                    reponseCoSelectionnee = true;
                }
            }
        });

        var resultat = document.createElement('p');

        if (reponseCoSelectionnee) {
            resultat.textContent = 'Bonne réponse !';

            window.location.href = 'Convertir_4.html';
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