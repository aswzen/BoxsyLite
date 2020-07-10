<?php

class ItemModel extends Model {

    public function search($keywords = '')
    {
        $result = $this->notorm()->items()->where( "item_name like \"%".$keywords."%\"" ) ;
        return $result;
    }

    public function get($id)
    {
        $result = $this->notorm()->items[$id];
        return $result;
    }

    public function save($data = null)
    {
        $result = $this->notorm()->items[$data['id']];
        $result->update($data);
        return $result;
    }

    public function add($data = null)
    {
        $this->notorm()->items()->insert($data);
    }

    public function delete($data = null)
    {
        $result = $this->notorm()->items[$data['id']];
        $result->delete($data);
        return $result;
    }
}