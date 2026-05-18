const opciones = [
  "hace 3 días",
  "hace 4 días",
  "hace 5 días",
  "hace 1 semana",
  "hace 2 semanas",
  "hace 3 semanas",
  "hace 1 mes",
  "hace 2 meses",
  "hace 3 meses"
];

const timestamps = document.querySelectorAll(".timestamp");

timestamps.forEach(span => {
  const random = opciones[Math.floor(Math.random() * opciones.length)];
  span.textContent = random;
});
