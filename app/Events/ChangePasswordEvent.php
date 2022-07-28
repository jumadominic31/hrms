<?php

namespace App\Events;

use App\Models\Employee;
use Illuminate\Queue\SerializesModels;

/**
 * Class LeaveRequestEvent
 * @package App\Events
 */
class ChangePasswordEvent
{
    use SerializesModels;

    public $employee = null;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
    
}
