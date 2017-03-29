<?php

//id  | user_id | message_text   | published

class Message{
    private $id;
    private $user_id;
    private $message_text;
    private $published;





    /**
     * Message constructor.
     * @param $id
     * @param $user_id
     * @param $message_text
     * @param $published
     */
    public function __construct($id, $user_id, $message_text, $published)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->message_text = $message_text;
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * @param mixed $message_text
     */
    public function setMessageText($message_text)
    {
        $this->message_text = $message_text;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param mixed $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }



}

