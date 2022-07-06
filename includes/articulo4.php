<div>
    <div id="titulo">
        <h2 style="margin-left: 50px; margin-top: 30px;">El concepto de recursividad</h2>
        <p style="font-size: 15px; margin-left: 50px;">Daniel Cocotle</p>
    </div>
    <div>
        <img src="img/recursividad.png" alt="" height="600" style="margin-left: 50px;">
    </div>
    <div style=" width:79%; margin-left: 50px; padding-top:30px">
        <p style="font-size: 20px; text-align: justify;">Es una alternativa al uso de los ciclos, ya que la <strong>recursividad</strong> ocupa toda una función para que se puedan desarrollar los comandos a repetir, a diferencia de los iteradores if-else que sólo ocupan un bloque de programación. El propósito de la recursividad es para que <strong>algún problema se pueda resolver usando la misma función,</strong> pero usando cada vez parámetros que se aproximen al resultado deseado, una vez que se haya obtenido el resultado deseado <strong>la función recursiva ya no se repetirá.</strong> Por poner un ejemplo, aquí se muestra un programa para poder sacar la factorial de un número usando recursividad.</p>
    </div>

    <div style=" width:79%; margin-left: 50px;">
        <img src="img/factorial.png" alt="" height="500" style="margin-top: 10px; margin-bottom: 20px;">    
        <p style="font-size: 20px; text-align: justify;">Como podemos ver, la función llamada <strong>“factorial”</strong> es de tipo entero y tiene un paso de parámetros por una variable de tipo entero llamada “num”. Si la variable “num” vale 0 la <strong>función termina,</strong> pero si la variable tiene un valor diferente a 0, esta multiplicará el valor que tenga en ese momento con el resultado de factorial(num-1), por lo que la función “factorial” se <strong>invocará a sí misma</strong> pero con un número con una unidad inferior.<br><br>La función se llamará recursivamente hasta que la variable “num” quede en 0 y pueda terminar, después de eso se puede realizar la multiplicación o mejor dicho,<strong> todas las multiplicaciones que quedaron pendientes.</strong></p>
    </div>
</div>