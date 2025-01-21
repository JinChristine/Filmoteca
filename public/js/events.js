/*const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('submit', (e) => {
    if(isValidId(?,?)){
      e.preventDefault(); // Empêche l'envoi du formulaire
      appendAlert('Identifiant invalide ou manquant', 'danger');
    }
  })
}

function isValidId(data, films) {
  const id = parseInt(data.id, 10); // Convertit l'id en entier
  // Vérifie si l'id est un nombre valide, positif, et dans les limites de la liste
  if (isNaN(id) || id <= 0 || id > films.length) {
      console.log("Identifiant invalide ou manquant.");
      return false;
  }
  return true;
}
*/
