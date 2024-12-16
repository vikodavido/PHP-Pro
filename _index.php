<?php


interface FormatterInterface
{
    public function format(string $message): string;
}


interface DeliveryInterface
{
    public function deliver(string $message): void;
}


class Logger
{
    private FormatterInterface $formatter;
    private DeliveryInterface $delivery;

    public function __construct(FormatterInterface $formatter, DeliveryInterface $delivery)
    {
        $this->formatter = $formatter;
        $this->delivery = $delivery;
    }

    public function log(string $message): void
    {
        $formattedMessage = $this->formatter->format($message);
        $this->delivery->deliver($formattedMessage);
    }
}


class RawFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return $message;
    }
}

class WithDateFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return "[" . date('Y-m-d H:i:s') . "] " . $message;
    }
}

class WithDateAndDetailsFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return "[" . date('Y-m-d H:i:s') . "] " . $message . " - Additional details included";
    }
}


class EmailDelivery implements DeliveryInterface
{
    public function deliver(string $message): void
    {
        echo "Email delivery: " . $message ;
    }
}

class SmsDelivery implements DeliveryInterface
{
    public function deliver(string $message): void
    {
        echo "SMS delivery: " . $message;
    }
}

class ConsoleDelivery implements DeliveryInterface
{
    public function deliver(string $message): void
    {
        echo "Console delivery: " . $message ;
    }
}


$formatter = new WithDateFormatter();
$delivery = new ConsoleDelivery(); 

$logger = new Logger($formatter, $delivery);
$logger->log("Something went wrong. Please check the system!");
