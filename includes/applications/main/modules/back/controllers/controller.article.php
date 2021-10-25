<?php

namespace app\main\controllers\back {

    use app\main\models\ModelArticle;
    use core\application\DefaultBackController;

    class article extends DefaultBackController
    {
        public function __construct()
        {
            parent::__construct();
            $this->formName = 'article';
            $this->model = new ModelArticle();
            $this->addColumnToList("title_article", 'Titre');
            $this->addColumnToList("date_article", 'Date de mise en ligne');
            $this->addColumnToList("author_article", "Auteur");
            $this->addColumnToList("hook_article", "Texte d'introduction");
            $this->addColumnToList("content_article", "Contenu de l'article");
            $this->addColumnToList("picture_article", "Image d'illustration");
            $this->addColumnToList("tags_article", "Tags");
            $this->nbItemsByPage = 10;
        }
    }
}
