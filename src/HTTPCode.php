<?php

namespace App;

/**
 * List of HTTP response status codes.
 *
 * The list of codes is complete according to the
 * {@link http://www.iana.org/assignments/http-status-codes/ Hypertext Transfer Protocol (HTTP) Status Code Registry}
 * (last updated 2012-02-13).
 *
 * Unless otherwise noted, the status code is defined in RFC2616.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Markus Lanthaler <markus.lanthaler@gmx.net>
 */
class HTTPCode
{
    const HTTP_CONTINUE = 100;
    const HTTP_100 = 'CONTINUE';
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_101 = 'SWITCHING_PROTOCOLS';
    const HTTP_PROCESSING = 102;            // RFC2518
    const HTTP_102 = 'PROCESSING';
    const HTTP_OK = 200;
    const HTTP_200 = 'OK';

    const HTTP_CREATED = 201;
    const HTTP_201 = 'CREATED';

    const HTTP_ACCEPTED = 202;
    const HTTP_202 = 'ACCEPTED';

    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    const HTTP_203 = 'NON_AUTHORITATIVE_INFORMATION';

    const HTTP_NO_CONTENT = 204;
    const HTTP_204 = 'NO_CONTENT';

    const HTTP_RESET_CONTENT = 205;
    const HTTP_205 = 'RESET_CONTENT';

    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_206 = 'PARTIAL_CONTENT';

    const HTTP_MULTI_STATUS = 207;          // RFC4918
    const HTTP_207 = 'MULTI_STATUS';

    const HTTP_ALREADY_REPORTED = 208;      // RFC5842
    const HTTP_208 = 'ALREADY_REPORTED';

    const HTTP_IM_USED = 226;               // RFC3229
    const HTTP_226 = 'IM_USED';

    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_300 = 'MULTIPLE_CHOICES';

    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_301 = 'MOVED_PERMANENTLY';

    const HTTP_FOUND = 302;
    const HTTP_302 = 'FOUND';

    const HTTP_SEE_OTHER = 303;
    const HTTP_303 = 'SEE_OTHER';

    const HTTP_NOT_MODIFIED = 304;
    const HTTP_304 = 'NOT_MODIFIED';

    const HTTP_USE_PROXY = 305;
    const HTTP_305 = 'USE_PROXY';

    const HTTP_RESERVED = 306;
    const HTTP_306 = 'RESERVED';

    const HTTP_TEMPORARY_REDIRECT = 307;
    const HTTP_307 = 'TEMPORARY_REDIRECT';

    const HTTP_PERMANENTLY_REDIRECT = 308;  // RFC-reschke-http-status-308-07
    const HTTP_308 = 'PERMANENTLY_REDIRECT';

    const HTTP_BAD_REQUEST = 400;
    const HTTP_400 = 'BAD_REQUEST';

    const HTTP_UNAUTHORIZED = 401;
    const HTTP_401 = 'UNAUTHORIZED';

    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_402 = 'PAYMENT_REQUIRED';

    const HTTP_FORBIDDEN = 403;
    const HTTP_403 = 'FORBIDDEN';

    const HTTP_NOT_FOUND = 404;
    const HTTP_404 = 'NOT_FOUND';

    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_405 = 'METHOD_NOT_ALLOWED';

    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_406 = 'NOT_ACCEPTABLE';

    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_407 = 'PROXY_AUTHENTICATION_REQUIRED';

    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_408 = 'REQUEST_TIMEOUT';

    const HTTP_CONFLICT = 409;
    const HTTP_409 = 'CONFLICT';

    const HTTP_GONE = 410;
    const HTTP_410 = 'GONE';

    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_411 = 'LENGTH_REQUIRED';

    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_412 = 'PRECONDITION_FAILED';

    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    const HTTP_413 = 'REQUEST_ENTITY_TOO_LARGE';

    const HTTP_REQUEST_URI_TOO_LONG = 414;
    const HTTP_414 = 'REQUEST_URI_TOO_LONG';

    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_415 = 'UNSUPPORTED_MEDIA_TYPE';

    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_416 = 'REQUESTED_RANGE_NOT_SATISFIABLE';

    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_417 = 'EXPECTATION_FAILED';

    const HTTP_I_AM_A_TEAPOT = 418;         // RFC2324
    const HTTP_418 = 'I_AM_A_TEAPOT';

    const HTTP_UNPROCESSABLE_ENTITY = 422;  // RFC4918
    const HTTP_422 = 'UNPROCESSABLE_ENTITY';

    const HTTP_LOCKED = 423;                // RFC4918
    const HTTP_423 = 'LOCKED';

    const HTTP_FAILED_DEPENDENCY = 424;     // RFC4918
    const HTTP_424 = 'FAILED_DEPENDENCY';

    const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;   // RFC2817
    const HTTP_425 = 'RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL';

    const HTTP_UPGRADE_REQUIRED = 426;      // RFC2817
    const HTTP_426 = 'UPGRADE_REQUIRED';

    const HTTP_PRECONDITION_REQUIRED = 428; // RFC6585
    const HTTP_428 = 'PRECONDITION_REQUIRED';

    const HTTP_TOO_MANY_REQUESTS = 429;     // RFC6585
    const HTTP_429 = 'TOO_MANY_REQUESTS';

    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;   // RFC6585
    const HTTP_431 = 'REQUEST_HEADER_FIELDS_TOO_LARGE';

    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_500 = 'INTERNAL_SERVER_ERROR';

    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_501 = 'NOT_IMPLEMENTED';

    const HTTP_BAD_GATEWAY = 502;
    const HTTP_502 = 'BAD_GATEWAY';

    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_503 = 'SERVICE_UNAVAILABLE';

    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_504 = 'GATEWAY_TIMEOUT';

    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_505 = 'VERSION_NOT_SUPPORTED';

    const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;  // RFC2295
    const HTTP_506 = 'VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL';

    const HTTP_INSUFFICIENT_STORAGE = 507;  // RFC4918
    const HTTP_507 = 'INSUFFICIENT_STORAGE';

    const HTTP_LOOP_DETECTED = 508;         // RFC5842
    const HTTP_508 = 'LOOP_DETECTED';

    const HTTP_NOT_EXTENDED = 510;          // RFC2774
    const HTTP_510 = 'NOT_EXTENDED';

    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;   // RFC6585
    const HTTP_511 = 'NETWORK_AUTHENTICATION_REQUIRED';

    /**
     * @param int $code
     *
     * @return string
     */
    public static function codeToString($code)
    {
        return constant('self::HTTP_'.$code);
    }

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function codeExists($code)
    {
        return defined('self::HTTP_'.$code);
    }
}
