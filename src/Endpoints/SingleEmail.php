<?php

namespace SevenShores\Hubspot\Endpoints;

use SevenShores\Hubspot\Endpoint;

final class SingleEmail extends Endpoint
{
    /**
     * Send an email designed and maintained in the HubSpot marketing Email Tool.
     *
     * @see http://developers.hubspot.com/docs/methods/email/transactional_email/single-send-overview
     *
     * @param int    $id
     * @param array  $message
     * @param array  $contactProperties
     * @param array  $customProperties
     * @return \SevenShores\Hubspot\Http\Response
     */
    function send($id, $message = [], $contactProperties = [], $customProperties = [])
    {
        $endpoint = "https://api.hubapi.com/email/public/v1/singleEmail/send";

        $options['json'] = [
          'emailId'           => $id,
          'message'           => $message,
          'contactProperties' => $contactProperties,
          'customProperties'  => $customProperties
        ];

        return $this->client->request('post', $endpoint, $options);
    }
}