document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['6'];
    var reponseValidee = false;

    // Fonction pour désactiver les boutons de réponse
    function desactiverBoutonsReponse() {
        document.querySelectorAll('.btn_start').forEach(function (btn) {
            btn.disabled = true;
        });
    }

    document.querySelector('.btn_valider').addEventListener('click', function () {
        if (reponseValidee) {
            window.location.href = 'end.html';
        } else {
            // Vérification de la réponse sélectionnée
            var reponses = document.querySelectorAll('.btn_start');
            var reponseCoSelectionnee = false;

            reponses.forEach(function (reponse) {
                if (reponse.classList.contains('selected') && reponse.textContent === syllabesCorrectes[0]) {
                    reponseCoSelectionnee = true;
                    reponse.style.backgroundColor = 'green'; // Change la couleur de fond du bouton sélectionné en vert
                }
            });

            if (reponseCoSelectionnee) {
                reponseValidee = true; // Marquer la réponse comme validée
            } else {
                // Réinitialise toutes les couleurs des boutons
                document.querySelectorAll('.btn_start').forEach(function (btn) {
                    btn.style.backgroundColor = '';
                    btn.style.color = '';
                });

                // Change la couleur de fond du bouton sélectionné en rouge
                var selectedBtn = document.querySelector('.btn_start.selected');
                if (selectedBtn) {
                    selectedBtn.style.backgroundColor = 'red';
                }

                // Trouve et affiche la bonne réponse en vert
                document.querySelectorAll('.btn_start').forEach(function (btn) {
                    if (btn.textContent === syllabesCorrectes[0]) {
                        btn.style.backgroundColor = 'green';
                        btn.style.color = 'white';
                    }
                });
            }

            desactiverBoutonsReponse();
            reponseValidee = true; // Marquer la réponse comme validée même si elle est fausse, pour permettre de passer à la page suivante
        }
    });

    document.querySelectorAll('.btn_start').forEach(function (reponse) {
        reponse.addEventListener('click', function () {
            if (reponseValidee) return;

            document.querySelectorAll('.btn_start').forEach(function (btn) {
                btn.classList.remove('selected');
            });

            reponse.classList.add('selected');
        });
    });
});