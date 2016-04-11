<?php
​
class FaqControllerCore extends FrontController {
    public function init() {
        parent::init();
​
        $questions = [
            ["question"=> "Recherche rapide",
                "answer"=> "Pour trouver l'article recherché, entrez un ou plusieurs mots clés dans la barre bleue Rechercher, en haut de toutes nos pages et cliquez sur le bouton Go. Vous pouvez également limiter votre recherche à une catégorie de produits grâce au menu déroulant."],
            ["question"=> "Recherche détaillée",
                "answer"=> "La recherche détaillée vous permet de définir vos recherches de façon plus précise avec des critères spécifiques à chaque catégorie. Pour accéder à la recherche détaillée, selon le type d'article : Choisissez l'une de nos boutiques depuis le menu déroulant à gauche de notre site, vous aurez alors la possibilité d'effectuer une recherche détaillée depuis la barre de navigation juste en dessous de la recherche rapide."],
            ["question"=> "Nos boutiques",
                "answer"=> "Vous pouvez accéder à la page de chacune de nos boutiques depuis le menu déroulant toutes nos boutiques à gauche de toutes nos pages. Vous y trouverez les meilleures ventes, les dernières sorties, les produits les plus recherchés ou les plus offerts, nos offres spéciales, les forums et bien d'autres informations spécifiques à chaque catégorie !"],
                ["question"=> "Recherche rapide",
                "answer"=> "Pour trouver l'article recherché, entrez un ou plusieurs mots clés dans la barre bleue Rechercher, en haut de toutes nos pages et cliquez sur le bouton Go. Vous pouvez également limiter votre recherche à une catégorie de produits grâce au menu déroulant."],
            ["question"=> "Recherche détaillée",
                "answer"=> "La recherche détaillée vous permet de définir vos recherches de façon plus précise avec des critères spécifiques à chaque catégorie. Pour accéder à la recherche détaillée, selon le type d'article : Choisissez l'une de nos boutiques depuis le menu déroulant à gauche de notre site, vous aurez alors la possibilité d'effectuer une recherche détaillée depuis la barre de navigation juste en dessous de la recherche rapide."],
            ["question"=> "Nos boutiques",
                "answer"=> "Vous pouvez accéder à la page de chacune de nos boutiques depuis le menu déroulant toutes nos boutiques à gauche de toutes nos pages. Vous y trouverez les meilleures ventes, les dernières sorties, les produits les plus recherchés ou les plus offerts, nos offres spéciales, les forums et bien d'autres informations spécifiques à chaque catégorie !"]
        ];
        $this->context->smarty->assign(array('questions'=> $questions));
    }
​
    public function initContent() {
        parent::initContent();
​
        $this->setTemplate(_PS_THEME_DIR_.'faq.tpl');
    }
​
}