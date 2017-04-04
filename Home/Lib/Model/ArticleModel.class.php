<?php
class ArticleModel extends Model {
    // TODO: default add/update an article
    public function addArticle($object) {
        $flag = $this->add($data=$object);
        if ($flag)
            return true;
        else
            return false; 
    }
    
    public function updateArticle($object) {
        $flag = $this->save($data=$object);
        if ($flag)
            return true;
        else
            return false;  
    }

    // TODO: default delete an article
    public function deleteArticle($aid) {
        $flag = $this->where("aid=".$aid)->delete();
        if ($flag)
            return true;
        else
            return false;
    }

    // default simple function to retrieve an article:
    public function readArticle($aid) {
        $fullObject = $this->where("aid=".$aid)->find();
        $fullObject["date"] = date("Y-m-d", strtotime($fullObject["date"]));
        return $fullObject;
    }
    
    // default simple function to retrieve a list of articles:
    // options given including:
    // [category]
    // [list length] (limit)
    public function readArticleList($options) {
        $objList = $this->where("category='".$options["category"]."'"." AND visibility=1")->order("priority")->limit($options["limit"])->select();
        $listRet = array();
        for ($i = 0; $i < count($objList); $i++) {
            $url = U('Home/Articles/read_article')."?aid=".$objList[$i]["aid"];
            $date = date("Y-m-d", strtotime($objList[$i]["date"]));
            $entity = array("url"=>$url, "title"=>$objList[$i]["title"], "date"=>$date);
            array_push($listRet, $entity);
        }
        return $listRet;
    }
    
    // TODO: self-defined query function, using SQL queries.
    public function setQuery($queryString) {
        //parent::query($queryString);
    }

}

?>
