<?php

namespace SpiritDev\Bundle\CIHubPostBundle\DependencyInjection;

class ConfigurationManager {

    private $templateName = null;

    public function __construct($template) {
        $this->templateName = $template;
    }

    public function getTemplateName() {
        return $this->templateName;
    }

    public function setTemplateName($templateName) {
        $this->templateName = $templateName;
    }
} 