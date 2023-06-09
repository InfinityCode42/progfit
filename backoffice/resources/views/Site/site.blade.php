<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.header')

<body>

    @include('includes.navbar_site')

    <div class="container-fluid" style="background: url(img/fundo_site.svg); background-size: cover; padding: 14%;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="background d-flex">
                    <div class="">
                        <h1 class="text-white texto_progfit mt-5">Bem vindo a PROG.FIT</h1>
                        <h2 class="text-white">A progressão que você sempre buscou</h2>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="img/logo_body-removebg.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5" style="margin-top: -165px;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="card p-3 d-flex bg-secondary text-white mr-3" style="width: 32rem; height: 30rem; border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <h1 class="mb-5 text-white font-weight-bold">Por que escolher a PROG.FIT?</h1><br><br>
                        <h3 class="text-white">Temos o objetivo de fazer com que você esteja sempre evoluindo nos seus treinos e na sua saúde, independente do lugar, hora, ou clima.</h3>
                    </div>
                </div>

                <div class="card p-3 text-center d-flex align-items-center justify-content-center mr-3" style="width: 18rem; height: 22rem; border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <img src="img/pencil.svg">
                        <h1 class="mb-5" style="font-size: 25px;">Personalização</h1>
                        <h3 class="text-dark" style="font-size: 25px;">Programas personalizados que se adaptam às suas necessidades</h3>
                    </div>
                </div>

                <div class="card p-3 text-center d-flex align-items-center justify-content-center mr-3" style="width: 18rem; height: 22rem; border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <img src="img/group.svg">
                        <h1 class="mb-5" style="font-size: 25px;">Acompanhamento</h1>
                        <h3 class="text-dark" style="font-size: 25px;">Monitoramos seu progresso e ajustamos seu programa sempre que necessário</h3>
                    </div>
                </div>

                <div class="card p-3 text-center d-flex align-items-center justify-content-center mr-3" style="width: 18rem; height: 22rem; border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <img src="img/clock.svg">
                        <h1 class="mb-5" style="font-size: 25px;">Flexibilidade</h1>
                        <h3 class="text-dark" style="font-size: 25px;">Treine onde e quando quiser, de acordo com sua disponibilidade</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 10%">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sobre_empresa">
                    <h1 class="text-center">Sobre</h1>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-8">
                            <div class="card" style="border: none">
                                <div class="card-body" >
                                    <h1>A PROG.FIT é uma empresa que oferece
                                        consultoria online de treinamento físico para
                                        pessoas que buscam alcançar seus objetivos
                                        de forma saudável e eficiente. Nossa equipe
                                        está pronta para ajudar você a atingir seus
                                        objetivos, independente de onde você esteja,
                                        fazendo com que você tenha sempre o
                                        melhor suporte e atenção para progredir em
                                        seus treinos.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4" style="justify-content: center;display: flex;">
                            <div class="card bg-secondary" style="width: 25rem;height: 25rem;">
                                <div class="card-body d-flex justify-content-center align-items-center" style="">
                                    <img src="img/logo_body-removebg_amarelo.png"  alt="..." style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid" style="background: url(img/pexels-leon-ardho.png); background-size: cover; padding: 5%; ">
        <div class="row" style="display: flex; justify-content: center; align-items: center;">

            <div class="col-12 com-md-12 col-sm-12">
                <div class="conteudos_meio_site d-flex justify-content-center">
                    <div class="col-4 col-md-4 col-sm-12 d-flex justify-content-center align-content-center">
                        <div class="personalizacao" style="padding: 10%">
                            <div class="card-body">
                                <h1 class="text-white" style="font-size: 60px;">Personalização</h1> <br><br>
                                <h2 class="text-white">Reconhecemos que cada indivíduo é único, com diferentes necessidades e objetivos de condicionamento físico. Com programas personalizados que se adaptam às suas necessidades, levando em consideração sua idade, nível de condicionamento físico, restrições e preferências individuais.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-sm-1 d-flex justify-content-center align-content-center">
                        <div class="flexibilidade" style="padding: 10%">
                            <div class="card-body" >
                                <h1 class="text-white" style="font-size: 60px;">Flexibilidade</h1><br><br>
                                <h2 class="text-white">Os programas de treinamentos são pensados na sua rotina, no seu ritmo e no seu ambiente de treino, para que independente desses fatores, você progrida e chegue nos seus objetivos.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-sm-1 d-flex justify-content-center align-content-center">
                        <div class="acompanhamento" style="padding: 10%">
                            <div class="card-body">
                                <h1 class="text-white" style="font-size: 60px;">Acompanhamento</h1> <br><br>
                                <h2 class="text-white">Estaremos sempre fornecendo orientações, suporte e motivação. Utilizando recursos como videochamadas, chat e análise de desempenho, monitoramos seu progresso e ajustamos seu programa sempre que necessário.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5" >
            <div class="col-12">
                <h1 class="d-flex mt-5 mb-5 justify-content-center align-content-center">COMO COMEÇAR?</h1>
                <div class="conteudo_como_comecar" style="display: flex; justify-content: space-evenly; align-items: center;">
                    <div class="col-4 d-flex justify-content-center align-content-center">
                        <div class="card_como_comecar_numero_um" >
                            <div class="card w-100" style="backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.0);">
                                <div class="card-body bg-secondary" style="width: 25rem; height: 40rem;">
                                    <h1 class="text-white">1.</h1>
                                    <h2 class="text-white">Envie uma mensagem para o nosso WhatsApp e preencha o questionário sobre seu histórico físico e saúde. Com base nas informações fornecidas,  será realizada uma reunião inicial com um profissional, que irá projetar um programa de treinamento personalizado exclusivamente para você.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-content-center">
                        <div class="card_como_comecar_numero_dois">
                            <div class="card w-100 " style="backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.0);">
                                <div class="card-body bg-secondary" style="width: 25rem; height: 40rem;">
                                    <h1 class="text-white">2.</h1>
                                    <h2 class="text-white">Após realizar a primeira consultoria você receberá o seu programa de treinamento de forma limpa, e simples de entender. Durante as semanas de treinamento você receberá todo o suporte até a próxima consultoria.  <br><br><br></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-content-center">
                        <div class="card_como_comecar_numero_tres">
                            <div class="card w-100 " style="backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.0);">
                                <div class="card-body bg-secondary" style="width: 25rem; height: 40rem;">
                                    <h1 class="text-white">3.</h1>
                                    <h2 class="text-white">Você realizará consultorias semanais ou mensais, de acordo com seu plano e necessidade, para conversar sobre seu programa de treinamento e realizar as adaptações necessárias. Tendo também acesso a recursos adicionais, como vídeos de exercícios, planilhas de treinamento e dicas de saúde e bem-estar.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid ">
        <div class="row mt-5" style="background: url(img/pexels-tima-miroshnichenko.svg)">
            <div class="col-12">
                <div class="time">
                    <h1 class="d-flex justify-content-center align-content-center text-white">TIME</h1>
                    <div class="d-flex align-content-center justify-content-center">
                        <div class="gustavo d-flex col-6">
                            <img src="img/Gustavo.png" alt="" style="border-radius: 50%">
                            <div class="descricao_gustavo">
                                <h1 class="text-white">Gustavo Ferrarini</h1>
                                <p class="text-white">Criador da PROG.FIT, Possui bacharelado em Educação Física pela UNIBRASIL, tendo experiência em emagrecimento, hipertrofia e personal trainer.</p>
                            </div>
                        </div>
                        <div class="alexandre d-flex col-6">
                            <img src="img/Alexandre.png" alt="" style="border-radius: 50%">
                            <div class="descricao_alexandre">
                                <h1 class="text-white">Alexandre Osovski</h1>
                                <p class="text-white">Co-criador da PROG.FIT, possui Desenvolvimento De Sistemas na PUCPR e Engenharia de Software na Universidade Positivo, tendo experiência em programação Web.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 py-5 px-sm-3 mt-5 px-md-5 text-white bg-secondary">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Contatos</h4>

                <div class="justify-content-start mt-4">
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

