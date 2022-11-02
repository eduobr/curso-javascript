function suma(a, b, ...c) {
  let acumulador = a + b;
  c.forEach((n) => {
    acumulador += n;
  });
  return acumulador;
}

console.log(suma(1, 1, 2, 3, 4));
