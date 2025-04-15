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
