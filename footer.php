</article><!--end of main div-->
    <div id="footer" class="nav navbar-bottom navbar-inverse">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-sm-4" id="copyright">
            <h6>Copyright &copy; 2016, 3blocks</h6>
            
            </div>
            <div class="col-lg-4" id="Map">
           <div id="modalcontainer">
                <!--button triger-->   
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Locate Us</button>
                <!--modal-->
          <div class="modal fade" id="myModal">
                <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4>We Are Here</h4>
                  </div>   
                  <div class="modal-body">
                  <div id="googleMap" style="width:500px;height:380px;"></div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                  </div>
                    </div>
              </div>
              </div>
            </div>
                </div>
            <div class="col-lg-4 col-sm-4" id="social">
                <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
            
            </div>
        
        </div>
        
        </div>
    
    </div>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>

<script>
    
    if(location.href=="http://localhost/templates/index.php")
        {
            $('#logo').addClass('animated bounceInDown');
            
        }

</script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>