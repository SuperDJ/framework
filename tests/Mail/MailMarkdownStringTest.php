<?php

namespace Illuminate\Tests\Mail;

use Illuminate\Mail\Markdown;
use Illuminate\View\Factory;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MailMarkdownStringTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testRenderFunctionReturnsHtml()
    {
        $viewFactory = m::mock(Factory::class);
        $markdown = new Markdown($viewFactory);
        $viewFactory->shouldReceive('flushFinderCache')->once();
        $viewFactory->shouldReceive('replaceNamespace')->once()->with('mail', $markdown->htmlComponentPaths())->andReturnSelf();
        $viewFactory->shouldReceive('exists')->with('mail.default')->andReturn(false);
        $viewFactory->shouldReceive('make')->with('view', [])->andReturnSelf();
        $viewFactory->shouldReceive('make')->with('mail::themes.default', [])->andReturnSelf();
        $viewFactory->shouldReceive('render')->twice()->andReturn('<html></html>', 'body {}');

        $result = $markdown->renderString('', []);

        $this->assertNotFalse(strpos($result, '<html></html>'));
    }

    public function testRenderFunctionReturnsHtmlWithCustomTheme()
    {
        $viewFactory = m::mock(Factory::class);
        $markdown = new Markdown($viewFactory);
        $markdown->theme('yaz');
        $viewFactory->shouldReceive('flushFinderCache')->once();
        $viewFactory->shouldReceive('replaceNamespace')->once()->with('mail', $markdown->htmlComponentPaths())->andReturnSelf();
        $viewFactory->shouldReceive('exists')->with('mail.yaz')->andReturn(true);
        $viewFactory->shouldReceive('make')->with('view', [])->andReturnSelf();
        $viewFactory->shouldReceive('make')->with('mail.yaz', [])->andReturnSelf();
        $viewFactory->shouldReceive('render')->twice()->andReturn('<html></html>', 'body {}');

        $result = $markdown->renderString('', []);

        $this->assertNotFalse(strpos($result, '<html></html>'));
    }

    public function testRenderFunctionReturnsHtmlWithCustomThemeWithMailPrefix()
    {
        $viewFactory = m::mock(Factory::class);
        $markdown = new Markdown($viewFactory);
        $markdown->theme('mail.yaz');
        $viewFactory->shouldReceive('flushFinderCache')->once();
        $viewFactory->shouldReceive('replaceNamespace')->once()->with('mail', $markdown->htmlComponentPaths())->andReturnSelf();
        $viewFactory->shouldReceive('exists')->with('mail.yaz')->andReturn(true);
        $viewFactory->shouldReceive('make')->with('view', [])->andReturnSelf();
        $viewFactory->shouldReceive('make')->with('mail.yaz', [])->andReturnSelf();
        $viewFactory->shouldReceive('render')->twice()->andReturn('<html></html>', 'body {}');

        $result = $markdown->renderString('', []);

        $this->assertNotFalse(strpos($result, '<html></html>'));
    }
}
