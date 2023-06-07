<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.header')

<body>

    @include('includes.navbar_site')

    <div class="container-fluid p-0">
        <div class="">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: rgba(0, 0, 0, 0.3);">
                    <img class="w-100" src="img/fundo_site.svg" alt="Image">
                    <div class="meudeus" style="position: absolute;z-index: 10000;top: 30%;left: 15%;right: 0;bottom: 0;">
                    <div class="teste" >
                        <h4 class="text-white m-0">Bem vindo a PROG.FIT</h4>
                        <h5 class=" m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">A progressão que você sempre buscoui</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-12 d-flex">
                <div class="col-3">
                    <div class="card p-3 text-center d-flex flex-column align-items-end justify-content-center bg-secondary text-right text-white " style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        
                        <h3 class=" mb-3 text-white font-weight-bold">Por que escolher a PROG.FIT?</h3>
                        <p>
                        Temos o objetivo de fazer com que você esteja sempre evoluindo nos seus treinos e na sua saúde, independente do lugar, hora, ou clima.
                        </p>
                    </div>
                </div>
                <div class="col-3 mt-3">
                    <div class="card p-3 text-center d-flex flex-column align-items-start justify-content-center " style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <img src="img/pencil.svg">
                        <h3 class=" mb-3">Personalização</h3>
                        <p class="text-dark">
                        Programas personalizados que se adaptam às suas necessidades
                        </p>
                        
                    </div>
                </div>
                <div class="col-3 mt-5 mt-3">
                    <div class="card p-3 text-center d-flex flex-column align-items-start justify-content-center" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        
                        <h3 class=" mb-3">Acompanhamento</h3>
                        <p class="text-dark">
                        Monitoramos seu progresso e ajustamos seu programa sempre que necessário
                        </p>
                        
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="card p-3 text-center d-flex flex-column align-items-start justify-content-center" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" >
                        
                        <h3 class=" mb-3 mt-3">Flexibilidade</h3>
                        <p class="text-dark">
                        Sempre pensando na sua rotina, no seu ritmo e no seu ambiente de treino
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid imagem_como_e_treino my-5 mt-5" style="
    background-color: #2596be;box-shadow: rgba(0, 0, 0, 0.8) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
        <div class="row ">
            <div class="col-lg-5  p-0" >
                <div class="element" style="height: 423px;overflow-y: scroll;border-radius: 16px; margin-bottom: 2vw;">
                    <div class="col-12 pdf_treino text-center" style="padding: -13px;">
                        <div style="border-radius: 16px;">
                            <img class="imagem_treino" src="img/ficha_treino_modelo.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 p-5">
                <div class="sobre_treino col-12">
                    <h1 class="mb-5 display-4 text-white">Seu treino é entregue de forma clara e simples de entender</h1>
                    <p class="text-white"> <i class="fa fa-check" aria-hidden="true"></i> Ficha de treino planejada para melhor visualização durante seu treino</p>
                    <p class="text-white"> <i class="fa fa-check" aria-hidden="true"></i> Sempre que necessário, adaptações serão realizadas</p>
                    <p class="text-white"> <i class="fa fa-check" aria-hidden="true"></i> Consultas por videoconferência para planejamento do novo treino todos os meses</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid my-5 mt-5 mb-5" style="box-shadow: rgba(0, 0, 0, 0.8) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; background-color: #2596be;">
        <div class="p-2 ">
            <h1 class="mb-5 display-4 mt-5 text-white">Saiba como a <br> consultoria funciona</h1>
            <div class="row mb-5 p-0" style="box-shadow: rgba(0, 0, 0, 0.8) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 8px;">
                <div class="col-lg-4 p-0" >
                    <div class="d-flex align-items-center text-white px-5" style="  min-height: 300px; background-color: #0b1a45; border-radius: 8px 0px 0px 8px;">
                        <div class="">
                            <h2 class="text-dark text-center" style="border: 1px solid;border-radius: 20px;width: 42px; background-color: #00c5cd;">01</h2>
                            <p>É realizada uma consulta inicial, onde o planejamento do programa de treinamento é definido e é feita uma anamnese, avaliação postural e explicação do planejamento</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="d-flex align-items-center text-white px-5" style=" min-height: 300px; background-color: #071332;">
                        <div>
                            <h2 class="text-dark text-center" style="border: 1px solid;border-radius: 20px;width: 42px; background-color: #00c5cd;">02</h2>
                            <p>O programa de treinamento é feito com total embasamento científico e enviado ao cliente de forma simples e direta, para melhor entendimento;</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="d-flex align-items-center text-white px-5" style=" min-height: 300px; background-color: #0b1a45; border-radius: 0px 8px 8px 0px;">
                        <div>
                            <h2 class="text-dark text-center" style="border: 1px solid;border-radius: 20px;width: 42px; background-color: #00c5cd;">03</h2>
                            <p>De acordo com o plano escolhido, a consultoria é realizada mensalmente ou semanalmente, tendo acompanhamento diário e adaptações no treinamento sempre que necessário.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer container-fluid mt-5 py-5 px-sm-3 mt-5 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Contatos</h4>
                
                <div class="d-flex justify-content-start mt-4">
                    <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://api.whatsapp.com/send?phone=+5541998656175&text=Olá,%20preciso%20de%20mais%20informações%20sobre%20a%20sua%20consultoria%20!!!"><i class="fab fa-whatsapp"></i></a></p>
                    <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.instagram.com/personalgus_ferrarini/"><i class="fab fa-instagram"></i></a></p>
                    <p><a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="mailto:ef.gustavoferrarini@gmail.com?subject=Consultoria de treinos&body=Olá, eu gostaria de mais informações sobre a sua consultoria e treinos, aguardo retorno!!!!"><i class="fa fa-envelope"></i></a></p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Horários de atendimento</h4>
                <h5 class="text-white">Segunda-feira - Sexta-feira</h5>
                <p>08:00 - 20:00</p>
                <h5 class="text-white">Sábado - Domingo</h5>
                <p>14:00 - 20:00</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="https://www.linkedin.com/in/alexandre-valente-osovski/">Alexandre Osovski</a>. Todos os direitos reservados. Designed by Alexandre Osovski
                <a class="text-white font-weight-bold" href=""></a>
            </p>
        </div>
    </div>
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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



</body>
</html>

