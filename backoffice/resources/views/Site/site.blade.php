<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.header')

<body style="background: #DEE4E4;">

    @include('includes.navbar_site')

<div class="container-fluid" style="background: url(img/imgs_site/fundo_site.svg); background-size: cover; padding: 14%;">
    <div class="row">
        <div class="col-12 d-lg-flex d-xl-flex justify-content-center align-items-center">
            <div class="background">
                <div class="">
                    <h1 class="text-white texto_progfit mt-5">Bem-vindo a PROG.FIT</h1>
                    <h2 class="text-white">A progressão que você sempre buscou</h2>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="img/imgs_site/logo_body-removebg.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container_cards_inicio_site ">
    <div class="row">
        <div class="col-12 d-lg-flex d-xl-flex justify-content-center align-items-center">

            <div class="card card_inicio_site_um p-3 d-flex background_cards" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                <div class="card-body">
                    <h1 class="mb-5 font-weight-bold titulo_maior_card_inicio_site cor_dourado_site text-left">Por que escolher a PROG.FIT?</h1><br><br>
                    <h3 class="subtitulo_card_inicio_site cor_dourado_site text-left">Temos o objetivo de fazer com que você esteja sempre evoluindo nos seus treinos e na sua saúde, independente do lugar, hora, ou clima.</h3>
                </div>
            </div>
            <div class="card card_inicio_site_dois text-center d-flex align-items-center justify-content-center" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #000000;">
                <div class="card-body">
                    <img class="img_card_inicio_site" src="img/imgs_site/pencil.svg">
                    <h1 class="mb-5 titulo_card_inicio_site font-weight-bold">Personalização</h1>
                    <h3 class="subtitulo_card_inicio_site">Programas personalizados que se adaptam às suas necessidades</h3>
                </div>
            </div>
            <div class="card card_inicio_site_tres text-center d-flex align-items-center justify-content-center" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #000000;">
                <div class="card-body">
                    <img class="img_card_inicio_site" src="img/imgs_site/group.svg">
                    <h1 class="mb-5 titulo_card_inicio_site font-weight-bold">Acompanhamento</h1>
                    <h3 class="subtitulo_card_inicio_site" >Monitoramos seu progresso e ajustamos seu programa sempre que necessário</h3>
                </div>
            </div>
            <div class="card card_inicio_site_quatro text-center d-flex align-items-center justify-content-center" style=" border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #000000;">
                <div class="card-body">
                    <img class="img_card_inicio_site" src="img/imgs_site/clock.svg">
                    <h1 class="mb-5 titulo_card_inicio_site font-weight-bold">Flexibilidade</h1>
                    <h3 class="subtitulo_card_inicio_site">Treine onde e quando quiser, de acordo com sua disponibilidade</h3>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid container_sobre" id="sobre">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="sobre_empresa">
                <h1 class="text-center font-weight-bold titulo-sobre" style="color: #000000;">Sobre</h1>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8">
                        <div class="card" style="border: none; background: #DEE4E4; box-shadow: none;">
                            <div class="card-body" >
                                <h1 class="texto_sobre" style="color: #000000;">A PROG.FIT é uma empresa que oferece
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
                        <div class="card background_cards" style="width: 25rem;height: 25rem;">
                            <div class="card-body d-flex justify-content-center align-items-center" style="">
                                <img src="img/imgs_site/logo_body-removebg_amarelo.png"  alt="..." style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid" style="background: url(img/imgs_site/pexels-leon-ardho.png); background-size: cover;">
    <div class="row justify-content-center align-items-center" style="background: rgba(0,0,0, 0.7);">
        <div class="col-12 d-lg-flex d-xl-flex col-lg-8 col-xl-8 com-md-12 col-sm-12">
            <div class="conteudos_meio_site row justify-content-center">
                <div class="col-12 col-lg-4 col-xl-4 col-md-4 col-sm-12 mb-4">
                    <div class="personalizacao ">
                        <div class="card-body ">
                            <h1 class="text-white titulo_card_inicio_site text-left font-weight-bold">Personalização</h1>
                            <br><br>
                            <h2 class="text-white text-left">Reconhecemos que cada indivíduo é único, com diferentes necessidades e objetivos de condicionamento físico. Com programas personalizados que se adaptam às suas necessidades, levando em consideração sua idade, nível de condicionamento físico, restrições e preferências individuais.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 col-md-4 col-sm-12 mb-4">
                    <div class="flexibilidade">
                        <div class="card-body">
                            <h1 class="text-white titulo_card_inicio_site text-left font-weight-bold">Flexibilidade</h1>
                            <br><br>
                            <h2 class="text-white text-left">Os programas de treinamentos são pensados na sua rotina, no seu ritmo e no seu ambiente de treino, para que, independentemente desses fatores, você progrida e alcance seus objetivos.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 col-md-4 col-sm-12 mb-4">
                    <div class="acompanhamento">
                        <div class="card-body">
                            <h1 class="text-white titulo_card_inicio_site text-left font-weight-bold">Acompanhamento</h1>
                            <br><br>
                            <h2 class="text-white text-left">Estaremos sempre fornecendo orientações, suporte e motivação. Utilizando recursos como videochamadas, chat e análise de desempenho, monitoramos seu progresso e ajustamos seu programa sempre que necessário.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1 class="d-flex align-content-center justify-content-center font-weight-bold titulo-sobre" id="como_comecar" style="margin-top: 5%; margin-bottom: 5%; color: #000000;">COMO COMEÇAR?</h1>
    <div class="row justify-content-center align-items-center" >
        <div class="col-12 d-lg-flex d-xl-flex d-md-flex col-lg-8 col-xl-8 com-md-12 col-sm-12">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-xl-4 col-md-12 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body background_cards card_como_comecar_numero_um text-left">
                            <h1 class="cor_dourado_site font-weight-bold">1.</h1>
                            <h2 class="cor_dourado_site font-weight-bold">Envie uma mensagem para o nosso WhatsApp e preencha o questionário sobre seu histórico físico e saúde. Com base nas informações fornecidas, será realizada uma reunião inicial com um profissional, que irá projetar um programa de treinamento personalizado exclusivamente para você.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 col-md-12 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body background_cards card_como_comecar_numero_dois text-left">
                            <h1 class="cor_dourado_site font-weight-bold">2.</h1>
                            <h2 class="cor_dourado_site font-weight-bold">Após realizar a primeira consultoria você receberá o seu programa de treinamento de forma limpa, e simples de entender. Durante as semanas de treinamento você receberá todo o suporte até a próxima consultoria.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 col-md-12 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body background_cards card_como_comecar_numero_tres text-left">
                            <h1 class="cor_dourado_site font-weight-bold">3.</h1>
                            <h2 class="cor_dourado_site font-weight-bold">Você realizará consultorias semanais ou mensais, de acordo com seu plano e necessidade, para conversar sobre seu programa de treinamento e realizar as adaptações necessárias. Tendo também acesso a recursos adicionais, como vídeos de exercícios, planilhas de treinamento e dicas de saúde e bem-estar.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" id="time">
    <div class="row mt-5" style="background: url(img/imgs_site/pexels-tima-miroshnichenko.svg);background-size: cover;">
        <div class="col-12" style="background: rgba(0,0,0, 0.7);">
            <div class="time d-flex flex-column">
                <h1 class="d-flex flex-sm-column justify-content-center align-content-center text-white mb-5 font-weight-bold titulo-sobre">TIME</h1>
                <div class="d-lg-flex d-xl-flex align-content-center justify-content-center">
                    <div class="gustavo col-12 col-md-6 col-sm-12 mb-4">
                        <img src="img/imgs_site/Gustavo.png" alt="" class="img-fluid rounded-circle shadow">
                        <div class="descricao_gustavo mt-3">
                            <h1 class="text-white font-weight-bold">Gustavo Ferrarini</h1>
                            <p class="text-white">Criador da PROG.FIT<br> Possui bacharelado em Educação Física pela UNIBRASIL, <br>tendo experiência em emagrecimento, hipertrofia e personal trainer.</p>
                        </div>
                    </div>
                    <div class="alexandre col-12 col-md-6 col-sm-12">
                        <img src="img/imgs_site/Alexandre.png" alt="" class="img-fluid rounded-circle shadow" >
                        <div class="descricao_alexandre mt-3">
                            <h1 class="text-white font-weight-bold">Alexandre Osovski</h1>
                            <p class="text-white">Co-criador da PROG.FIT <br>Possui Desenvolvimento De Sistemas na PUCPR e <br>Engenharia de Software na Universidade Positivo, <br>tendo experiência em programação Web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer_site')
</body>
</html>

