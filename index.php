<?php
    require_once __DIR__.'/db.php';
?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <header class="py-4 text-white bg-success">
            <div class="container">
                <h1>Pet shopping</h1>
            </div>
        </header>
        
        <main class="py-4">
            <div class="container">
                
                <h2 class="py-2 text-white text-center bg-success">
                    Cibo
                </h2>
                
                <!-- <ul>
                    <?php foreach ($arrayCibo as $cibo) {?>
                        <li>
                            <?php echo $cibo->print(); ?>
                        </li>
                    <?php } ?>
                </ul> -->
                
                <div class="row py-4">
                    <?php foreach ($arrayCibo as $cibo) {?>
                        <div class="mb-5 col-lg-3 col-md-6 col d-flex">
                            <div class="card">
                            <span class="position-absolute top-0 end-0 translate-middle py-2 badge rounded-pill bg-success">
                                <?php echo $cibo->getCategIcona() ?>
                            </span>
                                <img src="<?php echo $cibo->getImgPath() ?>" class="card-img-top" alt="<?php echo $cibo->getImgPath() ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $cibo->getNome() ?>
                                    </h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Tipologia: </strong>
                                            <?php echo get_class($cibo) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Prezzo: </strong>
                                            <?php echo number_format($cibo->getPrezzo(), 2, ',', '.') ?> €
                                        </li>
                                        <li
                                            class="
                                                list-group-item
                                                fw-bold
                                                <?php echo $cibo->getDisp() ? 'text-success' : 'text-danger' ?>
                                            "
                                        >
                                            <?php echo $cibo->getDisp() ? 'Disponibile' : 'Non disponibile' ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Consistenza: </strong>
                                            <?php echo $cibo->getConsistenza() ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Materia prima: </strong>
                                            <?php echo $cibo->getMateriaPrima() ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Peso: </strong>
                                            <?php echo $cibo->getPeso() ?>
                                             g
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-success">Acquista</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                
                <h2 class="py-2 text-white text-center bg-success">
                    Cucce
                </h2>
                
                <!-- <ul>
                    <?php foreach ($arrayCucce as $cuccia) {?>
                        <li>
                            <?php echo $cuccia->print(); ?>
                        </li>
                    <?php } ?>
                </ul> -->
                
                <div class="row py-4">
                    <?php foreach ($arrayCucce as $cuccia) {?>
                        <div class="mb-5 col-lg-3 col-md-6 col d-flex">
                            <div class="card">
                            <span class="position-absolute top-0 end-0 translate-middle py-2 badge rounded-pill bg-success">
                                <?php echo $cuccia->getCategIcona() ?>
                            </span>
                                <img src="<?php echo $cuccia->getImgPath() ?>" class="card-img-top" alt="<?php echo $cuccia->getImgPath() ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $cuccia->getNome() ?>
                                    </h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Tipologia: </strong>
                                            <?php echo get_class($cuccia) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Prezzo: </strong>
                                            <?php echo number_format($cuccia->getPrezzo(), 2, ',', '.')  ?> €
                                        </li>
                                        <li
                                            class="
                                                list-group-item
                                                fw-bold
                                                <?php echo $cuccia->getDisp() ? 'text-success' : 'text-danger' ?>
                                            "
                                        >
                                            <?php echo $cuccia->getDisp() ? 'Disponibile' : 'Non disponibile' ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Materiale: </strong>
                                            <?php echo $cuccia->getMateriale() ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Dimensione: </strong>
                                            <?php echo $cuccia->getCapienza() ?>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-success">Acquista</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                

                
                <h2 class="py-2 text-white text-center bg-success">
                    Giochi
                </h2>
                
                <!-- <ul>
                    <?php foreach ($arrayGiochi as $gioco) {?>
                        <li>
                            <?php echo $gioco->print(); ?>
                        </li>
                    <?php } ?>
                </ul> -->
                
                <div class="row py-4">
                    <?php foreach ($arrayGiochi as $gioco) {?>
                        <div class="mb-5 col-lg-3 col-md-6 col d-flex">
                            <div class="card">
                            <span class="position-absolute top-0 end-0 translate-middle py-2 badge rounded-pill bg-success">
                                <?php echo $gioco->getCategIcona() ?>
                            </span>
                                <img src="<?php echo $gioco->getImgPath() ?>" class="card-img-top" alt="<?php echo $gioco->getImgPath() ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $gioco->getNome() ?>
                                    </h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Tipologia: </strong>
                                            <?php echo get_class($gioco) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Prezzo: </strong>
                                            <?php echo number_format($gioco->getPrezzo(), 2, ',', '.') ?> €
                                        </li>
                                        <li
                                            class="
                                                list-group-item
                                                fw-bold
                                                <?php echo $gioco->getDisp() ? 'text-success' : 'text-danger' ?>
                                            "
                                        >
                                            <?php echo $gioco->getDisp() ? 'Disponibile' : 'Non disponibile' ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Materiale: </strong>
                                            <?php echo $gioco->getMateriale() ?>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Utilizzo: </strong>
                                            <?php echo $gioco->getDaEsterno() ?>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-success">Acquista</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </main>
    </body>
</html>