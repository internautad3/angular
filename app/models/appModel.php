<?php

namespace app\models;

abstract class appModel extends \ActiveRecord\Model implements \app\interfaces\iSql{
    
    public static function listar() {
        return parent::find('all');
    }
    
    public static function cadastrar($attributes) {
        $cadastrar = parent::create($attributes);
        return $cadastrar;
    }
    
    public static function atualizar($id, $attributes) {
        $atualizar = parent::find($id);
        $atualizar->update_attributes($attributes);
    }
    
    public static function excluir($id) {
        $excluir = parent::find($id);
        $excluir->delete();
    }
    
    public static function where($campo,$valor,$tipo=NULL) {
         $tipo = ($tipo == NULL) ? 'first' : 'all';
        return parent::find($tipo, array('conditions' => array($campo . '=?', $valor)));
    }
}

