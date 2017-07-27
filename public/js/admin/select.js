$('#kursus_list').on('change', function(e) {

  console.log(e);
  var id = e.target.value;

  $.get('{{ url('kursus') }}/kursus_id?id=' +id, function(data) {
    console.log(data);
      $('#biaya').empty();
      $.each(data, function(index,subCatObj){
      $('#biaya').append(''+subCatObj.name+'');
    });
  });

});


/*
$(document).ready(function() {
  $('#kursus_list').on('change', function(e) {
    var id = e.target.value;

    $.get('{{ url('kursus') }}/'+id, function(data) {
      console.log(id);
      console.log(data);
      $('#biaya').empty();

      $.each(data, function(index, element) {
        $('#biaya').append(''+element.biaya+'');
      });
    });
  });
});
*/
