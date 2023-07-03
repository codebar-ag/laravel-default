<?php

namespace CodebarAg\LaravelDefault\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Policy;

class SecurityHeader extends Policy
{
    public function configure()
    {
        $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, config('laravel-default.security_headers.connect'))
            ->addDirective(Directive::DEFAULT, config('laravel-default.security_headers.default'))
            ->addDirective(Directive::FORM_ACTION, config('laravel-default.security_headers.form_action'))
            ->addDirective(Directive::IMG, config('laravel-default.security_headers.img'))
            ->addDirective(Directive::MEDIA, config('laravel-default.security_headers.media'))
            ->addDirective(Directive::OBJECT, config('laravel-default.security_headers.object'))
            ->addDirective(Directive::FONT, config('laravel-default.security_headers.font'))
            ->addDirective(Directive::SCRIPT, config('laravel-default.security_headers.script'))
            ->addDirective(Directive::STYLE_ELEM, config('laravel-default.security_headers.style_elem'))
            ->addDirective(Directive::STYLE, config('laravel-default.security_headers.style'));
    }
}
