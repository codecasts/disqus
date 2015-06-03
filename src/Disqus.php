<?php namespace Codecasts\Disqus;

class Disqus
{
    protected $shortname;

    public function __construct($shortname)
    {
        $this->shortname = $shortname;
    }

    public function render()
    {
        return view('disqus::comments')->with(['shortname' => $this->shortname]);
    }
}
