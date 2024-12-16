<?php
class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct($name = null, $surname = null, $email = null, $phone = null, $address = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function phone($phone)
    {
        $this->phone = $phone;
        return $this; 
    }

    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function surname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function email($email)
    {
        $this->email = $email;
        return $this;
    }

    public function address($address)
    {
        $this->address = $address;
        return $this;
    }

    public function build()
    {
        return $this;
    }
}

$newContact = (new Contact())
    ->phone('000-555-000')
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

print_r($newContact);

?>