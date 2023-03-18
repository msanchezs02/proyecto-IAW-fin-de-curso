
# Tienda online de Palas de Padel

>Para realizar esta tienda, nos hemos basado en el modelo vista controlador(MVC), en el cual se separan los conceptos de Modelo(conexión a la base de datos de la aplicación), Vista(Lo que ve el usuario cuando accede a la página de la tienda), Controlador(Lo que sucede cuando el usuario pulsa en cada una de las opciones que tenemos implementadas en la tienda).

>Para el montaje de esta aplicación, necesitamos de varios archivos, divididos en carpetas, cada una asociada a la funcionalidad correspondiente en la aplicación. Los nomrbes de las carpetas son: assets, BD, Controllers, Models y Views. Fuera de estas carpetas se encuentra el archivo  index.php, que es el archivo que se muestra cuando un usuario entra en la aplicación.


# Carpeta assets

>Esta carpeta contiene las imágenes de los productos de nuestra tienda.



# Carpeta BD

>Esta carpeta contiene un archivo llamado conexionBD.php. Este archivo contiene una clase llamada DataBase, que a su vez contiene un método llamado "conn". Este método permite conectarnos a la base de datos de nuestra aplicación obteniendo los datos del fichero ".env".



# Carpeta Controllers

>Esta carpeta contiene dos archivos llamados ProductController.php y UserController.php.

## ProductController

>Este método es el controlador de las acciones referentes a los productos de la tienda. Implementa una clase llamada ProductController que contiene 5 métodos.

### getAllProducts

>Este método permite recuperar toda la información de los productos de la base de datos y mostrarlos en la página de la tienda.

### aniadirPalas

>Este médoto valida los datos introducidos de un nuevo producto que queremos añadir a nuestra base de datos. Si los datos introducidos son correctos, se añadirán a la base de datos. En cambio, si algunos de los datos introducidos está vacío o no cumple los requisitos, se mostrarán una serie de errores.

### PalasproID

>Este método recupera todos los datos de un producto en concreto gracias a su id.

### aniadirCarrito

>Este método permite agregar los productos que al usuario le gusten al carrito. Previamente hay que configurar una opción para añadir esos productos al carrito.

## mostrarCarrito

>Este método muestra los productos que hemos añadido al carrito.

## UserController

>Este método es el controlador de las acciones referentes a los usuarios. Implementa una clase llamada UserController que contiene 2 métodos.

### MostrarLogin

>Este método muestra la vista para que el administrador de la tienda inicie sesión.

### IniSesion

>Este método comprueba si el usuario que inicia sesión está o no en la base de datos.
# Carpeta Models

>Esta carpeta contiene dos archivos llamados palas.php y usuarios.php.

## palas.php

>Este archivo contiene una clase llamada PalasDAO. A su vez, esta clase contiene 4 métodos, que son:

### __construct

>Este método es el constructor de la clase. En el se implementa el método para conectarnos a la base de datos.

### getAllProducts

>En este método preparamos la consulta para sacar toda la información de los productos de nuestra base de datos.

### PalasporID($id_pala)

>En este método preparamos la consulta para recopilar la información de un producto gracias a su id.

### insertPalas

>Este método contiene la sentencia insert, con esto lo que hacemos es insertar nuevos productos en la base de datos.

## usuarios.php

>Este archivo contiene una clase llamada UsuarioDao. A su vez, esta clase contiene 2 métodos, que son:

### __construct

>Este método implementa la conexión hacia la base de datos que ya estaba creada anteriormente.

### validarUsers($username,$password)

>Este método prepara una consulta hacia la base de datos para conseguir los datos del usuario en el que coincidan $username y $password.

# Carpeta Views

>Esta carpeta contiene 8 archivos. Estos archivos son las vistas de nuestra tienda, es decir, lo que el usuario va a ver cuando esté investigando por nuestra tienda y accediendo a las diferentes opciones implementadas en la tienda.

## addPalas.php

>Este archivo va a mostrar el formulario con los datos necesarios para insertar un nuevo producto en la base de datos.

## footer.php y header.php

>Estos archivos muestran la cabecera y el pie de nuestra tienda. Estos dos archivos van a ser comunes en todas las vistas de la aplicación.

## login.php

>Este archivo muestra la vista de inicio de sesión en la aplicación.

## mostrarCarrito.php

>Este archivo muestra los productos que hemos agregado al carrito.

## palasporid.php

>Este archivo muestra los datos de un solo producto con su imágen correspondiente.

## ShowPalas.php

>Este archivo muestra todos los productos que tenemos en la base de datos. Tiene las opciones de ver más(ver el producto más detalladamente) y añadir al carrito.

## View.php

>Este archivo contiene una clase llamada View que, a su vez, contiene el método "show". Este método es el que construye todas las vistas de nuestra aplicación.
