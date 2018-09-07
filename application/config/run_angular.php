<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['one_file_controller'] = true;
$config['general_data'] = [
	//"administrador"
	1 => [
  		[
			"url"		=> "/",
			"view"		=> "/inicio",
			"controller"=> "DefaultCtr",
			"title"		=> "Inicio",
		],
		[
			"url"		=> "/alumnos-agregar",
			"view"		=> "/alumno_agregar",
			"controller"=> "AlumnosCtr",
			"title"		=> "Alumnos - Agregar",
		],
		[
			"url"		=> "/alumnos-modificar/:id",
			"view"		=> "/alumno_agregar",
			"controller"=> "AlumnosCtr",
			"title"		=> "Alumnos - Modificar",
		],
		[
			"url"		=> "/alumnos-listar",
			"view"		=> "/alumno_listar",
			"controller"=> "AlumnosCtr",
			"title"		=> "Alumnos - Listar",
		],
		[
			"url"		=> "/alumnos-ver/:id",
			"view"		=> "/alumno_ver",
			"controller"=> "AlumnosCtr",
			"title"		=> "Alumnos - Ver",
		],
		[
			"url"		=> "/informes-agregar/:id",
			"view"		=> "/alumno_informe_agregar",
			"controller"=> "InformeListarCtr",
			"title"		=> "Informes - Agregar",
		],
		[
			"url"		=> "/informes-listar/:id",
			"view"		=> "/alumno_informe_listar",
			"controller"=> "InformeListarCtr",
			"title"		=> "Informes - Listar",
		],
		[
			"url"		=> "/informes-modificar/:idInforme",
			"view"		=> "/alumno_informe_agregar",
			"controller"=> "InformeListarCtr",
			"title"		=> "Informes - Modificar",
		],
		[
			"url"		=> "/informes-ver/:idInforme",
			"view"		=> "/alumno_informe_ver",
			"controller"=> "InformeListarCtr",
			"title"		=> "Informes - Ver",
		],
		[
			"url"		=> "/actividad-agregar/:id",
			"view"		=> "/actividad_agregar",
			"controller"=> "ActividadCtr",
			"title"		=> "Actividad - Agregar",
		],
		[
			"url"		=> "/actividades-listar/:id",
			"view"		=> "/actividad_listar",
			"controller"=> "ActividadCtr",
			"title"		=> "Actividades",
		],
		[
			"url"		=> "/actividades-ver/:id",
			"view"		=> "/actividad_ver",
			"controller"=> "ActividadCtr",
			"title"		=> "Actividad - Ver",
		],
		[
			"url"		=> "/materias-listar",
			"view"		=> "/materia_listar",
			"controller"=> "MateriaCtr",
			"title"		=> "Materias - Listar",
		],
		[
			"url"		=> "/materias-agregar",
			"view"		=> "/materia_agregar",
			"controller"=> "MateriaCtr",
			"title"		=> "Materias - Agregar",
		],
		[
			"url"		=> "/materias-modificar/:id",
			"view"		=> "/materia_agregar",
			"controller"=> "MateriaCtr",
			"title"		=> "Materias - Modificar",
		],
		[
			"url"		=> "/archivo-listar/:id",
			"view"		=> "/archivo_listar",
			"controller"=> "ArchivoCtr",
			"title"		=> "Archivos - Listar",
		],
		[
			"url"		=> "/archivo-agregar",
			"view"		=> "/archivo_agregar",
			"controller"=> "ArchivoCtr",
			"title"		=> "Archivo - Agregar",
		],
		[
			"url"		=> "/archivo-agregar/:id",
			"view"		=> "/archivo_agregar",
			"controller"=> "ArchivoCtr",
			"title"		=> "Archivo - Modificar",
		],
		[
			"url"		=> "/profesores-listar",
			"view"		=> "/profesor_listar",
			"controller"=> "ProfesorCtr",
			"title"		=> "Profesor - Listar",
		],
		[
			"url"		=> "/profesores-agregar",
			"view"		=> "/profesor_agregar",
			"controller"=> "ProfesorCtr",
			"title"		=> "Profesor - Agregar",
		],
		[
			"url"		=> "/profesores-modificar/:id",
			"view"		=> "/profesor_agregar",
			"controller"=> "ProfesorCtr",
			"title"		=> "Profesor - Modificar",
		],
		[
			"url"		=> "/cursadas-listar/:id",
			"view"		=> "/cursada_listar",
			"controller"=> "CursadasCtr",
			"title"		=> "Cursadas - Listar",
		],
		[
			"url"		=> "/cursadas-agregar/:id",
			"view"		=> "/cursada_agregar",
			"controller"=> "CursadasCtr",
			"title"		=> "Cursadas - Agregar",
		],
		[
			"url"		=> "/cursadas-modificar/:idCurs",
			"view"		=> "/cursada_agregar",
			"controller"=> "CursadasCtr",
			"title"		=> "Cursadas - Modificar",
		],
		[
			"url"		=> "/cursadas-agregar-multiples",
			"view"		=> "/cursadas_agregar_multiples",
			"controller"=> "CursadasCtr",
			"title"		=> "Cursadas - Agregar múltiples",
		],
		[
			"url"		=> "/comisiones-listar",
			"view"		=> "/comision_listar",
			"controller"=> "ComisionesCtr",
			"title"		=> "Comisiones - Listar",
		],
		[
			"url"		=> "/comisiones-agregar",
			"view"		=> "/comision_agregar",
			"controller"=> "ComisionesCtr",
			"title"		=> "Comisiones - Agregar",
		],
		[
			"url"		=> "/comisiones-modificar/:id",
			"view"		=> "/comision_agregar",
			"controller"=> "ComisionesCtr",
			"title"		=> "Comisiones - Modificar",
		],
		[
			"url"		=> "/comisiones-ver/:id",
			"view"		=> "/comision_ver",
			"controller"=> "ComisionesCtr",
			"title"		=> "Comisiones - Ver",
		],
		[
			"url"		=> "/examenes-listar/:idCursada",
			"view"		=> "/examenes_listar",
			"controller"=> "ExamenesCtr",
			"title"		=> "Examenes - Listar",
		],
		[
			"url"		=> "/examenes-agregar",
			"view"		=> "/examenes_agregar",
			"controller"=> "ExamenesCtr",
			"title"		=> "Examenes - Agregar",
		],
		[
			"url"		=> "/paises-agregar",
			"view"		=> "/pais_agregar",
			"controller"=> "PaisesCtr",
			"title"		=> "Países - Agregar",
		],
		[
			"url"		=> "/paises-modificar/:id",
			"view"		=> "/pais_agregar",
			"controller"=> "PaisesCtr",
			"title"		=> "Países - Modificar",
		],
		[
			"url"		=> "/paises-listar",
			"view"		=> "/pais_listar",
			"controller"=> "PaisesCtr",
			"title"		=> "Países - Listar",
		],
		[
			"url"		=> "/ciudades-agregar",
			"view"		=> "/ciudad_agregar",
			"controller"=> "CiudadesCtr",
			"title"		=> "Ciudades - Agregar",
		],
		[
			"url"		=> "/ciudades-modificar/:id",
			"view"		=> "/ciudad_agregar",
			"controller"=> "CiudadesCtr",
			"title"		=> "Ciudades - Modificar",
		],
		[
			"url"		=> "/ciudades-listar",
			"view"		=> "/ciudad_listar",
			"controller"=> "CiudadesCtr",
			"title"		=> "Ciudades - Listar",
		],
		[
			"url"		=> "/escuelas-agregar",
			"view"		=> "/escuela_agregar",
			"controller"=> "EscuelasCtr",
			"title"		=> "Escuelas - Agregar",
		],
		[
			"url"		=> "/escuelas-modificar/:id",
			"view"		=> "/escuela_agregar",
			"controller"=> "EscuelasCtr",
			"title"		=> "Escuelas - Modificar",
		],
		[
			"url"		=> "/escuelas-listar",
			"view"		=> "/escuela_listar",
			"controller"=> "EscuelasCtr",
			"title"		=> "Escuelas - Listar",
		],
		[
			"url"		=> "/tutores-agregar",
			"view"		=> "/tutores_agregar",
			"controller"=> "TutoresCtr",
			"title"		=> "Tutores - Agregar",
		],
		[
			"url"		=> "/tutores-modificar/:idTutor",
			"view"		=> "/tutores_agregar",
			"controller"=> "TutoresCtr",
			"title"		=> "Tutores - Modificar",
		],
		[
			"url"		=> "/tutores-listar",
			"view"		=> "/tutores_listar",
			"controller"=> "TutoresCtr",
			"title"		=> "Tutores - Listar",
		],
		[
			"url"		=> "/tutores-listar-informes/:idTutor",
			"view"		=> "/tutores_listar_informes",
			"controller"=> "TutoresCtr",
			"title"		=> "Tutores - Informes - Listar",
		],
		[
			"url"		=> "/tutores-ver/:id",
			"view"		=> "/tutor_ver",
			"controller"=> "TutoresCtr",
			"title"		=> "Tutor - Ver",
		],
		[
			"url"		=> "/admin-ver",
			"view"		=> "/admin_ver",
			"controller"=> "AdminCtr",
			"title"		=> "Usuario - Perfil",
		],
		[
			"url"		=> "/admin-perfil-editar",
			"view"		=> "/admin_editar",
			"controller"=> "AdminCtr",
			"title"		=> "Usuario - Perfil - Editar",
		],
		[
			"url"		=> "/foro-admin",
			"view"		=> "/admin_foro",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Categorías",
		],
		[
			"url"		=> "/foro-agregarCat",
			"view"		=> "/admin_foro_agregarCat",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Categorías - Agregar",
		],
		[
			"url"		=> "/foro-modificarCat/:idCatMod",
			"view"		=> "/admin_foro_agregarCat",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Categorías - Modificar",
		],
		[
			"url"		=> "/foro-agregarTema/:idCat",
			"view"		=> "/admin_foro_agregarTema",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Temas - Agregar",
		],
		[
			"url"		=> "/foro-modificarTema/:idTemaMod",
			"view"		=> "/admin_foro_agregarTema",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Temas - Modificar",
		],
		[
			"url"		=> "/foro-temas/:idCat",
			"view"		=> "/admin_foro_temas",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Temas",
		],
		[
			"url"		=> "/foro-mensajes/:idTema",
			"view"		=> "/admin_foro_mensajes",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Mensajes",
		],
		[
			"url"		=> "/foro-agregarMensaje/:idTema",
			"view"		=> "/admin_foro_agregarMensaje",
			"controller"=> "ForoCtr",
			"title"		=> "Foro - Mensajes - Agregar",
		],
		[
			"url"		=> "/usuario-cambiar-contraseña/:id",
			"view"		=> "/usuario_cambiar_contraseña",
			"controller"=> "AdminCtr",
			"title"		=> "Cambiar contraseña",
		],
	],

	//"tutor"
	3 => [ 
		[
			"url"		=> "/",
			"view"		=> "/inicio",
			"controller"=> "DefaultCtr",
			"title"		=> "Inicio",
		],
		[
			"url"		=> "/tutor-alumnos",
			"view"		=> "/tutor/tutor_alumnos_listar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Alumnos - Listar",
		],
		[
			"url"		=> "/tutor-alumnos-ver/:id",
			"view"		=> "/tutor/tutor_alumno_ver",
			"controller"=> "UserTutorCtr",
			"title"		=> "Alumnos - Ver",
		],
		[
			"url"		=> "/tutor-cursadas/:id",
			"view"		=> "/tutor/tutor_cursadas_listar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Cursadas - Listar",
		],
		[
			"url"		=> "/tutor-examenes/:idCurs",
			"view"		=> "/tutor/tutor_examenes_listar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Exámenes - Listar",
		],
		[
			"url"		=> "/tutor-informes/:id",
			"view"		=> "/tutor/tutor_informes_listar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Informes - Listar",
		],
		[
			"url"		=> "/tutor-actividades/:id",
			"view"		=> "/tutor/tutor_actividades_listar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Actividades - Listar",
		],
		[
			"url"		=> "/tutor-informes-agregar/:id",
			"view"		=> "/tutor/tutor_informes_agregar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Informes - Agregar",
		],
		[
			"url"		=> "/tutor-informes-modificar/:idModif",
			"view"		=> "/tutor/tutor_informes_agregar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Informes - Modificar",
		],
		[
			"url"		=> "/tutor-informes-ver/:idInforme",
			"view"		=> "/tutor/tutor_informes_ver",
			"controller"=> "UserTutorCtr",
			"title"		=> "Informes - Ver",
		],
		[
			"url"		=> "/tutor-perfil",
			"view"		=> "/tutor/tutor_perfil",
			"controller"=> "UserTutorCtr",
			"title"		=> "Usuario - Perfil",
		],
		[
			"url"		=> "/tutor-perfil-editar",
			"view"		=> "/tutor/tutor_editar",
			"controller"=> "UserTutorCtr",
			"title"		=> "Usuario - Perfil",
		],
		[
			"url"		=> "/foro-tutor",
			"view"		=> "/tutor/tutor_foro",
			"controller"=> "ForoTutorCtr",
			"title"		=> "Foro - Categorías",
		],
		[
			"url"		=> "/foro-tutor-temas/:idCat",
			"view"		=> "/tutor/tutor_foro_temas",
			"controller"=> "ForoTutorCtr",
			"title"		=> "Foro - Temas",
		],
		[
			"url"		=> "/foro-tutor-mensajes/:idTema",
			"view"		=> "/tutor/tutor_foro_mensajes",
			"controller"=> "ForoTutorCtr",
			"title"		=> "Foro - Mensajes",
		],
		[
			"url"		=> "/foro-tutor-agregarMensaje/:idTema",
			"view"		=> "/tutor/tutor_foro_agregarMensaje",
			"controller"=> "ForoTutorCtr",
			"title"		=> "Foro - Mensajes - Agregar",
		],
		[
			"url"		=> "/foro-tutor-agregarTema/:idCat",
			"view"		=> "/tutor/tutor_foro_agregarTema",
			"controller"=> "ForoTutorCtr",
			"title"		=> "Foro - Temas - Agregar",
		],
	],

	//"alumno"
	2 => [
		[
			"url"		=> "/",
			"view"		=> "/inicio",
			"controller"=> "DefaultCtr",
			"title"		=> "Inicio",
		],
		[
			"url"		=> "/alumno-cursadas-listar",
			"view"		=> "/alumno/alumno_cursadas",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Cursadas - Listar",
		],
		[
			"url"		=> "/alumno-archivo-listar/:id",
			"view"		=> "/alumno/alumno_archivo_listar",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Archivos - Listar",
		],
		[
			"url"		=> "/alumno-examenes-listar/:idCurs",
			"view"		=> "/alumno/alumno_examenes",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Exámenes - Listar",
		],
		[
			"url"		=> "/alumno-informes-listar",
			"view"		=> "/alumno/alumno_informes",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Informes - Listar",
		],
		[
			"url"		=> "/alumno-actividades-listar",
			"view"		=> "/alumno/alumno_actividades",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Actividades - Listar",
		],
		[
			"url"		=> "/alumno-perfil",
			"view"		=> "/alumno/alumno_perfil",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Alumno - Perfil",
		],
		[
			"url"		=> "/alumnos-perfil-editar",
			"view"		=> "/alumno/alumno_editar",
			"controller"=> "UserAlumnoCtr",
			"title"		=> "Perfil - Editar",
		],
		[
			"url"		=> "/foro-alumno",
			"view"		=> "/alumno/alumno_foro",
			"controller"=> "ForoAlumnoCtr",
			"title"		=> "Foro - Categorías",
		],
		[
			"url"		=> "/foro-alumno-temas/:idCat",
			"view"		=> "/alumno/alumno_foro_temas",
			"controller"=> "ForoAlumnoCtr",
			"title"		=> "Foro - Temas",
		],
		[
			"url"		=> "/foro-alumno-mensajes/:idTema",
			"view"		=> "/alumno/alumno_foro_mensajes",
			"controller"=> "ForoAlumnoCtr",
			"title"		=> "Foro - Mensajes",
		],
		[
			"url"		=> "/foro-alumno-agregarMensaje/:idTema",
			"view"		=> "/alumno/alumno_foro_agregarMensaje",
			"controller"=> "ForoAlumnoCtr",
			"title"		=> "Foro - Mensajes - Agregar",
		],
		[
			"url"		=> "/foro-alumno-agregarTema/:idCat",
			"view"		=> "/alumno/alumno_foro_agregarTema",
			"controller"=> "ForoAlumnoCtr",
			"title"		=> "Foro - Temas - Agregar",
		],
	],

	"default" => [
		"view"		=> "/404",
		"controller"=> "DefaultCtr",
		"title"		=> "Ocurrio un Error !",
	],
];