<?php
class IndexAction extends Action {
    public function index() {
    // attempt to visit the Home index page
        $this->initData();
        $this->display();
    }

    protected function initData() {
        $m = D('Article');
        $options = array("category"=>'', "limit"=>0);

        $options["category"] = "gzdt";
        $options["limit"] = 5;
        $list_gzdt = $m->readArticleList($options);
        $this->assign("list_gzdt", $list_gzdt);

        $options["category"] = "cydt/xwzx";
        $options["limit"] = 9;
        $list_xwzx = $m->readArticleList($options);
        $list_xwzx_left = array();
        $list_xwzx_right = array();
        for ($i = 0; $i < count($list_xwzx); $i++) {
            if ($i < count($list_xwzx) / 2)
                array_push($list_xwzx_left, $list_xwzx[$i]);
            else
                array_push($list_xwzx_right, $list_xwzx[$i]);
        }
        $this->assign("list_xwzx_left", $list_xwzx_left);
        $this->assign("list_xwzx_right", $list_xwzx_right);

        $options["category"] = "cydt/zcgg";
        $options["limit"] = 6;
        $list_zcgg = $m->readArticleList($options);
        $this->assign("list_zcgg", $list_zcgg);

        $options["category"] = "cykt/jingyan";
        $options["limit"] = 6;
        $list_jingyan = $m->readArticleList($options);
        $this->assign("list_jingyan", $list_jingyan);

        $options["category"] = "cykt/xiezuo/cyjhs";
        $options["limit"] = 6;
        $list_cyjhs = $m->readArticleList($options);
        $this->assign("list_cyjhs", $list_cyjhs);

        $options["category"] = "cykt/xiezuo/syghs";
        $options["limit"] = 6;
        $list_syghs = $m->readArticleList($options);
        $this->assign("list_syghs", $list_syghs);

        $options["category"] = "cyjd/tzjg";
        $options["limit"] = 5;
        $list_tzjg = $m->readArticleList($options);
        $this->assign("list_tzjg", $list_tzjg);
    }

}
?>
