Klik & Learn
============

***

## Contexto del proyecto

Un colectivo de desarrollo de software quiere crear una aplicación web para gestionar sus eventos online como talleres, masterclass o webinars.

Los usuarios podrán ver la descripción de un evento, apuntarse y desapuntarse. Podrán ver la lista de los eventos a los que se han apuntado. El administrador debe tener las herramientas para la gestión (CRUD) de los eventos.


## Requisitos funcionales


<ul>
<li>En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.</li>
<li>En portada habrá una lista paginada con todos los eventos ordenados del más cercano al más lejano.</li>
<li>Los eventos incluirán como mínimo: título, fecha/hora, número máximo de participantes, descripción y una imagen.</li>
<li>Los eventos pasados se deben mantener en la lista pero identificables como no disponibles.</li>
<li>Los usuarios deberán registrarse para apuntarse a un evento. Una vez apuntados no podran volver a hacerlo.</li>
<li>Al apuntarse a un evento recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el título del evento, la hora y el día.</li>
<li>Los usuarios podrán ver en una página la lista de los eventos a los que están registrados.</li>
<li>El administrador podrá hacer CRUD de los eventos.</li>
<li>Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.</li>
</ul>


## Páginas:

### Lista: Las citas beben aparecer por orden de creación con:
<ul>
<li>El nombre del coder o del equipo.</li>
<li>El tema de consulta.</li>
<li>La fecha la y hora de la creación de la cita.</li>
<li>Las citas se podrán eliminar.</li>
<li>Podremos acceder a la edición de cada cita, y a la página de creación de una cita nueva.</li>
</ul>

### Crear nueva cita:
<ul>
<li>Formulario con los campos necesarios obligatorios.</li>
<li>Botón para borrar los campos.</li>
<li>Botón para cancelar y volver a la lista principal.</li>
<li>Botón para enviar la información.</li>
</ul>


### Editar cita:
<ul>
<li>Formulario con los campos necesarios obligatorios.</li>
<li>Los campos deben contener la información de la cita a editar.</li>
<li>Boton para cancelar, botón para enviar.</li>
</ul>


La aplicación deberá ser responsiva.


## Requisitos técnicos:
<ul>
<li>Aplicación de tipo CRUD (Create, Read, Update, Delete).</li>
<li>Deberá ser orientada a objetos con el patrón MVC.</li>
<li>Deberá alojarse en un servidor gratuito en producción.</li>
<li>Se debe usar Git con buenas prácticas en los commits.</li>
<li>El repositorio debe contener un Readme con explicación del proyecto, y una explicación de cómo instalar o ejecutar la aplicación.</li>
</ul>


## Extras:
<ul>
<li>Añadir tests unitarios con PhpUnit.</li>
<li>Añadir Tests End2End con Selenium.</li>
</ul>


## Tecnologías:
<ul>
<li>Frontend: HTML, CSS, SCSS - Opcional: Framework de CSS.</li>
<li>Backend: PHP.</li>
<li>Bases de datos: MySQL.</li>
<li>No se pueden usar otras librerías o frameworks más allá de los espicificados.</li>
</ul>


## Entrega:
<ul>
<li> Un link a un repositorio de github.</li>
<li>Un link a la URL del proyecto en producción.</li>
<li>Presentación en diapositivas + link.</li>
<li>Demo y code review.</li>
</ul>


## Core skills:
<ul>
  <li>Semántica HTML.</li>
  <li>Buenas prácticas en CSS, SCSS.</li>
  <li>Capacidad de abstración en clases y objetos.</li>
  <li>Buenas prácticas OOP - Encapsulación, herencia.</li>
  <li>Patrones de diseño - Modelo-Vista-Controlador (MVC).</li>
  <li>Implementar la aplicación en un servidor en producción.</li>
  <li>Uso de Git.</li>
  <li>Desarrollo basado en historias de usuario y tareas (Kanban).</li>
  <li>Comunicación y autoevaluación.</li>
</ul>


***
***


## Required

- PHP 7.4 min
- Composer installed


## Install Project

1. Clone git https://github.com/KlikProjects/KlikandLearn.git
2. Crear una base de datos en phpMyAdmin en local, con los credenciales - user : root, password : ""
3. Nombre de base de datos : consultant
4. Importar la tabla siguiente : https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC/blob/main/src/ReadMe.md/Database/consultant.sql


## Install

- composer install and/or composer update

## Run tests

- vendor/bin/phpunit 
- (1 test, 2 assertions)


***
***


# Klik & Learn

## 🚀 Comenzando

Dónde encontrar el proyecto en producción:

https://el-consultorio-del-coder.herokuapp.com/

El hoster Heroku nos genera un error de conexiones simultáneas a nuestra base de datos SQL, que no hemos podido solucionar en Heroku.


## 🛠️ Mockup de este proyecto

Mockup de cómo pensábamos que deberían ser las pantallas y sus funcionalidades:

<p align="center"> 
  <img src="./src/ReadMe.md/mockup/mockupMobil.PNG?raw=true" width=50%>
  <img src="./src/ReadMe.md/mockup/mockupTablet.PNG?raw=true" width=50%>
  <img src="./src/ReadMe.md/mockup/mockupDesktop.PNG?raw=true" width=50%>
</p>


## ⚙️ Capturas pantalla formato móvil 

<p align="center"> 
<img src="./src/ReadMe.md/screenshotMobil/read.PNG?raw=true" width=25%>
<img src="./src/ReadMe.md/screenshotMobil/creat.PNG?raw=true" width=25%>
<img src="./src/ReadMe.md/screenshotMobil/edit.PNG?raw=true" width=25%>
</p>


## ⚙️ Capturas pantalla formato desktop

<p align="center"> 
<img src="./src/ReadMe.md/screenshotDesktop/read.PNG?raw=true" width=50%>
<img src="./src/ReadMe.md/screenshotDesktop/creat.PNG?raw=true" width=50%>
<img src="./src/ReadMe.md/screenshotDesktop/edit.PNG?raw=true" width=50%>
</p>


## 🛠️ Herramientas usadas en este proyecto
<ul>
  <li>Visual Studio Code</li>
  <li>Trello</li>
  <li>Figma</li>
  <li>Metodologías Ágiles</li>
  <li>Balsamiq</li>
  <li>Planning Poker</li>
  <li>GoogleDocs</li>
  <li>GoogleFonts</li>
  <li>Zoom</li>
  <li>Bootstrap</li>
  <li>PDO</li>
  <li>Heroku</li>
  <li>SQL</li>
  <li>PHPMyAdmin</li>
</ul>


## ✒️ Autores 
<ul>
  <li>Berta</li>
  <li>David (Product Owner)</li>
  <li>Gabriela</li>
  <li>Joan (Scrum Master)</li>
  <li>Jose Miguel</li>
</ul>

También pueden mirar la lista de todos los [contribuyentes](https://github.com/KlikProjects/KlikandLearn/graphs/contributors) quienes han participado en este proyecto.  


