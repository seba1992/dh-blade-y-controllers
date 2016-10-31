#Ejercitación
- 1) Extraer la lógica de cada una de las rutas a un mismo controlador
- 2) Extraer la barra de navegación de cada una de las vistas a un archivo separado e incluirla en cada una de las vistas que haga falta
- 3) Crear una vista maestra que contenta la estructura principal del HTML

---------------------------------------------------------------------
#Para tener en cuenta:
- Para crear un controlador utilizamos php artisan make:controller NombreController
- Para asociar una ruta a un metodo de un controller usamos Route::get('/ruta', 'NombreController@metodo')
- Para incluir una vista dentro de otra utilizamos @include('directorio.nombre_vista')
- Para extender una vista de otra utilizamos @extends
- Para mostrar el contenido de una sección en una vista maestra utilizamos @yield('nombre_seccion')
- Para definir una sección en una vista hija utilizamos @section

---------------------------------------------------------------------
#Anexo: Como instalarnos este proyecto?
Ejecutar desde la terminal, en donde tengamos nuestros proyectos:
- git clone https://github.com/seba1992/dh-blade-y-controllers.git
- Entramos al directorio y ejecutamos composer install
- Hacemos una copia exacta del archivo .env.example a .env
- Ejecutamos php artisan key:generate
- Entramos en la carpeta y ejecutamos php artisan serve
