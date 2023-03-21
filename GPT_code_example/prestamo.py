# Definimos las variables de ingreso
tasa_interes = 0.05  # Tasa de interes anual
plazo_prestamo = 5    # Plazo del prestamo en años
monto_prestamo = 70000  # Monto del prestamo en dolares

# Calculamos el pago mensual y el numero total de pagos mensuales
pago_mensual = monto_prestamo * (tasa_interes / 12) / (1 - (1 + tasa_interes / 12) ** (-plazo_prestamo * 12))
numero_total_pagos = plazo_prestamo * 12

# Imprimimos la cabecera de la tabla de amortizacion 
print("Tabla de Amortizacion") 
print("Pago | Pago Mensual | Interes | Capital | Saldo") 

 # Calculamos los valores para cada pago y los imprimimos en la tabla 
saldo = monto_prestamo  # El saldo inicial es igual al monto del prestamo 
for numero in range(1, numero_total_pagos + 1):  # Iteramos sobre los pagos  

    intereses = round(saldo * tasa_interes / 12, 2)   # Calculamos el interes para el pago actual  

    capital = round(pago_mensual - intereses, 2)      # Calculamos el capital para el pago actual  

    saldo -= capital                                  # Actualizamos el saldo para el siguiente pago  

    print(f"{numero:9d} | {pago_mensual :7.2f} | {intereses:7.2f} | {capital:7.2f} | {saldo:7.2f}")


      