<?php

namespace lrn\behaviorPattern\strategy;

class MyPage
{
    private \lrn\behaviorPattern\strategy\CssMode $cssMode;

    public function changeMode(\lrn\behaviorPattern\strategy\CssMode $cssMode)
    {
        $this->cssMode = $cssMode;
        $this->setCssMode();
    }

    protected function setCssMode()
    {
        $mode = $this->cssMode->changeCss();
        foreach ($mode as $cssStyle => $value){
            if($cssStyle == "backgroundcolor"){
                echo "backgroundcolor = " . $value . PHP_EOL;
            }
            if($cssStyle == "textcolor"){
                echo "textcolor = " . $value . PHP_EOL;
            }
            if($cssStyle == "fontsize"){
                echo "fontsize = " . $value . PHP_EOL;
            }
            //echo "$cssStyle = $value" . PHP_EOL; //можно и без проверок
        }
    }
}