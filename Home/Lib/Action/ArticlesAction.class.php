<?php
class ArticlesAction extends Action {
    public function read_article($aid=null) {
        if (null == $aid) {
            // TODO: Error Handling
        } else {
            $this->assign("type", 1);
            $this->initData(1, $aid);
            $this->display("index");
        }
    }

    public function read_category($c=null) {
        if (null == $c) {
            // TODO: Error Handling
        } else {
            $this->assign("type", 2);
            $this->initData(2, $c);
            $this->display("index");
        }
    }

    public function association($c=null) {
        if (null == $c) {
            // TODO: Error Handling
        } else {
            $this->initData(2, $c);
            $this->display("association");
        }
    }


    protected function initData($type=null, $arg=null) {
        // import class DirectoryNames.class for retrieving tree information.
        import("@.Util.DirectoryNames");
        $dn = new DirectoryNames();

        // Mainly 3 parts in the TPL file need to be rendered
        // 1 - CurrentRootDirectory name:
        $currentDirectoryName = "";
        // 2 - List of first level child dir
        $categoryList = array();
        // 3 - The article entity, OR the list

        $mArticle = D('Article');
        if (1 == $type) {
            // type = 1 indicates reading a single article
            $obj = $mArticle->readArticle($arg);
            
            $currentDirectory = explode('/', $dn->getLocation($obj["category"]));
            $currentDirectoryName = $currentDirectory[0];
            
            $categoryList = $dn->getFirstLevelChildDirs($obj["category"]);
            $currentPathStr = str_replace("/", " > ", $dn->getLocation($obj["category"]));
            
            $this->assign("article", $obj);
        } else if (2 == $type) {
            // type = 2 indicates reading an article list
            $currentDirectory = explode('/', $dn->getLocation($this->_param("c")));
            $currentDirectoryName = $currentDirectory[0];
            
            $currentPathStr = str_replace("/", " > ", $dn->getLocation($this->_param("c")));

            $categoryList = $dn->getFirstLevelChildDirs($this->_param("c"));

            $options = array("category"=>$arg, "limit"=>20);
            $list = $mArticle->readArticleList($options);

            
            $this->assign("list", $list);
        }


        $this->assign("currentDirectoryName", $currentDirectoryName);
        $this->assign("categoryList", $categoryList);
        $this->assign("currentPathStr", $currentPathStr);
    }

}
?>
