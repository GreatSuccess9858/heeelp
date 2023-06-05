<?php
/**
 * Interface representing extended HTTP status codes for RTSP
 * (Real Time Streaming Protocol), as listed in RFC2326. These codes are
 * represented as an interface so that developers may implement it and then use
 * parent::[CODE] to gain a code, or to extend the codes using static::[CODE]
 * and override their default description.
 *
 * This allows for codes to be repurposed in a natural way where the core,
 * traditional use would not be meaningful.
 *
 * PHP version 5.3
 *
 * @category StatusCode
 *
 * @package Teapot\StatusCode\RFC
 *
 * @author    Barney Hanlon <barney@shrikeh.net>
 * @copyright 2013-2016 B Hanlon. All rights reserved.
 * @license   MIT http://opensource.org/licenses/MIT
 *
 * @link https://github.com/teapot-php/status-code
 */
namespace Teapot\StatusCode\RFC;

use Teapot\StatusCode\RFC\Status\ProposedStandard;
use Teapot\StatusCode\RFC\Stream\IETF as IETFStream;

/**
 * Interface representing extended HTTP status codes for RTSP
 * (Real Time Streaming Protocol), as listed in RFC2326. These codes are
 * represented as an interface so that developers may implement it and then use
 * parent::[CODE] to gain a code, or to extend the codes using static::[CODE]
 * and override their default description.
 *
 * This allows for codes to be repurposed in a natural way where the core,
 * traditional use would not be meaningful.
 *
 * @category StatusCode
 *
 * @package Teapot\StatusCode\RFC
 *
 * @author    Barney Hanlon <barney@shrikeh.net>
 * @copyright 2013-2016 B Hanlon. All rights reserved.
 * @license   MIT http://opensource.org/licenses/MIT
 *
 * @link https://github.com/teapot-php/status-code
 */
interface RFC2326 extends ProposedStandard, IETFStream
{
    /**
     * The recipient of the request does not support one or more parameters
     * contained in the request.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.2
     *
     * @var int
     */
    const PARAMETER_NOT_UNDERSTOOD = 451;

    /**
     * The conference indicated by a Conference header field is unknown to the
     * media server.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.3
     *
     * @var int
     */
    const CONFERENCE_NOT_FOUND = 452;

    /**
     * The request was refused because there was insufficient bandwidth.
     * This may, for example, be the result of a resource reservation failure.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.4
     *
     * @var int
     */
    const NOT_ENOUGH_BANDWIDTH = 453;

    /**
     * The RTSP session identifier in the Session header is missing, invalid,
     * or has timed out.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.5
     *
     * @var int
     */
    const SESSION_NOT_FOUND = 454;

    /**
     * The client or server cannot process this request in its current state.
     * The response SHOULD contain an Allow header to make error recovery
     * easier.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.6
     *
     * @var int
     */
    const METHOD_NOT_VALID_IN_THIS_STATE = 455;

    /**
     * The server could not act on a required request header. For example, if
     * PLAY contains the Range header field but the stream does not allow
     * seeking.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.7
     *
     * @var int
     */
    const HEADER_FIELD_NOT_VALID_FOR_RESOURCE = 456;

    /**
     * The Range value given is out of bounds, e.g., beyond the end of the
     * presentation.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.8
     *
     * @var int
     */
    const INVALID_RANGE = 457;

    /**
     * The parameter to be set by SET_PARAMETER can be read but not modified.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.9
     *
     * @var int
     */
    const PARAMETER_IS_READ_ONLY = 458;

    /**
     * The requested method may not be applied on the URL in question since it
     * is an aggregate (presentation) URL. The method may be applied on a
     * stream URL.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.10
     *
     * @var int
     */
    const AGGREGATE_OPERATION_NOT_ALLOWED = 459;

    /**
     * The requested method may not be applied on the URL in question since it
     * is not an aggregate (presentation) URL. The method may be applied on the
     * presentation URL.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.11
     *
     * @var int
     */
    const ONLY_AGGREGATE_OPERATION_ALLOWED = 460;

    /**
     * The Transport field did not contain a supported transport
     * specification.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.12
     *
     * @var int
     */
    const UNSUPPORTED_TRANSPORT = 461;

    /**
     * The data transmission channel could not be established because the
     * client address could not be reached. This error will most likely
     * be the result of a client attempt to place an invalid Destination
     * parameter in the Transport field.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc2326#section-11.3.13
     *
     * @var int
     */
    const DESTINATION_UNREACHABLE = 462;
}
