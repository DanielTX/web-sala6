✅ Explicación de la estructura del proyecto
El proyecto está organizado en tres capas principales siguiendo el patrón MVC (Modelo-Vista-Controlador):

✅ 1. Model (Modelo)
Ubicación: data.json
Función:
Almacenar los datos de la aplicación en formato JSON. Este archivo actúa como una pequeña base de datos donde se guardan los registros que maneja la aplicación.
✅ 2. Controller (Controlador)
Ubicación: Controller
Archivos principales:
guardar.php: Recibe datos del formulario (probablemente por POST), los valida y los guarda en data.json.
obtener_datos.php: Lee el archivo data.json y devuelve su contenido en formato JSON, permitiendo que la vista muestre los datos actualizados.
script.js: Contiene la lógica de interacción en el lado del cliente, como el envío de formularios mediante AJAX y la actualización dinámica de la vista.
✅ 3. VIEW (Vista)
Ubicación: VIEW
Archivos principales:
index.html: Página principal con el formulario para ingresar datos.
lista.html: Página para mostrar la lista de datos almacenados.
style.css: Archivo de estilos CSS para dar formato y diseño visual a las páginas.
✅ Flujo de funcionamiento
✅ El usuario accede a la vista (index.html o lista.html).
✅ El usuario ingresa datos en el formulario y los envía.
✅ El archivo script.js captura el evento y envía los datos al backend usando AJAX.
✅ El controlador (guardar.php) recibe los datos, los valida y los guarda en data.json.
✅ Cuando se necesita mostrar los datos, obtener_datos.php lee el archivo data.json y devuelve los datos al frontend.
✅ La vista muestra los datos al usuario, aplicando los estilos definidos en style.css.
✅ Resumen
Modelo: Gestiona y almacena los datos.
Controlador: Procesa las peticiones, valida y manipula los datos.
Vista: Interfaz de usuario, muestra y recoge información.
