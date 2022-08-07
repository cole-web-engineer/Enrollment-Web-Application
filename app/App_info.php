<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\AdminMessage;
use Illuminate\Notifications\Notification;

class App_info extends Model
{
    // pachedu
    public function App_info($app_info)
    {
        $this->notify(new AdminMessage($app_info));
    }
}
