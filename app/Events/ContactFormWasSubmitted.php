<?php

namespace App\Events;

use App\Models\FormResponse;
use Illuminate\Queue\SerializesModels;

class ContactFormWasSubmitted extends Event
{
    use SerializesModels;
    /**
     * @var FormResponse
     */
    public $formResponse;

    /**
     * Create a new event instance.
     *
     * @param FormResponse $formResponse
     */
    public function __construct(FormResponse $formResponse)
    {
        $this->formResponse = FormResponse::findOrFail($formResponse->id);
    }
}