<?php

/*
 *  This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Admin\Account;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class RequestPasswordResetPage extends SymfonyPage implements RequestPasswordResetPageInterface
{
    public function getRouteName(): string
    {
        return 'sylius_admin_request_password_reset';
    }

    public function specifyEmail(string $email): void
    {
        $this->getDocument()->fillField('email', $email);
    }

    public function resetPassword(): void
    {
        $this->getDocument()->pressButton('Reset');
    }
}
