<?php
class DownloadAction extends Action {
    public function index() {
        $this->display("index");
    }

    public function file($fid=null) {
        if (null == $fid) {
            // TODO: Error Handling
        } else {
            $fileName = $this->getFilePath($fid);
        }
    }

    private function getFilePath($fid) {
        // retrieve file info according 
        $df = D('DownloadFile');
    }

}

?>
