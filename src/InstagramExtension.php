<?php

namespace Bolt\Extension\Zomars\Instagram;

use Bolt\Extension\SimpleExtension;
use Vinkla\Instagram\Instagram;

/**
 * Instagram extension class.
 *
 * @author Your Name <you@example.com>
 */
class InstagramExtension extends SimpleExtension
{
    /**
     * {@inheritdoc}
     */
    protected function registerTwigFunctions()
    {
        return [
            'instagram' => 'instagramTwigFunction',
        ];
    }

    /**
     * The callback function when {{ my_twig_function() }} is used in a template.
     *
     * @return string
     */
    public function instagramTwigFunction($user)
    {
        // Create a new instagram instance.
        $instagram = new Instagram();

        // Fetch the media feed.
        $data = $instagram->get($user);

        return $data;
    }

}
