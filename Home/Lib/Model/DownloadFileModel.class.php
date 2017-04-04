<?php
class DownloadFileModel extends Model {
    public function readFileList($options) {
        $fileList = $this->where("category='".$options["category"]."'"." AND visibility=1")->limit($options["limit"])->select();
        $listRet = array();
        for ($i = 0; $i < count($fileList); $i++) {
            $fileFullName = $fileList[$i]["fileName"].".".$fileList[$i]["type"];
            $uploadDate = date("Y-m-d", strtotime($fileList[$i]["date"]));
            $entity = array("fileFullName"=>$fileFullName, "uploadDate"=>$uploadDate);
            array_push($listRet, $entity);
        }
        return $listRet;
    }

}


?>
