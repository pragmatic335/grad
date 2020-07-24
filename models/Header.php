<?php

namespace app\models;


class Header
{
    public static function head()
    {
        $categories = Manuals::find()->all();
        $string = '';
        foreach($categories as $manual):
            $string .= ' <a class="dropdown-item" href="#">'.$manual->getAttribute('name').'</a> ';
        endforeach;

        $a = <<<HTML
                <nav class="navbar navbar-light bg-light rounded-0 shadow-sm">
            <div class="container justify-content-start navbar-expand-lg">
                <a class="navbar-brand mr-auto" href="#">Документация ПК ГРАД</a>
                <nav class="navbar navbar-light bg-light">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                </nav>
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">На главную</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Руководства
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            $string
                        </div>
                    </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
             
            </div>

        </nav>
HTML;
        return $a;
    }
}