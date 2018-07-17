$.getJSON(url+"mx_search/estado", function( data ) {
  $.each( data, function( key, val ) {
    $("#estado").append('<option value="' + val.idEstado.toString() + '">' + val.estado.toString() + '</option>');
  });
}); 


$('#estado').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
  var $fieldSelect = $('#municipio');

  clearSelect($fieldSelect);

  $.getJSON(url+"mx_search/municipio/"+$(this).val(), function( data ) {
    $.each( data, function( key, val ) {
      $fieldSelect.append('<option value="' + val.idMunicipio.toString() + '">' + val.municipio.toString() + '</option>');
    });

    renderSelect($fieldSelect);
  });
  
});

$('#municipio').on('hidden.bs.select', function (e, clickedIndex, isSelected, previousValue) {
  var $fieldSelect = $('#ciudad');

  clearSelect($fieldSelect);

  $.getJSON(url+"mx_search/ciudad/"+$("#estado").val()+"/"+$(this).val(), function( data ) {
    $.each( data, function( key, val ) {
      $fieldSelect.append('<option value="' + val.ciudad.toString() + '">' + val.ciudad.toString() + '</option>');
    });

    renderSelect($fieldSelect);
  });
});


$('#ciudad').on('hidden.bs.select', function (e, clickedIndex, isSelected, previousValue) {
  var $fieldSelect = $('#colonia');
 
  clearSelect($fieldSelect);

  $.getJSON(url+"mx_search/colonia/"+$("#estado").val()+"/"+$("#municipio").val()+"/"+encodeURI($(this).val()), function( data ) {
    $.each( data, function( key, val ) {
      $fieldSelect.append('<option value="' + val.cp + '" data-cp="' + val.cp + '">' + val.asentamiento.toString() + '</option>');
    });
    renderSelect($fieldSelect);
  });
});

$('#colonia').on('hidden.bs.select', function (e, clickedIndex, isSelected, previousValue) {
  var $fieldSelect =  $(this).val();
  $("#cp").empty().val($fieldSelect);
 
});


$('#btn-cp').on('click', function (e) {

  var $fieldSelect =  $("#cp").val();

  $("#cp").empty().val($fieldSelect);

  clearSelect("all");

  $.getJSON(url+"mx_search/data_by_cp/"+ $fieldSelect, function( data ) {
    $.each( data, function( key, val ) {
      $('#estado').val(val.idEstado).change();
      setTimeout(function(){ $('#municipio').val(val.idMunicipio).change(); }, 500);
      setTimeout(function(){ $('#ciudad').val(val.ciudad).change(); }, 3000);
      
    });

    renderSelect("all");
  });
  
});

function clearSelect($fieldSelect){
  if($fieldSelect == 'all'){
      $('#municipio').empty().hide();
      $('#ciudad').empty().hide();
      $('#colonia').empty().hide();
  }else{
    $fieldSelect.empty().hide();
  }  
}

function renderSelect($fieldSelect){
  if($fieldSelect == 'all'){
    $fieldSelect = $('.multiSelect');
  }
  setTimeout(function(){
    $fieldSelect.selectpicker({
      style: 'btn-flat  btn-default',
      size: 10
    });
    $fieldSelect.selectpicker('render');
    $fieldSelect.selectpicker('refresh');
  }, 300);
}