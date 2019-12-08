<?php

return [

    /**
     * The DocuSign Integrator's Key
     */

    'integrator_key' => env('DOCUSIGN_INTEGRATOR_KEY'),

    /**
     * The Docusign Account Email
     */
    'email' => env('DOCUSIGN_USERNAME'),

    /**
     * The Docusign Account Password
     */
    'password' => env('DOCUSIGN_PASSWORD'),

    /**
     * The version of DocuSign API (Ex: v1, v2)
     */
    'version' => 'v2',

    /**
     * The DocuSign Environment (Ex: demo, test, www)
     */
    'environment' => 'demo',

    /**
     * The DocuSign Account Id
     */
    'account_id' => env('DOCUSIGN_ACCOUNT_ID'),
    
    /**
     * Envelope ID field (for Envelope trait) 
     */
    'envelope_field' => 'envelopeId',
];
