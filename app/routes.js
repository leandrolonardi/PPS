app.config(['$routeProvider', function ($routeProvider) {
  /*
    'title' es utilizado en el título de la página (index.php) y
    en los breadcrumbs (header.html) para ubicar al usuario.
    Ver app.js. ;)
  */
  $routeProvider
    .when("/", {
      title: 'Inicio',
      templateUrl: BASE_URL + "app/views/inicio.html",
      controller: "DefaultCtr"
    })
    .when("/alumnos-agregar", {
      title: 'Alumnos - Agregar',
      templateUrl: BASE_URL + "app/views/alumno_agregar.html",
      controller: "AlumnosCtr"
    })
    .when("/alumnos-agregar/:id", {
      title: 'Alumnos - Modificar',
      templateUrl: BASE_URL + "app/views/alumno_agregar.html",
      controller: "AlumnosCtr"
    })
    .when("/alumnos-listar", {
      title: 'Alumnos - Listar',
      templateUrl: BASE_URL + "app/views/alumno_listar.html",
      controller: "AlumnosCtr"
    })
    .when("/alumnos-ver/:id", {
      title: 'Alumnos - Ver',
      templateUrl: BASE_URL + "app/views/alumno_ver.html",
      controller: "AlumnosCtr"
    })
    .when("/informes-agregar/:id", {
      title: 'Informes - Agregar',
      templateUrl: BASE_URL + "app/views/alumno_informe_agregar.html",
      controller: "InformeListarCtr"
    })
    .when("/informes-listar/:id", {
      title: 'Informes - Listar',
      templateUrl: BASE_URL + "app/views/alumno_informe_listar.html",
      controller: "InformeListarCtr"
    })
    .when("/informes-modificar/:idInforme", {
      title: 'Informes - Modificar',
      templateUrl: BASE_URL + "app/views/alumno_informe_agregar.html",
      controller: "InformeListarCtr"
    })
    .when("/actividad-agregar/:id", {
      title: 'Actividad',
      templateUrl: BASE_URL + "app/views/actividad_agregar.html",
      controller: "ActividadCtr"
    })
    .when("/actividades-listar/:id", {
      title: 'Actividades',
      templateUrl: BASE_URL + "app/views/actividad_listar.html",
      controller: "ActividadCtr"
    })
    .when("/materias-listar", {
      title: 'Materias - Listar',
      templateUrl: BASE_URL + "app/views/materia_listar.html",
      controller: "MateriaCtr"
    })
    .when("/materias-agregar", {
      title: 'Materias - Agregar',
      templateUrl: BASE_URL + "app/views/materia_agregar.html",
      controller: "MateriaCtr"
    })
    .when("/materias-agregar/:id", {
      title: 'Materias - Modificar',
      templateUrl: BASE_URL + "app/views/materia_agregar.html",
      controller: "MateriaCtr"
    })
    .when("/archivo-listar/:id", {
      title: 'Archivos - Listar',
      templateUrl: BASE_URL + "app/views/archivo_listar.html",
      controller: "ArchivoCtr"
    })
    .when("/archivo-agregar", {
      title: 'Archivo - Agregar',
      templateUrl: BASE_URL + "app/views/archivo_agregar.html",
      controller: "ArchivoCtr"
    })
    .when("/archivo-agregar/:id", {
      title: 'Archivo - Modificar',
      templateUrl: BASE_URL + "app/views/archivo_agregar.html",
      controller: "ArchivoCtr"
    })
    .when("/profesores-listar", {
      title: 'Profesor - Listar',
      templateUrl: BASE_URL + "app/views/profesor_listar.html",
      controller: "ProfesorCtr"
    })
    .when("/profesores-agregar", {
      title: 'Profesor - Agregar',
      templateUrl: BASE_URL + "app/views/profesor_agregar.html",
      controller: "ProfesorCtr"
    })
    .when("/profesores-agregar/:id", {
      title: 'Profesor - Modificar',
      templateUrl: BASE_URL + "app/views/profesor_agregar.html",
      controller: "ProfesorCtr"
    })
    .when("/cursadas-listar/:id", {
      title: 'Cursadas - Listar',
      templateUrl: BASE_URL + "app/views/cursada_listar.html",
      controller: "CursadasCtr"
    })
    .when("/cursadas-agregar/:id", {
      title: 'Cursadas - Agregar',
      templateUrl: BASE_URL + "app/views/cursada_agregar.html",
      controller: "CursadasCtr"
    })
    .when("/cursadas-modificar/:idCurs", {
      title: 'Cursadas - Modificar',
      templateUrl: BASE_URL + "app/views/cursada_agregar.html",
      controller: "CursadasCtr"
    })
    .when("/cursadas-agregar-multiples", {
      title: 'Cursadas - Agregar múltiples',
      templateUrl: BASE_URL + "app/views/cursadas_agregar_multiples.html",
      controller: "CursadasCtr"
    })
    .when("/comisiones-listar", {
      title: 'Comisiones - Listar',
      templateUrl: BASE_URL + "app/views/comision_listar.html",
      controller: "ComisionesCtr"
    })
    .when("/comisiones-agregar", {
      title: 'Comisiones - Listar',
      templateUrl: BASE_URL + "app/views/comision_agregar.html",
      controller: "ComisionesCtr"
    })
    .when("/comisiones-agregar/:id", {
      title: 'Comisiones - Modificar',
      templateUrl: BASE_URL + "app/views/comision_agregar.html",
      controller: "ComisionesCtr"
    })
    .when("/comisiones-ver/:id", {
      title: 'Comisiones - Ver',
      templateUrl: BASE_URL + "app/views/comision_ver.html",
      controller: "ComisionesCtr"
    })
      .when("/examenes-listar/:idCursada", {
      title: 'Examenes - Listar',
      templateUrl: BASE_URL + "app/views/examenes_listar.html",
      controller: "ExamenesCtr"
    })
    .when("/examenes-agregar", {
      title: 'Examenes - Agregar',
      templateUrl: BASE_URL + "app/views/examenes_agregar.html",
      controller: "ExamenesCtr"
    })
    .when("/paises-agregar", {
      title: 'Países - Agregar',
      templateUrl: BASE_URL + "app/views/pais_agregar.html",
      controller: "PaisesCtr"
    })
    .when("/paises-agregar/:id", {
      title: 'Países - Modificar',
      templateUrl: BASE_URL + "app/views/pais_agregar.html",
      controller: "PaisesCtr"
    })
    .when("/paises-listar", {
      title: 'Países - Listar',
      templateUrl: BASE_URL + "app/views/pais_listar.html",
      controller: "PaisesCtr"
    })
    .when("/ciudades-agregar", {
      title: 'Ciudades - Agregar',
      templateUrl: BASE_URL + "app/views/ciudad_agregar.html",
      controller: "CiudadesCtr"
    })
    .when("/ciudades-agregar/:id", {
      title: 'Ciudades - Modificar',
      templateUrl: BASE_URL + "app/views/ciudad_agregar.html",
      controller: "CiudadesCtr"
    })
    .when("/ciudades-listar", {
      title: 'Países - Listar',
      templateUrl: BASE_URL + "app/views/ciudad_listar.html",
      controller: "CiudadesCtr"
    })
    .when("/escuelas-agregar", {
      title: 'Escuelas - Agregar',
      templateUrl: BASE_URL + "app/views/escuela_agregar.html",
      controller: "EscuelasCtr"
    })
    .when("/escuelas-agregar/:id", {
      title: 'Ciudades - Modificar',
      templateUrl: BASE_URL + "app/views/escuela_agregar.html",
      controller: "EscuelasCtr"
    })
    .when("/escuelas-listar", {
      title: 'Países - Listar',
      templateUrl: BASE_URL + "app/views/escuela_listar.html",
      controller: "EscuelasCtr"
    })
    .when("/tutores-agregar", {
      title: 'Tutores - Agregar',
      templateUrl: BASE_URL + "app/views/tutores_agregar.html",
      controller: "TutoresCtr"
    })
    .when("/tutores-agregar/:idTutor", {
      title: 'Tutores - Modificar',
      templateUrl: BASE_URL + "app/views/tutores_agregar.html",
      controller: "TutoresCtr"
    })
    .when("/tutores-listar", {
      title: 'Tutores - Listar',
      templateUrl: BASE_URL + "app/views/tutores_listar.html",
      controller: "TutoresCtr"
    })







    .otherwise({
      templateUrl: BASE_URL + "app/views/404.html",
      controller: "DefaultCtr"
    });
}]);