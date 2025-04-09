<?php

declare(strict_types=1);

namespace CntBackendPlugin\Subscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Checkout\Cart\Event\CheckoutOrderPlacedEvent;


class LogOrderNumber implements EventSubscriberInterface
{


    public static function getSubscribedEvents(): array
    {
        // Return the events to listen to as array like this:  <event to listen to> => <method to execute>
        return [
            CheckoutOrderPlacedEvent::class => 'onOrderPlaced',
        ];
    }

    public function onOrderPlaced(CheckoutOrderPlacedEvent $event): void
    {
        $order = $event->getOrder();
        // Log order number 
        $order->getOrderNumber();
    }
}
