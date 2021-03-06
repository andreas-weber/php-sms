<?php

/*
 * This file is part of the andreas-weber/php-sms library.
 *
 * (c) Andreas Weber <code@andreas-weber.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AndreasWeber\SMS\Core\Gateway\Adapter\SMSTrade;

class ResponseCode
{
    const ETABLISH_CONNECTION_TO_GATEWAY_FAILED = 'Can\'t etablish connection to gateway';
    const BAD_RECIPIENT = 'Bad recipient';
    const BAD_MESSAGE_TYPE_ = 'Bad message type';
    const BAD_SMS_TYPE = 'Bad SMS type';
    const SENDER_IDENTIFIER_TOO_LONG = 'Sender identifier is too long';
    const MESSAGE_TOO_LONG = 'Message is too long';
    const AUTHENTICATION_FAILED = 'An error occured during authentication';
    const OUT_OF_CREDIT = 'Out of credit';
    const SMS_SENDING_FAILED = 'SMS sending failed';
    const SMS_SENT_SUCCESSFULLY = 'SMS was sent successfully';
    const OTHER_ERROR = 'An other error occured';
}
