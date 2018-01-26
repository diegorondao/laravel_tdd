<?php

namespace laravel_tdd\Domains\Usuarios;

use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entity extends Authenticatable implements JWTSubject
{
    
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'clientes_id',
        'nome',
        'email',
        'senha',
        'imagem_avatar',
        'usuario_tipo',
        'cadastrar_clientes',
        'cadastrar_obras',
        'bloqueio',
        'perfil_permissoes_id',
        'externo_id',
        'api_token'

    ];
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
