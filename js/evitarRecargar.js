//Valida que no se reenvie el formulario
if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
}

