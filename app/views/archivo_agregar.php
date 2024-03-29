<main class="container" ng-init="initialize()">
        <a href="#/archivo-listar/{{idMateria}}" class="btn btn-agregar">Volver</a>

        <h2>{{ isAdding ? 'Agregar' : 'Modificar' }} <strong>archivo</strong></h2>
    
        <div class="row">
            <form id="formArchivo" name="formArchivo" class="col s12" ng-submit="agregarArchivo(archivo)">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input class="elementos" id="titulo" name="titulo" type="text" class="" ng-model="archivo.titulo" ng-required="true">
                        <label class="active" for="titulo">Título</label>
                        <p class="advertencia" ng-show="formArchivo.titulo.$error.required && !formArchivo.titulo.$pristine" class="help-block">El título no puede ser vacío</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input class="elementos" id="descripcion" name="descripcion" type="text" class="" ng-model="archivo.descripcion" ng-required="true">
                        <label class="active" for="descripcion">Descripción</label>
                        <p class="advertencia" ng-show="formArchivo.descripcion.$error.required && !formArchivo.descripcion.$pristine" class="help-block">La descripción no puede ser vacío</p>
                    </div>
                </div>

                <div ng-if="isAdding">
                    <div class="row">
                        <div class="col s12 m6">
                            <label for="">Seleccione el tipo de fuente</label>
                            <div class="switch">
                                <label>
                                Link
                                <input class="input-field" type="checkbox" ng-model="archivo.fuenteArchivo">
                                <span class="lever"></span>
                                Archivo
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row"  >
                        <div class="input-field col s12 m6" ng-show="archivo.fuenteArchivo">    
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>Archivo</span>
                                <input id="archivoAsubir" name="archivoAsubir" type="file" ngf-select="" ngf-multiple="false" ng-model="archivo.archivoAsubir" ng-required="false" ng-click=" archivo.ruta='' ">
                              </div>
                              <div class="file-path-wrapper">
                                <input id="ruta" name="ruta" class="file-path validate" type="text" placeholder="Seleccione un archivo..." ng-model="archivo.ruta">
                              </div>
                            </div>

                            <!--p class="advertencia" ng-show="formArchivo.archivo_a_subir.$error.required && !formArchivo.link.$pristine" class="help-block">Se debe seleccionar al menos un archivo</p-->

                            <!--<input class="elementos" id="ruta" name="ruta" type="file" class="" ng-model="archivo.ruta" -->
                        </div>
                        <div class="input-field col s12 m6"  style="height:66px;" ng-show="!archivo.fuenteArchivo">
                            <input class="elementos" id="link" name="link" type="url" class="" ng-model="archivo.link" placeholder="http(s)://dominio.com/ejemplo-1/">
                            <label class="active" for="ruta">Ingrese el link</label>
                            <p class="advertencia" ng-show="formArchivo.link.$error.required && !formArchivo.link.$pristine" class="help-block">El link no puede ser vacío</p>
                            <p class="advertencia" ng-show="formArchivo.link.$error.url && !formArchivo.link.$pristine">No es un URL válido</p>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="idMateria" name="idMateria" ng-model="archivo.idMateria">
                
                <!-- Btn Agregar -->
                <input type="submit" class="btn" value="Agregar" ng-show="isAdding" ng-disabled="formArchivo.$invalid || ( !formArchivo.$invalid && !archivoParaSubir_O_LinkNoVacio())">
                <!-- Btn Modificar -->
                <input type="submit" class="btn" value="Modificar" ng-show="!isAdding" ng-disabled="formArchivo.$invalid || ( !formArchivo.$invalid && !archivoParaSubir_O_LinkNoVacio())">
            </form>
        </div>
    </main>
    
    <script>
        $('select').material_select();
    </script>

    <style>       
        .selects{
            padding: 0 !important;
        }
    
        .advertencia{
            margin: 0;
            font-size: 12px;
            color: #EA2E49;
        }
        .btn-agregar{
            margin-top: 20px;
            margin-left: 20px;
        }
        .elementos{
            margin: 0 !important;
        }
    </style>