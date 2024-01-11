
$(document).ready(function () {

let btn = document.getElementById("btn");
var openModalBtn = document.getElementById('openModalBtn');
var modal = document.getElementById('myModal');
var modalContent = document.getElementById('modalContent');
var closeModal = document.getElementsByClassName('close')[0];
var loadingModal = document.getElementById('loadingModal');

btn.addEventListener("click", function (e) {
e.preventDefault();
// console.log(btn);
loadingModal.style.display = 'block';
// modal.style.display = 'block';

let inputmail = document.getElementById("inputMail").value;
let inputmarque = document.getElementById("inputMarque").value;
let inputmodele = document.getElementById("inputModele").value;
let inputboite = document.getElementById("inputBoite").value;
let inputcarburant = document.getElementById("inputCarburant").value;
let inputannee = document.getElementById("inputAnnee").value;
let inputkilometrage = document.getElementById("inputKilometre").value;
let marque=document.getElementById("modalmarque");
let model=document.getElementById("modalmodele");
let boite=document.getElementById("modalboite");
let carburant=document.getElementById("modalcarburant");
let annee=document.getElementById("modalannee");

axios.post('/evaluation/voiture', {
    marque: inputmarque,
    model: inputmodele,
    annee: inputannee,
    kilometre: inputkilometrage,
    carburant: inputcarburant,
    boite: inputboite,
    email: inputmail,
})
.then(response => {
     console.log(response);
    let rs=response.data;
      console.log(rs.success);
      if(rs.success==false) {
        modalContent.innerHTML = `<div class="alert alert-danger" role="alert">le type de voiture n'est pas encore disponible dans la base de donnée</div>`;
      }else{


      let prix=rs.data.prix;
      let marque=rs.data.marque;
      let modele=rs.data.modele;
      let boite=rs.data.boite;
      let carburant=rs.data.carburant;
      let annee=rs.data.annee;

      modalContent.innerHTML = `

    <span class="text-center" id="responseModalLabel">Prix estimatif de votre voiture est: <strong>${prix} Fr</strong> </span>
        <div >
            <span class="text-bold" id="modalMarque">Marque: <strong>${marque}</strong></span>
        </div>
        <div>
            <span  id="modalModele">Modele: <strong>${modele}</strong></span>
        </div>
        <div>
            <span id="modalAnnee">Année: <strong>${annee}</strong></span>
        </div>
        <div>
            <span  id="modalBoite">Boite: <strong>${boite}</strong></span>
        </div>
        <div>
            <span  id="modalCarburant">Carburant: <strong>${carburant}</strong></span>
        </div>
        <div>
            <span  id="modalKilometre">Kilometrage: <strong>${inputkilometrage}</strong></span>
        </div>
        <div>
            <span  id="modalKilometre" class="text-center bg-success"><strong>un email vous sera envoyé avec plus de détails</strong></span>
        </div>
    `
}

    // Afficher le modal
    modal.style.display = 'block';
    loadingModal.style.display = 'none';
    // console.log(prix);
})
.catch(error => {
    modalContent.innerHTML = `<div class="alert alert-danger" role="alert">
        'Une erreur est survenue : <strong>Les données ne sont pas valides </strong>;</div>`
    // Afficher le modal
    modal.style.display = 'block';
    loadingModal.style.display = 'none';

    console.error('Erreur lors de l\'envoi des données :', error);
});

});
closeModal.addEventListener('click', function () {
// Fermer le modal
modal.style.display = 'none';
});

});
