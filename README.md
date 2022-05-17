##Integrantes
#Sebastián Mazo Vélez
#Sofia Arango
#Gabriel Cornejo Botero

##Herramientas utilizadas
<ul>
    <li>Laravel</li>
    <li>PHP</li>
    <li>Composer</li>
    <li>HTML, CSS y JS</li>
    <li>MySQL</li>
</ul>

##Cómo instalar
<p>Clonar el repositorio (git clone https://github.com/sebasmazo/backend_plataformas.git), debe tener descargado PHP para poder utilizar las funciones de Composer. Ubicarse en la carpeta raiz donde están todos los archivos del proyecto y ejecutar el comando * composer install * para instalar todas las dependencias necesarias.</p>

<p>Por medidas de seguridad, git elimina el archivo .env, por esto, se debe ejecutar el comando * cp .env.example .env * de esta forma copiamos el archivo de configuración base. Además, se debe generar una Key para seguridad de laravel con el comando * php artisan key:generate * </p>

<p>Nuestro proyecto usa una base de datos MySQL que se debe crear para realizar la migración de laravel.
    
    mysql -u -p
    
    CREATE DATABASE ssgfest;

Se deben agregar las respectivas credenciales al archivo .env Al finalizar esto se puede migrar la base de datos;
    
    php artisan migrate 
    
    php artisan migrate --seed

Luego realizar el comando * php artisan serve * para empezar a hostear el proyecto localmente
</p>
