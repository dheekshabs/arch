<?php

namespace App\Models\Profile;

use CleaniqueCoders\LaravelUuid\Contracts\HasUuid as HasUuidContract;
use CleaniqueCoders\LaravelUuid\Traits\HasUuid;
use CleaniqueCoders\Profile\Models\Phone as Base;

class Phone extends Base
{
	use HasUuid;
}
