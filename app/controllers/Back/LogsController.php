<?php namespace Controllers\Back;

use View;
use AuditTrail;

class LogsController extends \BaseController
{
    public function index()
    {
        $logs = AuditTrail::all();
        return View::make('admin.logs.index', compact('logs'));
    }
}