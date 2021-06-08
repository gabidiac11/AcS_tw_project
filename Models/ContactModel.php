<?php

class ContactModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * register a contact request
     */
    public function send($data)
    {
        if ($this->fieldsNotPresent($data, ['name', 'email', 'message'])) {
            return ['success' => false, 'message' => 'Ups! You have a missing fields.'];
        }

        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];

        $stmt = $this->db->prepareStmt("INSERT INTO contact_requests (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Thank you. Your request has been submitted.'];
        }

        return ['success' => false, 'message' => 'Ups! The service could not handle your request. Please try again later.'];
    }
}
