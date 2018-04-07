app.factory('customService', ['$http','$rootScope','$location', function($http,$rootScope,$location) {
  
  //Guardo en el $rootScope el id de la casa de comida
  $rootScope.casaDeComidas = angular.copy(CASADECOMIDAID);

  //Elimino la etiqueta script visible facilmente al usuario
  $('#relevantData').remove();

  return {

    /*
      Tickets = Obtiene los tickets con sus respectivas lineas y sus conceptos aplicados
      code    = 200 | 0 
    */
    getTickets: function(ids=null,finalizado=null){
      let urlGetTickets='Tickets/getTickets';
      urlGetTickets+=(ids===null)?'':(finalizado===null)?'/'+ids:'/'+ids+'/'+finalizado;
      return  $http.get(urlGetTickets, { responseType: 'json' }); 
    },

    /*
      Establece como pago el ticketID y cierra la sesion de mesaID
      code    = 200 | 0 | 500
    */
    payTicket: function(ticketID, mesaID){
      let urlPagarTicketCerrarMesa='Tickets/pagar/'+ticketID+'/'+mesaID;
      return  $http.get(urlPagarTicketCerrarMesa, { responseType: 'json' }); 
    },

    /*
      Habilitar las mesasIDs
      code = 200 | 0 | 500
    */
    enableMesas: function(mesasIDs){
      let urlMesasIDs='Mesas/setHabilitad/'+mesasIDs+'/1';
      return  $http.get(urlMesasIDs, { responseType: 'json' }); 
    },

    /*
      Deshabilitar las mesasIDs
      code = 200 | 0 | 500
    */
    disableMesas: function(mesasIDs,estado=1){
      let urlMesasIDs='Mesas/setHabilitad/'+mesasIDs+'/0';
      return  $http.get(urlMesasIDs, { responseType: 'json' }); 
    },

    /*
      Obtiene las mesas con estado "state" o todas en caso de no recibir parametros
      code = 200 | 0
    */
    getMesasPorEstado: function(state=null){
      let urlGetMesasPorEstado = 'Mesas/getMesasPorEstado';
      let casaDeComidas = $rootScope.casaDeComidas;
      urlGetMesasPorEstado += (state === null) ? '' : '/' + state;
      return $http.post(urlGetMesasPorEstado, {'casaDeComidas': casaDeComidas }, { responseType: 'json' }); 
    },
    
    /*
      Habilita o deshabilita una mesa.
    */
    setMesaHabilitada: function (mesaID, habilitar) {
      const path = `Mesas/setHabilitada/${mesaID}/${habilitar}`;
      return $http.post(path, { 'casaDeComidas': $rootScope.casaDeComidas }, { responseType: 'json' }); 
    },

    /*
      Obtener una mesa existente por su ID.
    */
    getMesa: id => $http.get(`Mesas/get/${id}`, { responseType: 'json' }),

    /*
      Agregar una nueva mesa.
    */
    addMesa: mesa => {
      const payload = {
        'numero': mesa.numero,
        'habilitada': mesa.habilitada ? 1 : 0,
        'casaDeComidas': $rootScope.casaDeComidas
      }

      return $http.post('Mesas/add', payload, { responseType: 'json' }); 
    },

    /*
      Actualizar una mesa existente.
    */
    updateMesa: mesa => {
      const payload = {
        'id': mesa.id,
        'numero': mesa.numero,
        'habilitada': mesa.habilitada ? 1 : 0
      }

      return $http.put('Mesas/update', payload, { responseType: 'json' }); 
    },

    /*
      Cierra la sesion de las mesasIDs
      code = 200 | 500
    */
    closeMesas: function(mesasIDs){
      let urlCerrarMesas='Mesas/closeMesas/'+mesasIDs;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlCerrarMesas,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Ciera la mesa y el ticket, dandolo por finalizado.
      code = 200 | 0 | 500
    */
    closeMesaAndTicket: function(mesaID, ticketID){
      let urlTicketCerrar='Tickets/payTicket/'+ticketID+'/'+mesaID;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlTicketCerrar,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Obtiene el ticket actual (y que este abierto) en dicha mesa
      code = 200 | 0 | 500
    */
    openTicketOfMesa: function(mesaID){
      let urlTicketAbiertoDeLaMesa='Mesas/getTicketSesionActual/'+mesaID;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlTicketAbiertoDeLaMesa,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Establece como atendidas las notificacionesIDs
      code = 200 | 500
    */
    atendNotificaciones: function(notificacionesIDs){
      let urlAtenderNotificaciones='Notificaciones/atendNotificaciones/'+notificacionesIDs;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlAtenderNotificaciones,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Obtiene las notificaiones del tipo "tipo" con el estado "atendida" 
      code = 200 | 0
    */
    getNotificaciones: function(tipo='todas', atendida=null){
      let urlGetNotificaciones='Notificaciones/getNotificaciones/'+tipo;
      urlGetNotificaciones+=(atendida===null)?'':'/'+atendida;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlGetNotificaciones,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    removeElementoMenu: function(ids, valor=1){
      let urlSetComidaEliminada='Comidas/setEliminada/'+ids+'/'+valor;
      return  $http.post(urlSetComidaEliminada,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    enableElementoMenu: function(ids){
      let urlSetComidaDisponible='Comidas/setDisponible/'+ids+'/1';
      return  $http.post(urlSetComidaDisponible, { responseType: 'json' }); 
    },

    disableElementoMenu: function(ids){
      let urlSetComidaDisponible='Comidas/setDisponible/'+ids+'/0';
      return  $http.post(urlSetComidaDisponible, { responseType: 'json' }); 
    },

    /*
      Obtiene los elementops del menu con sus respectivos conceptos
      code = 200 | 0
    */
    getElementoMenu: function(catID=''){
      let urlGetComidas='Comidas/getElementoMenu/'+catID;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlGetComidas,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Obtiene los conceptos del tipo "tipoIDs"
      code = 200 | 0
    */
    getConceptos: function(tipoIDs=''){
      let urlGetConceptos='Conceptos/getConceptos/'+tipoIDs;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlGetConceptos,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },

    /*
      Obtiene los conceptos del tipo "tipoIDs"
      code = 200 | 0
    */
    getLinesByTicketsID: function(tipoIDs){
      let urlGetConceptos='Tickets/obtenerLineas/'+tipoIDs;
      let casaDeComidas=$rootScope.casaDeComidas;
      return  $http.post(urlGetConceptos,{'casaDeComidas':casaDeComidas,}, { responseType: 'json' }); 
    },
  }
}]);
