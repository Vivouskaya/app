<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_041f48d41e95d45168d242170da4fa94f28a15bed3cdeacc6a8426e91a81bc56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1055285a4f8e69c413fbe17987cf79e0a8a8190a58fb0e53c97189661e8ea97f = $this->env->getExtension("native_profiler");
        $__internal_1055285a4f8e69c413fbe17987cf79e0a8a8190a58fb0e53c97189661e8ea97f->enter($__internal_1055285a4f8e69c413fbe17987cf79e0a8a8190a58fb0e53c97189661e8ea97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1055285a4f8e69c413fbe17987cf79e0a8a8190a58fb0e53c97189661e8ea97f->leave($__internal_1055285a4f8e69c413fbe17987cf79e0a8a8190a58fb0e53c97189661e8ea97f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e2e1aeb754172ea9436e679dbfb5cafd7c9ace15565d193a424f4ee311e1c57 = $this->env->getExtension("native_profiler");
        $__internal_1e2e1aeb754172ea9436e679dbfb5cafd7c9ace15565d193a424f4ee311e1c57->enter($__internal_1e2e1aeb754172ea9436e679dbfb5cafd7c9ace15565d193a424f4ee311e1c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e2e1aeb754172ea9436e679dbfb5cafd7c9ace15565d193a424f4ee311e1c57->leave($__internal_1e2e1aeb754172ea9436e679dbfb5cafd7c9ace15565d193a424f4ee311e1c57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d9cd31545b0390266bad7484c5c481cd9961f26d9c4bfd9239b46d8425247e = $this->env->getExtension("native_profiler");
        $__internal_74d9cd31545b0390266bad7484c5c481cd9961f26d9c4bfd9239b46d8425247e->enter($__internal_74d9cd31545b0390266bad7484c5c481cd9961f26d9c4bfd9239b46d8425247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74d9cd31545b0390266bad7484c5c481cd9961f26d9c4bfd9239b46d8425247e->leave($__internal_74d9cd31545b0390266bad7484c5c481cd9961f26d9c4bfd9239b46d8425247e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_456ab721be0bb70e9b41a95e36fe450d787a7c2ae43fe616257064099cec2081 = $this->env->getExtension("native_profiler");
        $__internal_456ab721be0bb70e9b41a95e36fe450d787a7c2ae43fe616257064099cec2081->enter($__internal_456ab721be0bb70e9b41a95e36fe450d787a7c2ae43fe616257064099cec2081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_456ab721be0bb70e9b41a95e36fe450d787a7c2ae43fe616257064099cec2081->leave($__internal_456ab721be0bb70e9b41a95e36fe450d787a7c2ae43fe616257064099cec2081_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
