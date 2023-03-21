//Definimos una función para calcular el número de Fibonacci
function fibonacci(num) {
    //Si el número es menor o igual a 1, devolvemos el mismo número
    if (num <= 1) return num;
  
    //De lo contrario, devolvemos la suma de los dos anteriores números de Fibonacci
    return fibonacci(num - 1) + fibonacci(num - 2);
  }
  console.log(fibonacci(20));
  console.log(fibonacci(30));
  console.log(fibonacci(15));  
  console.log(fibonacci(5));  
  console.log(fibonacci(27));