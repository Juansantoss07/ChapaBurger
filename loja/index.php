<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <!-- titulo  -->
    <title>Aluguel de carros web</title>
    <!-- link para o css aqui -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Box Icons Site na web -->
    <!-- Copiar sempre na pagina do github:
        Using CSS
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- HEADER -->
    <header>
       <!--  <a href="" class="logo"><img src="assets/images/jeep.png" alt="jeep"></a>  -->


        <!-- Menu Hamburguer -->
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- NavBar -->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Passeio</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>

        <!-- Login -->
        <div class="header-btn">
            <a href="#" class="sign-up">Sign Up</a>
            <a href="login.php" class="sign-in">Sign In</a>

        </div>
    </header>
    <!-- HOME -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Procurando</span> por <br>carro para Alugar?</h1>
            <p>Estamos atuando há 2 anos no estado de São Paulo,<br>Já estamos no ranking lider de aluguel de carro!</p>
            <!-- imagem do IOS-PLAY STORE -->
            <div class="app-stores">
                <img src="assets/images/ios.png" alt="ios-logo">
                <img src="assets/images/512x512.png" alt="play_store-logo">

            </div>
        </div>

        <div class="form-container">
            <form  method="POST" action="">
                <div class="input-box">
                    <span>Locação</span>
                    <input type="search" name="local" id="local" placeholder="Procurar">
                </div>

                <div class="input-box">
                    <span>Dia da Retirada</span>
                    <input type="date" name="retirada" id="retirada">
                </div>

                <div class="input-box">
                    <span>Dia do Retorno</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="retorno" id="retorno" class="btn">
            </form>

        </div>
    </section>
    <!-- Ride -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>Como funciona ?</span>
            <h1>Alugue com 3 etapas Simples</h1>
        </div>
        <div class="ride-container">

            <!-- Caixa 1 -->
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>escolha um local </h2>
                <p>O melhor de tudo isso, que trabalhamos com milhas. Quanto mais milhas voce acumula, mais horas tem
                    para
                    usar com nossos serviços</p>
            </div>
            <!--Caixa 2  -->
            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Data da Retirada</h2>
                <p>Escolha uma data esteja de acordo com nosso calendario de disponibilidade*</p>
                <h6>Verificar cidades disponiveis e quais estão operando serviços</h6>
            </div>
            <!-- Caixa 3 -->
            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Reservar um Carro</h2>
                <p>Sendo aprovado em todos os processos, Voce pode reservar o seu carro com nossa empresa*</p>
                <h6>sujeito a aprovação mediante a consulta nos orgãos de proteção ao credito</h6>
            </div>

        </div>
    </section>
    <!-- Serviços -->
    <section class="services" id="services">
        <div class="heading">
            <span>Melhor Serviço</span>
            <h1>explore as melhores ofertas<br> E as melhores avalições </h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car1.jpg" alt="honda-civic">
                </div>
                <p>2016</p>
                <h3>2018 honda Civic</h3>
                <h2>R$ 97.000 | R$ 12.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car2.jpg" alt="honda-civic">
                </div>
                <p>2018</p>
                <h3>2018 honda Civic</h3>
                <h2>R$ 99.000 | R$ 15.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car3.jpg" alt="honda-civic">
                </div>
                <p>2017</p>
                <h3>2018 honda Civic</h3>
                <h2>R$ 96.000 | R$ 17.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car4.jpg" alt="honda-civic">
                </div>
                <p>2017</p>
                <h3>2018 honda Civic</h3>
                <h2>R$ 84.000 | R$ 22.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car5.jpg" alt="honda-civic">
                </div>
                <p>2017</p>
                <h3>2018 honda Civic</h3>
                <h2>R$ 126.000 | R$ 35.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car6.jpg" alt="honda-civic">
                </div>
                <p>2019</p>
                <h3>Porshe 911 turbo</h3>
                <h2>R$745.000 | R$ 50.000 <span>/MÊS</span></h2>
                <a href="#" class="btn">Alugue agora</a>
            </div>
        </div>
    </section>
    <!-- Sobre -->
    <section class="about" id="about">
        <div class="heading">
            <span>Sobre Nós</span>
            <h1>melhor experiência do cliente</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="assets/images/about.png" alt="imagem-sobre-nos">
            </div>
            <div class="about-text">
                <span>Sobre nós</span>
                <p> segunda maior locadora de veículos de são paulo e líder em locação de frotas para empresas. Temos
                    grande paixão pelo nosso trabalho, e aplicamos nele toda a inovação e a simplicidade que estão
                    gravadas no nosso DNA. Buscamos de maneira constante a melhoria da qualidade do nosso serviço, a
                    satisfação dos nossos clientes e a valorização das pessoas que fazem parte da nossa Companhia.</p>
                <p>combinando seus produtos e serviços numa gama completa de soluções de mobilidade para pessoas e
                    empresas. Toda a operação foi consolidada sob a marca Unidas.</p>
                <a href="#">Veja mais</a>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <div class="section reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>O que nossos cliente dizem</h1>
        </div>
        <section class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="assets/images/rev1.jpg" alt="reviews">
                </div>
                <h2>Carlos Faustino</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sequi quae dicta illum, facilis
                    reiciendis nam repellendus, consequuntur quo numquam vel fugiat nobis? Recusandae repellat enim
                    perspiciatis, rem numquam non!</p>
            </div>
            <!-- Segundo Review -->
            <div class="box">
                <div class="rev-img">
                    <img src="assets/images/rev2.jpg" alt="reviews-2">
                </div>
                <h2>Marcos Santos</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eum sequi harum praesentium. Impedit
                    voluptate aspernatur incidunt, temporibus excepturi officiis. Vitae, voluptatem accusamus maiores
                    rerum inventore ducimus excepturi odit quisquam.</p>
            </div>

            <!-- Terceiro Review -->
            <div class="box">
                <div class="rev-img">
                    <img src="assets/images/rev3.jpg" alt="reviews-3">
                </div>
                <h2>Alessandra borges</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla inventore voluptate ipsa labore
                    impedit quia, illo officiis qui molestiae vero dolorem voluptatibus velit dolorum cum enim eius
                    reprehenderit dolor nemo.</p>
            </div>
    </div>
    </section>

    <!-- NewsLetter -->

    <section class="newsletter">
        <h2>Inscreva-se na nossa newsletter</h2>
        <form method="POST" action="">
        <div class="box">
            <input type="text" placeholder=" Insira   seu email...">
            <a href="#" class="btn">Inscreva-se</a>
            </form>
        </div>

    </section>


    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; todos os direitos reservados</p>
        <div class="social">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-twitch'></i></a>
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-pinterest'></i></a>
        </div>

    </div>


    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Link para o JS -->
    <script src="main.js"></script>
</body>

</html>