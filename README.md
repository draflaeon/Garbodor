Sistema de planificaciones para Motores Piddo
=============================================

Bienvenidos al sistema de planificaciones para Motores Piddo. Nombre Clave: [Garbodor][2].

El sistema se divide en 4 etapas esenciales.

1) Creación de las vistas y los datos
-------------------------------------

Las vistas a cargo de [marioalejandro][1] estarán diseñadas en **HTML5**, **CSS3** y **JS**. Además se está estudiando **Boostrap** para su futura implementación (Pensado en que se usará en Symfony2.6).

La creación de la **Base de Datos** está a cargo de [draflaeon][3], seguirá las normas de **Doctrine** para su creación.

Para generar la base de datos de acuerdo al archivo ``config.yml``.

	php app/console doctrine:database:create

Para generar las tablas a la base de datos.

	php app/console doctrine:schema:create

Al modificar y actualizar las clases/entidades recuerda ejecutar lo siguiente.

	php app/console doctrine:schema:update --force

2) Mantenedores
-------------------
Como buen sistema se debe desarrollar el CRUD en cada mantenedor. Se empezará con los usuarios, luego los motores, despues las piezas, los trabajos y por último los repuestos.

Para finalizar este apartado se comenzará a ver el taller dentro del sistema.

3) Presupuesto
-------------------
Ya con la información en la base de datos se puede comenzar a crear varios presupuestos para los clientes que podrán aprobar o rechazar.

**Documentos en desarrollo...**

5) Temas Extra
-------------------
### Falta
  - [ ] Clases de la Base de Datos
  - [ ] Fixtures para los Datos
  - [x] Limpiar Código

Vistas de Prueba trabajandose en :

	http://localhost/Garbodor/web/app_dev.php/admin/menu-sin-twig/

Para el inicio entrar a:

    http://localhost/Garbodor/web/app_dev.php/admin/home/
	
&) Algunos Recordatorios para Git
-------------------
### Comitear

	git 

[1]: https://github.com/marioalejandro
[2]: http://draflaeon.github.io/Garbodor
[3]: https://github.com/draflaeon
