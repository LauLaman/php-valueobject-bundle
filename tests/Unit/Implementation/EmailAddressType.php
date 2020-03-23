<?php

declare(strict_types=1);

namespace Noahlvb\ValueObjectBundle\Tests\Unit\Implementation;

use Noahlvb\ValueObjectBundle\Persistence\Type\ValueObjectType;

class EmailAddressType extends ValueObjectType
{
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'email_address';
    }

    public function getClassName(): string
    {
        return EmailAddress::class;
    }
}
