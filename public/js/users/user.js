$('input[name="birthday"]').daterangepicker({
  singleDatePicker: true,
  autoUpdateInput: false,
  showDropdowns: true,
  locale: {
      format: 'YYYY-MM-DD'
  }
});
$('input[name="birthday"]').on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD'));
});

$('input[name="birthday"]').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});
var loadFile = function(event) {
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById('output');
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
};
function hideImage() {
  $('#output').attr('src', '');
}
