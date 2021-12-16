<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentSumController;

class Testcontroller extends StudentSumController
{
    public function test(){
        echo $this->;
    }
}
