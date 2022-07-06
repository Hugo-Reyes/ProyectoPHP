<div>
    <div id="titulo">
        <h2 style="margin-left: 50px; margin-top: 30px;">¿Qué es la memoria estática?</h2>
        <p style="font-size: 15px; margin-left: 50px;">Martha Patricia</p>
    </div>
    <div>
        <img src="img/memoria-estatica.png" alt="" height="600" style="margin-left: 50px;">
    </div>
    <div style=" width:79%; margin-left: 50px; padding-top:30px">
        <p style="font-size: 20px; text-align: justify;"><strong>Es el espacio en memoria que se crea al declarar variables de cualquier tipo de dato.</strong> La memoria que estas variables ocupan no puede cambiarse durante la ejecución y tampoco puede ser liberada manualmente. En los lenguajes que permiten la existencia de subprogramas, y siempre que todos los objetos de estos subprogramas puedan almacenarse estáticamente se aloja en la memoria estática un registro de activación correspondiente a cada uno de los subprogramas. Estos registros de activación contendrán las variables locales, parámetros formales y valor devuelto por la función.</p>
    </div>

    <div style=" width:79%; margin-left: 50px; padding-top:30px">
        <h3>Características</h2>
        <p style="font-size: 20px; text-align: justify;">Las caracteristicas más importantes de la memoria estática son:
            <ul style="font-size:18px;">
                <li>Durante el tiempo de ejecución se define la cantidad de memoria que se utilizará en un programa, un ejemplo clásico es la declaración de un <strong>array.</strong></li>
                <li>El tamaño que se propone para el programa <strong>no puede ser modificado mientras se ejecuta,</strong> si se desea modificar debe detenerse y cambiar su valor.</li>
                <li>Algunos lenguajes de programación utilizan la palabra <strong>static</strong> para especificar elementos del programa que deben almacenarse en memoria estática.</li>
                <li>Los objetos mantienen la misma localización en memoria durante <strong>todo el transcurso del programa.</strong></li>
            </ul>
        </p>
    </div>

    <div style=" width:79%; margin-left: 50px; padding-top:30px">
        <h3>Ventajas y desventajas</h2>
        <img src="img/figura-memoria-estatica.png" alt="" height="500" style="margin-top: 10px; margin-bottom: 20px;">    
        <p style="font-size: 20px; text-align: justify;">Las <strong>ventajas</strong> de la memoria estática son:
            <ul style="font-size:18px;">
                <li>Requiere una lógica simple.</li>
                <li>Facilidad de comprensión.</li>
                <li>Puede utilizarse en estructuras de datos pequeñas o que manejan poca información.</li>
                <li>No requieren más memoria de la cual es declarada.</li>
                <li>Al requerir menor cantidad de memoria, propicia mayor velocidad de acceso.</li>
            </ul>
        </p>

        <p style="font-size: 20px; text-align: justify;">Las <strong>desventajas</strong> de utilizar la memoria estática son:
            <ul style="font-size:18px;">
                <li>No se puede utilizar en el manejo de grandes cantidades de información.</li>
                <li>Es imposible modificar el tamaño de la memoria mientras se ejecuta el programa.</li>
                <li>Significa un desperdicio de memoria cuando no se alcanza a utilizar completamente.</li>
            </ul>
        </p>
    </div>
</div>