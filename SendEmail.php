<?php
/**
 * Created by PhpStorm.
 * User: dedub
 * Date: 5/20/2018
 * Time: 10:25 PM
 */

class SendEmail
{
    public $sender;
    public $subject;
    public $body;
    public $recipients;

    /**
     * @param $sender
     */
    function __contrust($mySender)
    {
        $this->sender = $mySender;
        $this->recipients =array();
    }

    /**
     * @param $recipients
     */
    function addRecipients($recipients){
        array_push($this->recipients, $recipients );
    }

    /**
     * @param $subject
     */
    function setsubject ($subject){
        $this ->subject = $subject;
    }

    function setBody ($body){
        $this->body = $body;
    }

    function sendEmail (){

        foreach ($this->recipients as $recipients) {

            $result = mail($recipients,$this->subject,$this->body);
            if ($result) echo "Mail successfully sent to 
                                        {$recipients}<br/>";

        }
    }
}

$emailer = new SendEmail("anand.bhopale@gmail.com");

$emailer-> setsubject("New Subject") ;
$emailer -> setBody("Body of email, Type anything");
$emailer -> addRecipients("anand.bhople@gmail.com; anandbhopale.u@cognizant.com");
$emailer -> sendEmail();

echo 'Email has sent successufully';
echo 'Changed';