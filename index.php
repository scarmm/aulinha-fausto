<?php
include __DIR__ . "/header.php";
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Como a Presença dos Gatos Pode Enriquecer Nossa Espiritualidade?</h1>
                <p>Os gatos, com sua graça enigmática e comportamento sereno, muitas vezes trazem um sentido profundo de calma e contemplação aos lares. Sua presença tranquila serve como um lembrete constante para viver o momento presente e abraçar a serenidade. Para muitos, observar um gato se acomodando confortavelmente ou se entregando a uma soneca pode inspirar uma prática de meditação mais profunda e uma maior consciência espiritual.</p>
                <p>Além disso, a conexão cultural e mística dos gatos em várias tradições espirituais, como a adoração de Bastet no Egito Antigo, pode enriquecer nossa percepção do mundo ao nosso redor. Sua sensibilidade ao ambiente e às emoções humanas oferece uma oportunidade para nos sintonizarmos com nossas próprias intuições e sentimentos, promovendo um espaço espiritual mais harmonioso e acolhedor.</p>
                </div>
                <div class="col-md-6">
                <img src="assets/img/gatinho.jpg" alt="Modelo mulher utilizando um equipamento de saúde em uma paciente" class="img-fluid">
                    </div>
                </div>
                <div class="row">
            <div class="col">
                <?php

                include "config/db.php";
                // AGORA ESSE ARQUIVO CONHECE O BANCO
                // AGORA EU CONHEÇO $pdo
                // $pdo; // eu existo!
                $sql = "SELECT * FROM noticias";
                $resultado = $pdo->query($sql);
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo "<h1>" . $row['id_not'] . "</h1>";
                    echo "<h1>" . $row['titulo'] . "</h1>";
                    echo "<p>" . $row['descricao'] . "</p>";
                }

                ?>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . "/footer.php";
?>