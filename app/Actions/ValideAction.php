<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ValideAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Valide';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-dark pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('pinos.valide', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
    

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'pinos';
    }
}