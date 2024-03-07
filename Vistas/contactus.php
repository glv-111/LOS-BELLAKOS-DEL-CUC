<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/contactus.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../assets/1_paraSBZhpdhSnhXX5HDJOg.png" width="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>

      <main>
         <div id = "alert" class="alert alert-default" role="alert">
            
         </div>
        <div class="container">
            <form id = "frmContacto">
               <input type="hidden" name="hddIdComentario" id="hddIdComentario">
                <div class="form-group">
                    <label for="txtNombre">Nombre completo</label>
                    <input id="txtNombre" name="txtNombre" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="txtCorreo">Correo Electronico</label>
                    <input id="txtCorreo" name="txtCorreo" class="form-control" type="email">
                </div>        
                <div class="form-group">
                    <label for="txtTelefono">Telefono</label>
                    <input id="txtTelefono" name="txtTelefono" class="form-control" type="tel">
                </div>
                <div class="form-group">
                    <label for="txtComentarios">Comentarios</label>
                     <textarea id="txtComentarios" name="txtComentarios" class="form-control" type="text"> </textarea>
                </div>
                <button type="button" id="btnInsertar" class="btn btn-primary">Enviar Comentarios</button>
                <button type="button" id="btnActualizar" class="btn btn-success">Actualizar Comentarios</button>
                <button type="button" class="btn btn-danger">Regresar</button>
            </form>

            <table class="table table-striped">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Correo</th>
                   <th scope="col">Telefono</th>
                   <th scope="col">Comentario</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody id="tblComentarios">

                 
               </tbody>
             </table>

        </div>
      </main>

      <footer id="dk-footer" class="dk-footer">
        <div class="container">
              <div class="row">
                 <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                          <a href="index.html" class="footer-logo">
                             <img src="../assets/1_paraSBZhpdhSnhXX5HDJOg.png"  alt="footer_logo" width="160" class="img-fluid">
                          </a>
                          <p class="footer-info-text">
                             Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                          </p>
                          <div class="footer-social-link">
                             <h3>Follow us</h3>
                             <ul>
                                <li>
                                      <a href="https://www.facebook.com/profile.php?id=100050570745785&mibextid=ZbWKwL">
                                         <i class="fa fa-facebook"></i>
                                      </a>
                                </li>
                                <li>
                                      <a href="#">
                                         <i class="fa fa-twitter"></i>
                                      </a>
                                </li>
                                <li>
                                      <a href="#">
                                         <i class="fa fa-google-plus"></i>
                                      </a>
                                </li>
                                <li>
                                      <a href="#">
                                         <i class="fa fa-linkedin"></i>
                                      </a>
                                </li>
                                <li>
                                      <a href="https://www.instagram.com/mtya.111?igsh=eXBleXRrbWk3eXVy">
                                         <i class="fa fa-instagram"></i>
                                      </a>
                                </li>
                             </ul>
                          </div>
                          <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                          <img src="images/icon/best.png" alt="">
                          <p>Best Design Company 2019</p>
                    </div>
                 </div>
                 <!-- End Col -->
                 <div class="col-md-12 col-lg-8">
                    <div class="row">
                          <div class="col-md-6">
                             <div class="contact-us">
                                <div class="contact-icon">
                                      <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                      <h3>Jaipur India</h3>
                                      <p>5353 Road Avenue</p>
                                </div>
                                <!-- End Contact Info -->
                             </div>
                             <!-- End Contact Us -->
                          </div>
                          <!-- End Col -->
                          <div class="col-md-6">
                             <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                      <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                      <h3>95 711 9 5353</h3>
                                      <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                             </div>
                             <!-- End Contact Us -->
                          </div>
                          <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                          <div class="col-md-12 col-lg-6">
                             <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                      <h3>Useful Links</h3>
                                      <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                      <li>
                                         <a href="#">About us</a>
                                      </li>
                                      <li>
                                         <a href="#">Services</a>
                                      </li>
                                      <li>
                                         <a href="#">Projects</a>
                                      </li>
                                      <li>
                                         <a href="#">Our Team</a>
                                      </li>
                                </ul>
                                <ul>
                                      <li>
                                         <a href="#">Contact us</a>
                                      </li>
                                      <li>
                                         <a href="#">Blog</a>
                                      </li>
                                      <li>
                                         <a href="#">Testimonials</a>
                                      </li>
                                      <li>
                                         <a href="#">Faq</a>
                                      </li>
                                </ul>
                             </div>
                             <!-- End Footer Widget -->
                          </div>
                          <!-- End col -->
                          <div class="col-md-12 col-lg-6">
                             <div class="footer-widget">
                                <div class="section-heading">
                                      <h3>Subscribe</h3>
                                      <span class="animate-border border-black"></span>
                                </div>
                                <p><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                                <form action="#">
                                      <div class="form-row">
                                         <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                  <i class="fa fa-send"></i>
                                            </button>
                                         </div>
                                      </div>
                                </form>
                                <!-- End form -->
                             </div>
                             <!-- End footer widget -->
                          </div>
                          <!-- End Col -->
                    </div>
                    <!-- End Row -->
                 </div>
                 <!-- End Col -->
              </div>
              <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-6">
                          <span>Copyright © 2019, All Right Reserved Seobin</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                          <div class="copyright-menu">
                             <ul>
                                <li>
                                      <a href="#">Home</a>
                                </li>
                                <li>
                                      <a href="#">Terms</a>
                                </li>
                                <li>
                                      <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                      <a href="#">Contact</a>
                                </li>
                             </ul>
                          </div>
                    </div>
                    <!-- End col -->
                 </div>
                 <!-- End Row -->
              </div>
              <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
              <button class="btn btn-dark" title="Back to Top" style="display: block;">
                 <i class="fa fa-angle-up"></i>
              </button>
        </div>
        <!-- End Back to top -->
     </footer>

