"use strict";
$(document).ready(function () {});

function enviarFormulario(id) {
  //alert("Se hizo clic en el div con ID: " + id);
  $("#divIdInput").val(id);
  $("#myForm").submit();
}
