<!-- Footer -->
<footer class="content-footer footer bg-footer-theme ">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , Made With By
        <a href="https://www.facebook.com/lyhong.ben" target="_blank" class="footer-link fw-medium">PAC</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="" class="footer-link me-4" target="_blank">License</a>
        <a href="" target="_blank" class="footer-link me-4">More Themes</a>

        <a
          href=""
          target="_blank"
          class="footer-link me-4"
          >Documentation</a
        >

        <a
          href=""
          target="_blank"
          class="footer-link"
          >Support</a
        >
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#search-table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  <!-- / Footer -->
