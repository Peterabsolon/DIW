<?php

namespace App\Repositories\Admin\Project;

use Pingpong\Admin\Repositories\Repository;

interface ProjectRepository extends Repository
{
	public function getProject();
}