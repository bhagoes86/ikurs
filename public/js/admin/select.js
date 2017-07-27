$('#kursus_list').on('change', function(e) {

  console.log(e);
  
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
