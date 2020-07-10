<?php
class Item extends Controller {

    function search()
    {
    	$param = isset($_POST['keywords'])?$_POST['keywords']:'';
     	$items = $this->loadModel('ItemModel');
        $items = $items->search($param);
        $data = array();
        foreach ($items as $key => $value) {
        	$data[] = $value;
        }
        echo(json_encode($data));
        die();
    }

    function get($id = null)
    {
     	$items = $this->loadModel('ItemModel');
        $items = $items->get($id);
        echo(json_encode($items));
        die();
    }

    function save()
    {
     	$items = $this->loadModel('ItemModel');
    	$data = isset($_POST)?$_POST:'';
        $res = $items->save($data);
        echo(json_encode($res));
        die();
    }

    function add()
    {
     	$items = $this->loadModel('ItemModel');
    	$data = isset($_POST)?$_POST:'';
    	$data['id'] = null;
        $res = $items->add($data);
        echo(json_encode(true));
        die();
    }

    function delete()
    {
     	$items = $this->loadModel('ItemModel');
    	$data = isset($_POST)?$_POST:'';
        $res = $items->delete($data);
        echo(json_encode($res));
        die();
    }

    function detail()
    {

        $template = $this->loadView('item_detail');
        $template->render();
    }
    
}?>
