function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function animateRandomColor(id) {
  const r = getRandomInt(256);
  const g = getRandomInt(256);
  const b = getRandomInt(256);

  document.getElementById(id).style.color = `rgb(${r}, ${g}, ${b})`;
}

setInterval(() => animateRandomColor("kelas"), 1000);

// MODAL EDIT

const btnEdits = document.querySelectorAll(".table__btn-edit");
const modalEdit = document.getElementById("modal_edit");

btnEdits.forEach((btnEdit) =>
  btnEdit.addEventListener("click", function () {
    modalEdit.showModal();

    document.getElementById("idEdit").value = this.dataset.id;
    document.getElementById("dayEdit").value = this.dataset.day;
    document.getElementById("nameEdit").value = this.dataset.name;
  })
);
