<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "vito";
    $bio = "🐧";
    $imagem = " https://i.pinimg.com/736x/bc/46/79/bc46790fafa3cb9ede81fd3f05ff581d.jpg"; // Pegue o link da SUA foto.
    $links = [
        "Instagram" => "https://www.instagram.com/chilled_bird/",
        "WhatsApp"  => "https://wa.me/996795119",
        "Meu Jogo Favorito" => "https://toon-jump.netlify.app/",
        "Música do Momento" => "https://www.youtube.com/watch?v=FLTchCiC0T0&list=RDFLTchCiC0T0&start_radio=1"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="style" href="style.css">
    <title>BioLink de <?php echo $nome; ?></title>

</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
            <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "destaque";



                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                    </a>";
            }
            ?>
        </div>
    </div>
</body>
</html>