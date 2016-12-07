<?php

namespace App\Middleware;

use App\Exception\HTTPException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class JsonParser
 *
 * @package App\Middleware
 */
class JsonParser
{
    public function analyze(Request $request)
    {
        $content = $request->getContent();
        
        if (false === strpos(
                $request->headers->get('Content-Type'),
                'json'
            )
            && $content != ''
            && $content != 'null'
        ) {
            $data = json_decode($content, true);

            if ($data === null) {
                throw new HTTPException(
                    'Invalid JSON format', 400
                );
            }
            $request->request->replace(is_array($data) ? $data : []);
        }
    }
}
