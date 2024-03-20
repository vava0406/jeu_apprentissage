document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['My cat likes to play with a spaceship.', 'My cat likes to play with a ball.', 'My cat likes to play with trees.', 'My cat likes to play with a book.'];

    document.querySelector('.btn_valider').addEventListener('click', function () {
        var reponses = document.querySelectorAll('.btn_start');
        var reponseCoSelectionnee = false;
        var reponsesSelectionnees = [];

        reponses.forEach(function (reponse) {
            if (reponse.classList.contains('selected')) {
                reponsesSelectionnees.push(reponse.textContent);

                if (reponse.textContent === 'My cat likes to play with a ball.') {
                    reponseCoSelectionnee = true;
                }
            }
        });

        var resultat = document.createElement('p');

        if (reponseCoSelectionnee) {
            resultat.textContent = 'Bonne réponse !';

            window.location.href = 'Traduction_3.html';
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