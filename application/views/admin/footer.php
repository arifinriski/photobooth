
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url();?>assets/admin/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="<?=base_url();?>assets/admin/DataTables/datatables.min.js"></script>
  <script>
  	function onClickImage(id){
  var valueImage = document.getElementById('imageresource'+id).getAttribute('src');
  document.getElementById('myImage').setAttribute("src",valueImage);
  $('#myModal').modal('show');
}
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>

  </body>

</html>