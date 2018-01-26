<?php

namespace laravel_tdd\Domains\Usuarios;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Entity extends Model implements JWTSubject, AuthenticatableContract, CanResetPasswordContract
{
    use SoftDeletes, Authenticatable, CanResetPassword;
    
    protected $table = 'usuarios';
    public $timestamps = false;
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
