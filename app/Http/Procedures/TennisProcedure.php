<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use Illuminate\Http\Request;
use Sajya\Server\Procedure;

class TennisProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name = 'ganza';

    // public static string $cyubahiro = 'cyubahiro';

    /**
     * Execute the procedure.
     *
     * @param Request $request
     *
     * @return array|string|integer
     */
    public function ping()
    {
        return 'first rpc ping first';
    }

    public function cyubahiro()
    {
        return 'cyubahiro first';
    }
}
