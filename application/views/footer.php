

</div>
</div>
<!-- /#page-content-wrapper -->

</div>

<style type="text/css">
  @media screen and (max-width: 600px) {
    .col {
      width: 100%;
    }
  }
</style>
<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>

<script src="<?php echo base_url("assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js") ?>" type="text/javascript"></script>
</body>

</html>
