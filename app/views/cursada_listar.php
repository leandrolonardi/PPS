<main class="listar-container" ng-init="getCursadas(idAlumno)">
        <a href="#/alumnos-listar" class="btn btn-volver">Volver</a>
        <a href="#/cursadas-agregar/{{idAlumno}}" class="btn btn-agregar">Agregar cursada</a>
        <h3> <strong>Cursadas</strong> de <strong> {{alumno.first_name}} {{alumno.last_name}}</strong> </h3>
        <div class="nav-wrapper">
            <form>
                <div class="row">
                  <div class="input-field col s8 m4">
                    <input id="search" type="search" required ng-model="buscar">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                  </div>
                </div>
            </form>
          </div>
    
          <table>
            <thead>
              <tr>
                  <th>
                    <a ng-click="revertirOrden(); sortType = 'anio'">
                      Año
                      <span ng-show="sortType == 'anio' && sortReverse == true" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_up</i></span>
                      <span ng-show="sortType == 'anio' && sortReverse == false" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_down</i></span>
                    </a>
                  </th>
                  <th>
                    <a ng-click="revertirOrden(); sortType = 'cuatrimestre'">
                      Cuatrimestre
                      <span ng-show="sortType == 'cuatrimestre' && sortReverse == true" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_up</i></span>
                      <span ng-show="sortType == 'cuatrimestre' && sortReverse == false" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_down</i></span>
                    </a>
                  </th>
                  <th>
                    <a ng-click="revertirOrden(); sortType = 'nombreMateria'">
                      Materia
                      <span ng-show="sortType == 'nombreMateria' && sortReverse == true" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_up</i></span>
                      <span ng-show="sortType == 'nombreMateria' && sortReverse == false" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_down</i></span>
                    </a>  
                  </th>
                  <th>
                    <a ng-click="revertirOrden(); sortType = 'estado'">
                      Estado
                      <span ng-show="sortType == 'estado' && sortReverse == true" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_up</i></span>
                      <span ng-show="sortType == 'estado' && sortReverse == false" class="fa fa-caret-down"><i class="tiny material-icons">arrow_drop_down</i></span>
                    </a>  
                  </th>
                  <th>Opciones</th>
              </tr>
            </thead>
    
            <tbody>
              <tr ng-repeat="cursada in items | orderBy:sortType:sortReverse | filter:buscar | startFrom:currentPage*pageSize | limitTo:pageSize">
                <td>{{cursada.comision.anio}}</td>
                <td>{{cursada.comision.cuatrimestre}}</td>
                <td>{{cursada.comision.materia.nombre}}</td>
                <td>{{cursada.estado}}</td>
                <td>
                    <a title="Ver Examenes" href="#/examenes-listar/{{cursada.id}}"><i class="listar-iconos material-icons">find_in_page</i></a><a title="Editar" href="#/cursadas-modificar/{{cursada.id}}"><i class="listar-iconos material-icons">edit</i></a>
                    <a title="Eliminar"  style="cursor: pointer;" ng-click="eliminarCursada(cursada.id)"  ><i class="listar-iconos material-icons">delete</i></a>

                </td>
              </tr>
            </tbody>
          </table>

        <div class="text-center menuPaginacion">     
          <ul class="pagination">
              <li ng-class="{disabled:currentPage == 0}">
                <a class="botones" ng-click="currentPage=0" ng-disabled="currentPage == 0">Primero</a>
              </li>
              <li ng-class="{disabled:currentPage == 0}">
                  <a class="botones" ng-click="currentPage=currentPage-1" ng-disabled="currentPage == 0">Anterior</a>
              </li>
              <li class="indicePaginacion">{{currentPage+1}}/{{numberOfPages()}} </li>     
              <li ng-repeat="num in numberOfPages()"></li>      
              <li ng-class="{disabled:currentPage >= numberOfPages()-1}">
                  <a class="botones" ng-click="currentPage=currentPage+1" ng-disabled="currentPage >= numberOfPages()-1">Siguiente</a> <!-- getData().length/pageSize - 1 -->
              </li>
              <li ng-class="{disabled:currentPage >= numberOfPages()-1}">
                  <a class="botones" ng-click="currentPage=numberOfPages()-1" ng-disabled="currentPage >= numberOfPages()-1">Último</a> <!-- getData().length/pageSize - 1 -->
              </li>
          </ul>
        </div>      
    </main>
    
    <style>
        .listar-container{
          margin: 0 auto;
          width: 80% !important;
        }
        .elemento-lista{
          display: flex;
          justify-content: space-between;
        }
        .listar-iconos{
          margin-top: 10px;
          padding: 5px;
        }
        .btn-agregar{
          margin-top: 20px;
          margin-left: 20px;
        }
        .btn-volver{
          margin-top: 20px;
        }
        .botones{
          cursor: pointer;
        }

        .botones:hover{
          background: #333333;
          color: white;
        }

        .pagination li.active a{
          background: #26A69A;
        }

        .menuPaginacion{
          text-align: center;
        }
        @media screen and (max-width:800px){
          .listar-container{
            width:100% !important;
          }
        }
      </style>