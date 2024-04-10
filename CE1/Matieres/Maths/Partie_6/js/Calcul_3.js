document.addEventListener('DOMContentLoaded', function () {
    var syllabesCorrectes = ['20'];
    var reponseValidee = false;
    var reponseEnvoyee = false;
  
    // Fonction pour désactiver les boutons de réponse
    function desactiverBoutonsReponse() {
      document.querySelectorAll('.btn_start').forEach(function (btn) {
        btn.disabled = true;
      });
    }
  
    // Fonction pour envoyer les données du formulaire via AJAX
    function envoyerDonneesFormulaire(url, data) {
      var request = new XMLHttpRequest();
      request.open('POST', url, true);
  
      request.onload = function () {
        if (request.status >= 200 && request.status < 400) {
          // La soumission est réussie
          console.log('Réponse enregistrée avec succès');
          reponseEnvoyee = true;
        } else {
          console.error('Erreur lors de l\'envoi du formulaire : ' + request.responseText);
        }
      };
  
      request.onerror = function () {
        console.error('Erreur réseau lors de l\'envoi du formulaire.');
      };
  
      request.send(data);
    }
  
    document.getElementById('quizForm').addEventListener('submit', function (event) {
      event.preventDefault();
  
      if (!reponseValidee) {
        var reponses = document.querySelectorAll('.btn_start');
        var reponseCoSelectionnee = false;
        var reponseSelectionnee = "";
  
        reponses.forEach(function (reponse) {
          if (reponse.classList.contains('selected')) {
            reponseCoSelectionnee = true;
            reponseSelectionnee = reponse.textContent;
          }
        });
  
        if (reponseCoSelectionnee) {
          var answerInput = document.createElement('input');
          answerInput.setAttribute('type', 'hidden');
          answerInput.setAttribute('name', 'answer');
          answerInput.setAttribute('value', reponseSelectionnee);
          document.getElementById('quizForm').appendChild(answerInput);
  
          var pageInput = document.createElement('input');
          pageInput.setAttribute('type', 'hidden');
          pageInput.setAttribute('name', 'page');
          pageInput.setAttribute('value', 'Saison_1.html');
          document.getElementById('quizForm').appendChild(pageInput);
  
          // Change la couleur du bouton sélectionné en vert s'il est correct, sinon en rouge
          var selectedBtn = document.querySelector('.btn_start.selected');
          if (selectedBtn) {
            if (selectedBtn.textContent === syllabesCorrectes[0]) {
              selectedBtn.style.backgroundColor = 'green';
              selectedBtn.style.color = 'white';
            } else {
              selectedBtn.style.backgroundColor = 'red';
            }
          }
        }
  
        // Réinitialise toutes les couleurs des boutons
        document.querySelectorAll('.btn_start').forEach(function (btn) {
          if (!btn.classList.contains('selected')) {
            btn.style.backgroundColor = '';
            btn.style.color = '';
          }
        });
  
        // Trouve et affiche la bonne réponse en vert
        document.querySelectorAll('.btn_start').forEach(function (btn) {
          if (btn.textContent === syllabesCorrectes[0]) {
            btn.style.backgroundColor = 'green';
            btn.style.color = 'white';
          }
        });
  
        desactiverBoutonsReponse();
        reponseValidee = true;
      }
  
      if (!reponseEnvoyee) {
        // Sérialisez les données du formulaire pour l'envoi
        var formData = new FormData(document.getElementById('quizForm'));
  
        // Envoyez les données du formulaire via AJAX
        envoyerDonneesFormulaire('../php/Process.php', formData);
      } else {
        window.location.href = 'Calcul_4.html';
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