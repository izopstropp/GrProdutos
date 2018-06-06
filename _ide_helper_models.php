<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Produtos
 *
 * @property int $id
 * @property string $sku
 * @property string $titulo
 * @property string $descricao
 * @property float $preco
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos wherePreco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Produtos whereUpdatedAt($value)
 */
	class Produtos extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

