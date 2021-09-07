function getdetails(){
  const date = $('#date').val();
  const summ = $('#summ').val();
  const years = $('#years').val();
  const radio = $('#radio').val();
  const summadd = $('#summadd').val();
  $.ajax({
      url: 'calc.php',
      method: 'post',
      dataType: 'html',
      data: {
      "date": date,
      "summ": summ,
      "years": years,
      "radio": radio,
      "summadd": summadd
    },
      success: function (result)
      {
          $("#msg").html(result);
      }
})
$('form').submit(function () {
  return false;
});}

$( function() {
  $( "#datepicker" ).datepicker();
} );


