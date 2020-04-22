<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'username', 'email', 'password',
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function avatar()
    {
    	return 'http://www.gravatar.com/avatar/' . md5($this->email) .'?s=35&d=mm';
    }
}
