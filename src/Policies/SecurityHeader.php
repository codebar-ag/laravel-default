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
            ->addDirective(Directive::CONNECT, [
                Keyword::SELF, 'ws:',
                'api.userback.io/',
                'ka-p.fontawesome.com/',
                'res.cloudinary.com/codebar/',
                'prod-s3-public.s3-website-bc01.gos3.io/',
                'unpkg.com/',
            ])
            ->addDirective(Directive::DEFAULT, [Keyword::SELF])
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, [
                Keyword::SELF, 'data:',
                'blob:', 'localhost/',
                'prod-s3-public.s3-website-bc01.gos3.io/',
                'cdn.usefathom.com/',
                'www.gravatar.com/avatar/',
                'secure.gravatar.com/avatar/',
                'res.cloudinary.com/codebar/',
            ])
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::FONT, [
                Keyword::SELF,
                'data:',
                'use.typekit.net/',
                'fonts.gstatic.com/',
                'fonts.googleapis.com/'.
                'ka-p.fontawesome.com/',
                'static.userback.io/',
                'rsms.me/inter/font-files/',
                'prod-s3-public.s3-website-bc01.gos3.io/portal-vanta-ch/production',
            ])
            ->addDirective(Directive::SCRIPT, [
                Keyword::SELF,
                Keyword::UNSAFE_INLINE,
                Keyword::UNSAFE_EVAL,
                'cdn.usefathom.com/',
                'static.userback.io/',
                'kit.fontawesome.com/',
                'cdnjs.cloudflare.com/ajax/libs/dragula/',
                'prod-s3-public.s3-website-bc01.gos3.io/',
                'unpkg.com/',
            ])
            ->addDirective(Directive::STYLE_ELEM, [
                Keyword::SELF,
                Keyword::UNSAFE_INLINE,
                'static.userback.io/',
                'fonts.googleapis.com/',
                'fonts.sandbox.google.com/',
                'rsms.me/inter/',
            ])
            ->addDirective(Directive::STYLE, [
                Keyword::SELF,
                Keyword::UNSAFE_INLINE,
                'static.userback.io/',
                'fonts.sandbox.google.com/',
                'fonts.googleapis.com/'.
                'rsms.me/inter/',
            ]);
    }
}
