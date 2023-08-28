<?php
    namespace Drupal\custom_directory\Controller;

    use Drupal\Core\Controller\ControllerBase;

class CustomListing extends ControllerBase {
    public function view () {

        return [
            '#theme' => 'custom-listing',
            '#content' => $longDef
        ];
    }
}
