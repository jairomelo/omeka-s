<?php
namespace Omeka\Media\FileRenderer;

use Omeka\Api\Representation\MediaRepresentation;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\View\Renderer\PhpRenderer;

class AudioRenderer implements RendererInterface
{
    use ServiceLocatorAwareTrait;

    public function render(PhpRenderer $view, MediaRepresentation $media,
        array $options = array()
    ){
        return sprintf(
            '<audio src="%s" controls>%s</audio>',
            $view->escapeHtmlAttr($media->originalUrl()),
            $view->hyperlink($media->filename(), $media->originalUrl())
        );
    }
}