</body>
</html>

<script>
   //document.getElementById('txtNombre').value = "Hola tilin";
   function actualizar( idcomentario, nombre, correo, telefono, comentario){
      //JS
      /*document.geElementById("txtNombre").value = nombre;
      document.geElementById("txtCorreo").value = email;
      document.geElementById("txtTelefono").value = telefono;
      document.geElementById("txtComentario").value = comentarios;*/
      

      //JQuery
      $('#btnActualizar').show();
      $('#btnInsertar').hide();
      $('#hddIdComentario').prop("value",idcomentario);
      $('#txtNombre').prop("value",nombre);
      $('#txtCorreo').prop("value",correo);
      $('#txtTelefono').prop("value",telefono);
      $('#txtComentarios').prop("value",comentario);


   }

   function eliminar(idComentario){    
       if(confirm("Deseas eliminar el comentario seleccionado?")){
          $.ajax({
             type: "POST",
             data: {"idComentario" : idComentario},
             url: "../controlador/clientesController.php?opc=3",
             success: function(data){
                $('#alert').show();
                $('#alert').text(data);
                if( data == "Borrado correctamente" ){
                   $('#alert').addClass("alert-success");
                   getComments();
               } else{
                   $('#alert').addClass("alert-danger");
               }
            }
         });
      }
   }

   function getComments(){
      $.ajax({
               type: "POST",
               url: "../controlador/clientesController.php?opc=4",
               success: function(data){
                  $("#tblComentarios").html(data);
               }
            });
   }

   $(document).ready(function(){
      $('#btnActualizar').hide();
      $('#alert').hide();

      getComments();

      $('#btnInsertar').click(
         function(){
            var formData = $('#frmContacto').serialize();
            $.ajax({
               type: "POST",
               data: formData,
               url: "../controlador/clientesController.php?opc=1",
               success: function(data){
                  $('#alert').show();
                     $('#alert').text(data);
                  if( data == "Registro insertado" ){
                     $('#alert').addClass("alert-success");
                     getComments();
                  } else{
                     $('#alert').addClass("alert-danger");
                  }
               }
            });
         }
      );

      $('#btnActualizar').click(
         function(){
            var formData = $('#frmContacto').serialize();
            $.ajax({
               type: "POST",
               data: formData,
               url: "../controlador/clientesController.php?opc=2",
               success: function(data){
                  $('#alert').show();
                     $('#alert').text(data);
                  if( data == "Se actualizo correctamente el registro" ){
                     $('#alert').addClass("alert-success");
                     getComments();
                  } else{
                     $('#alert').addClass("alert-danger");
                  }
               }
            });
         }
      );
   });
</script>