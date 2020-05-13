<?php

class Html
{
    public function stylesheet()
    {
        return '<link rel="stylesheet" href="style.css">';
    }

    public function meta()
    {
        return
            '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Head OOP</title>';
    }

    public function img()
    {
        return '<img src="geometric-decoration-5836.jpg" alt="geometric">';
    }

    public function link()
    {
        return '<a href="https://www.google.be/" target="_blank">Un lien</a>';
    }

    public function javascript()
    {
        return '<script src="index.js"></script>';
    }
}
