$(document).ready(function() {

    $('.btn-login').click(function(e) {
      e.preventDefault();
      var data= $('#data').val();
      console.info(data);
      window.location="index.php?user="+data;
    });

    $('#refresh').click(function(e) {
      e.preventDefault();
      location.reload();
    });
});
