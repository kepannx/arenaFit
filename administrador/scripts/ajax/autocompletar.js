

function loadDataClientes()
{
var ajax = new sack();
	var currentClientID=false;
	function getClientData()
	{
		var clientId = document.getElementById('identificacion').value.replace(/[^0-9]/g,'');
		if(clientId.length>4 && clientId!=currentClientID){
			currentClientID = clientId
			ajax.requestFile = 'ajax/datosCliente.php?getClientId='+clientId;	// Specifying which file to get
			ajax.onCompletion = showClientData;	// Specify function that will be executed after file has been found
			ajax.runAJAX();		// Execute AJAX function			
		}
		
	}
	
	function showClientData()
	{
		var formObj = document.forms['clientForm'];	
		eval(ajax.response);
	}
	
	
	function initFormEvents()
	{
		document.getElementById('identificacion').onblur = getClientData;
		document.getElementById('identificacion').focus();
	}
	
	
	window.onload = initFormEvents;


}

function loadDataVehiculos()
{
var ajax = new sack();
  var currentVehiculoID=false;
  function getVehiculoData()
  {
    var vehiculoId = document.getElementById('placa').value.replace(/[^0-9]/g,'');
    if(vehiculoId.length>4 && vehiculoId!=currentVehiculoID){
      currentVehiculoID = vehiculoId
      ajax.requestFile = 'ajax/datosVehiculo.php?getVehiculoId='+clientId;  // Specifying which file to get
      ajax.onCompletion = showVehiculoData; // Specify function that will be executed after file has been found
      ajax.runAJAX();   // Execute AJAX function      
    }
    
  }
  
  function showVehiculoData()
  {
    var formObj = document.forms['clientForm']; 
    eval(ajax.response);
  }
  
  
  function initFormEvents()
  {
    document.getElementById('placa').onblur = getVehiculoData;
    document.getElementById('placa').focus();
  }
  
  
  window.onload = initFormEvents;
}




