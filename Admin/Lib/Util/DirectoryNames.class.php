<?php
class DirectoryNames {
    private $directory = array(
        "jieshao" => array(
            "name" => "研究院介绍",
            "children" => array(
                "jianjie" => array(
                    "name" => "研究院简介",
                    "children" => null,
                ),
                "bumen" => array(
                    "name" => "下属部门简介",
                    "children" => null,
                ),
            ),
        ),

        "gzdt" => array(
            "name" => "工作动态",
            "children" => null,
        ),

        "cydt" => array(
            "name" => "创业动态",
            "children" => array(
                "xwzx" => array(
                    "name" => "新闻资讯",
                    "children" => null,
                ),
                "zcgg" => array(
                    "name" => "政策公告",
                    "children" => null,
                ),
            ),
        ),

        "cykt" => array(
            "name" => "创业课堂",
            "children" => array(
                "jingyan" => array(
                    "name" => "经验之谈",
                    "children" => null,
                ),
                "renwu" => array(
                    "name" => "创业典型",
                    "children" => null,
                ),
                "xiezuo" => array(
                    "name" => "写作指导",
                    "children" => array(
                        "cyjhs" => array(
                            "name" => "创业计划书",
                            "children" => null,
                        ),
                        "syghs" => array(
                            "name" => "生涯规划书",
                            "children" => null,
                        ),
                    ),
                ),
                "pxxm" => array(
                    "name" => "培训项目",
                    "children" => null,
                ),
            ),
        ),

        "cyyj" => array(
            "name" => "创业研究",
            "children" => array(
                "cyal" => array(
                    "name" => "创业案例",
                    "children" => null,
                ),
                "xslw" => array(
                    "name" => "学术论文",
                    "children" => null,
                ),
                 "yjkt" => array(
                    "name" => "研究课题",
                    "children" => null,
                ),
            ),
        ),

        "xmzs" => array(
            "name" => "项目展示",
            "children" => null,
        ),

        "daoshi" => array(
            "name" => "创业导师",
            "children" => array(
                "kcjs" => array(
                    "name" => "培训课程讲师",
                    "children" => null,
                ),
                "xnds" => array(
                    "name" => "校内创业导师",
                    "children" => null,
                ),
                "xwds" => array(
                    "name" => "校外创业导师",
                    "children" => null,
                ),
            ),
        ),

        "cyjd" => array(
            "name" => "创业基地",
            "children" => array(
                "yuanqu" => array(
                    "name" => "园区简介",
                    "children" => null,
                ),
                "tzjg" => array(
                    "name" => "投资机构",
                    "children" => null,
                ),
            ),
        ),

        "xszz" => array(
            "name" => "学生组织",
            "children" => array(
                "cyxh" => array(
                    "name" => "创业协会",
                    "children" => array(
                        "jianjie" => array(
                            "name" => "协会简介",
                            "children" => null,
                            ),
                        "jiagou" => array(
                            "name" => "协会架构",
                            "children" => null,
                            ),
                        "tuandui" => array(
                            "name" => "团队简介",
                            "children" => array(
                                "old" => array(
                                    "name" => "历任成员",
                                    "children" => null,
                                    ),
                                "current" => array(
                                    "name" => "现任成员",
                                    "children" => null,
                                    ),
                                ),
                            ),
                        "huodong" => array(
                            "name" => "协会活动",
                            "children" => null,
                            ),

                        ),
                ),
                
                "enactus" => array(
                    "name" => "广大创行团队",
                    "children" => array(
                        "about" => array(
                            "name" => "关于创行",
                            "children" => null,
                            ),
                        "structure" => array(
                            "name" => "创行架构",
                            "children" => null,
                            ),
                        "teams" => array(
                            "name" => "团队简介",
                            "children" => null,
                            ),
                        "projects" => array(
                            "name" => "项目简介",
                            "children" => null,
                            ),
                        ),
                ),
            ),
        ),

        "download" => array(
            "name" => "下载专区",
            "children" => null,
        ),

        "service" => array(
            "name" => "服务部分",
            "children" => null,
        ),
    );

    public function getLocation($path) {
        $arr = explode('/', $path);
        
        $index = 0;
        $curr = $this->directory[$arr[$index]];
        $location = $curr["name"];
        while ($index < count($arr)) {
            $index++;
            $curr = $curr["children"][$arr[$index]];
            $location = $location."/".$curr["name"];
        }
        
        return $location;
    }

    public function getFirstLevelChildDirs($path) {
        $arr = explode('/', $path);
        
        $curr= $this->directory[$arr[0]];

        $firstLevelChildDirs = array();
        foreach ($curr["children"] as $key=>$value) {
            // "Association" category uses another template, treated individually
            if (0 == strcmp("xszz", $arr[0])) {
                $urlStr = "/.__APP__/Articles/association";
            } else {
                $urlStr = "/.__APP__/Articles/read_category?c=".$arr[0].'/'.$key;
            }
            array_push($firstLevelChildDirs, array("url"=>$urlStr, "name"=>$value["name"]));
        }
        return $firstLevelChildDirs;
    }

}
?>
