<?php

/* AppGraphBundle:Default:index.html.twig */
class __TwigTemplate_fff92b0ad29a1e9552c3f15064966fc24a5a8f5ab1f6638e3ff24d4f27ff9a40 extends Twig_Template
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
        $__internal_f36eae8bf63e8b269b2948c3ce2c30b2265b963e21c9099f8f003e8e03883d79 = $this->env->getExtension("native_profiler");
        $__internal_f36eae8bf63e8b269b2948c3ce2c30b2265b963e21c9099f8f003e8e03883d79->enter($__internal_f36eae8bf63e8b269b2948c3ce2c30b2265b963e21c9099f8f003e8e03883d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppGraphBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('Head', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('Body', $context, $blocks);
        
        $__internal_f36eae8bf63e8b269b2948c3ce2c30b2265b963e21c9099f8f003e8e03883d79->leave($__internal_f36eae8bf63e8b269b2948c3ce2c30b2265b963e21c9099f8f003e8e03883d79_prof);

    }

    // line 1
    public function block_Head($context, array $blocks = array())
    {
        $__internal_3d7272b214229e1f7e8217a839a8423664809334bab5fa78878f207acb62bb91 = $this->env->getExtension("native_profiler");
        $__internal_3d7272b214229e1f7e8217a839a8423664809334bab5fa78878f207acb62bb91->enter($__internal_3d7272b214229e1f7e8217a839a8423664809334bab5fa78878f207acb62bb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        // line 2
        echo "
  ";
        // line 3
        $this->displayBlock('Style', $context, $blocks);
        // line 7
        echo "
  ";
        // line 8
        $this->displayBlock('Script', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_3d7272b214229e1f7e8217a839a8423664809334bab5fa78878f207acb62bb91->leave($__internal_3d7272b214229e1f7e8217a839a8423664809334bab5fa78878f207acb62bb91_prof);

    }

    // line 3
    public function block_Style($context, array $blocks = array())
    {
        $__internal_6d3c17b0182174cdd0189a0af8bde99f91d90a05a948942fa834dcfb449ab10a = $this->env->getExtension("native_profiler");
        $__internal_6d3c17b0182174cdd0189a0af8bde99f91d90a05a948942fa834dcfb449ab10a->enter($__internal_6d3c17b0182174cdd0189a0af8bde99f91d90a05a948942fa834dcfb449ab10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_6d3c17b0182174cdd0189a0af8bde99f91d90a05a948942fa834dcfb449ab10a->leave($__internal_6d3c17b0182174cdd0189a0af8bde99f91d90a05a948942fa834dcfb449ab10a_prof);

    }

    // line 8
    public function block_Script($context, array $blocks = array())
    {
        $__internal_acdb7687f7ab4de76110f203975a3f14dc97f633a918e09509d10e782fa1f388 = $this->env->getExtension("native_profiler");
        $__internal_acdb7687f7ab4de76110f203975a3f14dc97f633a918e09509d10e782fa1f388->enter($__internal_acdb7687f7ab4de76110f203975a3f14dc97f633a918e09509d10e782fa1f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 9
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  ";
        
        $__internal_acdb7687f7ab4de76110f203975a3f14dc97f633a918e09509d10e782fa1f388->leave($__internal_acdb7687f7ab4de76110f203975a3f14dc97f633a918e09509d10e782fa1f388_prof);

    }

    // line 15
    public function block_Body($context, array $blocks = array())
    {
        $__internal_fb137fef8650bb73d41cdbdb4eb1981b7f7b024019f9a0d846a8d990094da98b = $this->env->getExtension("native_profiler");
        $__internal_fb137fef8650bb73d41cdbdb4eb1981b7f7b024019f9a0d846a8d990094da98b->enter($__internal_fb137fef8650bb73d41cdbdb4eb1981b7f7b024019f9a0d846a8d990094da98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 16
        echo "  <body>
    <div class=\"container\" id=\"table\">

    \t<div  class=\"profil1\"></div>
    \t<div class=\"profil2\"></div>
    \t<div class=\"profil3\"></div>
    \t<div class=\"profil4\"></div>
    \t<div class=\"profil5\"></div>
    \t<div class=\"profil6\"\"></div>
    \t<div class=\"profil7\"></div>
    \t<div class=\"profil8\"></div>
    \t
        <img id=\"roulette\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/roulette.gif"), "html", null, true);
        echo "\"></img>
        <input id=\"go\" type=\"button\" value=\"Let's ROck !\" />
    </div>
  </body>
";
        
        $__internal_fb137fef8650bb73d41cdbdb4eb1981b7f7b024019f9a0d846a8d990094da98b->leave($__internal_fb137fef8650bb73d41cdbdb4eb1981b7f7b024019f9a0d846a8d990094da98b_prof);

    }

    public function getTemplateName()
    {
        return "AppGraphBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  104 => 16,  98 => 15,  89 => 10,  86 => 9,  80 => 8,  71 => 5,  68 => 4,  62 => 3,  54 => 12,  52 => 8,  49 => 7,  47 => 3,  44 => 2,  38 => 1,  31 => 15,  28 => 14,  26 => 1,);
    }
}
/* {% block Head %}*/
/* */
/*   {% block Style %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*   {% endblock %}*/
/* */
/*   {% block Script %}*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>*/
/*   {% endblock Script %}*/
/* */
/* {% endblock Head %}*/
/* */
/* {% block Body %}*/
/*   <body>*/
/*     <div class="container" id="table">*/
/* */
/*     	<div  class="profil1"></div>*/
/*     	<div class="profil2"></div>*/
/*     	<div class="profil3"></div>*/
/*     	<div class="profil4"></div>*/
/*     	<div class="profil5"></div>*/
/*     	<div class="profil6""></div>*/
/*     	<div class="profil7"></div>*/
/*     	<div class="profil8"></div>*/
/*     	*/
/*         <img id="roulette" src="{{asset('img/roulette.gif')}}"></img>*/
/*         <input id="go" type="button" value="Let's ROck !" />*/
/*     </div>*/
/*   </body>*/
/* {% endblock Body %}*/
