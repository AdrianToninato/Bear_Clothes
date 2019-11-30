<!doctype html>
<html lang="pt-BR">

<!-- Comentário teste -->

<head>
    <?php include_once "./php/includes/head.php" ?>
</head>

<body>
    <!-- Nav Bar -->
    <?php include_once "./php/includes/navbar.php" ?>
    <div id="preto"></div>

    <!-- CONTACT SECTION -->
    <section id="contact" class="parallax-section my-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title mb-5">
                        <h2 class="display-4">Fale Conosco</h2>
                    </div>
                </div>

                <div class="col-md-7 col-sm-10">
                <div class="section-title">
                            <h2 class="col-10 p-0">Envie Sua Mensagem</h2>
                            <p  class="col-10 p-0">Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur
                                adipisicing lacinia tortor morbi ultricies.</p>
                        </div>
                    <!-- CONTACT FORM HERE -->
                    <div class="">
                        <form id="contact-form" action="#" method="get">
                            <div class="col-10 p-0 mb-2">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-10 p-0 mb-2">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-10 p-0 mb-2">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"
                                    required=""></textarea>
                            </div>
                            <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                <button id="submit" type="submit" class="form-control" name="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                        <div class="section-title">
                            <h2>Conheça Nossa Loja</h2>
                            <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur
                                adipisicing lacinia tortor morbi ultricies.</p>
                        </div>

                        <p><i class="fa fa-map-marker"></i>Av. Paulista 2596, São Paulo, Brasil</p>
                        <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">contato@bearclothes.com</a></p>
                        <p><i class="fa fa-phone"></i>(11) 9 8765 - 4321</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include_once "./php/includes/footer.php" ?>

    <!-- JS BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>