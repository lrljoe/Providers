<?php

namespace SocialiteProviders\Miro;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MiroExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param  \SocialiteProviders\Manager\SocialiteWasCalled  $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('miro', Provider::class);
    }
}
