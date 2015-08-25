<?php
namespace Weew\Events;

interface IEventSubscription {
    /**
     * @return int
     */
    function getId();

    /**
     * @return string
     */
    function getTopic();

    /**
     * @param $topic
     */
    function setTopic($topic);

    /**
     * @return mixed
     */
    function getSubscriber();

    /**
     * @param $subscriber
     */
    function setSubscriber($subscriber);
}