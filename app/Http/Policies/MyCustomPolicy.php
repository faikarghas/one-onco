<?php
    namespace App\Http\Policies;

    use Spatie\Csp\Directive;
    use Spatie\Csp\Keyword;

  class MyCustomPolicy extends Basic
  {
    public function configure()
    {
        $this
            ->addGeneralDirectives()
            ->addDirectivesForBootstrap()
            ->addDirectivesForGoogleFonts()
            ->addDirectivesForGoogleAnalytics()
            ->addDirectivesForGoogleTagManager()
            ->addDirectivesForTwitter()
            ->addDirectivesForYouTube()
            ->addDirectivesForJsdelivr()
            ->addDirectivesForCloudflare();
    }

    private function addGeneralDirectives()
    {
        return $this
        ->addDirective(Directive::BASE, Keyword::SELF)
        ->addDirective(Directive::CONNECT, Keyword::SELF)
        ->addDirective(Directive::DEFAULT, Keyword::SELF)
        ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
        ->addDirective(Directive::IMG, Keyword::SELF)
        ->addDirective(Directive::MEDIA, Keyword::SELF)
        ->addDirective(Directive::OBJECT, Keyword::NONE)
        ->addDirective(Directive::SCRIPT, Keyword::SELF)
        ->addDirective(Directive::STYLE, Keyword::SELF)
        ->addNonceForDirective(Directive::SCRIPT)
        ->addNonceForDirective(Directive::STYLE);
       
    }
    private function addDirectivesForBootstrap()
    {
        return $this
            ->addDirective(Directive::FONT, [
                '*.bootstrapcdn.com',
            ])
            ->addDirective(Directive::SCRIPT, [
                '*.bootstrapcdn.com',
            ])
            ->addDirective(Directive::STYLE, [
                '*.bootstrapcdn.com',
            ]);
    }
    private function addDirectivesForCloudflare()
    {
        return $this
            ->addDirective(Directive::FONT, [
                '*.cloudflare.com',
            ])
            ->addDirective(Directive::SCRIPT, [
                '*.cloudflare.com',
            ])
            ->addDirective(Directive::IMG, [
                '*.cloudflare.com',
            ])
            ->addDirective(Directive::STYLE, [
                '*.cloudflare.com',
            ]);
    }

    private function addDirectivesForJsdelivr()
    {
        return $this
            ->addDirective(Directive::FONT, [
                '*.jsdelivr.net',
            ])
            ->addDirective(Directive::SCRIPT, [
                '*.jsdelivr.net',
            ])
            ->addDirective(Directive::IMG, [
                '*.jsdelivr.net',
            ])
            ->addDirective(Directive::STYLE, [
                '*.jsdelivr.net',
            ]);
    }
    protected function addDirectivesForGoogleFonts():self
    {
        return $this
            ->addDirective(Directive::FONT, 'fonts.gstatic.com')
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }

    protected function addDirectivesForGoogleAnalytics(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.google-analytics.com');
    }
    protected function addDirectivesForGoogleTagManager(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.googletagmanager.com');
    }
    protected function addDirectivesForTwitter(): self
    {
        return $this
            ->addDirective(Directive::SCRIPT, [
                'platform.twitter.com',
                '*.twimg.com',
            ])
            ->addDirective(Directive::STYLE, [
                'platform.twitter.com',
            ])
            ->addDirective(Directive::FRAME, [
                'platform.twitter.com',
                'syndication.twitter.com',
            ])
            ->addDirective(Directive::FORM_ACTION, [
                'platform.twitter.com',
                'syndication.twitter.com',
            ]);
    }

    protected function addDirectivesForYouTube(): self
    {
        return $this->addDirective(Directive::FRAME, '*.youtube.com');
    }
}