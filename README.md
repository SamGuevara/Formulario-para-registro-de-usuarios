# Formulario-para-registro-de-usuarios
Este proyecto está enfocado en un formulario para que se registren nuevos usuarios y se hizo una conexión con una base de datos. Si bien se incluye un elemento de referencia todavía no está vinculado a una sección específica.

# Tecnología usada en el proyecto

## HTML:
Para la creación de este formulario se usaron distintas etiquetas, siendo la más importante Form, ya que ella es la que permite la creación de un formulario, también se usaron etiquetas label e input, además de div. A cada una de las etiquetas se le asignó una clase para crear la relación con la hoja de estilo. Y nombres para relacionarlos con el archivo PHP.

## CSS:
En este caso se optó por un diseño más colorido, siguiendo como base el documento provisto por los profesores. Se implementó un marco a los inputs para que el usuario ubique en forma visual qué campo está completando. Aun así se trató de mantener un estilo simple.

## PHP:
Primero planteamos las variables para la conexión con la base de datos, a continuación se declara dicha conexión y se verifica que no falle. Obtenemos los datos del formulario, usando variables relacionadas con los nombres que se le dieron a las etiquetas input del archivo HTML. Después por separado validamos usuario y correo electrónico para que no se repitan en la base de datos. A continuación hasheamos la contraseña. Insertamos los datos en la base de datos y cerramos la conexión.

## MySQL:
La base de datos fue creada usando "phpMyAdmin" desde el panel de Xampp. No se utilizó código SQL, pero si se utilizó el motor de MySQL, todo se realizó por medio de la interfaz gráfica de "phpMyAdmin".
Para crearla se procedió creando una base de base de datos (registro_usuarios) y dentro de esta se creó una nueva tabla (usuarios). De la última se completaron los campos solicitados para cada columna, teniendo en cuenta los nombres dados en el formulario HTML para cada columna. Los datos llegan a la base de datos desde el formulario antes mencionado y su conexión con PHP.

# Descargar el archivo
- Busca el botón verde que dice <>Code
- Hace click en la fecha que tiene el botón
- Selecciona "Download ZIP"
- Descomprime el archivo ZIP
  Como tiene archivos PHP y está vinculado a MySQL vamos a:
- Moverlo a la carpeta "htdocs" (se ubica en el sistema, la ruta es /opt/lampp/htdocs, puede variar según sea tu sistema operativo)

# Creando la base de datos
- Abre XAMPP, activa los servidores.
- Ve al navegador, en la barra de URL coloca "http://localhost" (te lleva a la página principal de tu servidor local)
- Busca "phpmyadmin"
- Busca la base de datos "registro_usuarios"
- Una vez lista, selecciona "Importar"
- Donde dice "Examinar", busca la ruta del archivo SQL que viene en la carpeta del proyecto
- Baja hasta el final y click al botón "Importar"

# Ejecutar en el navegador
- En la barra de URL coloca "http://localhost/nombre_de_la_carpeta/index.html"
- Enter y eso abrirá el formulario

# Agradecimientos
A los profesores Gustavo Rojas y Carolina Riveros por su arduo trabajo al enseñarnos, y a Punto Digital San Martín Mza. por la oportunidad de este cursado.


