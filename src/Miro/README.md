# Miro

```bash
composer require socialiteproviders/miro
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'miro' => [    
  'client_id' => env('MIRO_CLIENT_ID'),  
  'client_secret' => env('MIRO_CLIENT_SECRET'),  
  'redirect' => env('MIRO_REDIRECT_URI') 
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        \SocialiteProviders\Miro\MiroExtendSocialite::class.'@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('miro')->redirect();
```

### Returned User fields

- ``id``
- ``nickname``
- ``name``
- ``role``
- ``industry``
- ``company``
- ``state``
- ``email``
- ``avatar``

### Reference

- [Miro API Reference](https://developers.miro.com/docs/getting-started-with-oauth)
