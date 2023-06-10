<div class="container-fluid mt-5 py-5 px-sm-3 mt-5 px-md-5 text-white bg-secondary" id="contatos">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="mb-4 cor_dourado_site font-weight-bold">Contatos</h4>

            <div class="justify-content-start mt-4 d-flex">
                <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://api.whatsapp.com/send?phone=+5541998656175&text=Olá,%20preciso%20de%20mais%20informações%20sobre%20a%20sua%20consultoria%20!!!"><i class="fab fa-whatsapp"></i></a></p>
                <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.instagram.com/progfit.co/"><i class="fab fa-instagram"></i></a></p>
                <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="mailto:ef.gustavoferrarini@gmail.com?subject=Consultoria de treinos&body=Olá, eu gostaria de mais informações sobre a sua consultoria e treinos, aguardo retorno!!!!"><i class="fa fa-envelope"></i></a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="mb-4 cor_dourado_site font-weight-bold">Horários de atendimento</h4>
            <h5 class="text-white">Segunda - Sexta-feira</h5>
            <p>08:00 - 20:00</p>
            <h5 class="text-white">Sábados - Domingos</h5>
            <p>14:00 - 20:00</p>
        </div>
        <div class="col-lg-6 col-md-6 mb-5">
            <div class="col-12 col-md-" style="justify-content: center;display: flex;">
                <div class="card background_cards" style="width: 25rem;height: 25rem;">
                    <div class="card-body d-flex justify-content-center align-items-center" style="">
                        <img src="img/logo_body-removebg_amarelo.png"  alt="..." style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container border-top border-dark pt-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-bold" href="https://www.linkedin.com/company/prog-fit/">PROG.FIT</a>. Todos os direitos reservados. Designed by &copy; <a class="text-white font-weight-bold" href="https://www.linkedin.com/company/prog-fit/">Alexandre Osovski</a>
            <a class="text-white font-weight-bold" href=""></a>
        </p>
    </div>
</div>
<a href="#" class="btn btn-outline-primary botao_ir_para_topo" ><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    (function ($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.botao_ir_para_topo').fadeIn('slow');
        } else {
            $('.botao_ir_para_topo').fadeOut('slow');
        }
    });
    $('.botao_ir_para_topo').click(function () {
        $('html, body').animate({scrollTop: 0}, 2000, 'easeInOutExpo');
        return false;
    });
})(jQuery);
</script>



