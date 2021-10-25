<?php

namespace app\main\models {

    use core\application\BaseModel;
    use core\db\Query;

class ModelArticle extends BaseModel
    {
        public function __construct()
        {
            parent::__construct("article", "id_article");
            $this->addJoinOnSelect("main_uploads", Query::JOIN_INNER);
        }
    }
}
