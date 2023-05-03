<?php

namespace ContainerWkHsdiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEndroidQrCode_DefaultBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'endroid_qr_code.default_builder' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\Builder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'Builder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Encoding'.\DIRECTORY_SEPARATOR.'EncodingInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Encoding'.\DIRECTORY_SEPARATOR.'Encoding.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ErrorCorrectionLevel'.\DIRECTORY_SEPARATOR.'ErrorCorrectionLevelInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ErrorCorrectionLevel'.\DIRECTORY_SEPARATOR.'ErrorCorrectionLevelLow.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RoundBlockSizeMode'.\DIRECTORY_SEPARATOR.'RoundBlockSizeModeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RoundBlockSizeMode'.\DIRECTORY_SEPARATOR.'RoundBlockSizeModeMargin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'WriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'ValidatingWriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'AbstractGdWriter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'PngWriter.php';

        $container->services['endroid_qr_code.default_builder'] = $instance = new \Endroid\QrCode\Builder\Builder();

        $instance->writer(($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ?? ($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter())));
        $instance->size(300);
        $instance->margin(10);
        $instance->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $instance->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $instance->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $instance->validateResult(false);

        return $instance;
    }
}
