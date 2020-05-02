<?php


namespace TNM\USSD\Http;


class UssdResponse implements UssdResponseInterface
{
    public function respond($message, $type)
    {
        return sprintf(
            "<ussd><type>%s</type><msg>%s</msg><premium><cost>0</cost><ref>NULL</ref></premium></ussd>",
            $type, $message
        );
    }
}
