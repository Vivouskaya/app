<?php

/* AppGraphBundle:Default:index.html.twig */
class __TwigTemplate_d6920f5ff0c40bc848385619ed0f1cac8fea8b52822757b4b1b63a4d35516902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Style' => array($this, 'block_Style'),
            'Script' => array($this, 'block_Script'),
            'Body' => array($this, 'block_Body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('Head', $context, $blocks);
        // line 19
        $this->displayBlock('Body', $context, $blocks);
    }

    // line 1
    public function block_Head($context, array $blocks = array())
    {
        // line 2
        echo "
  ";
        // line 3
        $this->displayBlock('Style', $context, $blocks);
        // line 6
        echo "
  ";
        // line 7
        $this->displayBlock('Script', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 3
    public function block_Style($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  ";
    }

    // line 7
    public function block_Script($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Load jQuery from Google's CDN if needed -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">        
        ";
        // line 14
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : null));
        echo "
    </script>
  ";
    }

    // line 19
    public function block_Body($context, array $blocks = array())
    {
        // line 20
        echo "  <body>
    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("app_graph_homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" />
    </form>
    <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
  </body>
";
    }

    public function getTemplateName()
    {
        return "AppGraphBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  79 => 21,  76 => 20,  73 => 19,  66 => 14,  58 => 8,  55 => 7,  50 => 4,  47 => 3,  42 => 17,  40 => 7,  37 => 6,  35 => 3,  32 => 2,  29 => 1,  25 => 19,  23 => 1,);
    }
}
