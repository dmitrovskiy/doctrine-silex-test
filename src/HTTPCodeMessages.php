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
class HTTPCodeMessages
{
    const HTTP_CONTINUE = "Client should continue with request";
    const HTTP_SWITCHING_PROTOCOLS = "Server is switching protocols";
    const HTTP_PROCESSING = "Server has received and is processing the request";            // RFC2518
    const HTTP_OK = "Ok";
    const HTTP_CREATED = "Request has been fulfilled; new resource created";
    const HTTP_ACCEPTED = "Request accepted, processing pending";
    const HTTP_NON_AUTHORITATIVE_INFORMATION = "Request processed, information may be from another source";
    const HTTP_NO_CONTENT = "Request processed, no content returned";
    const HTTP_RESET_CONTENT = "Request processed, no content returned, reset document view";
    const HTTP_PARTIAL_CONTENT = "Partial resource return due to request header";
    const HTTP_MULTI_STATUS = "XMLl, can contain multiple separate responses";          // RFC4918
    const HTTP_ALREADY_REPORTED = "Results previously returned";      // RFC5842
    const HTTP_IM_USED = "Request fulfilled, reponse is instance-manipulations";               // RFC3229
    const HTTP_MULTIPLE_CHOICES = "multiple options for the resource delivered";
    const HTTP_MOVED_PERMANENTLY = "this and all future requests directed to the given URI";
    const HTTP_FOUND = "temporary response to request found via alternative URI";
    const HTTP_SEE_OTHER = "permanent response to request found via alternative URI";
    const HTTP_NOT_MODIFIED = "resource has not been modified since last requested";
    const HTTP_USE_PROXY = "content located elsewhere, retrieve from there";
    const HTTP_RESERVED = "subsequent requests should use the specified proxy";
    const HTTP_TEMPORARY_REDIRECT = "connect again to different uri as provided";
    const HTTP_PERMANENTLY_REDIRECT = "resumable HTTP Requests";  // RFC-reschke-http-status-308-07
    const HTTP_BAD_REQUEST = "request cannot be fulfilled due to bad syntax";
    const HTTP_UNAUTHORIZED = "authentication is possible but has failed";
    const HTTP_PAYMENT_REQUIRED = "payment required, reserved for future use";
    const HTTP_FORBIDDEN = "server refuses to respond to request";
    const HTTP_NOT_FOUND = "requested resource could not be found";
    const HTTP_METHOD_NOT_ALLOWED = "request method not supported by that resource";
    const HTTP_NOT_ACCEPTABLE = "content not acceptable according to the Accept headers";
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = "client must first authenticate itself with the proxy";
    const HTTP_REQUEST_TIMEOUT = "server timed out waiting for the request";
    const HTTP_CONFLICT = "request could not be processed because of conflict";
    const HTTP_GONE = "resource is no longer available and will not be available again";
    const HTTP_LENGTH_REQUIRED = "request did not specify the length of its content";
    const HTTP_PRECONDITION_FAILED = "server does not meet request preconditions";
    const HTTP_REQUEST_ENTITY_TOO_LARGE = "request is larger than the server is willing or able to process";
    const HTTP_REQUEST_URI_TOO_LONG = "URI provided was too long for the server to process";
    const HTTP_UNSUPPORTED_MEDIA_TYPE = "server does not support media type";
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = "client has asked for unprovidable portion of the file";
    const HTTP_EXPECTATION_FAILED = "server cannot meet requirements of Expect request-";
    const HTTP_I_AM_A_TEAPOT = "I'm a teapot";         // RFC2324
    const HTTP_UNPROCESSABLE_ENTITY = "request unable to be followed due to semantic errors";  // RFC4918
    const HTTP_LOCKED = "resource that is being accessed is locked";                // RFC4918
    const HTTP_FAILED_DEPENDENCY = "request failed due to failure of a previous request";     // RFC4918
    const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = '';   // RFC2817
    const HTTP_UPGRADE_REQUIRED = "client should switch to a different protocol";      // RFC2817
    const HTTP_PRECONDITION_REQUIRED = "origin server requires the request to be conditional"; // RFC6585
    const HTTP_TOO_MANY_REQUESTS = "user has sent too many requests in a given amount of time";     // RFC6585
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = "server is unwilling to process the request";   // RFC6585
    const HTTP_INTERNAL_SERVER_ERROR = "generic error message";
    const HTTP_NOT_IMPLEMENTED = "server does not recognise method or lacks ability to fulfill";
    const HTTP_BAD_GATEWAY = "server received an invalid response from upstream server";
    const HTTP_SERVICE_UNAVAILABLE = "server is currently unavailable";
    const HTTP_GATEWAY_TIMEOUT = "gateway did not receive response from upstream server";
    const HTTP_VERSION_NOT_SUPPORTED = "server does not support the HTTP protocol version";
    const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = "content negotiation for the request results in a circular ";  // RFC2295
    const HTTP_INSUFFICIENT_STORAGE = "server is unable to store the representation";  // RFC4918
    const HTTP_LOOP_DETECTED = "server detected an infinite loop while processing the request";         // RFC5842
    const HTTP_NOT_EXTENDED = "further extensions to the request are required";          // RFC2774
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = "client needs to authenticate to gain network access";   // RFC6585
}
