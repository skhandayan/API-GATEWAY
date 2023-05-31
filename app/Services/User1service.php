<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
use ConsumesExternalService;
/**
* The base uri to consume the User1 Service
* @var string
*/
public $baseUri;

public function __construct()
{
$this->baseUri =
config('services.database1.base_uri');
}
}