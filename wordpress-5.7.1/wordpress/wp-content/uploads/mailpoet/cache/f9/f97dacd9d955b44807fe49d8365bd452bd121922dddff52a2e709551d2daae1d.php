<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/social/settingsIconSelector.hbs */
class __TwigTemplate_9d99837cf9646e4a81ed55a8f2e2359a7cc55ec9b35200d69285dbc12bd944e1 extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"mailpoet_social_icon_selector_contents\"></div>
<input type=\"button\" class=\"button button-secondary mailpoet_button_full mailpoet_add_social_icon\" data-automation-id='social_select_another_network' value=\"";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Add another social network");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/settingsIconSelector.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/social/settingsIconSelector.hbs", "C:\\xampp\\htdocs\\UllanThorumValluvam\\wordpress-5.7.1\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\social\\settingsIconSelector.hbs");
    }
}
