<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursoMill | Plataforma de Cursos Online</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            list-style: none;
            text-decoration: none;
            outline: none;
            border: none;

        }

        .navbar {
            width: 100%;
            background-color: #b9ffb9;
            height: 70px;
            padding: 1rem 10%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            overflow: hidden;
            color: #383838;

        }

        .navbar .logo {
            font-size: 1.1rem;
            letter-spacing: 0.1rem;
        }

        .navbar ul {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 90%;
            transition: 0.3s;
        }

        .navbar ul li {
            display: inline-block;
            margin: 0;
            transition: 0.3s;

        }

        .navbar ul li a {
            color: #383838;
            font-weight: 600;

        }

        .navbar ul li:hover {
            transform: scale(1.2);
        }

        .btn {
            padding: 12px 40px;
            border-radius: 20px;
            background-color: #383838;
            color: #b9ffb9;
            font-weight: 800;
            font-size: 0.9rem;
        }

        .login-btn {
            transition: 0.3s linear;
            margin: 0 20px;
        }

        .login-btn:hover {
            background-color: #b9ffb9;
            border: 3px solid #383838;
            color: #383838;

        }

        /* main */
        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 2rem;
            padding: 3rem 10%;
            background-color: #161313;
            text-align: center;
        }

        .main h1 {
            font-size: 2.5rem;
            color: #fafafa;
        }

        .main .categorias {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 70%;
            padding: 0 15%;

        }

        .main .categorias a {
            color: #fafafa;
            transition: 0.3s;
            font-size: 1rem;
            width: 90%;
            padding: 0 0.3rem;
        }


        .main .categorias a:hover {
            font-size: 1.4rem;
        }

        .divider {
            width: 65%;
            height: 3px;
            background-color: #b9ffb9;
        }

        .main .hot {
            font-size: 2.5rem;
            color: #b9ffb9;
            letter-spacing: 0.3rem;
        }

        .main .cursos-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            width: 100%;
            padding: 3rem 5%;
        }

        .main .cursos-box .curso {
            height: 400px;
            width: 42%;
            background-color: #b9ffb9;
            border: 3px solid #fafafa;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-evenly;
            text-align: justify;
            padding: 2rem;
            border-radius: 10px;
            gap: 1rem;


        }

        .main .cursos-box .curso a {
            color: #161313;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            height: 50px;
            background-color: #b9ffb9;
        }

        .home {
            text-align: center;
            position: absolute;
            top: 50px;
            left: 50px;
            height: 40px;
            width: 40px;
            border-radius: 20px;
            background-color: #b9ffb9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bolder;
            font-size: 1.5rem;
            transition: 0.3s;
        }

        .home:hover {
            transform: scale(1.2);
        }

        .home a {
            color: #161313;
        }

        .toggle {
            display: none;
        }

        /* responsividade */
        @media (max-width: 950px) {
            .navbar ul {
                display: none;

            }

            .toggle {
                position: absolute;
                display: block;
                right: 20px;
                display: block;
                width: 40px;
                height: 40px;
                text-align: center;
            }

            .toggle i {
                font-size: 2.2rem;
                color: #383838;
            }

            .toggle .close {

                color: #383838;
            }


            .ul.open {
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #b9ffb9;
                color: #383838;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                width: 100vw;
                height: 50px;
                overflow: hidden;

            }

            .main .categorias {
                flex-wrap: wrap;
                width: 100%;
                gap: 1rem;
                padding: 0 1rem;
            }

            .main .categorias a:hover {
                font-size: 1.1rem;
            }


            .main .cursos-box {
                flex-direction: column;

            }

            .main .cursos-box .curso {
                width: 90%;
            }

            .footer {
                height: auto;
                flex-wrap: wrap;
                gap: 1rem;
                padding: 1rem 0;
            }

        }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav class="navbar">
            <h2 class="logo">CursosMill</h2>
            <ul class="ul">
                <li><a href="#">Cursos</a></li>
                <li><a href="/src/pages/planos/planos.html">Planos</a></li>
                <li><a href="/src/pages/sobre/sobre.html">Sobre</a></li>
                <li><a href="/src/pages/painel/painel.html">Admin</a></li>
            </ul>
            <a class="btn login-btn" href="/src/pages/login/login.html">Login</a>
            <div class="toggle" onclick="toggleMenu()">
                <i class='openIcon bx bx-menu'></i>
                <i class='closeIcon bx bx-x' style="display: none;"></i>
            </div>
        </nav>
    </header>
    <main class="main">
        <h1>A CursosMill tem tudo que você precisa</h1>
        <ul class="categorias">
            <li><a href="#">Programação</a></li>
            <li><a href="#">Culinária</a></li>
            <li><a href="#">Engenharia</a></li>
            <li><a href="#">Gastronomia</a></li>
            <li><a href="#">Ciêcias</a></li>
            <li><a href="#">Nutrição</a></li>
        </ul>
        <span class="divider"></span>
        <h3 class="hot">EM ALTA</h3>
        <div class="cursos-box">
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>

            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
            <div class="curso">
                <h3>Nome do Curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod distinctio, vel molestiae labore quidem voluptatum molestias vero qui libero hic, excepturi, aperiam impedit! Ut facere ad natus, consequatur non delectus.</p>
                <a href="#">Mais informações</a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h4>CursosMill</h4>
        <p>Todos os direitos reservados &copy;</p>
        <h4>Desde 2023</h4>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.ul');
            const openIcon = document.querySelector('.openIcon');
            const closeIcon = document.querySelector('.closeIcon');

            menu.classList.toggle('open');
            openIcon.style.display = openIcon.style.display === 'none' ? 'flex' : 'none';
            closeIcon.style.display = closeIcon.style.display === 'flex' ? 'none' : 'flex';
        }
    </script>

</body>

</html>