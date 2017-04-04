<?php
class ArticleAction extends Action {
    function index() {
        import('ORG.Util.Page');
        $art = new ArticleViewModel();

        //分页
        $count = $art->where($where)->count();
        $page = new Page($count, C('PAGESIZE'));
        $show = $page->show();
        $this->assign('show', $show);
        $list = $art->order('article.aid')
                    ->where($where)
                    ->limit($page->firstRow.','.$page->listRows)->select();
        //dump($list);
        $this->assign('alist', $list);
        $this->display();
    }

    function add() {
    	$this->display();
    }

    function edit() {
    	$id=$_GET['id'];
		if(!empty($id)){
			$art=new ArticleModel();
			$data=$art->getById($id);

			$this->assign('adata', $data);
		}

		$this->display();
    }

    function delete() {
    	$did=$_POST['did'];
		if(!empty($did) && is_array($did)){
			$art=new ArticleModel();
			$id=implode(',',$did);
			if(false!==$art->where('aid in('.$id.')')->delete()){
				$this->assign('jumpUrl',__URL__.'/index');
				$this->success('操作成功');
			}else{
				$this->error('操作失败：'.$art->getDbError());
			}
		}else{
			$this->error('请选择删除用户');
		}
    }

    function insert() {
    	$art=new ArticleModel();
		if($data=$art->create()){
			if(false!==$art->add()){
				$this->assign('jumpUrl',__URL__.'/index');
				$this->success('操作成功，插入数据编号为：'.$art->getLastInsID());
			}else{
				$this->error('操作失败：addsection'.$art->getDbError());
			}
		}else{
			$this->error('操作失败：数据验证( '.$art->getError().' )');
		}
    }

    function update() {
    	$art=new ArticleModel();
		if($data=$art->create()){
			if(!empty($data['id'])){
				if(false!==$art->save()){
					$this->assign('jumpUrl',__URL__.'/index');
					$this->success('操作成功');
				}else{
					$this->error('操作失败：'.$art->getDbError());
				}
			}else{
				$this->error('请选择编辑用户');
			}
		}else{
			$this->error('操作失败：数据验证( '.$art->getError().' )');
		}
    }
}
?>
