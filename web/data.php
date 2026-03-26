<?php
    session_start();
    session_destroy();
    session_start();
    if (!isset($_SESSION['plats'])) {
        $_SESSION['plats'] = [
            [
                'code'=>"1",
                'nom' => 'Maffé',
                'prix' => '1000',
                'categorie' => 'Entrée',
                'disponibilite' => 'vrai',
            ],
            [
                'code'=>"2",
                'nom' => 'Yacha',
                'prix' => '1000',
                'categorie' => 'Plat',
                'disponibilite' => 'faux',
            ],
        ];
    }
    if(!isset($_SESSION['categories'])){
        $_SESSION['categories'] = ['Entrée' , 'Plat', 'Dessert' ];
    }

    function getAllPlat(): array{
        return $_SESSION['plats']??[];
    }

    function getPlatByCode(string $code) {
        foreach ($_SESSION['plats'] as $plat) {
            if ($plat['code'] === $code) {
                return $plat;
            }
        }
    return null;
}
