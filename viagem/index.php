<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css\estilo.css">

</head>
<body>
        <?php 
            include"cabeca.php";
        ?>

    <section class="resultados">
        <div  class="container">
            <div class="resultados-text">
                    Só nesse blog tem
            </div>
            
            <div class="resultados-numero">
                <p>
                    <span> +50 </span> <br> dicas fresquinhas
                </p>
                <p>
                    <span> +200</span> <br> viagens diferentes
                </p>
                <p>
                    <span> +60</span> <br> ideias de lugares para as férias
                </p>
            </div>
            
        </div>

    </section>

    <section class="diferencias">
        <h1><b>Os posts mais recentes</b></h1>
        <div class="container">
            <article class="card">
                <h2 class="titulo"> Pontos Turísticos do Rio de Janeiro </h2>
                <img src="img/bondinho.jpg" alt="bondinho">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nobis repellat nam quis id atque tempora voluptatem deleniti optio quibusdam, cumque obcaecati, nostrum libero aperiam dolores, praesentium minus dignissimos quia!
                </p>
                <a href="rj.php"><button class="btn-gradient"> Ler mais </button></a>
            </article>
            <article class="card">
                <h2 class="titulo"> Pontos Turísticos do Tocantins </h2>
                <img src="img/tocantins.jpg" alt="mapato">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nobis repellat nam quis id atque tempora voluptatem deleniti optio quibusdam, cumque obcaecati, nostrum libero aperiam dolores, praesentium minus dignissimos quia!
                </p>
                <a href="to.php"><button class="btn-gradient"> Ler mais </button></a>
            </article>
            <article class="card">
                <h2 class="titulo"> Pontos Turísticos do Uruguai</h2>
                <img src="img/uruguai.jpg" alt="bandeirauru">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nobis repellat nam quis id atque tempora voluptatem deleniti optio quibusdam, cumque obcaecati, nostrum libero aperiam dolores, praesentium minus dignissimos quia!
                </p>
                <a href="uruguai.php"><button class="btn-gradient"> Ler mais </button></a>
            </article>
        </div>
    </section>

    <section class="casa">
        <div class="container">
            <div class="casa-img">
                <img src="img/muitoguarda.jpg" alt="menina">
            </div>
            <div class="casa-text">
                <h2> Quem sou eu?</h2>
                <p>Olá, me chamo Andressa sou descente de japoneses mas nasci no Brasil. Sempre gostei muito de viajar, principalmente para o Japão para conhecer profundamente todas as partes da minha grande família. Comecei o blog Guarda-Chuva Amarelo para expor minha paixão pela curiosidade de descobrir novas paisagens, juntando com dicas, parcerias e avaliações de todos os lugares que já vistei, pagando barato e ainda sobrando um dinheirinho no bolso, espero que goste! </p>
                <img src="img/user-happy.png" alt="pessoas sorrindo">
                <p>
                    <b> Já são mais de 1k de visulizações e seguidores, redes socias no rodapé da página! </b>
                </p>
            </div>
        </div>
    </section>

   
    <?php 
            include"rodape.php";
    ?>

</body>
</html>