<?php
    namespace App\Http\Policies;

    use Spatie\Csp\Directive;
    use Spatie\Csp\Policies\Basic;
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
            ->addDirectivesForYouTube();
    }

    private function addGeneralDirectives()
    {
        return $this->addDirective(Directive::BASE, 'self')
        ->addDirective(Directive::CONNECT, 'self')
        ->addDirective(Directive::DEFAULT, 'self')
        ->addDirective(Directive::FORM_ACTION, 'self')
        ->addDirective(Directive::IMG, 'self')
        ->addDirective(Directive::MEDIA, 'self')
        ->addDirective(Directive::OBJECT, 'self')
        ->addDirective(Directive::SCRIPT, 'self')
        ->addDirective(Directive::STYLE, 'self')
        ->addNonceForDirective(Directive::SCRIPT);
       
    }

    private function addDirectivesForBootstrap()
    {
        return $this
            ->addDirective(Directive::FONT, [
                '*.bootstrapcdn.com',
                'cdnjs.cloudflare.com',
            ])
            ->addDirective(Directive::SCRIPT, [
                '*.bootstrapcdn.com',
                'cdn.jsdelivr.net',
                'cdnjs.cloudflare.com',
            ])
            ->addDirective(Directive::STYLE, [
                'cdn.jsdelivr.net',
                'cdnjs.cloudflare.com',
            ]);
    }

   

    protected function addDirectivesForGoogleFonts(): self
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