<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Conference;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

class ParticipantContext extends InstanceContext {
    /**
     * Initialize the ParticipantContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     *                           to fetch
     * @param string $conferenceSid The SID of the conference with the participant
     *                              to fetch
     * @param string $callSid The Call SID of the resource to fetch
     * @return \Twilio\Rest\Api\V2010\Account\Conference\ParticipantContext 
     */
    public function __construct(Version $version, $accountSid, $conferenceSid, $callSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'conferenceSid' => $conferenceSid,
            'callSid' => $callSid,
        );

        $this->uri = '/Accounts/' . rawurlencode($accountSid) . '/Conferences/' . rawurlencode($conferenceSid) . '/Participants/' . rawurlencode($callSid) . '.json';
    }

    /**
     * Fetch a ParticipantInstance
     * 
     * @return ParticipantInstance Fetched ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ParticipantInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['conferenceSid'],
            $this->solution['callSid']
        );
    }

