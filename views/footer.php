   <!-- Footer Start -->
   <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">ALWAYS</span> SPORTING</h1>
                    </a>
                    <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Las Achiras, Villa Celina, Provincia de Buenos Aires</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+011 39341477</p>
                    <p><i class="fa fa-envelope mr-2"></i>sebastianpardo583@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Enlaces Rapidos</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                                <a class="text-white-50 mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Tienda</a>
                                <a class="text-white-50 mb-2" href="add_notice.php"><i class="fa fa-angle-right mr-2"></i>Noticias</a>
                                <a class="text-white-50 mb-2" href="about_us.php"><i class="fa fa-angle-right mr-2"></i>Sobre Nosotros</a>
                                <a class="text-white-50" href="mailto:sebastianpardo583@gmail.com"><i class="fa fa-angle-right mr-2"></i>Contactenos</a>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Boletin Informativos</h5>
                            <div class="w-100">
                                <div class="input-group">
                                <?php
                if (isset($_SESSION['usuario'])) {
                }else{?>
                                <a href="register.php" class="btn" style="background-color:rgb(0 192 255);" onMouseover="this.style.color='black'" onMouseout="this.style.color='White'">Crear Cuenta</a>
                                    <?php }?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">Only Sport</a>. Drechos Reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0 text-white">Diseñado por <a href="https://htmlcodex.com"> "Los diseñadores" XD</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>