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
        $__internal_55233fde314e4f93077be88459454963beb90ba68a43b6be39c9c154edb3b3d3 = $this->env->getExtension("native_profiler");
        $__internal_55233fde314e4f93077be88459454963beb90ba68a43b6be39c9c154edb3b3d3->enter($__internal_55233fde314e4f93077be88459454963beb90ba68a43b6be39c9c154edb3b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppGraphBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('Head', $context, $blocks);
        // line 19
        $this->displayBlock('Body', $context, $blocks);
        
        $__internal_55233fde314e4f93077be88459454963beb90ba68a43b6be39c9c154edb3b3d3->leave($__internal_55233fde314e4f93077be88459454963beb90ba68a43b6be39c9c154edb3b3d3_prof);

    }

    // line 1
    public function block_Head($context, array $blocks = array())
    {
        $__internal_3dd37d5e19e333bf47f0667ad3a36a2fcbc324816170f68711b4cfa91468e470 = $this->env->getExtension("native_profiler");
        $__internal_3dd37d5e19e333bf47f0667ad3a36a2fcbc324816170f68711b4cfa91468e470->enter($__internal_3dd37d5e19e333bf47f0667ad3a36a2fcbc324816170f68711b4cfa91468e470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

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
        
        $__internal_3dd37d5e19e333bf47f0667ad3a36a2fcbc324816170f68711b4cfa91468e470->leave($__internal_3dd37d5e19e333bf47f0667ad3a36a2fcbc324816170f68711b4cfa91468e470_prof);

    }

    // line 3
    public function block_Style($context, array $blocks = array())
    {
        $__internal_ad50275f0673d8c39033e5dc3423196af56a36e6b22bca25d6e3842f2607adaf = $this->env->getExtension("native_profiler");
        $__internal_ad50275f0673d8c39033e5dc3423196af56a36e6b22bca25d6e3842f2607adaf->enter($__internal_ad50275f0673d8c39033e5dc3423196af56a36e6b22bca25d6e3842f2607adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  ";
        
        $__internal_ad50275f0673d8c39033e5dc3423196af56a36e6b22bca25d6e3842f2607adaf->leave($__internal_ad50275f0673d8c39033e5dc3423196af56a36e6b22bca25d6e3842f2607adaf_prof);

    }

    // line 7
    public function block_Script($context, array $blocks = array())
    {
        $__internal_26a0e631f46d671a0d10b0f7dac9ce52909f053b1365c0588bb1a20c1d72ad75 = $this->env->getExtension("native_profiler");
        $__internal_26a0e631f46d671a0d10b0f7dac9ce52909f053b1365c0588bb1a20c1d72ad75->enter($__internal_26a0e631f46d671a0d10b0f7dac9ce52909f053b1365c0588bb1a20c1d72ad75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 8
        echo "    <!-- Load jQuery from Google's CDN if needed -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">        
        ";
        // line 14
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
    </script>
  ";
        
        $__internal_26a0e631f46d671a0d10b0f7dac9ce52909f053b1365c0588bb1a20c1d72ad75->leave($__internal_26a0e631f46d671a0d10b0f7dac9ce52909f053b1365c0588bb1a20c1d72ad75_prof);

    }

    // line 19
    public function block_Body($context, array $blocks = array())
    {
        $__internal_161521e8a4f0bf74237d4f8acc1bba6744f843d66e4e5951e2deff31192e01b1 = $this->env->getExtension("native_profiler");
        $__internal_161521e8a4f0bf74237d4f8acc1bba6744f843d66e4e5951e2deff31192e01b1->enter($__internal_161521e8a4f0bf74237d4f8acc1bba6744f843d66e4e5951e2deff31192e01b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 20
        echo "  <body>
    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("app_graph_homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
    </form>
    <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
  </body>
";
        
        $__internal_161521e8a4f0bf74237d4f8acc1bba6744f843d66e4e5951e2deff31192e01b1->leave($__internal_161521e8a4f0bf74237d4f8acc1bba6744f843d66e4e5951e2deff31192e01b1_prof);

    }

    public function getTemplateName()
    {
        return "AppGraphBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  106 => 21,  103 => 20,  97 => 19,  87 => 14,  79 => 8,  73 => 7,  65 => 4,  59 => 3,  51 => 17,  49 => 7,  46 => 6,  44 => 3,  41 => 2,  35 => 1,  28 => 19,  26 => 1,);
    }
}
